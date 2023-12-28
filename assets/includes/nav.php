<nav class="navbar navbar-default" style="display:none;">
  <div class="container-fluid">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-top" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>" style="color:#fff;">پنل مدیریت</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="menu-top">
      <ul class="nav navbar-nav">
		
        <li class="dropdown" > 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
						<i class="glyphicon glyphicon-file"> </i>مدیریت تیکت ها
						<span class="caret"></span>
					</a>
				
					<ul class="dropdown-menu">
			 			<li> <a href="<?= base_url();?>ticket/new_ticket"> ارسال تیکت </a> </li>
			 			<li> <a href="<?= base_url();?>/ticket/list_ticket"> لیست تیکت ها</a> </li>
					</ul>
					<?php if($this->session->userdata('role')=='admin'){?>
					<ul class="dropdown-menu">
			 			<li> <a href="<?=base_url();?>admin/all_tickets"> تمام تیکت ها</a> </li>
					</ul>
					<?php } ?>
				</li>
        <?php if($this->session->userdata('role')=='admin'){?>
        <li class="dropdown" > 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
						<i class="glyphicon glyphicon-file"> </i>مدیریت دپارتمان ها
						<span class="caret"></span>
					</a>
				
					<ul class="dropdown-menu">
			 			<li> <a href="<?= base_url();?>admin/create_dep"> دپارتمان جدید</a> </li>
			 			<li> <a href="<?= base_url();?>admin/list_dep">لیست دپارتمان ها</a> </li>
					</ul>
				
				</li>
        <li class="dropdown" > 
					<a href="<?= base_url();?>/admin/list_users" > 
						<i class="glyphicon glyphicon-file"> </i>مدیریت کاربران
					</a>
		</li>
				<?php } ?>
				<?php if($this->session->userdata('role')=='sup'){?>
					<li class="dropdown" > 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
						<i class="glyphicon glyphicon-file"> </i>پاسخگویی تیکت ها
						<span class="caret"></span>
					</a>
				
					<ul class="dropdown-menu">
			 			<li> <a href="<?= base_url();?>sup/read_ticket"> تیکت های پاسخ داده شده</a> </li>
			 			<li> <a href="<?= base_url();?>sup/unread_ticket">تیکت های پاسخ داده نشده</a> </li>
					</ul>
				
				</li>

				
				<?php } ?>
		<li class="dropdown" > 
			<a  class="name-prfile"> <?php echo @$this->session->userdata('profile_name');?></a>
			<a href="<?= base_url();?>users/logout" class="profile-icon"> <i class="glyphicon glyphicon-off"> </i> </a>
		    <a href="<?= base_url();?>users/profile" class="profile-icon"> <i class="glyphicon glyphicon-edit"> </i> </a> 
		</li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
    
  

  </div><!-- /.container-fluid -->
</nav>
