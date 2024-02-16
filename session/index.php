<?php
session_start();

$_SESSION["name"] = "Bahati";

print_r($_SESSION);

session_unset();
session_destroy();