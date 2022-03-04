
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <img src="https://itsabhay.com/ucc/public/images/logo123.png" alt="" style="width:120px;height:120px">
<h3>Your Ultimate Collections Company Password</h3> 
Hi, <br>

<p>We have received your password change request. Please click the button below to change your password.</p><br>
<a href="http://localhost:8000/ResetPassword/<?php echo e($token); ?>/<?php echo e($email); ?>" class="btn btn-primary" style=" background: linear-gradient(45deg, red, blue);color:aliceblue;padding:10px 20px;text-decoration:none;border-radius: 2%">
        Change Password
</a><br><br>


<p>If you cannot click the button, copy the following link and paste it to your browser’s address input field. For security reasons this link expires in 24 hours.</p>

https://itsabhay.com/ucc/ResetPassword/<?php echo e($token); ?>/<?php echo e($email); ?> <br/><br>

Best regards, <br>
Customer Service | Ultimate Collections Company <br>

<p>This e-mail message was sent from a notification-only system that cannot accept incoming e-mail.Please do not respond to this message.</p>

</body>
</html><?php /**PATH C:\xampp\htdocs\ucc\resources\views/auth/passwords/password_reset_ucc.blade.php ENDPATH**/ ?>