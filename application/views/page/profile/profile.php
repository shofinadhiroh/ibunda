<?php

$this->load->view('component/profile');
$this->load->view('component/menu_profile');

?>
	
	<div class="container">

<?php if($user): ?>
		<div class="profile_detail">
			<table>
				<tr>
					<td>Name</td>
					<td>: <?php echo $this->session->userdata('name') ?></td>
				</tr>
				<tr>
					<td>Location</td>
					<td>: Jakarta, Indonesia</td>
				</tr>
				<tr>
					<td>Member Since</td>
					<td>: <?php echo $this->session->userdata('member_since') ?></td>
				</tr>
				<tr>
					<td>Total Post</td>
					<td>: 2</td>
				</tr>
			</table>
		</div>
    <?php endif;?>  
    
    </div>

	