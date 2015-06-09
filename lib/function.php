#<?php
#
#Variable handling 
boolean boolval ( mixed $var )	//Get the boolean value of a variable
void debug_zval_dump ( mixed $variable [, mixed $... ] )	//Dumps a string representation of an internal zend value to output
bool empty ( mixed $var )	//Determine whether a variable is empty
float floatval ( mixed $var )	//Get float value of a variable
array get_defined_vars ( void )	//Returns an array of all defined variables
string get_resource_type ( resource $handle )	//Returns the resource type
string gettype ( mixed $var )	//Get the type of a variable
bool import_request_variables ( string $types [, string $prefix ] )	//Import GET/POST/Cookie variables into the global scope
int intval ( mixed $var [, int $base = 10 ] )	//Get the integer value of a variable
bool is_array ( mixed $var )	//Finds whether a variable is an array
bool is_bool ( mixed $var )	//Finds out whether a variable is a boolean
bool is_callable ( callable $name [, bool $syntax_only = false [, string &$callable_name ]] )	//Verify that the contents of a variable can be called as a function
bool is_float ( mixed $var )	//Finds whether the type of a variable is float
bool is_int ( mixed $var )	//Find whether the type of a variable is integer
bool is_null ( mixed $var )	//Finds whether a variable is NULL
bool is_numeric ( mixed $var )	//Finds whether a variable is a number or a numeric string
bool is_object ( mixed $var )	//Finds whether a variable is an object
bool is_resource ( mixed $var )	//Finds whether a variable is a resource
bool is_scalar ( mixed $var )	//Finds whether a variable is a scalar
bool is_string ( mixed $var )	//Find whether the type of a variable is string
bool isset ( mixed $var [, mixed $... ] )	//Determine if a variable is set and is not NULL
mixed print_r ( mixed $expression [, bool $return = false ] )	//Prints human-readable information about a variable
string serialize ( mixed $value )	//Generates a storable representation of a value
bool settype ( mixed &$var , string $type )	//Set the type of a variable
string strval ( mixed $var )	//Get string value of a variable
mixed unserialize ( string $str )	//Creates a PHP value from a stored representation
void unset ( mixed $var [, mixed $... ] )	//Unset a given variable
void var_dump ( mixed $expression [, mixed $... ] )	//Dumps information about a variable
mixed var_export ( mixed $expression [, bool $return = false ] )	//Outputs or returns a parsable string representation of a variable

#json
mixed json_decode ( string $json [, bool $assoc = false [, int $depth = 512 [, int $options = 0 ]]] )	//Decodes a JSON string
string json_encode ( mixed $value [, int $options = 0 [, int $depth = 512 ]] )	//Returns the JSON representation of a value
string json_last_error_msg ( void )	//Returns the error string of the last json_encode() or json_decode() call
int json_last_error ( void )	//Returns the last error occurred

#Arrays
array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )	//Changes the case of all keys in an array
array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )	//Split an array into chunks
array array_column ( array $array , mixed $column_key [, mixed $index_key = null ] )	//Return the values from a single column in the input array
array array_combine ( array $keys , array $values )	//Creates an array by using one array for keys and another for its values
array array_count_values ( array $array )	//Counts all the values of an array
array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )	//Computes the difference of arrays with additional index check
array array_diff_key ( array $array1 , array $array2 [, array $... ] )	//Computes the difference of arrays using keys for comparison
array array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )	//Computes the difference of arrays with additional index check which is performed by a user supplied callback function
array array_diff_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )	//Computes the difference of arrays using a callback function on the keys for comparison
array array_diff ( array $array1 , array $array2 [, array $... ] )	//Computes the difference of arrays
array array_fill_keys ( array $keys , mixed $value )	//Fill an array with values, specifying keys
array array_fill ( int $start_index , int $num , mixed $value )	//Fill an array with values
array array_filter ( array $array [, callable $callback [, int $flag = 0 ]] )	//Filters elements of an array using a callback function
array array_flip ( array $array )	//Exchanges all keys with their associated values in an array
array array_intersect_assoc ( array $array1 , array $array2 [, array $... ] )	//Computes the intersection of arrays with additional index check
array array_intersect_key ( array $array1 , array $array2 [, array $... ] )	//Computes the intersection of arrays using keys for comparison
array array_intersect_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )	//Computes the intersection of arrays with additional index check, compares indexes by a callback function
array array_intersect_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )	//Computes the intersection of arrays using a callback function on the keys for comparison
array array_intersect ( array $array1 , array $array2 [, array $... ] )	//Computes the intersection of arrays
bool array_key_exists ( mixed $key , array $array )	//Checks if the given key or index exists in the array
array array_keys ( array $array [, mixed $search_value [, bool $strict = false ]] )	//Return all the keys or a subset of the keys of an array
array array_map ( callable $callback , array $array1 [, array $... ] )	//Applies the callback to the elements of the given arrays
array array_merge_recursive ( array $array1 [, array $... ] )	//Merge two or more arrays recursively
array array_merge ( array $array1 [, array $... ] )	//Merge one or more arrays
bool array_multisort ( array &$array1 [, mixed $array1_sort_order = SORT_ASC [, mixed $array1_sort_flags = SORT_REGULAR [, mixed $... ]]] )	//Sort multiple or multi-dimensional arrays
array array_pad ( array $array , int $size , mixed $value )	//Pad array to the specified length with a value
mixed array_pop ( array &$array )	//Pop the element off the end of array
number array_product ( array $array )	//Calculate the product of values in an array
int array_push ( array &$array , mixed $value1 [, mixed $... ] )	//Push one or more elements onto the end of array
mixed array_rand ( array $array [, int $num = 1 ] )	//Pick one or more random entries out of an array
mixed array_reduce ( array $array , callable $callback [, mixed $initial = NULL ] )	//Iteratively reduce the array to a single value using a callback function
array array_replace_recursive ( array $array1 , array $array2 [, array $... ] )	//Replaces elements from passed arrays into the first array recursively
array array_replace ( array $array1 , array $array2 [, array $... ] )	//Replaces elements from passed arrays into the first array
array array_reverse ( array $array [, bool $preserve_keys = false ] )	//Return an array with elements in reverse order
mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )	//Searches the array for a given value and returns the corresponding key if successful
mixed array_shift ( array &$array )	//Shift an element off the beginning of array
array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )	//Extract a slice of the array
array array_splice ( array &$input , int $offset [, int $length [, mixed $replacement = array() ]] )	//Remove a portion of the array and replace it with something else
number array_sum ( array $array )	//Calculate the sum of values in an array
array array_udiff_assoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )	//Computes the difference of arrays with additional index check, compares data by a callback function
array array_udiff_uassoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func , callable $key_compare_func )	//Computes the difference of arrays with additional index check, compares data and indexes by a callback function
array array_udiff ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )	//Computes the difference of arrays by using a callback function for data comparison
array array_uintersect_assoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )	//Computes the intersection of arrays with additional index check, compares data by a callback function
array array_uintersect_uassoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func , callable $key_compare_func )	//Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions
array array_uintersect ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )	//Computes the intersection of arrays, compares data by a callback function
array array_unique ( array $array [, int $sort_flags = SORT_STRING ] )	//Removes duplicate values from an array
int array_unshift ( array &$array , mixed $value1 [, mixed $... ] )	//Prepend one or more elements to the beginning of an array
array array_values ( array $array )	//Return all the values of an array
bool array_walk_recursive ( array &$array , callable $callback [, mixed $userdata = NULL ] )	//Apply a user function recursively to every member of an array
bool array_walk ( array &$array , callable $callback [, mixed $userdata = NULL ] )	//Apply a user supplied function to every member of an array
array array ([ mixed $... ] )	//Create an array
bool arsort ( array &$array [, int $sort_flags = SORT_REGULAR ] )	//Sort an array in reverse order and maintain index association
bool asort ( array &$array [, int $sort_flags = SORT_REGULAR ] )	//Sort an array and maintain index association
array compact ( mixed $varname1 [, mixed $... ] )	//Create array containing variables and their values
int count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] )	//Count all elements in an array, or something in an object
mixed current ( array &$array )	//Return the current element in an array
array each ( array &$array )	//Return the current key and value pair from an array and advance the array cursor
mixed end ( array &$array )	//Set the internal pointer of an array to its last element
int extract ( array &$array [, int $flags = EXTR_OVERWRITE [, string $prefix = NULL ]] )	//Import variables into the current symbol table from an array
bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )	//Checks if a value exists in an array
mixed key ( array &$array )	//Fetch a key from an array
bool krsort ( array &$array [, int $sort_flags = SORT_REGULAR ] )	//Sort an array by key in reverse order
bool ksort ( array &$array [, int $sort_flags = SORT_REGULAR ] )	//Sort an array by key
array list ( mixed $var1 [, mixed $... ] )	//Assign variables as if they were an array
bool natcasesort ( array &$array )	//Sort an array using a case insensitive 'natural order' algorithm
bool natsort ( array &$array )	//Sort an array using a 'natural order' algorithm
mixed next ( array &$array )	//Advance the internal array pointer of an array
mixed prev ( array &$array )	//Rewind the internal array pointer
array range ( mixed $start , mixed $end [, number $step = 1 ] )	//Create an array containing a range of elements
mixed reset ( array &$array )	//Set the internal pointer of an array to its first element
bool rsort ( array &$array [, int $sort_flags = SORT_REGULAR ] )	//Sort an array in reverse order
bool shuffle ( array &$array )	//Shuffle an array
bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] )	//Sort an array
bool uasort ( array &$array , callable $value_compare_func )	//Sort an array with a user-defined comparison function and maintain index association
bool uksort ( array &$array , callable $key_compare_func )	//Sort an array by keys using a user-defined comparison function
bool usort ( array &$array , callable $value_compare_func )	//Sort an array by values using a user-defined comparison function

#Classes/Objects
void __autoload ( string $class )	//Attempt to load undefined class
mixed call_user_method_array ( string $method_name , object &$obj , array $params )	//Call a user method given with an array of parameters
mixed call_user_method ( string $method_name , object &$obj [, mixed $parameter [, mixed $... ]] )	//Call a user method on an specific object
bool class_alias ( string $original , string $alias [, bool $autoload = TRUE ] )	//Creates an alias for a class
bool class_exists ( string $class_name [, bool $autoload = true ] )	//Checks if the class has been defined
string get_called_class ( void )	//the 'Late Static Binding' class name
array get_class_methods ( mixed $class_name )	//Gets the class methods' names
array get_class_vars ( string $class_name )	//Get the default properties of the class
string get_class ([ object $object = NULL ] )	//Returns the name of the class of an object
array get_declared_classes ( void )	//Returns an array with the name of the defined classes
array get_declared_interfaces ( void )	//Returns an array of all declared interfaces
array get_declared_traits ( void )	//Returns an array of all declared traits
array get_object_vars ( object $object )	//Gets the properties of the given object
string get_parent_class ([ mixed $object ] )	//Retrieves the parent class name for object or class
bool interface_exists ( string $interface_name [, bool $autoload = true ] )	//Checks if the interface has been defined
bool is_a ( object $object , string $class_name [, bool $allow_string = FALSE ] )	//Checks if the object is of this class or has this class as one of its parents
bool is_subclass_of ( mixed $object , string $class_name [, bool $allow_string = TRUE ] )	//Checks if the object has this class as one of its parents
bool method_exists ( mixed $object , string $method_name )	//Checks if the class method exists
bool property_exists ( mixed $class , string $property )	//Checks if the object or class has a property
bool trait_exists ( string $traitname [, bool $autoload ] )	//Checks if the trait exists

