
    
    <div class="rcorners2" align="center">
    <?php echo form_open()?>
	<?php if ($this->session->flashdata('failed')): ?>
                            <p class="alert alert-danger"><?php echo $this->session->flashdata('failed')?></p>
                        <?php endif;?>
                        <?php if (validation_errors()): ?>
                            <ul class="alert alert-danger">
                                <?php echo validation_errors('','')?>
                            </ul>
                        <?php endif;?>
			
			<h1>Sign In</h1><br><br>
			<form>
				<input type="text" class="signform" name="email" placeholder="Email"><br><br>
				<input type="password" class="signform" name="password" placeholder="Password"><br><br>
				<p style="font-size:12pt;">
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<a href="<?php echo site_url('account/showFPass')?>" style="color:black;">Forgot password?</a>
				</p><br><br>
				<input type="submit" class="btn-sign" name="login" value="Login"><br><br>
				Don't have an account? &emsp;<a class="btn-alt" href="<?php echo site_url('account/signup')?>">Sign Up</a><br>
			</form>
    <?php echo form_close()?>
	</div>