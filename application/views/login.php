

<!-- Filling Form Login -->
<div class="card " style="width:20cm; margin:auto; margin-bottom:150px; top:40px"  >
	
    <h5 class="card-header unique-color white-text text-center py-4 ">
        <strong>Login</strong>
    </h5>
    <?= $this->session->flashdata('message'); ?>
    <!--Card content-->
    <div class="card align-items-center">

        <!-- Form -->
        <form class="text-center " method="POST" action="<?= base_url('login');?>" style="color: #757575;" action="#" method="post">

            
            <!-- Username -->
            <div class="md-form">
                <input name="username" type="text" id="materialLoginUsername" class="form-control" aria-describedby="materialLoginUsernameHelpBlock" >
                <label for="materialLoginUsername">Username</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input name="password" type="password" id="materialLoginPassword" class="form-control" aria-describedby="materialLoginPasswordHelpBlock">
                <label for="materialLoginPassword">Password</label>
            </div>

            

            <!-- Log in button -->
            <button name="login_user" class="btn unique-color white-text btn-block my-4 waves-effect z-depth-0 "  type="submit">Log in</button>

            <br>
            <!-- Error -->
        
            
            <hr>
            <!-- To Register Button -->
            <p>Not joining yet ? please 
                <a href="<?= base_url('register') ?>" >register</a>

        </form>
        <!-- Form -->

    </div>

</div>
