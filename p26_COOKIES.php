<?php
// Cookies :- cookie user ki general info store karti h and user ko identify krne ke kaam aati h! 
//            ise Browser me set kiya jaata h!

//sessions:- sessions user ka sensitive data store karta h like username, name, password etc.




// Syntax to set cookie

setcookie("category", " Books",time()+86400,"/");//86400 seconds k baad cookies expire ho jayegi

echo "<br/>The cookie is set";
?>