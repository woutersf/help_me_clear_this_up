#One of my drupal sites was hacked.

I had forgotten to update it to the latest core, but it was interesting to see what the 'hacker' installed anyway.
This is what the hacker installed in the drupal root.

## files
* Y8QRtVMn.php (webshell)
* browser.php (I have no idea)
* common.php (I have no idea)
* content.php (I have no idea)
* en.php (I have no idea)
* forum.php
* home.php
* index.php (The drupal ddefault index.php with some lines inserted in the top.)
* info.php
* lib.php
* main.php
* message.php
* mirror.php
* msg.php

All of these files are obfuscated.
The other php files are drupal update, xmlrpc and cron.php, those are unaltered.

## When rendered in the index.php

the behavior was like so:
At first you see the site as usual, then javascript kicks in (this php seems to render en|decodeURI encoded javascript).

## what else
It seems this renders your webserver as a spam email relay too.
