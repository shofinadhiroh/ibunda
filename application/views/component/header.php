<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>iBunda</title>
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <ul class="header">
			<li style="float:left;"><div class="logo"><a href="<?php echo site_url('home')?>"><img src="<?php echo base_url()?>images/logo.png"></a></div></li>
			<?php if($this->session->userdata('is_login')): ?>
            <li class="dropdown" style="float:right;">
				<a class="dropbtn" href="<?php echo site_url('profile')?>"><?php echo $this->session->userdata('name') ?></a>
				<div class="dropdown-content">
				  <a href="<?php echo site_url('profile')?>">Profile</a>
				  <a href="<?php echo site_url('home/logout')?>">Log Out</a></div>
			</li>
            <?php else: ?>
            <li class="dropdown" style="float:right;">
				<a href="<?php echo site_url('account')?>">Login</a>
			</li>
            <?php endif; ?>
            </ul>
    </div>
</header>   
