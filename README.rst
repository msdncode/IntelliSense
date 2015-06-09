IntelliSense
============

Make a tooltip to show the detail of a function in sublime_text

https://github.com/FunctionManual/IntelliSense

Using
-----
* Left mouse button click a function, or useing keyboard, or keyboard+click.

  Default keymap and mousemap:

  For Mac OS X:

    * ``super+shift+b``
    * ``ctrl+click``

  For Linux:

    * ``ctrl+shift+b``
    * ``ctrl+click``

  For Windows:
  
    * ``ctrl+shift+b``
    * ``alt+click``

Configuring
-----------

All default configurations::

  {
      "font-size"  : "12px", //font size in tooltip
      "max-width"  : 1000,   //tooltip max width
      "description": 0,      //whether display the description, 1 or 0
      "delay": 1000,         //if zero, not display the tooltip by mouse, 
                             //else show after it event
      "color":
      {
         "background":  "#F2F2F2",  //tooltip background
         "normal":      "#444444",  //default text color
         "function":    "#0000FF",  //function name text color
         "type":        "#C5060B",  //variable type text color
         "param":       "#318495",  //variable text color
         "value":       "#FF00FF",  //variable default value text color
         "description": "#A2A2A2",  //description text color
      },
      //the script document filename extension, if no, use the map
      "assoc":
      {
         "h": "cpp"
      }
  }


Define private function lib 
---------------------------

Data storing in the file: Data/Packages/IntelliSense/lib/function.***

(note: *** is the script document filename extension) 

Each function in one line in the file, example::

  type function (type param, type param = value, ...) //description

or::

  type function (type param, type param = value, ...)

or::

  function (param, param = value, ...) //description
   
save as function.***

A char # at left line is comment line, not loading

Note
----
* Default lib only PHP script, and much function is comment, you can delete char # for open
* You can create yourself function lib

What's New
----------

v1.0(06-06-2015):

  hello world!