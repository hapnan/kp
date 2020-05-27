<!-- Including models -->


<!-- Filling Form Register -->
<div class="card " style="width:10cm; margin:auto; margin-bottom:60px; top:25px"  >

    <h5 class="card-header unique-color white-text text-center py-4 ">
        <strong>Register</strong>
    </h5>
    
    <!--Card content-->
    <div class="card align-items-center">

        <!-- Form -->
        <form method="post" action="<?= base_url('register'); ?>" class="text-center " style="color: #757575;" >
			
			<!-- Nama -->
			<div class="md-form">
				<input name="nama" type="text" id="materialContactFormName" class="form-control" aria-describedby="materialContactFormNameHelpBlock" value="<?= set_value('nama');?>">
                <label for="materialContactFormName">Nama Lengkap</label>
                <?= form_error('nama', '<small class="red-text">','</small>'); ?>
                
            </div>
            
            <!-- Username -->
            <div class="md-form">
				<input name="username" type="text" id="materialRegisterUsername" class="form-control" aria-describedby="materialRegisterUsernameHelpBlock" value="<?= set_value('username');?>">
                <label for="materialRegisterUsername">Usename</label>
                <?= form_error('username', '<small class="red-text">','</small>'); ?>
                
            </div>

            <!-- E-Mail -->
            <div class="md-form">
                <input name="email" type="email" id="materialRegisterEmail" class="form-control" aria-describedby="materialRegisterEmailHelpBlock" value="<?= set_value('email');?>">
                <label for="materialRegisterEmail">E-Mail</label>
                <?= form_error('email', '<small class="red-text">','</small>'); ?>
		    </div>

            <!-- Password -->
            <div class="md-form">
                <input name="password_1" type="password" id="materialRegisterPassword" class="form-control" aria-describedby="materialRegisterPasswordHelpBlock">
                <label for="materialRegisterPassword">Password</label>
                <?= form_error('password_1', '<small class="red-text">','</small>'); ?>
            </div>

            <!-- Confirm Password -->
            <div class="md-form">
                <input name="password_2" type="password" id="materialRegisterConfirmPassword" class="form-control" aria-describedby="materialRegisterConfirmPasswordHelpBlock" >
                <label for="materialRegisterConfirmPassword">Confirm Password</label>
                <?= form_error('password_2', '<small class="red-text">','</small>'); ?>
			</div>
			
			<select class="browser-default custom-select" name="role">
                <option value="" disabled>Choose option</option>
                <option value="1" selected>Admin</option>
                <option value="2">Editor</option>
                <option value="3">User</option>
            </select>
            


        </form>
        <!-- Form -->

    </div>

</div>
