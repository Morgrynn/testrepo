<div class="row no-gutters">
    <div class="no-gutters" style="width: 20%; flex: 0 0 20%;max-width: 20%;"></div>
    <div class="col-lg-5 no-gutters">
        <div id="logo" class="text-center ml-5 mt-2"><img src="public/img/logo_img/PULSEUP.png"></div>
        <div class="slideshow ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="public/img/slideshow_img/fit.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="public/img/slideshow_img//fit2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="public/img/slideshow_img//fit3.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div>
            <p style="line-height:90px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"
                class="display-1 mt-2">JOIN US!<br>
                <span style="color: orangered;" class="ml-5">IMPROVE YOURSLEF!</span></p>
        </div>
    </div>
    <div class="col-md-3 no-gutters ml-5 mt-5">
        <div id="sideBar align-items-center">
            <!--LOGIN FORM-->
            <div class="authorization">
                <div class="row login">
                    <div class="pl-3">
                        <form id="login_form" action="<?=site_url('home/login');?>" method="post">
                            <div class="form-group">
                                <label>Enter Username</label>
                                <input type="text" name="username" class="form-control"
                                    value=<?php echo set_value('username'); ?>>
                                <!-- <span class="text-danger"><?php echo form_error('username') ?></span> -->
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="password" class="form-control"
                                    value=<?php echo set_value('password') ?>>
                                <!-- <span class="text-danger"><?php echo form_error('password') ?></span> -->
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" id="login-button" name="login"
                                    value="Login">Login</button>
                            </div>
                            <div class="form-group">
                                <a href="<?=site_url('home/register')?>"><button type="button" class="btn btn-primary"
                                        id="register-button" name="register" value="Register">Register</button></a>
                            </div>
                        </form>
                        <!-- <a href="<?=site_url('home/register')?>">Register</a> -->
                    </div>
                </div>




                <!--REGISTRATION FORM-->
                <!-- <div class="registration">
                    <div class="reg-form">
                        <h3 style="margin-left: 98px; font-size: 18px;">REGISTRATION</h3>
                        <p>Username<br> <input id="reg-username"></p>
                        <p>Password<br> <input id="reg-password"></p>
                        <p>E-mail<br> <input id="reg-email" type="email"></p>
                        <p>Date of Birth<br><input type="date" style="color: white; font-family: 'Play', sans-serif; ;">
                        </p>
                        <p><button id="register-button">REGISTER</button><br></p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="col-md-2 no-gutters ml-5 mt-5"></div>
</div>