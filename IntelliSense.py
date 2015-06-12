import sublime,sublime_plugin,re,os,json,file

intel_data     = {}
intel_settings = {}
intel_style    = ''

def intel_load(script = None):
    if not intel_settings : 
        globals()['intel_settings'] = sublime.load_settings('IntelliSense.sublime-settings')
        color  = intel_settings.get('color')
        style  = '<style>'
        style += 'body{margin:0;padding-left:6px;padding-right:6px;padding-top:2px;padding-bottom:3px;background-color:'+color.get('background')+';color:'+color.get('normal')+';font-size:'+intel_settings.get('font-size', '12px')+'} '
        style += 'div{display:block} '      
        style += '.function{color:'+color.get('function')+'} '
        style += '.type{color:'+color.get('type')+'} '
        style += '.param{color:'+color.get('param')+'} '
        style += '.description{color:'+color.get('description')+'} '
        style += '.value{color:'+color.get('value')+';font-style:italic} '
        style += '</style>'
        globals()['intel_style'] = style

    if not intel_data.get(script):
        script = intel_settings.get('assoc').get(script, script)
        if not script : return
        filename = './data/Packages/IntelliSense/lib/function.'+script
        if not os.path.exists(filename):return
        globals()['intel_data'][script] = {}
        fp = open(filename)
        isDesc = intel_settings.get('description')
        intel_data_script = intel_data[script]
        for line in fp:
            line = line.strip()
            if not line or line[0]=='#': continue
            match = re.search(r'^[^\(]*?([-\$a-zA-Z0-9_]+)\s*\(', line.strip())
            if match: 
                if not intel_data_script.get(match.group(1)):
                    intel_data_script[match.group(1)] = {}
                nLen = len(intel_data_script[match.group(1)])
                fndict = line.split('//', 1)
                intel_data_script[match.group(1)][nLen] = isDesc and fndict or [ fndict[0] ]
        fp.close()

def intel_script(view):
    file_name = view.file_name()
    if not file_name : return None
    script = os.path.splitext(file_name)[1]
    script = script.lstrip('.').lower()
    #script = 'php' #debug
    return script

class intellisenseCommand(sublime_plugin.TextCommand):
    def __init__(self, view):
        self.view   = view
        self.bSub   = False
        self.script = None

    def run(self, edit):
        if self.script == None:
            self.script = intel_script(self.view)
            intel_load(self.script)
        self.show_popup()

    def show_popup(self):
        data = intel_data.get(self.script)
        if not data : return
        keyword = self.get_keyword()
        if not keyword: return
        item = data.get(keyword)
        if not item: return

        html = ''
        for i in item:
            it = item[i]
            line1 = re.sub(r'(?:([a-zA-Z0-9_\s-]*[\s\*&])|^)([\$a-zA-Z0-9_-]+)[\s=]*([\"\']?)(.*?)\3\s*(?=[,\(\)\[\]])', self.color_replace, it[0])        
            line1 = line1.replace('&','&amp;')
            self.bSub = False
            if intel_settings.get('description') and (len(it)==2):
                line2 = '<div class="description">{0}</div>'.format(it[1])
                line2 = line2.replace('&','&amp;')
            else:
                line2 = ''
            html += '{0}<div>{1}</div>{2}'.format(intel_style, line1, line2)

        self.view.show_popup(html, sublime.COOPERATE_WITH_AUTO_COMPLETE, on_navigate=None, max_width=int(intel_settings.get('max-width')))

    def color_replace(self, matched):
        fnOrTp = self.bSub and 'param' or 'function'
        self.bSub = True
        html = '<span class="type">{1}</span><span class="{0}">{2}</span>'.format(fnOrTp, matched.group(1) or '', matched.group(2) or '')
        if matched.group(4) or matched.group(3):
            html += ' = {0}<span class="value">{1}</span>{0} '.format(matched.group(3), matched.group(4))
            
        return html

    def get_keyword(self):
        s = self.view.sel()[0]
        position = s.b
        if s.size()>1:
            s_str = self.view.substr(s)
        else:
            line = self.view.line(position)
            while not self.view.classify(position) & sublime.CLASS_WORD_START:
                position -= 1
            s_str = self.view.substr(sublime.Region(position, line.end()))

        if self.view.substr(position-1)=='$':
            return None
        keyword = re.split('[^a-zA-Z0-9_]', s_str)[0]
        return keyword

class intellisenseListener(sublime_plugin.EventListener):
    def __init__(self):
        self.bLock  = False
        self.delay  = -1

    def on_selection_modified_async(self, view):
        if self.delay > 0:
            self.run(view)
        elif self.delay==-1:
            intel_load()
            self.delay = intel_settings.get('delay')

    def on_modified_async(self, view):
        if self.delay > 0:
            self.run(view)

    def run(self, view):
        self.view = view
        if self.bLock:return
        sublime.set_timeout(self.display, self.delay)
        sublime.set_timeout(self.unlock,  self.delay + 100)
        self.bLock  = True

    def display(self):
        self.view.run_command("intellisense")

    def unlock(self):
        self.bLock  = False
