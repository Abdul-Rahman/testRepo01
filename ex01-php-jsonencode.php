<?php
  $enc =  json_encode(array("message" => "hello you"));
  echo $enc. "<BR>";
  $dec = json_decode('{"message":"hello you"}');
  //echo $dec. "<BR>";
  // error: Object of class stdClass could not be converted to string
  var_dump($dec);
?>