#Date/Time
bool checkdate ( int $month , int $day , int $year )	//Validate a Gregorian date
string date_default_timezone_get ( void )	//Gets the default timezone used by all date/time functions in a script
bool date_default_timezone_set ( string $timezone_identifier )	//Sets the default timezone used by all date/time functions in a script
array date_parse_from_format ( string $format , string $date )	//Get info about given date formatted according to the specified format
array date_parse ( string $date )	//Returns associative array with detailed info about given date
array date_sun_info ( int $time , float $latitude , float $longitude )	//Returns an array with information about sunset/sunrise and twilight begin/end
mixed date_sunrise ( int $timestamp [, int $format = SUNFUNCS_RET_STRING [, float $latitude = ini_get('date.default_latitude') [, float $longitude = ini_get('date.default_longitude') [, float $zenith = ini_get('date.sunrise_zenith') [, float $gmt_offset = 0 ]]]]] )	//Returns time of sunrise for a given day and location
mixed date_sunset ( int $timestamp [, int $format = SUNFUNCS_RET_STRING [, float $latitude = ini_get('date.default_latitude') [, float $longitude = ini_get('date.default_longitude') [, float $zenith = ini_get('date.sunset_zenith') [, float $gmt_offset = 0 ]]]]] )	//Returns time of sunset for a given day and location
string date ( string $format [, int $timestamp = time() ] )	//Format a local time/date
array getdate ([ int $timestamp = time() ] )	//Get date/time information
mixed gettimeofday ([ bool $return_float = false ] )	//Get current time
string gmdate ( string $format [, int $timestamp = time() ] )	//Format a GMT/UTC date/time
int gmmktime ([ int $hour = gmdate('H') [, int $minute = gmdate('i') [, int $second = gmdate('s') [, int $month = gmdate('n') [, int $day = gmdate('j') [, int $year = gmdate('Y') [, int $is_dst = -1 ]]]]]]] )	//Get Unix timestamp for a GMT date
string gmstrftime ( string $format [, int $timestamp = time() ] )	//Format a GMT/UTC time/date according to locale settings
int idate ( string $format [, int $timestamp = time() ] )	//Format a local time/date as integer
array localtime ([ int $timestamp = time() [, bool $is_associative = false ]] )	//Get the local time
mixed microtime ([ bool $get_as_float = false ] )	//Return current Unix timestamp with microseconds
int mktime ([ int $hour = date('H') [, int $minute = date('i') [, int $second = date('s') [, int $month = date('n') [, int $day = date('j') [, int $year = date('Y') [, int $is_dst = -1 ]]]]]]] )	//Get Unix timestamp for a date
string strftime ( string $format [, int $timestamp = time() ] )	//Format a local time/date according to locale settings
array strptime ( string $date , string $format )	//Parse a time/date generated with strftime
int strtotime ( string $time [, int $now = time() ] )	//Parse about any English textual datetime description into a Unix timestamp
int time ( void )	//Return current Unix timestamp
string timezone_name_from_abbr ( string $abbr [, int $gmtOffset = -1 [, int $isdst = -1 ]] )	//Returns the timezone name from abbreviation
string timezone_version_get ( void )	//Gets the version of the timezonedb

##Directories
bool chdir ( string $directory )	//Change directory
bool chroot ( string $directory )	//Change the root directory
void closedir ([ resource $dir_handle ] )	//Close directory handle
Directory dir ( string $directory [, resource $context ] )	//Return an instance of the Directory class
string getcwd ( void )	//Gets the current working directory
resource opendir ( string $path [, resource $context ] )	//Open directory handle
string readdir ([ resource $dir_handle ] )	//Read entry from directory handle
void rewinddir ([ resource $dir_handle ] )	//Rewind directory handle
array scandir ( string $directory [, int $sorting_order = SCANDIR_SORT_ASCENDING [, resource $context ]] )	//List files and directories inside the specified path

##Error Handling
array debug_backtrace ([ int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT [, int $limit = 0 ]] )	//Generates a backtrace
void debug_print_backtrace ([ int $options = 0 [, int $limit = 0 ]] )	//Prints a backtrace
array error_get_last ( void )	//Get the last occurred error
bool error_log ( string $message [, int $message_type = 0 [, string $destination [, string $extra_headers ]]] )	//Send an error message to the defined error handling routines
int error_reporting ([ int $level ] )	//Sets which PHP errors are reported
bool restore_error_handler ( void )	//Restores the previous error handler function
bool restore_exception_handler ( void )	//Restores the previously defined exception handler function
mixed set_error_handler ( callable $error_handler [, int $error_types = E_ALL | E_STRICT ] )	//Sets a user-defined error handler function
bool handler ( int $errno , string $errstr [, string $errfile [, int $errline [, array $errcontext ]]] )	//Sets a user-defined error handler function
callable set_exception_handler ( callable $exception_handler )	//Sets a user-defined exception handler function
void handler ( Exception $ex )	//Sets a user-defined exception handler function
bool trigger_error ( string $error_msg [, int $error_type = E_USER_NOTICE ] )	//Generates a user-level error/warning/notice message

##Program execution
string escapeshellarg ( string $arg )	//Escape a string to be used as a shell argument
string escapeshellcmd ( string $command )	//Escape shell metacharacters
string exec ( string $command [, array &$output [, int &$return_var ]] )	//Execute an external program
void passthru ( string $command [, int &$return_var ] )	//Execute an external program and display raw output
int proc_close ( resource $process )	//Close a process opened by proc_open and return the exit code of that process
array proc_get_status ( resource $process )	//Get information about a process opened by proc_open
bool proc_nice ( int $increment )	//Change the priority of the current process
resource proc_open ( string $cmd , array $descriptorspec , array &$pipes [, string $cwd [, array $env [, array $other_options ]]] )	//Execute a command and open file pointers for input/output
bool proc_terminate ( resource $process [, int $signal = 15 ] )	//Kills a process opened by proc_open
string shell_exec ( string $cmd )	//Execute command via shell and return the complete output as a string
string system ( string $command [, int &$return_var ] )	//Execute an external program and display the output

#Filesystem
string basename ( string $path [, string $suffix ] )	//Returns trailing name component of path
bool chgrp ( string $filename , mixed $group )	//Changes file group
bool chmod ( string $filename , int $mode )	//Changes file mode
bool chown ( string $filename , mixed $user )	//Changes file owner
void clearstatcache ([ bool $clear_realpath_cache = false [, string $filename ]] )	//Clears file status cache
bool copy ( string $source , string $dest [, resource $context ] )	//Copies file
string dirname ( string $path )	//Returns parent directory's path
float disk_free_space ( string $directory )	//Returns available space on filesystem or disk partition
float disk_total_space ( string $directory )	//Returns the total size of a filesystem or disk partition
bool fclose ( resource $handle )	//Closes an open file pointer
bool feof ( resource $handle )	//Tests for end-of-file on a file pointer
bool fflush ( resource $handle )	//Flushes the output to a file
string fgetc ( resource $handle )	//Gets character from file pointer
array fgetcsv ( resource $handle [, int $length = 0 [, string $delimiter = ',' [, string $enclosure = "'" [, string $escape = '\\' ]]]] )	//Gets line from file pointer and parse for CSV fields
string fgets ( resource $handle [, int $length ] )	//Gets line from file pointer
string fgetss ( resource $handle [, int $length [, string $allowable_tags ]] )	//Gets line from file pointer and strip HTML tags
bool file_exists ( string $filename )	//Checks whether a file or directory exists
string file_get_contents ( string $filename [, bool $use_include_path = false [, resource $context [, int $offset = -1 [, int $maxlen ]]]] )	//Reads entire file into a string
int file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] )	//Write a string to a file
array file ( string $filename [, int $flags = 0 [, resource $context ]] )	//Reads entire file into an array
int fileatime ( string $filename )	//Gets last access time of file
int filectime ( string $filename )	//Gets inode change time of file
int filegroup ( string $filename )	//Gets file group
int fileinode ( string $filename )	//Gets file inode
int filemtime ( string $filename )	//Gets file modification time
int fileowner ( string $filename )	//Gets file owner
int fileperms ( string $filename )	//Gets file permissions
int filesize ( string $filename )	//Gets file size
string filetype ( string $filename )	//Gets file type
bool flock ( resource $handle , int $operation [, int &$wouldblock ] )	//Portable advisory file locking
bool fnmatch ( string $pattern , string $string [, int $flags = 0 ] )	//Match filename against a pattern
resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )	//Opens file or URL
int fpassthru ( resource $handle )	//Output all remaining data on a file pointer
int fputcsv ( resource $handle , array $fields [, string $delimiter = ',' [, string $enclosure = "'" [, string $escape_char = '\\' ]]] )	//Format line as CSV and write to file pointer
string fread ( resource $handle , int $length )	//Binary-safe file read
mixed fscanf ( resource $handle , string $format [, mixed &$... ] )	//Parses input from a file according to a format
int fseek ( resource $handle , int $offset [, int $whence = SEEK_SET ] )	//Seeks on a file pointer
array fstat ( resource $handle )	//Gets information about a file using an open file pointer
int ftell ( resource $handle )	//Returns the current position of the file read/write pointer
bool ftruncate ( resource $handle , int $size )	//Truncates a file to a given length
int fwrite ( resource $handle , string $string [, int $length ] )	//Binary-safe file write
array glob ( string $pattern [, int $flags = 0 ] )	//Find pathnames matching a pattern
bool is_dir ( string $filename )	//Tells whether the filename is a directory
bool is_executable ( string $filename )	//Tells whether the filename is executable
bool is_file ( string $filename )	//Tells whether the filename is a regular file
bool is_link ( string $filename )	//Tells whether the filename is a symbolic link
bool is_readable ( string $filename )	//Tells whether a file exists and is readable
bool is_uploaded_file ( string $filename )	//Tells whether the file was uploaded via HTTP POST
bool is_writable ( string $filename )	//Tells whether the filename is writable
bool lchgrp ( string $filename , mixed $group )	//Changes group ownership of symlink
bool lchown ( string $filename , mixed $user )	//Changes user ownership of symlink
bool link ( string $target , string $link )	//Create a hard link
int linkinfo ( string $path )	//Gets information about a link
array lstat ( string $filename )	//Gives information about a file or symbolic link
bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]] )	//Makes directory
bool move_uploaded_file ( string $filename , string $destination )	//Moves an uploaded file to a new location
array parse_ini_file ( string $filename [, bool $process_sections = false [, int $scanner_mode = INI_SCANNER_NORMAL ]] )	//Parse a configuration file
array parse_ini_string ( string $ini [, bool $process_sections = false [, int $scanner_mode = INI_SCANNER_NORMAL ]] )	//Parse a configuration string
mixed pathinfo ( string $path [, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME ] )	//Returns information about a file path
int pclose ( resource $handle )	//Closes process file pointer
resource popen ( string $command , string $mode )	//Opens process file pointer
int readfile ( string $filename [, bool $use_include_path = false [, resource $context ]] )	//Outputs a file
string readlink ( string $path )	//Returns the target of a symbolic link
array realpath_cache_get ( void )	//Get realpath cache entries
int realpath_cache_size ( void )	//Get realpath cache size
string realpath ( string $path )	//Returns canonicalized absolute pathname
bool rename ( string $oldname , string $newname [, resource $context ] )	//Renames a file or directory
bool rewind ( resource $handle )	//Rewind the position of a file pointer
bool rmdir ( string $dirname [, resource $context ] )	//Removes directory
array stat ( string $filename )	//Gives information about a file
bool symlink ( string $target , string $link )	//Creates a symbolic link
string tempnam ( string $dir , string $prefix )	//Create file with unique file name
resource tmpfile ( void )	//Creates a temporary file
bool touch ( string $filename [, int $time = time() [, int $atime ]] )	//Sets access and modification time of file
int umask ([ int $mask ] )	//Changes the current umask
bool unlink ( string $filename [, resource $context ] )	//Deletes a file

