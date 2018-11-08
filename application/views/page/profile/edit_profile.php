<?php echo form_open()?>
    		    <input type="text" name="name" placeholder="Nama Lengkap" value="<?php echo $this->session->userdata('name') ?>" /><br />
                <input type="text" name="email" placeholder="Email" value="<?php echo $this->session->userdata('email') ?>" /><br />
                <input type="text" name="bio" placeholder="Bio" value="<?php echo $this->session->userdata('bio') ?>" /><br />
                <input type="password" name="password" placeholder="Password" /><br />
                <input type="submit" name="register_submit" value="Sign Up" />
	<?php echo form_close()?>