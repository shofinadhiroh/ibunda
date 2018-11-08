 
 <?php if($user): ?>
    	<div class="container">
    		<div class="profile">
    			<div class="left">
    				<img src="<?php echo base_url()?>images/profile_photo/<?php echo $this->session->userdata('profile_photo') ?>">
    			</div>
	           <div class="right">
    				<h1><?php echo $this->session->userdata('name') ?></h1>
    				<h3>Jakarta, Indonesia</h3>
    				<h3>Bio: <?php echo $this->session->userdata('bio') ?></h3>
    			</div>
    		</div>
        </div>   
 <?php endif;?>
         
