<?php
$form_open=form_open('auth/authUser');
$username=form_input(array('name'=>'username','placeholder'=>'نام کاربری'));
$password=form_password(array('name'=>'password','placeholder'=>'رمز عبور'));
$btnlogin=form_button(array('name'=>'login','value'=>'login','type'=>'submit','content'=>'ورود'));
$form_close=form_close();

?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>ورود</title>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="<?= base_url();?>assets/login/css/style.css">
</head>

<body> 
<div class="pen-title">
<!-- <span>خودکار <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> توسط <a href='http://www.mellatweb.com/'>ملت وب</a></span> -->
</div>
<div class="module form-module">
   <div class="toggle"><i class="fa fa-times "></i>
  </div> 
  <div class="form">
    <h2>ورود به حساب خود</h2>
    <?= $form_open;?>
    <?= $username;?>
    <?= $password;?>
     <?= $btnlogin;?>
    <?= $form_close;?>
  </div>
  <?php if (@$msg_login!=''){ echo "<span style='color:red'>".$msg_login."</span>";}?>

</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="<?= base_url();?>assets/login/js/index.js"></script>
</body>
</html>