#Filter
bool filter_has_var ( int $type , string $variable_name )	//Checks if variable of specified type exists
int filter_id ( string $filtername )	//Returns the filter ID belonging to a named filter
mixed filter_input_array ( int $type [, mixed $definition [, bool $add_empty = true ]] )	//Gets external variables and optionally filters them
mixed filter_input ( int $type , string $variable_name [, int $filter = FILTER_DEFAULT [, mixed $options ]] )	//Gets a specific external variable by name and optionally filters it
array filter_list ( void )	//Returns a list of all supported filters
mixed filter_var_array ( array $data [, mixed $definition [, bool $add_empty = true ]] )	//Gets multiple variables and optionally filters them
mixed filter_var ( mixed $variable [, int $filter = FILTER_DEFAULT [, mixed $options ]] )	//Filters a variable with a specified filter

#Function Handling
mixed call_user_func_array ( callable $callback , array $param_arr )	//Call a callback with an array of parameters
mixed call_user_func ( callable $callback [, mixed $parameter [, mixed $... ]] )	//Call the callback given by the first parameter
string create_function ( string $args , string $code )	//Create an anonymous (lambda-style) function
mixed forward_static_call_array ( callable $function , array $parameters )	//Call a static method and pass the arguments as array
mixed forward_static_call ( callable $function [, mixed $parameter [, mixed $... ]] )	//Call a static method
mixed func_get_arg ( int $arg_num )	//Return an item from the argument list
array func_get_args ( void )	//Returns an array comprising a function's argument list
int func_num_args ( void )	//Returns the number of arguments passed to the function
bool function_exists ( string $function_name )	//Return TRUE if the given function has been defined
array get_defined_functions ( void )	//Returns an array of all defined functions
void register_shutdown_function ( callable $callback [, mixed $parameter [, mixed $... ]] )	//Register a function for execution on shutdown
bool register_tick_function ( callable $function [, mixed $arg [, mixed $... ]] )	//Register a function for execution on each tick
void unregister_tick_function ( string $function_name )	//De-register a function for execution on each tick

#Hash
array hash_algos ( void )	//Return a list of registered hashing algorithms
resource hash_copy ( resource $context )	//Copy hashing context
bool hash_equals ( string $known_string , string $user_string )	//Timing attack safe string comparison
string hash_file ( string $algo , string $filename [, bool $raw_output = false ] )	//Generate a hash value using the contents of a given file
string hash_final ( resource $context [, bool $raw_output = false ] )	//Finalize an incremental hash and return resulting digest
string hash_hmac_file ( string $algo , string $filename , string $key [, bool $raw_output = false ] )	//Generate a keyed hash value using the HMAC method and the contents of a given file
string hash_hmac ( string $algo , string $data , string $key [, bool $raw_output = false ] )	//Generate a keyed hash value using the HMAC method
resource hash_init ( string $algo [, int $options = 0 [, string $key = NULL ]] )	//Initialize an incremental hashing context
string hash_pbkdf2 ( string $algo , string $password , string $salt , int $iterations [, int $length = 0 [, bool $raw_output = false ]] )	//Generate a PBKDF2 key derivation of a supplied password
bool hash_update_file ( resource $hcontext , string $filename [, resource $scontext = NULL ] )	//Pump data into an active hashing context from a file
int hash_update_stream ( resource $context , resource $handle [, int $length = -1 ] )	//Pump data into an active hashing context from an open stream
bool hash_update ( resource $context , string $data )	//Pump data into an active hashing context
string hash ( string $algo , string $data [, bool $raw_output = false ] )	//Generate a hash value (message digest)

##PHP Options/Info
mixed assert_options ( int $what [, mixed $value ] )	//Set/get the various assert flags
bool assert ( mixed $assertion [, string $description ] )	//Checks if assertion is FALSE
string cli_get_process_title ( void )	//Returns the current process title
bool cli_set_process_title ( string $title )	//Sets the process title
bool dl ( string $library )	//Loads a PHP extension at runtime
bool extension_loaded ( string $name )	//Find out whether an extension is loaded
int gc_collect_cycles ( void )	//Forces collection of any existing garbage cycles
void gc_disable ( void )	//Deactivates the circular reference collector
void gc_enable ( void )	//Activates the circular reference collector
bool gc_enabled ( void )	//Returns status of the circular reference collector
string get_cfg_var ( string $option )	//Gets the value of a PHP configuration option
string get_current_user ( void )	//Gets the name of the owner of the current PHP script
array get_defined_constants ([ bool $categorize = false ] )	//Returns an associative array with the names of all the constants and their values
array get_extension_funcs ( string $module_name )	//Returns an array with the names of the functions of a module
string get_include_path ( void )	//Gets the current include_path configuration option
array get_included_files ( void )	//Returns an array with the names of included or required files
array get_loaded_extensions ([ bool $zend_extensions = false ] )	//Returns an array with the names of all modules compiled and loaded
bool get_magic_quotes_gpc ( void )	//Gets the current configuration setting of magic_quotes_gpc
bool get_magic_quotes_runtime ( void )	//Gets the current active configuration setting of magic_quotes_runtime
string getenv ( string $varname )	//Gets the value of an environment variable
int getlastmod ( void )	//Gets time of last page modification
int getmygid ( void )	//Get PHP script owner's GID
int getmyinode ( void )	//Gets the inode of the current script
int getmypid ( void )	//Gets PHP's process ID
int getmyuid ( void )	//Gets PHP script owner's UID
array getopt ( string $options [, array $longopts ] )	//Gets options from the command line argument list
array getrusage ([ int $who = 0 ] )	//Gets the current resource usages
array ini_get_all ([ string $extension [, bool $details = true ]] )	//Gets all configuration options
string ini_get ( string $varname )	//Gets the value of a configuration option
void ini_restore ( string $varname )	//Restores the value of a configuration option
string ini_set ( string $varname , string $newvalue )	//Sets the value of a configuration option
int memory_get_peak_usage ([ bool $real_usage = false ] )	//Returns the peak of memory allocated by PHP
int memory_get_usage ([ bool $real_usage = false ] )	//Returns the amount of memory allocated to PHP
string php_ini_loaded_file ( void )	//Retrieve a path to the loaded php.ini file
string php_ini_scanned_files ( void )	//Return a list of .ini files parsed from the additional ini dir
string php_logo_guid ( void )	//Gets the logo guid
string php_sapi_name ( void )	//Returns the type of interface between web server and PHP
string php_uname ([ string $mode = 'a' ] )	//Returns information about the operating system PHP is running on
bool phpcredits ([ int $flag = CREDITS_ALL ] )	//Prints out the credits for PHP
bool phpinfo ([ int $what = INFO_ALL ] )	//Outputs information about PHP's configuration
string phpversion ([ string $extension ] )	//Gets the current PHP version
bool putenv ( string $setting )	//Sets the value of an environment variable
void restore_include_path ( void )	//Restores the value of the include_path configuration option
string set_include_path ( string $new_include_path )	//Sets the include_path configuration option
bool set_magic_quotes_runtime ( bool $new_setting )	//Sets the current active configuration setting of magic_quotes_runtime
bool set_time_limit ( int $seconds )	//Limits the maximum execution time
string sys_get_temp_dir ( void )	//Returns directory path used for temporary files
mixed version_compare ( string $version1 , string $version2 [, string $operator ] )	//Compares two 'PHP-standardized' version number strings
string zend_logo_guid ( void )	//Gets the Zend guid
int zend_thread_id ( void )	//Returns a unique identifier for the current thread
string zend_version ( void )	//Gets the version of the current Zend engine

#Mail
int ezmlm_hash ( string $addr )	// Calculate the hash value needed by EZMLM
bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )	//Send mail

#math
number abs ( mixed $number )	//Absolute value
float acos ( float $arg )	//Arc cosine
float acosh ( float $arg )	//Inverse hyperbolic cosine
float asin ( float $arg )	//Arc sine
float asinh ( float $arg )	//Inverse hyperbolic sine
float atan2 ( float $y , float $x )	//Arc tangent of two variables
float atan ( float $arg )	//Arc tangent
float atanh ( float $arg )	//Inverse hyperbolic tangent
string base_convert ( string $number , int $frombase , int $tobase )	//Convert a number between arbitrary bases
number bindec ( string $binary_string )	//Binary to decimal
float ceil ( float $value )	//Round fractions up
float cos ( float $arg )	//Cosine
float cosh ( float $arg )	//Hyperbolic cosine
string decbin ( int $number )	//Decimal to binary
string dechex ( int $number )	//Decimal to hexadecimal
string decoct ( int $number )	//Decimal to octal
float deg2rad ( float $number )	//Converts the number in degrees to the radian equivalent
float exp ( float $arg )	//Calculates the exponent of e
float expm1 ( float $arg )	//Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
float floor ( float $value )	//Round fractions down
float fmod ( float $x , float $y )	//Returns the floating point remainder (modulo) of the division of the arguments
int getrandmax ( void )	//Show largest possible random value
number hexdec ( string $hex_string )	//Hexadecimal to decimal
float hypot ( float $x , float $y )	//Calculate the length of the hypotenuse of a right-angle triangle
integer intdiv ( integer $numerator , integer $divisor )	//Integer division
bool is_finite ( float $val )	//Finds whether a value is a legal finite number
bool is_infinite ( float $val )	//Finds whether a value is infinite
bool is_nan ( float $val )	//Finds whether a value is not a number
float lcg_value ( void )	//Combined linear congruential generator
float log10 ( float $arg )	//Base-10 logarithm
float log1p ( float $number )	//Returns log(1 + number), computed in a way that is accurate even when  the value of number is close to zero
float log ( float $arg [, float $base = M_E ] )	//Natural logarithm
mixed max ( array $values )	//Find highest value
mixed max ( mixed $value1 , mixed $value2 [, mixed $... ] )	//Find highest value
mixed min ( array $values )	//Find lowest value
mixed min ( mixed $value1 , mixed $value2 [, mixed $... ] )	//Find lowest value
int mt_getrandmax ( void )	//Show largest possible random value
int mt_rand ( void )	//Generate a better random value
int mt_rand ( int $min , int $max )	//Generate a better random value
void mt_srand ([ int $seed ] )	//Seed the better random number generator
number octdec ( string $octal_string )	//Octal to decimal
float pi ( void )	//Get value of pi
number pow ( number $base , number $exp )	//Exponential expression
float rad2deg ( float $number )	//Converts the radian number to the equivalent number in degrees
int rand ( void )	//Generate a random integer
int rand ( int $min , int $max )	//Generate a random integer
float round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] )	//Rounds a float
float sin ( float $arg )	//Sine
float sinh ( float $arg )	//Hyperbolic sine
float sqrt ( float $arg )	//Square root
void srand ([ int $seed ] )	//Seed the random number generator
float tan ( float $arg )	//Tangent
float tanh ( float $arg )	//Hyperbolic tangent

