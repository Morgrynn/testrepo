<h2>Registration Page</h2>

<!--REGISTRATION FORM-->
<div class="registration">
    <div class="reg-form">
        <!-- <?php
if ($this->session->flashdata('message')) {
    echo '
                                                        <div class="alert alert-success>
                                                            ' . $this->session->flashdata("message") . '
                                                        </div>
                                                        ';
}
?> -->

        <!-- TODO CSS FOR FIRST PAGE -->
        <h3 style="margin-left: 98px; font-size: 16px;">REGISTRATION FORM</h3>
        <form action="<?php echo site_url('registration/validation'); ?>" method="post">
            <div class="form-group">
                <label>UserName</label>
                <input type="text" name="reg_username" class="form-control"
                    value=<?php echo set_value('reg_username'); ?>>
                <span class="text-danger"><?php echo form_error('reg_username') ?></span>
            </div>
            <!-- <div class="form-group">
                <label>Email</label>
                <input type="text" name="reg_email" class="form-control" value=<?php echo set_value('reg_email') ?>>
                <span class="text-danger"><?php echo form_error('reg_email') ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="reg_password" class="form-control"
                    value=<?php echo set_value('reg_password') ?>>
                <span class="text-danger"><?php echo form_error('reg_password') ?></span>
            </div>
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value=<?php echo set_value('first_name') ?>>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value=<?php echo set_value('last_name') ?>>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="radio" name="gender" class="form-control" value=<?php echo set_value('male') ?>>Male
                <input type="radio" name="gender" class="form-control" value=<?php echo set_value('female') ?>>Female
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="birthyear" class="form-control" value=<?php echo set_value('birthyear') ?>>
            </div> -->
            <div class="form-group">
                <button type="submit" id="register-button" name="register" value="Register">Register</button>
            </div>
        </form>
    </div>
</div>