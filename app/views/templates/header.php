<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href=" <?= BASEURL ?>/css/bootstrap.css"
          crossorigin="anonymous">
    <title><?= $data['title']; ?>
        Pages</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container">
        <a class="navbar-brand" href="<?=
        BASEURL;
        ?>">Otid mvc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" <?= BASEURL;?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/About">About me </a>
                </li>
            </ul>
        </div>
    </div>
</nav>