<?php
session_start();
if(isset($_SESSION['username'])){
echo " Hello ".$_SESSION['username'];

echo "<br/> Your favourite category is ".$_SESSION['FavCat'];
}
else{
    echo "Continue to login";
}

?>