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
    <title>Simple True | Andrei Vacaru</title>
</head>
<body>
    <header class="header">
        <?php include "../../includes/navigation.php" ?>
    </header>
    
    <main>
        <section class="section-top" style="background-color: #000;">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Andrei</span></h2>
                    <h3 class="heading-tertiary">Văcaru</h3>
                </div>
            </div>
        </section>
        <section class="section-trainer bg-white">
            <div class="container"><div class="row">
                <div class="col-md">
                    <h2 class="heading-secondary">
                        <span class="heading-secondary--main">Andrei Văcaru</span>
                        <span class="heading-secondary--sub">Trainer acreditat &#x2022; <span style="color: #5a5a5a">7 teme</span></span>
                    </h2>
                    <p class="paragraph">Înainte de a fi trainer, am urmat timp de 13 ani cariera de jurnalist tv, timp în care mi-am perfecţionat abilităţile de comunicare inter-personală şi comunicare publică. Am coordonat echipe, am produs şi prezentat emisiuni atât la televiziunea naţională cât şi la posturi private.</p>
                    <p class="paragraph">În cei 10 ani de experienţă ca trainer, am dezvoltat şi livrat programe de educaţie pentru companii precum BCR, Raiffeisen Bank, Vodafone, Dacia+Renault, Bosch, Pfizer, Adobe, Honeywell, Hella, Pirelli, Accenture sau Micheline. Am contribuit la dezvaltarea a peste 8000 de oameni prin sesiunile mele de training.</p>
                    <p class="paragraph">Expertiza şi cele peste 600 de traininguri livrate m+au ajutat să creez un mix puternic de informaţie şi invăţare experienţială. Aplic acelaşi principiu în toate sesiunile de training, în patru paşi: conştientizează - înţelege - aplică - obţine rezultate. Sunt convins de puţine lucruri ca fiind general valabile. Însă unul dintre ele este că lucrul cu oamenii necesită dăruire, implicare, autenticitate şi înţelegerea realităţii cu care ei se confruntă. Să ştii să îi asculţi este la fel de important ca lucrurile pe care le transmiţi. În fiecare om e un potenţial imens care aşteaptă să iasă la suprafaţă. Dacă îi vorbeşti pe limba lui!</p>
                    <p class="heading-certification">Certificări: licenţiat în Jurnalism şi Ştiinţele Comunicării, trainer acreditat ANC şi trainer certificat PCM (Process Communication Model)</p>
                </div>
                <div class="col-md">
                    <img src="../../assets/img/trainers/andrei-vacaru-rsz-trainer.jpg" class="img-fluid rounded" alt="Andrei Vacaru">
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
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#presentation-skills">Presentation skills</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#bulding-relationship-based-on-trust">Building relationship based on trust</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#public-speaking">Public speaking</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#story-telling">Story telling</button>
                    </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#performance-through-innovation">Performanta prin inovatie</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#games-people-play">Analiza tranzactionala-Games People Play</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#process-communication-model">Process Communication Model</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="presentation-skills">
                        <?php include "../../includes/themes/presentation-skills.php" ?>
                    </div>
                    <div class="tab-pane fade" id="bulding-relationship-based-on-trust" >
                        <?php include "../../includes/themes/building-relationships-based-on-trust.php" ?>
                    </div>
                    <div class="tab-pane fade" id="public-speaking" >
                        <?php include "../../includes/themes/public-speaking.php" ?>
                    </div>
                    <div class="tab-pane fade" id="story-telling" >
                        <?php include "../../includes/themes/story-telling.php" ?>
                    </div>
                    <div class="tab-pane fade" id="performance-through-innovation" >
                        <?php include "../../includes/themes/performance-through-innovation.php" ?>
                    </div>
                    <div class="tab-pane fade" id="games-people-play" >
                        <?php include "../../includes/themes/games-people-play.php" ?>
                    </div>
                    <div class="tab-pane fade" id="process-communication-model" >
                        <?php include "../../includes/themes/process-communication-model.php" ?>
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