<!--articles-->

		<center><h1 style="color:#f43547;"><img src="images/popx.png" width="20">  Popular Articles of the Week  <img src="images/popx.png" width="20"></h1></center><br>

		<div class="container">
        <?php if($article): foreach($article as $info): ?>

			<div class="home">
                <div class="action">

				<div class="top">

					<div class="top_left">

						<br>

						<center><img src="<?php echo base_url()?>images/article_photo/<?php echo $info->picture?>"><center>

					</div>

					<div class="top_right">

						<h1><?php echo $info->title?></h1>

						<h5 style="color:#9b9293">by <?php echo $info->name?></h5><br>

						<p><?php echo word_limiter($info->content, 30)?></p><br>

						<p><a href="<?php echo site_url('detail_article/detail/'.$info->id) ?>" style="text-decoration:none">Read more...</a></p><br>

					</div>

				</div>

			 </div>
            </div>
        <?php endforeach; endif;?> 
		</div>

		<br>