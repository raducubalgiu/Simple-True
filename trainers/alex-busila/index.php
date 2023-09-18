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
    <title>Simple True | Alex Busila</title>
</head>
<body>
    <header class="header">
        <?php include "../../includes/navigation.php" ?>
    </header>
    
    <main>
        <section class="section-top" style="background-color: #000;">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Alex</span></h2>
                    <h3 class="heading-tertiary">Buşilă</h3>
                </div>
            </div>
        </section>
        <section class="section-trainer bg-white">
            <div class="container"><div class="row">
                <div class="col-md">
                    <h2 class="heading-secondary">
                        <span class="heading-secondary--main">Alex Buşilă</span>
                        <span class="heading-secondary--sub">Trainer acreditat &#x2022; <span style="color: #5a5a5a">6 teme</span></span>
                    </h2>
                    <p class="paragraph">În paralel cu formarea în psihoterapie şi+a început carierea de trainer şi director de fericire în mediul organizaţional. Aici a avut ocazia să dea sfaturi (fapt care nu prea se întâmplă în cabinetul de psihoterapie). </p>
                    <p class="paragraph">De caţiva ani i se spune şi "profu". Asta pentru că nu a rezistat tentaţiei şi s+a apucat de predat. Alexandru este un trainer modern, proaspât şi inovativ. Îmbină cunoştinţele tehnologiei cu mesajul ce urmează a fi transmis, într+o formă neconvenţională dar eficientă. Carisma, empatia şi consistenţa sunt doar câteva din elementele cu care a fost caracterizat ăn multele formulare de feedback folosite de+alungul timpului.</p>
                    <p class="paragraph">"Cine nu se poate considera copil, se poate considera un om mort". Această frază este nr 1. din decalogul lui Alexandru Buşilă. Valorile şi principiile fac de cele mai multe ori diferenţa în situaţiile dificile, între oameni. Alexandru a absolvit facultate de psihologie şi a continuat cu un master de terapie Cognitiv Comportamentală. Alex este iniţiatorul campaniilor Cortul terapeutic şi Caravana terapeutică, programe care aduc aduc oamenii mai aproape de producesul de vindecare... sau invers.</p>
                    <p class="heading-certification">Certificări: trainer acreditat ANC, master în terapie cognitiv-comportamentală, psiholog, profesor</p>
                </div>
                <div class="col-md">
                    <img src="../../assets/img/trainers/alex-busila-rsz-trainer.jpg" class="img-fluid rounded" alt="Alex Busila">
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
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#followership-art">Followership art</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#emotional-expert">Emotional Expert</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#distress-management">Distress Management</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#the-change">The Change</button>
                    </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#time-expert">Time Expert</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#conflict-antidote">Conflict Antidote</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="followership-art">
                        <?php include "../../includes/themes/followership-art.php" ?>
                    </div>
                    <div class="tab-pane fade" id="emotional-expert" >
                        <?php include "../../includes/themes/emotional-expert.php" ?>
                    </div>
                    <div class="tab-pane fade" id="distress-management" >
                        <?php include "../../includes/themes/distress-management.php" ?>
                    </div>
                    <div class="tab-pane fade" id="the-change" >
                        <?php include "../../includes/themes/the-change.php" ?>
                    </div>
                    <div class="tab-pane fade" id="time-expert" >
                        <?php include "../../includes/themes/time-expert.php" ?>
                    </div>
                    <div class="tab-pane fade" id="conflict-antidote" >
                        <?php include "../../includes/themes/conflict-antidote.php" ?>
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
                        <div class="portfolio-project">Project 4</div>
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