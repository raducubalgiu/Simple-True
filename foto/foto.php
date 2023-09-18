<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kristi&display=swap" rel="stylesheet">

    <!-- Lightbox CSS -->
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link rel='preload' as='style' href='assets/css/lightbox.css'>
    <link href="assets/css/lightbox.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Simple True | Foto</title>
</head>
<body>
    <header class="header">
        <?php include "includes/navigation.php"; ?>
    </header>
    
    <main>
        <section class="section-top" style="background-color: #000;">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Galerie</span></h2>
                    <h3 class="heading-tertiary">Foto</h3>
                </div>
            </div>
        </section>

        <section class="section-foto" style="background-color: #000;">
            <div class="row">
                <div class="col-md">
                    <a href="assets/img/gallery/gallery-1.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-1.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-2.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-2.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-3.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-3.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-4.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-4.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>
            </div>

            <div class="row">
            <div class="col-md">
                    <a href="assets/img/gallery/gallery-5.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-5.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-6.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-6.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-7.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-7.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-8.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-8.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <a href="assets/img/gallery/gallery-9.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-9.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-10.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-10.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-11.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-11.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
                </div>

                <div class="col-md">
                    <a href="assets/img/gallery/gallery-12.jpg" data-lightbox="roadtrip">
                    <img src="assets/img/gallery/gallery-12.jpg" class="card-img-top rounded" alt="...">
                    <div class="foto-hover"></div>
                    <ion-icon name="link-outline" class="icon-foto-hover"></ion-icon>
                    </a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>