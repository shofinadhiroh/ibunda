<?php

$this->load->view('component/profile');
$this->load->view('component/menu_submission');

?>
<div class="container">
<?php if($article): foreach($article as $info): ?>
		<div class="action">
			<div class="left" style="float: left;">
				<h2><a href=""><?php echo $info->title?></a></h2>
			</div>
			<div class="right" style="float: right">
				<div class="delete">
					<a href="<?php echo site_url('submission/remove_article/'.$info->id)?>">DELETE</a>
				</div>
				<div class="edit">
					<a href="<?php echo site_url('submission/edit/'.$info->id)?>">EDIT</a>
				</div>
			</div>
		</div>
<?php endforeach; endif;?> 
</div>