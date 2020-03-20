<?php

session_start();
session_destroy();
header("Location: /nisc/index.html");
?>