##misc.
int connection_aborted ( void )	//Check whether client disconnected
int connection_status ( void )	//Returns connection status bitfield
mixed constant ( string $name )	//Returns the value of a constant
bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )	//Defines a named constant
bool defined ( string $name )	//Checks whether a given named constant exists
mixed eval ( string $code )	//Evaluate a string as PHP code
void exit ([ string $status ] )	//Output a message and terminate the current script
void exit ( int $status )	//Output a message and terminate the current script
mixed get_browser ([ string $user_agent [, bool $return_array = false ]] )	//Tells what the user's browser is capable of
void __halt_compiler ( void )	//Halts the compiler execution
mixed highlight_file ( string $filename [, bool $return = false ] )	//Syntax highlighting of a file
mixed highlight_string ( string $str [, bool $return = false ] )	//Syntax highlighting of a string
int ignore_user_abort ([ string $value ] )	//Set whether a client disconnect should abort script execution
string pack ( string $format [, mixed $args [, mixed $... ]] )	//Pack data into binary string
bool php_check_syntax ( string $filename [, string &$error_message ] )	//Check the PHP syntax of (and execute) the specified file
string php_strip_whitespace ( string $filename )	//Return source with stripped comments and whitespace
int sleep ( int $seconds )	//Delay execution
array sys_getloadavg ( void )	//Gets system load average
mixed time_nanosleep ( int $seconds , int $nanoseconds )	//Delay for a number of seconds and nanoseconds
bool time_sleep_until ( float $timestamp )	//Make the script sleep until the specified time
string uniqid ([ string $prefix = '' [, bool $more_entropy = false ]] )	//Generate a unique ID
array unpack ( string $format , string $data )	//Unpack data from binary string
void usleep ( int $micro_seconds )	//Delay execution in microseconds

##Network
bool checkdnsrr ( string $host [, string $type = 'MX' ] )	//Check DNS records corresponding to a given Internet host name or IP address
bool closelog ( void )	//Close connection to system logger
void define_syslog_variables ( void )	//Initializes all syslog related variables
array dns_get_record ( string $hostname [, int $type = DNS_ANY [, array &$authns [, array &$addtl [, bool &$raw = false ]]]] )	//Fetch DNS Resource Records associated with a hostname
resource fsockopen ( string $hostname [, int $port = -1 [, int &$errno [, string &$errstr [, float $timeout = ini_get('default_socket_timeout') ]]]] )	//Open Internet or Unix domain socket connection
string gethostbyaddr ( string $ip_address )	//Get the Internet host name corresponding to a given IP address
string gethostbyname ( string $hostname )	//Get the IPv4 address corresponding to a given Internet host name
array gethostbynamel ( string $hostname )	//Get a list of IPv4 addresses corresponding to a given Internet host name
string gethostname ( void )	//Gets the host name
bool getmxrr ( string $hostname , array &$mxhosts [, array &$weight ] )	//Get MX records corresponding to a given Internet host name
int getprotobyname ( string $name )	//Get protocol number associated with protocol name
string getprotobynumber ( int $number )	//Get protocol name associated with protocol number
int getservbyname ( string $service , string $protocol )	//Get port number associated with an Internet service and protocol
string getservbyport ( int $port , string $protocol )	//Get Internet service which corresponds to port and protocol
bool header_register_callback ( callable $callback )	//Call a header function
void header_remove ([ string $name ] )	//Remove previously set headers
void header ( string $string [, bool $replace = true [, int $http_response_code ]] )	//Send a raw HTTP header
array headers_list ( void )	//Returns a list of response headers sent (or ready to send)
bool headers_sent ([ string &$file [, int &$line ]] )	//Checks if or where headers have been sent
int http_response_code ([ int $response_code ] )	//Get or Set the HTTP response code
string inet_ntop ( string $in_addr )	//Converts a packed internet address to a human readable representation
string inet_pton ( string $address )	//Converts a human readable IP address to its packed in_addr representation
int ip2long ( string $ip_address )	//Converts a string containing an (IPv4) Internet Protocol dotted address into a proper address
string long2ip ( string $proper_address )	//Converts an (IPv4) Internet network address into a string in Internet standard dotted format
bool openlog ( string $ident , int $option , int $facility )	//Open connection to system logger
resource pfsockopen ( string $hostname [, int $port = -1 [, int &$errno [, string &$errstr [, float $timeout = ini_get('default_socket_timeout') ]]]] )	//Open persistent Internet or Unix domain socket connection
bool setcookie ( string $name [, string $value [, int $expire = 0 [, string $path [, string $domain [, bool $secure = false [, bool $httponly = false ]]]]]] )	//Send a cookie
bool setrawcookie ( string $name [, string $value [, int $expire = 0 [, string $path [, string $domain [, bool $secure = false [, bool $httponly = false ]]]]]] )	//Send a cookie without urlencoding the cookie value
bool syslog ( int $priority , string $message )	//Generate a system log message

#Output Control
void flush ( void )	//Flush system output buffer
void ob_clean ( void )	//Clean (erase) the output buffer
bool ob_end_clean ( void )	//Clean (erase) the output buffer and turn off output buffering
bool ob_end_flush ( void )	//Flush (send) the output buffer and turn off output buffering
void ob_flush ( void )	//Flush (send) the output buffer
string ob_get_clean ( void )	//Get current buffer contents and delete current output buffer
string ob_get_contents ( void )	//Return the contents of the output buffer
string ob_get_flush ( void )	//Flush the output buffer, return it as a string and turn off output buffering
int ob_get_length ( void )	//Return the length of the output buffer
int ob_get_level ( void )	//Return the nesting level of the output buffering mechanism
array ob_get_status ([ bool $full_status = FALSE ] )	//Get status of output buffers
string ob_gzhandler ( string $buffer , int $mode )	//ob_start callback function to gzip output buffer
void ob_implicit_flush ([ int $flag = true ] )	//Turn implicit flush on/off
array ob_list_handlers ( void )	//List all output handlers in use
bool ob_start ([ callable $output_callback = NULL [, int $chunk_size = 0 [, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS ]]] )	//Turn on output buffering
string handler ( string $buffer [, int $phase ] )	//Turn on output buffering
bool output_add_rewrite_var ( string $name , string $value )	//Add URL rewriter values
bool output_reset_rewrite_vars ( void )	//Reset URL rewriter values

##Password Hashing
array password_get_info ( string $hash )	//Returns information about the given hash
string password_hash ( string $password , integer $algo [, array $options ] )	//Creates a password hash
boolean password_needs_rehash ( string $hash , integer $algo [, array $options ] )	//Checks if the given hash matches the given options
boolean password_verify ( string $password , string $hash )	//Verifies that a password matches a hash

#POSIX Regex
string ereg_replace ( string $pattern , string $replacement , string $string )	//Replace regular expression
int ereg ( string $pattern , string $string [, array &$regs ] )	//Regular expression match
string eregi_replace ( string $pattern , string $replacement , string $string )	//Replace regular expression case insensitive
int eregi ( string $pattern , string $string [, array &$regs ] )	//Case insensitive regular expression match
array split ( string $pattern , string $string [, int $limit = -1 ] )	//Split string into array by regular expression
array spliti ( string $pattern , string $string [, int $limit = -1 ] )	//Split string into array by regular expression case insensitive
string sql_regcase ( string $string )	//Make regular expression for case insensitive match

#Sessions
void session_abort ( void )	//Discard session array changes and finish session
int session_cache_expire ([ string $new_cache_expire ] )	//Return current cache expire
string session_cache_limiter ([ string $cache_limiter ] )	//Get and/or set the current cache limiter
bool session_decode ( string $data )	//Decodes session data from a session encoded string
bool session_destroy ( void )	//Destroys all data registered to a session
string session_encode ( void )	//Encodes the current session data as a session encoded string
array session_get_cookie_params ( void )	//Get the session cookie parameters
string session_id ([ string $id ] )	//Get and/or set the current session id
bool session_is_registered ( string $name )	//Find out whether a global variable is registered in a session
string session_module_name ([ string $module ] )	//Get and/or set the current session module
string session_name ([ string $name ] )	//Get and/or set the current session name
bool session_regenerate_id ([ bool $delete_old_session = false ] )	//Update the current session id with a newly generated one
void session_register_shutdown ( void )	//Session shutdown function
bool session_register ( mixed $name [, mixed $... ] )	//Register one or more global variables with the current session
void session_reset ( void )	//Re-initialize session array with original values
string session_save_path ([ string $path ] )	//Get and/or set the current session save path
void session_set_cookie_params ( int $lifetime [, string $path [, string $domain [, bool $secure = false [, bool $httponly = false ]]]] )	//Set the session cookie parameters
bool session_set_save_handler ( callable $open , callable $close , callable $read , callable $write , callable $destroy , callable $gc [, callable $create_sid ] )	//Sets user-level session storage functions
bool session_set_save_handler ( SessionHandlerInterface $sessionhandler [, bool $register_shutdown = true ] )	//Sets user-level session storage functions
bool session_start ( void )	//Start new or resume existing session
int session_status ( void )	//Returns the current session status
bool session_unregister ( string $name )	//Unregister a global variable from the current session
void session_unset ( void )	//Free all session variables
void session_write_close ( void )	//Write session data and end session

##SPL
array class_implements ( mixed $class [, bool $autoload = true ] )	//Return the interfaces which are implemented by the given class or interface
array class_parents ( mixed $class [, bool $autoload = true ] )	//Return the parent classes of the given class
array class_uses ( mixed $class [, bool $autoload = true ] )	//Return the traits used by the given class
int iterator_apply ( Traversable $iterator , callable $function [, array $args ] )	//Call a function for every element in an iterator
int iterator_count ( Traversable $iterator )	//Count the elements in an iterator
array iterator_to_array ( Traversable $iterator [, bool $use_keys = true ] )	//Copy the iterator into an array
void spl_autoload_call ( string $class_name )	//Try all registered __autoload() function to load the requested class
string spl_autoload_extensions ([ string $file_extensions ] )	//Register and return default file extensions for spl_autoload
array spl_autoload_functions ( void )	//Return all registered __autoload() functions
bool spl_autoload_register ([ callable $autoload_function [, bool $throw = true [, bool $prepend = false ]]] )	//Register given function as __autoload() implementation
bool spl_autoload_unregister ( mixed $autoload_function )	//Unregister given function as __autoload() implementation
void spl_autoload ( string $class_name [, string $file_extensions = spl_autoload_extensions() ] )	//Default implementation for __autoload()
array spl_classes ( void )	//Return available SPL classes
string spl_object_hash ( object $obj )	//Return hash id for given object

