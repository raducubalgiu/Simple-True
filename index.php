<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Poppins -->
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link rel='preload' as='style' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,600&display=swap'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,600&display=swap" rel="stylesheet">

    <!-- Open Sans -->
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link rel='preload' as='style' href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Kristi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Simple True</title>
</head>
<body>
    <header class="header">
        <?php include "includes/navigation.php"; ?>

        <?php include "includes/carousel.php"; ?>
    </header>
    
    <main>
        <section class="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="heading-box-about">
                            <h2 class="heading-secondary">
                                <span class="heading-secondary--main">Despre noi</span>
                                <span class="heading-secondary--sub">De ce suntem speciali</span>
                            </h2>
                            <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto libero, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit, reprehenderit quod eligendi sed possimus repellat voluptatem sequi? Earum. Iusto libero, deserunt consectetur eveniet illum</p>
                        </div>

                        <a href="about.php" class="btn btn-default btn-header">Vezi mai mult</a>
                    </div>

                    <div class="col-md">
                        <img src="assets/img/about.jpg" alt="" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-title-top">
            <div class="heading-box-about text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Trainerii</span></h2>
                    <h3 class="heading-tertiary">Noştrii</h3>
                </div>
            </div>
        </section>

        <section class="container-fluid section-menu">
            <div class="row no-gutters">
                <div class="col-md p-0">
                    <div class="card border-0 bg-transparent">
                        <a href="trainers/mihai-drideanu/index.php">
                            <img src="assets/img/trainers/mihai-drideanu-rsz.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title text-light pt-2">Mihai Drideanu &#x2022; <span style="color: #5a5a5a">4 teme</span></h5>
                            <a href="trainers/mihai-drideanu/index.php" class="btn btn-default">Mai mult</a>
                        </div>
                    </div>
                </div>

                <div class="col-md p-0">
                    <div class="card border-0 bg-transparent">
                        <a href="trainers/alex-busila/index.php"><img src="assets/img/trainers/alex-busila-rsz.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title text-light pt-2">Alex Buşilă &#x2022; <span style="color: #5a5a5a">6 teme</span></h5>
                            <a href="trainers/alex-busila/index.php" class="btn btn-default">Mai mult</a>
                        </div>
                    </div>
                </div>

                <div class="col-md p-0">
                    <div class="card border-0 bg-transparent">
                        <a href="trainers/andrei-vacaru/index.php"><img src="assets/img/trainers/andrei-vacaru-rsz.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title text-light pt-2">Andrei Văcaru &#x2022; <span style="color: #5a5a5a">7 teme</span></h5>
                            <a href="trainers/andrei-vacaru/index.php" class="btn btn-default">Mai mult</a>
                        </div>
                    </div>
                </div>

                <div class="col-md p-0">
                    <div class="card border-0 bg-transparent">
                        <a href="trainers/radu-chiriac/index.php"><img src="assets/img/trainers/radu-chiriac-rsz.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title text-light pt-2">Radu Chiriac &#x2022; <span style="color: #5a5a5a">3 teme</span></h5>
                            <a href="trainers/radu-chiriac/index.php" class="btn btn-default">Mai mult</a>
                        </div>
                    </div>
                </div>

                <div class="col-md p-0">
                    <div class="card border-0 bg-transparent">
                        <a href="trainers/shippley-team/index.php"><img src="assets/img/trainers/shippley-team-rsz.png" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title text-light pt-2">Shippley Team &#x2022; <span style="color: #5a5a5a">3 teme</span></h5>
                            <a href="trainers/shippley-team/index.php" class="btn btn-default">Mai mult</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "includes/services.php" ?>

        <section class="section-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <img src="assets/img/our-team.jpg" alt="" class="img-fluid rounded" style="margin-bottom: 2rem;">
                    </div>

                    <div class="col-md">
                        <div class="heading-box-about">
                            <h2 class="heading-secondary">
                            <span class="heading-secondary--main">Ce oferim</span>
                            <span class="heading-secondary--sub">Privim către perfecţiune</span>
                            </h2>
                            <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto libero, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit, reprehenderit quod eligendi sed possimus repellat voluptatem sequi? Earum. Iusto libero, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit</p>
                        </div>

                        <a href="foto.php" class="btn btn-default btn-header">Vezi galeria foto</a>
                    </div>
                </div>
            </div>
        </section>

        <?php include "includes/testimonials.php" ?>
    </main>

    <?php include "includes/footer.php"; ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>