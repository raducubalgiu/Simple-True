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
    <title>Simple True | Radu Chiriac</title>
</head>
<body>
    <header class="header">
        <?php include "../../includes/navigation.php" ?>
    </header>
    
    <main>
        <section class="section-top" style="background-color: #000;">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Radu</span></h2>
                    <h3 class="heading-tertiary">Chiriac</h3>
                </div>
            </div>
        </section>
        <section class="section-trainer bg-white">
            <div class="container"><div class="row">
                <div class="col-md">
                    <h2 class="heading-secondary">
                        <span class="heading-secondary--main">Radu Chiriac</span>
                        <span class="heading-secondary--sub">Trainer acreditat &#x2022; <span style="color: #5a5a5a">4 teme</span></span>
                    </h2>
                    <p class="paragraph">Radu încearcă să ajute oamenii atât la nivel individual, cât şi la nivel de echipă să se descopere pe ei şi pe cei din jurul lor şi sî işi construiască o personalitate puternică, echilibrată şi fericită.</p>
                    <p class="paragraph">A studiat Managementul şi Comunicarea în Afaceri la Bucureşti, ca mai apoi condus de dorinţa sa de a se susţine şi a ajuta oamenii, şă ajunga în cealaltă parte a planetei, în Statele Unite ale Americii, pentru a se specializa in Coaching şi Training. Experienţa din America i-a adus certificarea internaţională în NLP (Programare Neuro Lingvistică) ca Trainer şi Master Coach, ce a completat cunoştinţele sale anterioare în tehnici precum Emotional Freedom şi Gestalt Therapy.</p>
                    <p class="paragraph">În prezent, Radu continuă să înveţe şi să aprofundeze studiile sale despre personalitatea umană prin Roya Personality and Counselling Techniques, face reading, ce i-au oferit o perspectivă cu totul unică asupra oamenilor şi a intercaţiunilor umane. Toată această experienţă s-a tradus în obţinerea sigiliului de peste 10.000 de ore de practică în Coaching şi Training.</p>
                    <p class="heading-certification">Certificări: trainer autorizat ANC, trainer internaţional NLP, coach, profilare şi face reading - Roya Personality System</p>
                </div>
                <div class="col-md">
                    <img src="../../assets/img/trainers/radu-chiriac-rsz-trainer.jpg" class="img-fluid rounded" alt="Radu Chiriac">
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
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#reveal-excellence">Reveal Excellence</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#understanding-beyond-words">Undertanding beyond words</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#power-of-resilience">The Power of resilience</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="reveal-excellence">
                        <?php include "../../includes/themes/reveal-excellence.php" ?>
                    </div>
                    <div class="tab-pane fade" id="understanding-beyond-words" >
                        <?php include "../../includes/themes/understanding-beyond-words.php" ?>
                    </div>
                    <div class="tab-pane fade" id="power-of-resilience" >
                        <?php include "../../includes/themes/the-power-of-resillience.php" ?>
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