##stream
#void stream_bucket_append ( resource $brigade , resource $bucket )	//Append bucket to brigade
#object stream_bucket_make_writeable ( resource $brigade )	//Return a bucket object from the brigade for operating on
#object stream_bucket_new ( resource $stream , string $buffer )	//Create a new bucket for use on the current stream
#void stream_bucket_prepend ( resource $brigade , resource $bucket )	//Prepend bucket to brigade
#resource stream_context_create ([ array $options [, array $params ]] )	//Creates a stream context
#resource stream_context_get_default ([ array $options ] )	//Retrieve the default stream context
#array stream_context_get_options ( resource $stream_or_context )	//Retrieve options for a stream/wrapper/context
#array stream_context_get_params ( resource $stream_or_context )	//Retrieves parameters from a context
#resource stream_context_set_default ( array $options )	//Set the default stream context
#bool stream_context_set_option ( resource $stream_or_context , string $wrapper , string $option , mixed $value )	//Sets an option for a stream/wrapper/context
#bool stream_context_set_option ( resource $stream_or_context , array $options )	//Sets an option for a stream/wrapper/context
#bool stream_context_set_params ( resource $stream_or_context , array $params )	//Set parameters for a stream/wrapper/context
#int stream_copy_to_stream ( resource $source , resource $dest [, int $maxlength = -1 [, int $offset = 0 ]] )	//Copies data from one stream to another
#bool stream_encoding ( resource $stream [, string $encoding ] )	//Set character set for stream encoding
#resource stream_filter_append ( resource $stream , string $filtername [, int $read_write [, mixed $params ]] )	//Attach a filter to a stream
#resource stream_filter_prepend ( resource $stream , string $filtername [, int $read_write [, mixed $params ]] )	//Attach a filter to a stream
#bool stream_filter_register ( string $filtername , string $classname )	//Register a user defined stream filter
#bool stream_filter_remove ( resource $stream_filter )	//Remove a filter from a stream
#string stream_get_contents ( resource $handle [, int $maxlength = -1 [, int $offset = -1 ]] )	//Reads remainder of a stream into a string
#array stream_get_filters ( void )	//Retrieve list of registered filters
#string stream_get_line ( resource $handle , int $length [, string $ending ] )	//Gets line from stream resource up to a given delimiter
#array stream_get_meta_data ( resource $stream )	//Retrieves header/meta data from streams/file pointers
#array stream_get_transports ( void )	//Retrieve list of registered socket transports
#array stream_get_wrappers ( void )	//Retrieve list of registered streams
#bool stream_is_local ( mixed $stream_or_url )	//Checks if a stream is a local stream
#void stream_notification_callback ( int $notification_code , int $severity , string $message , int $message_code , int $bytes_transferred , int $bytes_max )	//A callback function for the notification context parameter
#string stream_resolve_include_path ( string $filename )	//Resolve filename against the include path
#int stream_select ( array &$read , array &$write , array &$except , int $tv_sec [, int $tv_usec = 0 ] )	//Runs the equivalent of the select() system call on the given arrays of streams with a timeout specified by tv_sec and tv_usec
#bool stream_set_blocking ( resource $stream , int $mode )	//Set blocking/non-blocking mode on a stream
#int stream_set_chunk_size ( resource $fp , int $chunk_size )	//Set the stream chunk size
#int stream_set_read_buffer ( resource $stream , int $buffer )	//Set read file buffering on the given stream
#bool stream_set_timeout ( resource $stream , int $seconds [, int $microseconds = 0 ] )	//Set timeout period on a stream
#int stream_set_write_buffer ( resource $stream , int $buffer )	//Sets write file buffering on the given stream
#resource stream_socket_accept ( resource $server_socket [, float $timeout = ini_get('default_socket_timeout') [, string &$peername ]] )	//Accept a connection on a socket created by stream_socket_server
#resource stream_socket_client ( string $remote_socket [, int &$errno [, string &$errstr [, float $timeout = ini_get('default_socket_timeout') [, int $flags = STREAM_CLIENT_CONNECT [, resource $context ]]]]] )	//Open Internet or Unix domain socket connection
#mixed stream_socket_enable_crypto ( resource $stream , bool $enable [, int $crypto_type [, resource $session_stream ]] )	//Turns encryption on/off on an already connected socket
#string stream_socket_get_name ( resource $handle , bool $want_peer )	//Retrieve the name of the local or remote sockets
#array stream_socket_pair ( int $domain , int $type , int $protocol )	//Creates a pair of connected, indistinguishable socket streams
#string stream_socket_recvfrom ( resource $socket , int $length [, int $flags = 0 [, string &$address ]] )	//Receives data from a socket, connected or not
#int stream_socket_sendto ( resource $socket , string $data [, int $flags = 0 [, string $address ]] )	//Sends a message to a socket, whether it is connected or not
#resource stream_socket_server ( string $local_socket [, int &$errno [, string &$errstr [, int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN [, resource $context ]]]] )	//Create an Internet or Unix domain server socket
#bool stream_socket_shutdown ( resource $stream , int $how )	//Shutdown a full-duplex connection
#bool stream_supports_lock ( resource $stream )	//Tells whether the stream supports locking.
#bool stream_wrapper_register ( string $protocol , string $classname [, int $flags = 0 ] )	//Register a URL wrapper implemented as a PHP class
#bool stream_wrapper_restore ( string $protocol )	//Restores a previously unregistered built-in wrapper
#bool stream_wrapper_unregister ( string $protocol )	//Unregister a URL wrapper

#Strings
string addcslashes ( string $str , string $charlist )	//Quote string with slashes in a C style
string addslashes ( string $str )	//Quote string with slashes
string bin2hex ( string $str )	//Convert binary data into hexadecimal representation
string chr ( int $ascii )	//Return a specific character
string chunk_split ( string $body [, int $chunklen = 76 [, string $end = '\r\n' ]] )	//Split a string into smaller chunks
string convert_cyr_string ( string $str , string $from , string $to )	//Convert from one Cyrillic character set to another
string convert_uudecode ( string $data )	//Decode a uuencoded string
string convert_uuencode ( string $data )	//Uuencode a string
mixed count_chars ( string $string [, int $mode = 0 ] )	//Return information about characters used in a string
int crc32 ( string $str )	//Calculates the crc32 polynomial of a string
string crypt ( string $str [, string $salt ] )	//One-way string hashing
void echo ( string $arg1 [, string $... ] )	//Output one or more strings
array explode ( string $delimiter , string $string [, int $limit ] )	//Split a string by string
int fprintf ( resource $handle , string $format [, mixed $args [, mixed $... ]] )	//Write a formatted string to a stream
array get_html_translation_table ([ int $table = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = 'UTF-8' ]]] )	//Returns the translation table used by htmlspecialchars and htmlentities
string hebrev ( string $hebrew_text [, int $max_chars_per_line = 0 ] )	//Convert logical Hebrew text to visual text
string hebrevc ( string $hebrew_text [, int $max_chars_per_line = 0 ] )	//Convert logical Hebrew text to visual text with newline conversion
string hex2bin ( string $data )	//Decodes a hexadecimally encoded binary string
string html_entity_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get('default_charset') ]] )	//Convert all HTML entities to their applicable characters
string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get('default_charset') [, bool $double_encode = true ]]] )	//Convert all applicable characters to HTML entities
string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )	//Convert special HTML entities back to characters
string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get('default_charset') [, bool $double_encode = true ]]] )	//Convert special characters to HTML entities
string implode ( string $glue , array $pieces )	//Join array elements with a string
string implode ( array $pieces )	//Join array elements with a string
string lcfirst ( string $str )	//Make a string's first character lowercase
int levenshtein ( string $str1 , string $str2 )	//Calculate Levenshtein distance between two strings
int levenshtein ( string $str1 , string $str2 , int $cost_ins , int $cost_rep , int $cost_del )	//Calculate Levenshtein distance between two strings
array localeconv ( void )	//Get numeric formatting information
string ltrim ( string $str [, string $character_mask ] )	//Strip whitespace (or other characters) from the beginning of a string
string md5_file ( string $filename [, bool $raw_output = false ] )	//Calculates the md5 hash of a given file
string md5 ( string $str [, bool $raw_output = false ] )	//Calculate the md5 hash of a string
string metaphone ( string $str [, int $phonemes = 0 ] )	//Calculate the metaphone key of a string
string money_format ( string $format , float $number )	//Formats a number as a currency string
string nl_langinfo ( int $item )	//Query language and locale information
string nl2br ( string $string [, bool $is_xhtml = true ] )	//Inserts HTML line breaks before all newlines in a string
string number_format ( float $number [, int $decimals = 0 ] )	//Format a number with grouped thousands
string number_format ( float $number , int $decimals = 0 , string $dec_point = '.' , string $thousands_sep = ',' )	//Format a number with grouped thousands
int ord ( string $string )	//Return ASCII value of character
void parse_str ( string $str [, array &$arr ] )	//Parses the string into variables
int print ( string $arg )	//Output a string
int printf ( string $format [, mixed $args [, mixed $... ]] )	//Output a formatted string
string quoted_printable_decode ( string $str )	//Convert a quoted-printable string to an 8 bit string
string quoted_printable_encode ( string $str )	//Convert a 8 bit string to a quoted-printable string
string quotemeta ( string $str )	//Quote meta characters
string rtrim ( string $str [, string $character_mask ] )	//Strip whitespace (or other characters) from the end of a string
string setlocale ( int $category , string $locale [, string $... ] )	//Set locale information
string setlocale ( int $category , array $locale )	//Set locale information
string sha1_file ( string $filename [, bool $raw_output = false ] )	//Calculate the sha1 hash of a file
string sha1 ( string $str [, bool $raw_output = false ] )	//Calculate the sha1 hash of a string
int similar_text ( string $first , string $second [, float &$percent ] )	//Calculate the similarity between two strings
string soundex ( string $str )	//Calculate the soundex key of a string
string sprintf ( string $format [, mixed $args [, mixed $... ]] )	//Return a formatted string
mixed sscanf ( string $str , string $format [, mixed &$... ] )	//Parses input from a string according to a format
array str_getcsv ( string $input [, string $delimiter = ',' [, string $enclosure = "'" [, string $escape = '\\' ]]] )	//Parse a CSV string into an array
mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )	//Case-insensitive version of str_replace.
string str_pad ( string $input , int $pad_length [, string $pad_string = ' ' [, int $pad_type = STR_PAD_RIGHT ]] )	//Pad a string to a certain length with another string
string str_repeat ( string $input , int $multiplier )	//Repeat a string
mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )	//Replace all occurrences of the search string with the replacement string
string str_rot13 ( string $str )	//Perform the rot13 transform on a string
string str_shuffle ( string $str )	//Randomly shuffles a string
array str_split ( string $string [, int $split_length = 1 ] )	//Convert a string to an array
mixed str_word_count ( string $string [, int $format = 0 [, string $charlist ]] )	//Return information about words used in a string
int strcasecmp ( string $str1 , string $str2 )	//Binary safe case-insensitive string comparison
int strcmp ( string $str1 , string $str2 )	//Binary safe string comparison
int strcoll ( string $str1 , string $str2 )	//Locale based string comparison
int strcspn ( string $str1 , string $str2 [, int $start [, int $length ]] )	//Find length of initial segment not matching mask
string strip_tags ( string $str [, string $allowable_tags ] )	//Strip HTML and PHP tags from a string
string stripcslashes ( string $str )	//Un-quote string quoted with addcslashes
mixed stripos ( string $haystack , string $needle [, int $offset = 0 ] )	//Find the position of the first occurrence of a case-insensitive substring in a string
string stripslashes ( string $str )	//Un-quotes a quoted string
string stristr ( string $haystack , mixed $needle [, bool $before_needle = false ] )	//Case-insensitive strstr
int strlen ( string $string )	//Get string length
int strnatcasecmp ( string $str1 , string $str2 )	//Case insensitive string comparisons using a 'natural order' algorithm
int strnatcmp ( string $str1 , string $str2 )	//String comparisons using a 'natural order' algorithm
int strncasecmp ( string $str1 , string $str2 , int $len )	//Binary safe case-insensitive string comparison of the first n characters
int strncmp ( string $str1 , string $str2 , int $len )	//Binary safe string comparison of the first n characters
string strpbrk ( string $haystack , string $char_list )	//Search a string for any of a set of characters
mixed strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )	//Find the position of the first occurrence of a substring in a string
string strrchr ( string $haystack , mixed $needle )	//Find the last occurrence of a character in a string
string strrev ( string $string )	//Reverse a string
int strripos ( string $haystack , string $needle [, int $offset = 0 ] )	//Find the position of the last occurrence of a case-insensitive substring in a string
int strrpos ( string $haystack , string $needle [, int $offset = 0 ] )	//Find the position of the last occurrence of a substring in a string
int strspn ( string $subject , string $mask [, int $start [, int $length ]] )	//Finds the length of the initial segment of a string consisting  entirely of characters contained within a given mask.
string strstr ( string $haystack , mixed $needle [, bool $before_needle = false ] )	//Find the first occurrence of a string
string strtok ( string $str , string $token )	//Tokenize string
string strtok ( string $token )	//Tokenize string
string strtolower ( string $string )	//Make a string lowercase
string strtoupper ( string $string )	//Make a string uppercase
string strtr ( string $str , string $from , string $to )	//Translate characters or replace substrings
string strtr ( string $str , array $replace_pairs )	//Translate characters or replace substrings
int substr_compare ( string $main_str , string $str , int $offset [, int $length [, bool $case_insensitivity = false ]] )	//Binary safe comparison of two strings from an offset, up to length characters
int substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )	//Count the number of substring occurrences
mixed substr_replace ( mixed $string , mixed $replacement , mixed $start [, mixed $length ] )	//Replace text within a portion of a string
string substr ( string $string , int $start [, int $length ] )	//Return part of a string
string trim ( string $str [, string $character_mask = ' \t\n\r\0\x0B' ] )	//Strip whitespace (or other characters) from the beginning and end of a string
string ucfirst ( string $str )	//Make a string's first character uppercase
string ucwords ( string $str )	//Uppercase the first character of each word in a string
int vfprintf ( resource $handle , string $format , array $args )	//Write a formatted string to a stream
int vprintf ( string $format , array $args )	//Output a formatted string
string vsprintf ( string $format , array $args )	//Return a formatted string
string wordwrap ( string $str [, int $width = 75 [, string $break = '\n' [, bool $cut = false ]]] )	//Wraps a string to a given number of characters

