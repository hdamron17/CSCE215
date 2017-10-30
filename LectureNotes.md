Lecture Notes - CSCE 215 UNIX/Linux Fundamentals 8:30 - 9:20 a.m.
=================================================================

## 25 Oct. 2017
* On paper

## 30 Oct. 2017
* To copy from remote machine: ``scp -P222 hdamron@L-1D39-18.cse.sc.edu:[remote file] [local destination]``
* ``>`` rewrites destination; ``>>`` appends to destination file (creates if exists)
* Unix System Structure
 * user -> shell and utilities -> kernel -> hardware
* Shell
 * User interface to operating system
 * REPL
 * Examples
  * sh - Bourne shell / POSIX shell
  * csh - C shell
  * tcsh - Enhanced C shell
  * ksh - Korn shell
  * bash - Borne Again Shell (Free ksh clone)
 * Waits for user input and parses input
 * (CSCE 510 is shell creation)
* Shell script
 * File containing shell commands which is labeled executable
* Shell commands
 * Simple command: sequence of non-blank arguments separated by blanks or tabs
  * Arg 0 is name of command, others are parameters to that command
* Linux heirarchy
 * / - root
 * /bin/ - executables
 * /acct/ - user accounts (on lab machines)
* Prompt symbol (in bash)
 * $ regular user
 * # super user
* Types of Arguments
 * Options/Flags
  * convention -X or --longname (where X is single char shortname)
* Man page
 * man [command]
* Users and Groups
 * Each user belongs to main group and can have other groups
 * Each file has separate r,w,x permissions for specific user,group,everyone
* Filename
 * Relative path: path relative to current directory
 * Absolute path: path from root (starts with /)
* Working directory: where process is currently located
* Mounting file systems:
 * In Linux lab, home directories are mounted on /acct/ (rather than usual /home/)
* ``cat`` outputs file contents to stdin (can be rerouted to file)
 * ``-v`` displays hidden characters
* Common utilities
 * ``pwd`` print working directory
 * ``ed``, ``vi``, ``emacs``, ``nano`` - text editors
 * ``wc`` counts patterns
* Directory permissions
 * read: can access
 * write: can create inside
 * execute: can cd into
* ``chmod`` number scheme
 * For r-w-x, binary number (i.e. read, !write, execute = 101 = 5)
* Tree walking
 * possibility: ``ls -l -R /``
* ``find`` command makes tree walking easier
 * ``find [location] [patterns]``
  * ``-name "{pattern}"`` searches by file name
  * others are:
   * ``perm [num]`` by permissions
  * actions come after patterns:
   * ``-print`` default
   * ``-exec [command] [args] \;`` (to use filename from find use {})


## 1 Nov, 2017
