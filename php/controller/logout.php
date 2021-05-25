<?php
session_start();
session_unset();
session_destroy();
header("Refresh:00; url=../../index.php");
