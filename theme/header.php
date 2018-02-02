<?php require 'includes/config.php'; ?>
<?php
//Debugging only delete after finished
$logged_in = 'test';
$username = 'admin';
$status = 'maintance';
$online_players = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/OwlCarousel/dist/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" href="favicon.ico">
    <style>
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" style="color: #f8f9fa;">
                        <?php if($status === 'online'): ?>
                            Server Status: <span class="text-success">Online</span>
                        <?php elseif($status === 'maintance'): ?>
                            Server Status: <span class="text-warning">Maintance</span>
                        <?php else: ?>
                            Server Status: <span class="text-danger">Offline</span>
                        <?php endif; ?>
                    </li>
                </ul>
                <ul class="navbar-nav mr-right">
                    <li class="nav-item" style="color: #f8f9fa;">
                        Players Online: <span class="text-info"><?php echo $online_players; ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo $title; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Downloads
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Client</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Patch</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Schedules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vote</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-right">
                    <?php if($logged_in === ''): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo ucfirst($username); ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if($username === 'admin'): ?>
                                    <a class="dropdown-item" href="#">Admin Panel</a>
                                    <div class="dropdown-divider"></div>
                                <?php endif; ?>
                                <a class="dropdown-item" href="#">Account Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>