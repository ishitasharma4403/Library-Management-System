<?php
$ademailmsg="";
$adpasmsg="";
$emailmsg="";
$pasmsg="";
$msg="";
 
if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
}
if(!empty($_REQUEST['pasmsg'])){
    $pasmsg=$_REQUEST['pasmsg'];
}
if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
}
if(!empty($_REQUEST['adpasmsg'])){
    $adpasmsg=$_REQUEST['adpasmsg'];
}
if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Website</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet"  href="style.css">
   
</head>
<body>
    <div class="container login-container">
    <div class="row"><h4><?php echo $msg ?></h4></div>
                <div class="row">
                    <div class="col-md-6 login-form-1">
                        <h3>Student Login</h3>
                        <form action="login-server.php" method="get">
                         <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email *" name="login_email" value="" />
                            </div>
                            <Label style="color:red">*<?php echo $emailmsg?></Label>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" name="login_pas" value="" />
                            </div>
                            <Label style="color:red">*<?php echo $pasmsg?></Label>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                            <div class="form-group">
                                <a href="#" class="ForgetPwd">Forget Password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 login-form-2">
                        <h3>Admin Login</h3>
                        <form action="admin-login-server.php" method="get">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email *" name="login_email" value="" />
                            </div>
                            <Label style="color:red">*<?php echo $ademailmsg ?></Label>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" name="login_pas" value="" />
                            </div>                       
                            <Label style="color:red">*<?php echo $adpasmsg ?></Label>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                            <div class="form-group">
    
                                <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
</body>
</html>
