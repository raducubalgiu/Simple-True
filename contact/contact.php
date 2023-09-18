<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kristi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Simple True | Contact</title>
</head>
<body>
    <header class="header">
        <?php include "includes/navigation.php"; ?>
    </header>
    
    <main>
        <section class="section-top">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Modalităţi de</span></h2>
                    <h3 class="heading-tertiary">contact</h3>
                </div>
            </div>
        </section>

        <section class="section-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="contact-box text-center">
                            <a href="tel:+(+40) 740 235 148">
                                <ion-icon name="call-outline" class="icon-contact"></ion-icon>
                                <p class="paragraph paragraph-about">Telefon: (+40) 740 235 148</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="contact-box text-center">
                            <a target="_blank" href="https://www.google.com/maps/place/Calea+13+Septembrie+121,+Bucure%C8%99ti/@44.4232205,26.0743368,21z/data=!4m6!3m5!1s0x40b1ff7a6ffd73b9:0x7e1b92fe6eb65217!8m2!3d44.4232572!4d26.0743361!16s%2Fg%2F11csdrdl42?entry=ttu">
                                <ion-icon name="navigate-outline" class="icon-contact"></ion-icon>
                                <p class="paragraph paragraph-about">Adresa: Calea 13 Septembrie, nr 121, Sector 5, Bucuresti</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="contact-box text-center">
                            <a href="mailto:mihnea.radita@simpletrue.ro">
                                <ion-icon name="mail-outline" class="icon-contact"></ion-icon>
                                <p class="paragraph paragraph-about">Email: mihnea.radita@simpletrue.ro</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-map">
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Calea%2013%20Septembrie,%20nr%20121+(Simple%20True)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population Estimator map</a></iframe></div>
        </section>

        <section class="section-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <h2 class="heading-secondary">
                            <span class="heading-secondary--main">Contacteaza-ne</span>
                            <span class="heading-secondary--sub">Iti stam la dispozitie pentru orice intrebari sau nelamuriri</span>
                        </h2>
                    </div>
                </div>

                <form action="">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nume">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telefon">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Mesajul tau"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-md" value="Trimite">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
    <script src="assets/js/app.js"></script>
</body>
</html>