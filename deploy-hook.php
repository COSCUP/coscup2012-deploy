<?php
include_once("config.php");
include_once("deploy.php");

print ("= Updating Deploy Script =\n");
system ("git fetch origin");
system ("git checkout -q origin/master");
system ("git log -1");
print ("\n");
