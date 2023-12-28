<!DOCTYPE html>
<html lang="fa"  dir="rtl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php if(@$page_name!=''){echo $page_name;}else{echo 'پنل';}?></title>
<!-- Bootstrap -->
<link href="<?= base_url();?>assets/panel/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url();?>assets/panel/css/bootstrap-rtl.css" rel="stylesheet">
<link href="<?= base_url();?>assets/panel/css/style.css" rel="stylesheet">
</head>
<body>
<?php include('assets/includes/nav.php');?>
<div class="row">
<?php include('assets/includes/sidebar.php');?>
</div>
<div class="col-lg-8 col-md-8 col-sm-8">
<?php echo $contents;?>
</div>
</div>
</body>
<script type="text/javascript" src="<?= base_url();?>assets/panel/js/persianumber.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/panel/js/persianumber.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="<?= base_url();?>assets/panel/js/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="<?= base_url();?>assets/panel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/includes/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('*').persiaNumber(); 
});
function openCity(evt, menuname) {
 // تعریف همه متغیر ها
 var i, submenu, alink;

// دریافت همه عناصر با کلاس tabcontent و مخفی کردن آنها
 submenu = document.getElementsByClassName("submenu");
 for (i = 0; i < submenu.length; i++) {
 submenu[i].style.display = "none";
 }

// دریافت همه عناصر با کلاس tablinks و پاک کردن کلاس active از آنها
 alink = document.getElementsByClassName("alink");
 for (i = 0; i < alink.length; i++) {
 alink[i].className = alink[i].className.replace(" active", "");
 }

// نمایش دادن تب فعلی و اضافه کردن یک کلاس "active" به لینکی که تب فعلی را باز کرده است
 document.getElementById(menuname).style.display = "block";
 evt.currentTarget.className += " active";
 }
</script>
<?= @$script;?>

</html>