#URL
string base64_decode ( string $data [, bool $strict = false ] )	//Decodes data encoded with MIME base64
string base64_encode ( string $data )	//Encodes data with MIME base64
array get_headers ( string $url [, int $format = 0 ] )	//Fetches all the headers sent by the server in response to a HTTP request
array get_meta_tags ( string $filename [, bool $use_include_path = false ] )	//Extracts all meta tag content attributes from a file and returns an array
string http_build_query ( mixed $query_data [, string $numeric_prefix [, string $arg_separator [, int $enc_type = PHP_QUERY_RFC1738 ]]] )	//Generate URL-encoded query string
mixed parse_url ( string $url [, int $component = -1 ] )	//Parse a URL and return its components
string rawurldecode ( string $str )	//Decode URL-encoded strings
string rawurlencode ( string $str )	//URL-encode according to RFC 3986
string urldecode ( string $str )	//Decodes URL-encoded string
string urlencode ( string $str )	//URL-encodes string

###################################################################################################################

#PCRE
mixed preg_filter ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] )	//Perform a regular expression search and replace
array preg_grep ( string $pattern , array $input [, int $flags = 0 ] )	//Return array entries that match the pattern
int preg_last_error ( void )	//Returns the error code of the last PCRE regex execution
int preg_match_all ( string $pattern , string $subject [, array &$matches [, int $flags = PREG_PATTERN_ORDER [, int $offset = 0 ]]] )	//Perform a global regular expression match
int preg_match ( string $pattern , string $subject [, array &$matches [, int $flags = 0 [, int $offset = 0 ]]] )	//Perform a regular expression match
string preg_quote ( string $str [, string $delimiter = NULL ] )	//Quote regular expression characters
mixed preg_replace_callback ( mixed $pattern , callable $callback , mixed $subject [, int $limit = -1 [, int &$count ]] )	//Perform a regular expression search and replace using a callback
string handler ( array $matches )	//Perform a regular expression search and replace using a callback
mixed preg_replace ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] )	//Perform a regular expression search and replace
array preg_split ( string $pattern , string $subject [, int $limit = -1 [, int $flags = 0 ]] )	//Split string by a regular expression

#MySQL
int mysql_affected_rows ([ resource $link_identifier = NULL ] )	//Get number of affected rows in previous MySQL operation
string mysql_client_encoding ([ resource $link_identifier = NULL ] )	//Returns the name of the character set
bool mysql_close ([ resource $link_identifier = NULL ] )	//Close MySQL connection
resource mysql_connect ([ string $server = ini_get('mysql.default_host') [, string $username = ini_get('mysql.default_user') [, string $password = ini_get('mysql.default_password') [, bool $new_link = false [, int $client_flags = 0 ]]]]] )	//Open a connection to a MySQL Server
bool mysql_create_db ( string $database_name [, resource $link_identifier = NULL ] )	//Create a MySQL database
bool mysql_data_seek ( resource $result , int $row_number )	//Move internal result pointer
string mysql_db_name ( resource $result , int $row [, mixed $field = NULL ] )	//Retrieves database name from the call to mysql_list_dbs
resource mysql_db_query ( string $database , string $query [, resource $link_identifier = NULL ] )	//Selects a database and executes a query on it
bool mysql_drop_db ( string $database_name [, resource $link_identifier = NULL ] )	//Drop (delete) a MySQL database
int mysql_errno ([ resource $link_identifier = NULL ] )	//Returns the numerical value of the error message from previous MySQL operation
string mysql_error ([ resource $link_identifier = NULL ] )	//Returns the text of the error message from previous MySQL operation
string mysql_escape_string ( string $unescaped_string )	//Escapes a string for use in a mysql_query
array mysql_fetch_array ( resource $result [, int $result_type = MYSQL_BOTH ] )	//Fetch a result row as an associative array, a numeric array, or both
array mysql_fetch_assoc ( resource $result )	//Fetch a result row as an associative array
object mysql_fetch_field ( resource $result [, int $field_offset = 0 ] )	//Get column information from a result and return as an object
array mysql_fetch_lengths ( resource $result )	//Get the length of each output in a result
object mysql_fetch_object ( resource $result [, string $class_name [, array $params ]] )	//Fetch a result row as an object
array mysql_fetch_row ( resource $result )	//Get a result row as an enumerated array
string mysql_field_flags ( resource $result , int $field_offset )	//Get the flags associated with the specified field in a result
int mysql_field_len ( resource $result , int $field_offset )	//Returns the length of the specified field
string mysql_field_name ( resource $result , int $field_offset )	//Get the name of the specified field in a result
bool mysql_field_seek ( resource $result , int $field_offset )	//Set result pointer to a specified field offset
string mysql_field_table ( resource $result , int $field_offset )	//Get name of the table the specified field is in
string mysql_field_type ( resource $result , int $field_offset )	//Get the type of the specified field in a result
bool mysql_free_result ( resource $result )	//Free result memory
string mysql_get_client_info ( void )	//Get MySQL client info
string mysql_get_host_info ([ resource $link_identifier = NULL ] )	//Get MySQL host info
int mysql_get_proto_info ([ resource $link_identifier = NULL ] )	//Get MySQL protocol info
string mysql_get_server_info ([ resource $link_identifier = NULL ] )	//Get MySQL server info
string mysql_info ([ resource $link_identifier = NULL ] )	//Get information about the most recent query
int mysql_insert_id ([ resource $link_identifier = NULL ] )	//Get the ID generated in the last query
resource mysql_list_dbs ([ resource $link_identifier = NULL ] )	//List databases available on a MySQL server
resource mysql_list_fields ( string $database_name , string $table_name [, resource $link_identifier = NULL ] )	//List MySQL table fields
resource mysql_list_processes ([ resource $link_identifier = NULL ] )	//List MySQL processes
resource mysql_list_tables ( string $database [, resource $link_identifier = NULL ] )	//List tables in a MySQL database
int mysql_num_fields ( resource $result )	//Get number of fields in result
int mysql_num_rows ( resource $result )	//Get number of rows in result
resource mysql_pconnect ([ string $server = ini_get('mysql.default_host') [, string $username = ini_get('mysql.default_user') [, string $password = ini_get('mysql.default_password') [, int $client_flags = 0 ]]]] )	//Open a persistent connection to a MySQL server
bool mysql_ping ([ resource $link_identifier = NULL ] )	//Ping a server connection or reconnect if there is no connection
mixed mysql_query ( string $query [, resource $link_identifier = NULL ] )	//Send a MySQL query
string mysql_real_escape_string ( string $unescaped_string [, resource $link_identifier = NULL ] )	//Escapes special characters in a string for use in an SQL statement
string mysql_result ( resource $result , int $row [, mixed $field = 0 ] )	//Get result data
bool mysql_select_db ( string $database_name [, resource $link_identifier = NULL ] )	//Select a MySQL database
bool mysql_set_charset ( string $charset [, resource $link_identifier = NULL ] )	//Sets the client character set
string mysql_stat ([ resource $link_identifier = NULL ] )	//Get current system status
string mysql_tablename ( resource $result , int $i )	//Get table name of field
int mysql_thread_id ([ resource $link_identifier = NULL ] )	//Return the current thread ID
resource mysql_unbuffered_query ( string $query [, resource $link_identifier = NULL ] )	//Send an SQL query to MySQL without fetching and buffering the result rows.

##FTP
#bool ftp_alloc ( resource $ftp_stream , int $filesize [, string &$result ] )	//Allocates space for a file to be uploaded
#bool ftp_cdup ( resource $ftp_stream )	//Changes to the parent directory
#bool ftp_chdir ( resource $ftp_stream , string $directory )	//Changes the current directory on a FTP server
#int ftp_chmod ( resource $ftp_stream , int $mode , string $filename )	//Set permissions on a file via FTP
#bool ftp_close ( resource $ftp_stream )	//Closes an FTP connection
#resource ftp_connect ( string $host [, int $port = 21 [, int $timeout = 90 ]] )	//Opens an FTP connection
#bool ftp_delete ( resource $ftp_stream , string $path )	//Deletes a file on the FTP server
#bool ftp_exec ( resource $ftp_stream , string $command )	//Requests execution of a command on the FTP server
#bool ftp_fget ( resource $ftp_stream , resource $handle , string $remote_file , int $mode [, int $resumepos = 0 ] )	//Downloads a file from the FTP server and saves to an open file
#bool ftp_fput ( resource $ftp_stream , string $remote_file , resource $handle , int $mode [, int $startpos = 0 ] )	//Uploads from an open file to the FTP server
#mixed ftp_get_option ( resource $ftp_stream , int $option )	//Retrieves various runtime behaviours of the current FTP stream
#bool ftp_get ( resource $ftp_stream , string $local_file , string $remote_file , int $mode [, int $resumepos = 0 ] )	//Downloads a file from the FTP server
#bool ftp_login ( resource $ftp_stream , string $username , string $password )	//Logs in to an FTP connection
#int ftp_mdtm ( resource $ftp_stream , string $remote_file )	//Returns the last modified time of the given file
#string ftp_mkdir ( resource $ftp_stream , string $directory )	//Creates a directory
#int ftp_nb_continue ( resource $ftp_stream )	//Continues retrieving/sending a file (non-blocking)
#int ftp_nb_fget ( resource $ftp_stream , resource $handle , string $remote_file , int $mode [, int $resumepos = 0 ] )	//Retrieves a file from the FTP server and writes it to an open file (non-blocking)
#int ftp_nb_fput ( resource $ftp_stream , string $remote_file , resource $handle , int $mode [, int $startpos = 0 ] )	//Stores a file from an open file to the FTP server (non-blocking)
#int ftp_nb_get ( resource $ftp_stream , string $local_file , string $remote_file , int $mode [, int $resumepos = 0 ] )	//Retrieves a file from the FTP server and writes it to a local file (non-blocking)
#int ftp_nb_put ( resource $ftp_stream , string $remote_file , string $local_file , int $mode [, int $startpos = 0 ] )	//Stores a file on the FTP server (non-blocking)
#array ftp_nlist ( resource $ftp_stream , string $directory )	//Returns a list of files in the given directory
#bool ftp_pasv ( resource $ftp_stream , bool $pasv )	//Turns passive mode on or off
#bool ftp_put ( resource $ftp_stream , string $remote_file , string $local_file , int $mode [, int $startpos = 0 ] )	//Uploads a file to the FTP server
#string ftp_pwd ( resource $ftp_stream )	//Returns the current directory name
#array ftp_raw ( resource $ftp_stream , string $command )	//Sends an arbitrary command to an FTP server
#mixed ftp_rawlist ( resource $ftp_stream , string $directory [, bool $recursive = false ] )	//Returns a detailed list of files in the given directory
#bool ftp_rename ( resource $ftp_stream , string $oldname , string $newname )	//Renames a file or a directory on the FTP server
#bool ftp_rmdir ( resource $ftp_stream , string $directory )	//Removes a directory
#bool ftp_set_option ( resource $ftp_stream , int $option , mixed $value )	//Set miscellaneous runtime FTP options
#bool ftp_site ( resource $ftp_stream , string $command )	//Sends a SITE command to the server
#int ftp_size ( resource $ftp_stream , string $remote_file )	//Returns the size of the given file
#resource ftp_ssl_connect ( string $host [, int $port = 21 [, int $timeout = 90 ]] )	//Opens an Secure SSL-FTP connection
#string ftp_systype ( resource $ftp_stream )	//Returns the system type identifier of the remote FTP server

