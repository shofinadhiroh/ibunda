<?php if($article): ?>
<div class="container">

<!-- article -->
	<div class="det detail">
		<div id="det article">
			<h1><?php echo $article->title?></h1><br>
            <h5 style="color:#a8a8a8"><?php echo $article->topic?></h6><br>            
			<h6>by <?php echo $article->name?>&emsp;&emsp;6 days ago</h6><br>
			<img style="text-align: center;" src="<?php echo base_url()?>images/article_photo/<?php echo $article->picture?>">
			<img src="images/share.png" width="50px"><br><br>
			<p align="justify"><?php echo $article->content?></p>
			<br>
			<div class="author">
				<table>
					<tr>
						<td style="width: 670px;">PUBLISHED BY</td>
                        <td style="width: 300px;" rowspan="3"><img src="<?php echo base_url()?>images/profile_photo/<?php echo $article->profile_photo?>"></td>
                    </tr>
                    <tr>
						<td><h2><?php echo $article->name?></h2></td>
					</tr>
                    <tr>
						<td><p align="justify"><?php echo $article->bio?></p></td>
					</tr>               
				</table>
			</div>
            <?php endif;?>
		
		<h1>Comments</h1>
        <hr />
        <?php error_reporting(0); if($comment) : ?>
        	<?php foreach($comment as $comments) : ?>
        		<div class="well">
        			<h5><?php echo $comments['name']; ?> </h5>
                    <p><?php echo $comments['comment']; ?></p>
        		</div>
        	<?php endforeach; ?>
        <?php else : ?>
        	<p>No Comments To Display</p>
        <?php endif; ?>
        <h1>Add Comment</h1>
        <hr />
        <?php echo validation_errors(); ?>
        <?php echo form_open('detail_article/create/'.$article->id); ?>
        	<div class="form-group">
        		<label>Comment</label><br />
        		<textarea cols="136" rows="5" name="comment" class="form-control"></textarea>
        	</div>
        	<button class="btnsub" type="submit">Submit</button>
        </form>
        
        
        
		
		<!-- trend: fixed -->
		<!--
<div id="det fixedtrend">
			<div style="text-align:center;margin:20px"><h3>TRENDING</h3></div>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
			<img src="images/2.jpg" width="30%">
			<h3>Lorem ipsum dolor sit amet, consetectur adsipicing elit</h3><br>
		</div>
-->
	</div>

</div>
 