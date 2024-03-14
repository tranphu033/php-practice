<?php
namespace myArea;

function myValue(){
  return __NAMESPACE__;
}
function myfunc(){
  return __FUNCTION__;
}
echo myValue()."<br/>";
echo myfunc();
?>