##libxml
#void libxml_clear_errors ( void )	//Clear libxml error buffer
#bool libxml_disable_entity_loader ([ bool $disable = true ] )	//Disable the ability to load external entities
#array libxml_get_errors ( void )	//Retrieve array of errors
#LibXMLError libxml_get_last_error ( void )	//Retrieve last error from libxml
#void libxml_set_external_entity_loader ( callable $resolver_function )	//Changes the default external entity loader
#void libxml_set_streams_context ( resource $streams_context )	//Set the streams context for the next libxml document load or write
#bool libxml_use_internal_errors ([ bool $use_errors = false ] )	//Disable libxml errors and allow user to fetch error information as needed

##SimpleXML
#SimpleXMLElement simplexml_import_dom ( DOMNode $node [, string $class_name = 'SimpleXMLElement' ] )	//Get a SimpleXMLElement object from a DOM node.
#SimpleXMLElement simplexml_load_file ( string $filename [, string $class_name = 'SimpleXMLElement' [, int $options = 0 [, string $ns = '' [, bool $is_prefix = false ]]]] )	//Interprets an XML file into an object
#SimpleXMLElement simplexml_load_string ( string $data [, string $class_name = 'SimpleXMLElement' [, int $options = 0 [, string $ns = '' [, bool $is_prefix = false ]]]] )	//Interprets a string of XML into an object

##XML Parser
#string utf8_decode ( string $data )	//Converts a string with ISO-8859-1 characters encoded with UTF-8 to single-byte ISO-8859-1
#string utf8_encode ( string $data )	//Encodes an ISO-8859-1 string to UTF-8
#string xml_error_string ( int $code )	//Get XML parser error string
#int xml_get_current_byte_index ( resource $parser )	//Get current byte index for an XML parser
#int xml_get_current_column_number ( resource $parser )	//Get current column number for an XML parser
#int xml_get_current_line_number ( resource $parser )	//Get current line number for an XML parser
#int xml_get_error_code ( resource $parser )	//Get XML parser error code
#int xml_parse_into_struct ( resource $parser , string $data , array &$values [, array &$index ] )	//Parse XML data into an array structure
#int xml_parse ( resource $parser , string $data [, bool $is_final = false ] )	//Start parsing an XML document
#resource xml_parser_create_ns ([ string $encoding [, string $separator = ':' ]] )	//Create an XML parser with namespace support
#resource xml_parser_create ([ string $encoding ] )	//Create an XML parser
#bool xml_parser_free ( resource $parser )	//Free an XML parser
#mixed xml_parser_get_option ( resource $parser , int $option )	//Get options from an XML parser
#bool xml_parser_set_option ( resource $parser , int $option , mixed $value )	//Set options in an XML parser
#bool xml_set_character_data_handler ( resource $parser , callable $handler )	//Set up character data handler
#handler ( resource $parser , string $data )	//Set up character data handler
#bool xml_set_default_handler ( resource $parser , callable $handler )	//Set up default handler
#handler ( resource $parser , string $data )	//Set up default handler
#bool xml_set_element_handler ( resource $parser , callable $start_element_handler , callable $end_element_handler )	//Set up start and end element handlers
#start_element_handler ( resource $parser , string $name , array $attribs )	//Set up start and end element handlers
#end_element_handler ( resource $parser , string $name )	//Set up start and end element handlers
#bool xml_set_end_namespace_decl_handler ( resource $parser , callable $handler )	//Set up end namespace declaration handler
#handler ( resource $parser , string $prefix )	//Set up end namespace declaration handler
#bool xml_set_external_entity_ref_handler ( resource $parser , callable $handler )	//Set up external entity reference handler
#handler ( resource $parser , string $open_entity_names , string $base , string $system_id , string $public_id )	//Set up external entity reference handler
#bool xml_set_notation_decl_handler ( resource $parser , callable $handler )	//Set up notation declaration handler
#handler ( resource $parser , string $notation_name , string $base , string $system_id , string $public_id )	//Set up notation declaration handler
#bool xml_set_object ( resource $parser , object &$object )	//Use XML Parser within an object
#bool xml_set_processing_instruction_handler ( resource $parser , callable $handler )	//Set up processing instruction (PI) handler
#handler ( resource $parser , string $target , string $data )	//Set up processing instruction (PI) handler
#bool xml_set_start_namespace_decl_handler ( resource $parser , callable $handler )	//Set up start namespace declaration handler
#handler ( resource $parser , string $prefix , string $uri )	//Set up start namespace declaration handler
#bool xml_set_unparsed_entity_decl_handler ( resource $parser , callable $handler )	//Set up unparsed entity declaration handler
#handler ( resource $parser , string $entity_name , string $base , string $system_id , string $public_id , string $notation_name )	//Set up unparsed entity declaration handler

##HTTP
#bool http_cache_etag ([ string $etag ] )	//Caching by ETag
#bool http_cache_last_modified ([ int $timestamp_or_expires ] )	//Caching by last modification
#string http_chunked_decode ( string $encoded )	//Decode chunked-encoded data
#string http_deflate ( string $data [, int $flags = 0 ] )	//Deflate data
#string http_inflate ( string $data )	//Inflate data
#string http_build_cookie ( array $cookie )	//Build cookie string
#string http_date ([ int $timestamp ] )	//Compose HTTP RFC compliant date
#resource http_get_request_body_stream ( void )	//Get request body as stream
#string http_get_request_body ( void )	//Get request body as string
#array http_get_request_headers ( void )	//Get request headers as array
#bool http_match_etag ( string $etag [, bool $for_range = false ] )	//Match ETag
#bool http_match_modified ([ int $timestamp = -1 [, bool $for_range = false ]] )	//Match last modification
#bool http_match_request_header ( string $header , string $value [, bool $match_case = false ] )	//Match any header
#int http_support ([ int $feature = 0 ] )	//Check built-in HTTP support
#string http_negotiate_charset ( array $supported [, array &$result ] )	//Negotiate client's preferred character set
#string http_negotiate_content_type ( array $supported [, array &$result ] )	//Negotiate client's preferred content type
#string http_negotiate_language ( array $supported [, array &$result ] )	//Negotiate client's preferred language
#string ob_deflatehandler ( string $data , int $mode )	//Deflate output handler
#string ob_etaghandler ( string $data , int $mode )	//ETag output handler
#string ob_inflatehandler ( string $data , int $mode )	//Inflate output handler
#object http_parse_cookie ( string $cookie [, int $flags [, array $allowed_extras ]] )	//Parse HTTP cookie
#array http_parse_headers ( string $header )	//Parse HTTP headers
#object http_parse_message ( string $message )	//Parse HTTP messages
#object http_parse_params ( string $param [, int $flags = HTTP_PARAMS_DEFAULT ] )	//Parse parameter list
#string http_persistent_handles_clean ([ string $ident ] )	//Clean up persistent handles
#object http_persistent_handles_count ( void )	//Stat persistent handles
#string http_persistent_handles_ident ([ string $ident ] )	//Get/set ident of persistent handles
#string http_get ( string $url [, array $options [, array &$info ]] )	//Perform GET request
#string http_head ( string $url [, array $options [, array &$info ]] )	//Perform HEAD request
#string http_post_data ( string $url , string $data [, array $options [, array &$info ]] )	//Perform POST request with pre-encoded data
#string http_post_fields ( string $url , array $data [, array $files [, array $options [, array &$info ]]] )	//Perform POST request with data to be encoded
#string http_put_data ( string $url , string $data [, array $options [, array &$info ]] )	//Perform PUT request with data
#string http_put_file ( string $url , string $file [, array $options [, array &$info ]] )	//Perform PUT request with file
#string http_put_stream ( string $url , resource $stream [, array $options [, array &$info ]] )	//Perform PUT request with stream
#string http_request_body_encode ( array $fields , array $files )	//Encode request body
#int http_request_method_exists ( mixed $method )	//Check whether request method exists
#string http_request_method_name ( int $method )	//Get request method name
#int http_request_method_register ( string $method )	//Register request method
#bool http_request_method_unregister ( mixed $method )	//Unregister request method
#string http_request ( int $method , string $url [, string $body [, array $options [, array &$info ]]] )	//Perform custom request
#bool http_redirect ([ string $url [, array $params [, bool $session = false [, int $status = 0 ]]]] )	//Issue HTTP redirect
#bool http_send_content_disposition ( string $filename [, bool $inline = false ] )	//Send Content-Disposition
#bool http_send_content_type ([ string $content_type = 'application/x-octetstream' ] )	//Send Content-Type
#bool http_send_data ( string $data )	//Send arbitrary data
#bool http_send_file ( string $file )	//Send file
#bool http_send_last_modified ([ int $timestamp = time() ] )	//Send Last-Modified
#bool http_send_status ( int $status )	//Send HTTP response status
#bool http_send_stream ( resource $stream )	//Send stream
#void http_throttle ( float $sec [, int $bytes = 40960 ] )	//HTTP throttling
#string http_build_str ( array $query [, string $prefix [, string $arg_separator = ini_get('arg_separator.output') ]] )	//Build query string
#string http_build_url ([ mixed $url [, mixed $parts [, int $flags = HTTP_URL_REPLACE [, array &$new_url ]]]] )	//Build a URL

##Zip
#void zip_close ( resource $zip )	//Close a ZIP file archive
#bool zip_entry_close ( resource $zip_entry )	//Close a directory entry
#int zip_entry_compressedsize ( resource $zip_entry )	//Retrieve the compressed size of a directory entry
#string zip_entry_compressionmethod ( resource $zip_entry )	//Retrieve the compression method of a directory entry
#int zip_entry_filesize ( resource $zip_entry )	//Retrieve the actual file size of a directory entry
#string zip_entry_name ( resource $zip_entry )	//Retrieve the name of a directory entry
#bool zip_entry_open ( resource $zip , resource $zip_entry [, string $mode ] )	//Open a directory entry for reading
#string zip_entry_read ( resource $zip_entry [, int $length = 1024 ] )	//Read from an open directory entry
#resource zip_open ( string $filename )	//Open a ZIP file archive
#resource zip_read ( resource $zip )	//Read next entry in a ZIP file archive

