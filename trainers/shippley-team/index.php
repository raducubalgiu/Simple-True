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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Simple True | Shippley Team</title>
</head>
<body>
    <header class="header">
        <?php include "../../includes/navigation.php" ?>
    </header>
    
    <main>
        <section class="section-top" style="background-color: #000;">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Shippley</span></h2>
                    <h3 class="heading-tertiary">team</h3>
                </div>
            </div>
        </section>
        <section class="section-trainer bg-white">
            <div class="container"><div class="row">
                <div class="col-md">
                    <h2 class="heading-secondary">
                        <span class="heading-secondary--main">Shippley Team</span>
                        <span class="heading-secondary--sub">Trainer acreditat &#x2022; <span style="color: #5a5a5a">3 teme</span></span>
                    </h2>
                    <p class="paragraph">Compania Shippley a fost fondată în US în urmă cu 50 de ani şi a pus bazele metologiei ofertării pentru participarea la licitaţii publice sau private. Domeniul în care activează este în sfera Bid/Proposal Management.</p>
                    <p class="paragraph">Asta include:</p>
                    <p class="paragraph">- Training de specialitate pe hardskills, cu certificare acreditată</p>
                    <p class="paragraph">- Outsourcing, consultaţii noştri lucreză efectiv la ofertele clientului</p>
                    <p class="paragraph">- Consultaţă pentru licitaţiile complexe, asigurată de specialişti cu senioritate mare în domeniu</p>
                </div>
                <div class="col-md">
                    <img src="../../assets/img/trainers/shippley-team-rsz-trainer.png" class="img-fluid rounded" alt="Shippley Team">
                </div>
            </div></div>
        </section>
        <section class="section-trainer">
            <div class="container">
                <h2 class="heading-secondary text-center" style="margin-bottom: 5rem">
                    <span class="heading-primary--main">Teme asociate</span>
                    <ion-icon name="remove" class="icon-after"></ion-icon>
                </h2>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#foundations-proposal-management">Foundations for proposal development</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#powerful-proposal-writing">Powerful proposal writing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#capturing-new-business">Capturing New Business</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="foundations-proposal-management">
                        <?php include "../../includes/themes/foundasions-for-proposal-development.php" ?>
                    </div>
                    <div class="tab-pane fade" id="powerful-proposal-writing" >
                        <?php include "../../includes/themes/powerful-proposal-writing.php" ?>
                    </div>
                    <div class="tab-pane fade" id="capturing-new-business" >
                        <?php include "../../includes/themes/capturing-new-business.php" ?>
                    </div>
                </div>
        </section>

        <section class="section-portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <h2 class="heading-secondary">
                            <span class="heading-secondary--main">Servicii</span>
                            <span class="heading-secondary--sub">Suntem pasionaţi de ceea ce facem</span>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-md-5">
                        <img src="../../assets/img/portfolio-1.jpg" alt="" class="img-fluid img-portfolio">
                        <div class="portfolio-project">Training</div>
                    </div>

                    <div class="col-md mb-md-5">
                        <img src="../../assets/img/portfolio-2.jpg" alt="" class="img-fluid img-portfolio">
                        <div class="portfolio-project">Team Building</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-md-5">
                        <img src="../../assets/img/portfolio-3.jpg" alt="" class="img-fluid img-portfolio">
                        <div class="portfolio-project">Coaching</div>
                    </div>

                    <div class="col-md mb-md-5">
                        <img src="../../assets/img/portfolio-4.jpg" alt="" class="img-fluid img-portfolio">
                        <div class="portfolio-project">Shippley Team</div>
                    </div>
                </div>
            </div>
</section>
        
        <?php include "../../includes/testimonials.php" ?>
    </main>

    <?php include "../../includes/footer.php"; ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../../assets/js/app.js"></script>
</body>
</html>