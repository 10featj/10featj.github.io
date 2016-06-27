<?php

function username($email){
  $username = strtok($email, '@');
  return $username;}

?>
