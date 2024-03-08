<?php
$htaccess = "<IfModule mod_rewrite.c>\n
RewriteEngine On\n
RewriteBase /\n
RewriteRule ^index\.php$ - [L]\n
RewriteRule . /index.php [L]\n
</IfModule>";
file_put_contents('../.htaccess', $htaccess);