##GD
#array gd_info ( void )	//Retrieve information about the currently installed GD library
#array getimagesize ( string $filename [, array &$imageinfo ] )	//Get the size of an image
#array getimagesizefromstring ( string $imagedata [, array &$imageinfo ] )	//Get the size of an image from a string
#string image_type_to_extension ( int $imagetype [, bool $include_dot = TRUE ] )	//Get file extension for image type
#string image_type_to_mime_type ( int $imagetype )	//Get Mime-Type for image-type returned by getimagesize, exif_read_data, exif_thumbnail, exif_imagetype
#bool image2wbmp ( resource $image [, string $filename [, int $threshold ]] )	//Output image to browser or file
#resource imageaffine ( resource $image , array $affine [, array $clip ] )	//Return an image containing the affine transformed src image, using an optional clipping area
#array imageaffinematrixconcat ( array $m1 , array $m2 )	//Concat two matrices (as in doing many ops in one go)
#array imageaffinematrixget ( int $type [, mixed $options ] )	//Return an image containing the affine tramsformed src image, using an optional clipping area
#bool imagealphablending ( resource $image , bool $blendmode )	//Set the blending mode for an image
#bool imageantialias ( resource $image , bool $enabled )	//Should antialias functions be used or not
#bool imagearc ( resource $image , int $cx , int $cy , int $width , int $height , int $start , int $end , int $color )	//Draws an arc
#bool imagechar ( resource $image , int $font , int $x , int $y , string $c , int $color )	//Draw a character horizontally
#bool imagecharup ( resource $image , int $font , int $x , int $y , string $c , int $color )	//Draw a character vertically
#int imagecolorallocate ( resource $image , int $red , int $green , int $blue )	//Allocate a color for an image
#int imagecolorallocatealpha ( resource $image , int $red , int $green , int $blue , int $alpha )	//Allocate a color for an image
#int imagecolorat ( resource $image , int $x , int $y )	//Get the index of the color of a pixel
#int imagecolorclosest ( resource $image , int $red , int $green , int $blue )	//Get the index of the closest color to the specified color
#int imagecolorclosestalpha ( resource $image , int $red , int $green , int $blue , int $alpha )	//Get the index of the closest color to the specified color + alpha
#int imagecolorclosesthwb ( resource $image , int $red , int $green , int $blue )	//Get the index of the color which has the hue, white and blackness
#bool imagecolordeallocate ( resource $image , int $color )	//De-allocate a color for an image
#int imagecolorexact ( resource $image , int $red , int $green , int $blue )	//Get the index of the specified color
#int imagecolorexactalpha ( resource $image , int $red , int $green , int $blue , int $alpha )	//Get the index of the specified color + alpha
#bool imagecolormatch ( resource $image1 , resource $image2 )	//Makes the colors of the palette version of an image more closely match the true color version
#int imagecolorresolve ( resource $image , int $red , int $green , int $blue )	//Get the index of the specified color or its closest possible alternative
#int imagecolorresolvealpha ( resource $image , int $red , int $green , int $blue , int $alpha )	//Get the index of the specified color + alpha or its closest possible alternative
#void imagecolorset ( resource $image , int $index , int $red , int $green , int $blue [, int $alpha = 0 ] )	//Set the color for the specified palette index
#array imagecolorsforindex ( resource $image , int $index )	//Get the colors for an index
#int imagecolorstotal ( resource $image )	//Find out the number of colors in an image's palette
#int imagecolortransparent ( resource $image [, int $color ] )	//Define a color as transparent
#bool imageconvolution ( resource $image , array $matrix , float $div , float $offset )	//Apply a 3x3 convolution matrix, using coefficient and offset
#bool imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )	//Copy part of an image
#bool imagecopymerge ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h , int $pct )	//Copy and merge part of an image
#bool imagecopymergegray ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h , int $pct )	//Copy and merge part of an image with gray scale
#bool imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )	//Copy and resize part of an image with resampling
#bool imagecopyresized ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )	//Copy and resize part of an image
#resource imagecreate ( int $width , int $height )	//Create a new palette based image
#resource imagecreatefromgd2 ( string $filename )	//Create a new image from GD2 file or URL
#resource imagecreatefromgd2part ( string $filename , int $srcX , int $srcY , int $width , int $height )	//Create a new image from a given part of GD2 file or URL
#resource imagecreatefromgd ( string $filename )	//Create a new image from GD file or URL
#resource imagecreatefromgif ( string $filename )	//Create a new image from file or URL
#resource imagecreatefromjpeg ( string $filename )	//Create a new image from file or URL
#resource imagecreatefrompng ( string $filename )	//Create a new image from file or URL
#resource imagecreatefromstring ( string $image )	//Create a new image from the image stream in the string
#resource imagecreatefromwbmp ( string $filename )	//Create a new image from file or URL
#resource imagecreatefromwebp ( string $filename )	//Create a new image from file or URL
#resource imagecreatefromxbm ( string $filename )	//Create a new image from file or URL
#resource imagecreatefromxpm ( string $filename )	//Create a new image from file or URL
#resource imagecreatetruecolor ( int $width , int $height )	//Create a new true color image
#resource imagecrop ( resource $image , array $rect )	//Crop an image using the given coordinates and size, x, y, width and height
#resource imagecropauto ( resource $image [, int $mode = -1 [, float $threshold = .5 [, int $color = -1 ]]] )	//Crop an image automatically using one of the available modes
#bool imagedashedline ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )	//Draw a dashed line
#bool imagedestroy ( resource $image )	//Destroy an image
#bool imageellipse ( resource $image , int $cx , int $cy , int $width , int $height , int $color )	//Draw an ellipse
#bool imagefill ( resource $image , int $x , int $y , int $color )	//Flood fill
#bool imagefilledarc ( resource $image , int $cx , int $cy , int $width , int $height , int $start , int $end , int $color , int $style )	//Draw a partial arc and fill it
#bool imagefilledellipse ( resource $image , int $cx , int $cy , int $width , int $height , int $color )	//Draw a filled ellipse
#bool imagefilledpolygon ( resource $image , array $points , int $num_points , int $color )	//Draw a filled polygon
#bool imagefilledrectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )	//Draw a filled rectangle
#bool imagefilltoborder ( resource $image , int $x , int $y , int $border , int $color )	//Flood fill to specific color
#bool imagefilter ( resource $image , int $filtertype [, int $arg1 [, int $arg2 [, int $arg3 [, int $arg4 ]]]] )	//Applies a filter to an image
#bool imageflip ( resource $image , int $mode )	//Flips an image using a given mode
#int imagefontheight ( int $font )	//Get font height
#int imagefontwidth ( int $font )	//Get font width
#array imageftbbox ( float $size , float $angle , string $fontfile , string $text [, array $extrainfo ] )	//Give the bounding box of a text using fonts via freetype2
#array imagefttext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text [, array $extrainfo ] )	//Write text to the image using fonts using FreeType 2
#bool imagegammacorrect ( resource $image , float $inputgamma , float $outputgamma )	//Apply a gamma correction to a GD image
#bool imagegd2 ( resource $image [, string $filename [, int $chunk_size [, int $type = IMG_GD2_RAW ]]] )	//Output GD2 image to browser or file
#bool imagegd ( resource $image [, string $filename ] )	//Output GD image to browser or file
#bool imagegif ( resource $image [, string $filename ] )	//Output image to browser or file
#resource imagegrabscreen ( void )	//Captures the whole screen
#resource imagegrabwindow ( int $window_handle [, int $client_area = 0 ] )	//Captures a window
#int imageinterlace ( resource $image [, int $interlace = 0 ] )	//Enable or disable interlace
#bool imageistruecolor ( resource $image )	//Finds whether an image is a truecolor image
#bool imagejpeg ( resource $image [, string $filename [, int $quality ]] )	//Output image to browser or file
#bool imagelayereffect ( resource $image , int $effect )	//Set the alpha blending flag to use the bundled libgd layering effects
#bool imageline ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )	//Draw a line
#int imageloadfont ( string $file )	//Load a new font
#void imagepalettecopy ( resource $destination , resource $source )	//Copy the palette from one image to another
#bool imagepalettetotruecolor ( resource $src )	//Converts a palette based image to true color
#bool imagepng ( resource $image [, string $filename [, int $quality [, int $filters ]]] )	//Output a PNG image to either the browser or a file
#bool imagepolygon ( resource $image , array $points , int $num_points , int $color )	//Draws a polygon
#array imagepsbbox ( string $text , resource $font , int $size )	//Give the bounding box of a text rectangle using PostScript Type1 fonts
#array imagepsbbox ( string $text , resource $font , int $size , int $space , int $tightness , float $angle )	//Give the bounding box of a text rectangle using PostScript Type1 fonts
#bool imagepsencodefont ( resource $font_index , string $encodingfile )	//Change the character encoding vector of a font
#bool imagepsextendfont ( resource $font_index , float $extend )	//Extend or condense a font
#bool imagepsfreefont ( resource $font_index )	//Free memory used by a PostScript Type 1 font
#resource imagepsloadfont ( string $filename )	//Load a PostScript Type 1 font from file
#bool imagepsslantfont ( resource $font_index , float $slant )	//Slant a font
#array imagepstext ( resource $image , string $text , resource $font_index , int $size , int $foreground , int $background , int $x , int $y [, int $space = 0 [, int $tightness = 0 [, float $angle = 0.0 [, int $antialias_steps = 4 ]]]] )	//Draws a text over an image using PostScript Type1 fonts
#bool imagerectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )	//Draw a rectangle
#resource imagerotate ( resource $image , float $angle , int $bgd_color [, int $ignore_transparent = 0 ] )	//Rotate an image with a given angle
#bool imagesavealpha ( resource $image , bool $saveflag )	//Set the flag to save full alpha channel information (as opposed to single-color transparency) when saving PNG images
#resource imagescale ( resource $image , int $new_width [, int $new_height = -1 [, int $mode = IMG_BILINEAR_FIXED ]] )	//Scale an image using the given new width and height
#bool imagesetbrush ( resource $image , resource $brush )	//Set the brush image for line drawing
#bool imagesetinterpolation ( resource $image [, int $method = IMG_BILINEAR_FIXED ] )	//Set the interpolation method
#bool imagesetpixel ( resource $image , int $x , int $y , int $color )	//Set a single pixel
#bool imagesetstyle ( resource $image , array $style )	//Set the style for line drawing
#bool imagesetthickness ( resource $image , int $thickness )	//Set the thickness for line drawing
#bool imagesettile ( resource $image , resource $tile )	//Set the tile image for filling
#bool imagestring ( resource $image , int $font , int $x , int $y , string $string , int $color )	//Draw a string horizontally
#bool imagestringup ( resource $image , int $font , int $x , int $y , string $string , int $color )	//Draw a string vertically
#int imagesx ( resource $image )	//Get image width
#int imagesy ( resource $image )	//Get image height
#bool imagetruecolortopalette ( resource $image , bool $dither , int $ncolors )	//Convert a true color image to a palette image
#array imagettfbbox ( float $size , float $angle , string $fontfile , string $text )	//Give the bounding box of a text using TrueType fonts
#array imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )	//Write text to the image using TrueType fonts
#int imagetypes ( void )	//Return the image types supported by this PHP build
#bool imagewbmp ( resource $image [, string $filename [, int $foreground ]] )	//Output image to browser or file
#bool imagewebp ( resource $image , string $filename )	//Output an WebP image to browser or file
#bool imagexbm ( resource $image , string $filename [, int $foreground ] )	//Output an XBM image to browser or file
#mixed iptcembed ( string $iptcdata , string $jpeg_file_name [, int $spool ] )	//Embeds binary IPTC data into a JPEG image
#array iptcparse ( string $iptcblock )	//Parse a binary IPTC block into single tags.
#bool jpeg2wbmp ( string $jpegname , string $wbmpname , int $dest_height , int $dest_width , int $threshold )	//Convert JPEG image file to WBMP image file
#bool png2wbmp ( string $pngname , string $wbmpname , int $dest_height , int $dest_width , int $threshold )	//Convert PNG image file to WBMP image file
