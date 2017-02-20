<H1>This simple website can execute Shell Scripts</H1>

Clone this repo to a web server's <b>website root directory</b> which has PHP enabled

Make sure that the web server application recursively owns the "files" directory for the example to work

Example:
chown -R apache files/

<b>Note: without tweaking your selinux settings you will have to disable it for this to work</b>

Example (at your own risk):
  To Temporarily disable selinux:
    setenforce 0




