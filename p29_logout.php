<?php
//Logout hone k liye hum session ko destroy kar denge...

//**session destroy karne k liye hum sabse pehle...
//                                            1.session vaiable ko unset karein
//                                            2.session destroy kre    


session_start();
session_unset();
session_destroy();
echo "<br/>You have been logged-out !"
?>