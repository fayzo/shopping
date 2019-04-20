<?php
    include "language_translator_config.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['title'] ?></title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <style type="text/css">
    .footer {
        left: 0;
        position: fixed;
        bottom: 0;
        text-align: center;
        color: white;
        width: 100%;
    }
    </style>
    <script>
    function language(lang) {
        var xmlhttp = new XMLHttpRequest();
        var url = "language_translator_config.php?key=lang" + '&lang=' + lang;
        xmlhttp.open("POST", url, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                location.reload();
                console.log(this.responseText);
            }
        };
    }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?php echo $lang['home'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $lang['pricing'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $lang['contact'] ?></a>
            </li>
        </ul>
    </nav>
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1><?php echo $lang['title'] ?></h1>
                <p>
                    <?php echo $lang['description'] ?>
                </p>
            </div>
        </div>
    </div>

    <div class="footer bg-dark">
        <a onclick="language('en');" href="#"><?php echo $lang['lang_en'] ?></a>
        || <a onclick="language('bs');" href="#"><?php echo $lang['lang_bs'] ?></a>
    </div>
</body>

</html>