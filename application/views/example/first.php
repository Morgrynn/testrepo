<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/example.css'); ?>">
</head>

<body>

    <div id="container">
        <h1>Welcome to Fitness App</h1>

        <div id="body">
            <p>page one</p>
            <p>TEST FOR SHIT</p>


        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
            <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
        </p>
    </div>

</body>

</html>