<?php require_once 'theme/header.php'; ?>
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-8">
            <div class="jumbotron mt-5">
                <h1 class="display-4"><?php echo $title; ?></h1>
                <p class="lead">Server information shit here</p>
                <hr class="my-4">
                <p>More information here...</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Join Now</a>
                </p>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="http://via.placeholder.com/150x151" alt="test1">
                </div>
                <div class="item">
                    <img src="http://via.placeholder.com/150x152" alt="test2">
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4 mt-5">
            <iframe src="https://discordapp.com/widget?id=348230983767818240&theme=dark" width="350" height="386" allowtransparency="true" frameborder="0"></iframe>
            <div class="jumbotron mt-4">
                <ol>
                    <li>Download our offical client <a href="#">here</a></li>
                    <li>Register an account <a href="#">here</a></li>
                    <li>Enjoy</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php require_once 'theme/footer.php'; ?>
