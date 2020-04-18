<div class="row">
    <div class="span6">
        <form id="login_form" action="<?=site_url('user/login');?>" method="post">
            <div class="form-group">
                <label>Enter Your Name</label>
                <input type="text" name="user_name" class="form-control" value=<?php echo set_value('user_name'); ?>>
                <!-- <span class="text-danger"><?php echo form_error('reg_username') ?></span> -->
            </div>
            <!-- <div class="form-group">
        <label>Enter Email</label>
        <input type="text" name="reg_email" class="form-control" value=<?php echo set_value('reg_email') ?>>
        <span class="text-danger"><?php echo form_error('reg_email') ?></span>
    </div> -->
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="reg_password" class="form-control"
                    value=<?php echo set_value('reg_password') ?>>
                <span class="text-danger"><?php echo form_error('reg_password') ?></span>
            </div>
            <div class="form-group">
                <!-- <input type="submit" id="register-button" name="register" value="Register"
                                class="btn btn-info"> -->
                <button type="submit" class="btn btn-primary" id="register-button" name="register"
                    value="Register">Login</button>
            </div>
        </form>
        <a href="<?=site_url('home/register')?>">Register</a>
    </div>
</div>

<script type="text/javascript">
$(function() {
    // alert(1);
    $("#login_form").submit(function(event) {
        event.preventDefault();
        var url = $(this).attr('action');
        var postData = $(this).serialize();

        $.post(url, postData, function(o) {
            if (o.result == 1) {
                // alert('Logged In');
                window.location.href = `<?=site_url('
                dashboard ')?>`;

            } else {
                alert('Invalid Login');
            }
        }, 'json');
    });
});
</script>