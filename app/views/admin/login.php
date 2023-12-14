<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/admin/css/style.css">
</head>
<body>
    <div class="login">
        <h1>Giriş Yap</h1>
        <?php if(isset($_GET["login"]) && $_GET["login"] == "false"): ?>
            <div class="form-message-error">
                Giriş Başarısız
            </div>
        <?php endif; ?>
        <form action="<?php echo BASE_URL."adminoperation/logincontrol" ?>" method="POST">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Şifre</label>
            <input type="password" name="password" required>
            <div style="text-align: center;">
                <button type="submit">Giriş Yap</button>
            </div>
        </form>
    </div>

</body>
</html>