<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>验证码</title>
</head>
<body>
    <div>
        <?php echo captcha_img() ?>
    </div>
    <div>
        <img src="<?php echo captcha_src() ?>" alt="烟瘴吗" />
    </div>
</body>
</html>