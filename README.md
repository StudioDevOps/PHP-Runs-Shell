<H1>This simple website can execute Shell Scripts</H1>

Clone this repo to a web server's <b>website root directory</b> which has PHP enabled

Make sure that the web server application recursively owns the "files" directory for the example to work

Example:
chown -R apache files/

If you are using something like AWS OpsWorks you will end up needing to change the mode to 664 for files in the "files" directory

Example:
chmod 664 files/*

You also might need to edit the index.php file so that the <b>.sh</b> file's directories are correct

Example:

if ($_GET['run']) {
  # This code will run if ?run=true is set.
  shell_exec(<b>'./test.sh'</b>);
}
if ($_GET['clear']) {
  # This code will run if ?clear=true is set.
  shell_exec('<b>./clear.sh'</b>);
}


<b>Note: without tweaking your selinux settings you will have to disable it for this to work</b>

Example (at your own risk):
  To Temporarily disable selinux:
    setenforce 0
