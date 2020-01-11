<?php 
  function usernameValidity($username) {
    return preg_match('/^[a-z0-9_]{5,12}$/',$username) ;
  }
  function passwordValidity($password) {
    return preg_match('/^[0-9]{1}[A-Z]{5}[~!@#$%^&*()]{1}$/',$password) ;
  }

  $username = "asdasdasd";
  if (usernameValidity($username)) {
    echo $username." : Username Is Valid" ;
    //return true;
  } else {
    echo $username." : Username Is Invalid" ;
    //return false;
  }
  echo "<br>";

  $password = "1WORLD!";
  if (passwordValidity($password)) {
    echo $password." : Password Is Valid" ;
    //return true;
  } else {
    echo $password." : Password Is Invalid" ;
    //return false;
  }
?>