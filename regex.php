<?php

//username
function is_username($username) {
  return preg_match('/^[a-z]{5,9}$/',$username) ;
}

if (is_username("itaharyan")) {
 echo "Username True" ;
} else {
 echo "Username False" ;
}

echo "<br><br>";

//password

function is_password($password) {
  return preg_match('/[a-z][A-Z]{1,}[0-9]{1,}[_@#$%!]{1,}/',$password) ;
}

if (is_password ("itaHAR1@a"))  {
 echo "Password True" ;
} else {
 echo "Password False" ;
}

?>
