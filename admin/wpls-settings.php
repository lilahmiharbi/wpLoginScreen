<div class="wrap">
    <h3>WPLS - User Login Page Settings</h3>
    <div id="nav">
        <h3 class="themes-php">
            <a class="nav-tab <?php if($_GET['tab']==""){?>nav-tab-active<?php } ?>" href="<?php echo admin_url(); ?>admin.php?page=wp-login-screen">Home</a>
            <a class="nav-tab <?php if($_GET['tab']=="background"){?>nav-tab-active<?php } ?>" href="<?php echo admin_url(); ?>admin.php?page=wp-login-screen&tab=background">Background</a>
            <a class="nav-tab <?php if($_GET['tab']=="login_form"){?>nav-tab-active<?php } ?>" href="<?php echo admin_url(); ?>admin.php?page=wp-login-screen&tab=login_form">Login Form</a>
            <a class="nav-tab <?php if($_GET['tab']=="templates"){?>nav-tab-active<?php } ?>" href="<?php echo admin_url(); ?>admin.php?page=wp-login-screen&tab=templates">Templates</a>

        </h3>
    </div>
</div>
