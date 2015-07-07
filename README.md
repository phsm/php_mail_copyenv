# Sendmail wrapper for PHP webhosting

Idea has been got from this page: http://wiki.jarfil.net/Php_mail_copyenv#Simple_wrapper

This wrappers intended to add custom headers to outgoing mail from the PHP webhosting.
It adds following headers:
* X-PHP-Originating-IP with the IP-address of host which has called sending script
* X-PHP-Originating-Query with the full query string

## Installation
1. Put sendmail_wrapper and set_php_headers.php files to some directory, e.g. /usr/local/bin.
2. Change the following directives in your php.ini file:
```
sendmail_path = /usr/local/bin/sendmail_wrapper
auto_prepend_file = /usr/local/bin/set_php_headers.php
```

## Tested on
* CentOS 6, Apache 2.2.15, PHP 5.3.3 (mod_php)

## Todo
* Passing HTTP_HOST, REQUEST_URI to the sendmail wrapper script through environment variables is potentially insecure because user (or malware script) can change it after it has been set by set_php_headers.php but before sendmail_wrapper runs
