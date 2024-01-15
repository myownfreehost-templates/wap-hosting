<?php
$id = md5(rand(6000,PHP_INT_MAX));
?>
<?
include('geturl.php');
?>
<?php
session_start();

if(isset($_POST['lang']) && !empty($_POST['lang'])){
 $_SESSION['lang'] = $_POST['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_POST['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

if(isset($_SESSION['lang'])){
 include "lang_".$_SESSION['lang'].".php";
}else{
 include "lang_ka.php";
}
?>
<?php
$domain = $_GET['domain'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?= _TITLE ?></title>
<script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
</script>
<script src="jquery-1.9.1.js"></script>
<script>
            $(function() {
 
                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#save_uname').val(localStorage.usrname);
                    $('#save_passwd').val(localStorage.pass);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#save_uname').val('');
                    $('#save_passwd').val('');
                }
 
                $('#remember_me').click(function() {
 
                    if ($('#remember_me').is(':checked')) {
                        localStorage.usrname = $('#save_uname').val();
                        localStorage.pass = $('#save_passwd').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.usrname = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
            });
 
        </script>
<script>
function ShowUsername() {
  var x = document.getElementById("save_uname");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function ShowPassword() {
  var x = document.getElementById("save_passwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function ShowRegPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <meta charset="utf-8">
    <meta name="keywords" content="free, premium, hosting, domain, subdomain, apache, ftp, web, php, HTML, CSS, JavaScript, jQuery, json, ajax, site">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"> 
</head>
<body>
  <h2><b><img src="/hosting.svg"></img>&nbsp;<?echo $yourdomain;?></b></h2>
<form method='POST' action='' id='form_lang'> 
<span><img src="/lang.svg"></img>&nbsp;<select onchange='changeLang();' name="lang">
<option <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ka'){ echo 'selected=selected'; } else echo ''; ?> value="ka">GE | <?= _GE ?></option>
<option <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo 'selected=selected'; } else echo ''; ?> value="en">EN | <?= _EN ?></option>
</select></span>
</form><br>
  <img src="/info.svg"></img> <b><small><?= _WHAT_IS_THIS ?></small></b>
  <hr>
  <p><?= _ABOUT_THIS_WEBSITE ?></p>
<p>
<form action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post" name="login" >
<img src="/login.svg"></img> <b><small><?= _SITE_MANAGEMENT ?></small></b>
     <p><img src="cpanel.svg" style="max-width:135px;height:auto;"></p>
<p><span><img src="/user.svg"></img></span>&nbsp;<input placeholder="<?= _USERNAME ?>" name="uname" type="password" alt="username" id="save_uname" oninvalid="this.setCustomValidity('Enter username')" oninput="setCustomValidity('')" required>
    <input type="checkbox" id="check-outlined-username" autocomplete="off" onclick="ShowUsername()"> <label for="check-outlined-username"><img src="/show.svg"></img><?= _SHOW ?></label></span>
</p><span><img src="/pass.svg"></img></span>&nbsp;<input placeholder="<?= _PASSWORD ?>" type="password" name="passwd" alt="password" id="save_passwd" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" required>
    <input type="checkbox" id="check-outlined-paasword" autocomplete="off" onclick="ShowPassword()"> <label for="check-outlined-paasword"><img src="/show.svg"></img><?= _SHOW ?></label></span>
</p>
<p><input type="submit" name="Submit" value="<?= _SIGNIN ?>"/> <input type="checkbox" id="remember_me"><label for="remember_me"><?= _REMEMBER ?></label>
</p>
<p><a href="http://cpanel.<?echo $yourdomain;?>/lostpassword.php"><?= _LOST_YOUR_PASSWORD ?></a></p>
</form></p><p>
<form method=post action="http://order.<?echo $yourdomain;?>/register2.php">
  <img src="/registration.svg"></img> <b><small><?= _REGISTRATION ?></small></b><br>
<p><img src="register-now.svg" style="max-width:135px;height:auto;"></p>
<span><img src="/url.svg"></img></span>&nbsp;<input placeholder="<?= _SUBDOMAIN ?>" type=text name=username value="<?echo $domain;?>" pattern="[a-z0-9]{4,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter subdomain')" oninput="setCustomValidity('')" required>
    <span>.<?echo $yourdomain;?></span>
<p><img src="/pass.svg"></img>&nbsp;<input placeholder="<?= _PASSWORD ?>" type=password id="password" name=password pattern=".{6,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" required>
<input type="checkbox" id="check-outlined-paasword-reg" autocomplete="off" onclick="ShowRegPassword()"> <label for="check-outlined-paasword-reg"><img src="/show.svg"></img><?= _SHOW ?></label></span></p>	
<p><img src="/email.svg"></img>&nbsp;<input placeholder="<?= _EMAIL ?>" type=text name=email pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" oninvalid="this.setCustomValidity('Enter e-mail address')" oninput="setCustomValidity('')" required></p>
<input type=hidden name=id value="<?PHP echo $id; ?>">
<p><img src="http://order.<? echo $yourdomain;?>/image.php?id=<?PHP echo $id; ?>"><br>
    <span><img src="/code.svg"></img></span>&nbsp;<input placeholder="<?= _CODE ?>" type=text pattern=".{5,5}" name=number oninvalid="this.setCustomValidity('Enter security code')" oninput="setCustomValidity('')" required>
</p>
<p><button type="submit"><?= _SIGNUP ?></button></p>
</form></p><br>
<br>
<small><span> &copy; <?php $year = date("Y"); echo $year; ?> <?echo $yourdomain;?></span></small>
<?php include 'stat.php'; ?>
</body>
</html>

