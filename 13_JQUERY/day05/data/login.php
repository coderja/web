<?php
require("user.controller.php");
if(login()) echo "true";
else echo "false";