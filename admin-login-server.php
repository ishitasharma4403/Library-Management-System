<?php
$login_email= $_GET['login_email'];
$login_pas= $_GET['login_pas'];
 if($login_email==null || $login_pas==null)
 {
    $emailmsg="";
    $pasmsg="";

    
    if($login_email==null){
        $emailmsg="Email Empty";}
    
    if($login_pas==null){
        $pasmsg="Password Empty";}
   
    header("Location:ind.php?ademailmsg=$emailmsg&adpasmsg=$pasmsg");

 }
 else if($login_email!=null&&$login_pas!=null)
{
 echo $login_email;
}
?>
 