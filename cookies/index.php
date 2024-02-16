<?php
$cookies_name = "user";
$cookies_value = "Bahati";
setcookie($cookies_name, $cookies_value, time()+(60*60), '/');

if($_COOKIE[$cookies_name]) {
  echo $_COOKIE[$cookies_name];
}