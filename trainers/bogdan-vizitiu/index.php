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
    <title>Simple True | Bogdan Vizitiu</title>
</head>
<body>
    <header class="header">
        <?php include "../../includes/navigation.php" ?>
    </header>
    
    <main>
        <section class="section-top" style="background-color: #000;">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Traineri</span></h2>
                </div>
            </div>
        </section>
        <section class="section-trainer bg-white">
            <div class="container"><div class="row">
                <div class="col-md">
                    <h2 class="heading-secondary">
                        <span class="heading-secondary--main">Bogdan Vizitiu</span>
                        <span class="heading-secondary--sub">Trainer acreditat &#x2022; <span style="color: #5a5a5a">3 teme</span></span>
                    </h2>
                    <p class="paragraph">Sunt coach profesionist certificat şi antreprenor educaţional. Preţuiesc autenticitatea, responsabilitatea şi învăţarea continuă.</p>
                    <p class="paragraph">Am absolvit Universitatea din Bucureşti, specializarea de management în Turism şi am continuat studiile cu un master în Comerţ Internaţional la Acamedia de Studii Economice. Sunt absolvent al şcolii International Coach Academy şi certificat ACTP - CPC, instituţie acreditată de ICF. Experienţa mea profesională a început acum 20 de ani în Media/Jurnalism, a continuat în publicitate, apoi in sales şi ulterior în consultanţă, antreprenoriat şi coaching.</p>
                    <p class="paragraph">Am peste 300 de ore de coaching în care am partneriat cu executivi şi lideri de business precum şi tineri adulţi (elevi, studenţi) care caută claritate, atât în viaţa profesională cât şi în viaţa personală.</p>
                    <p class="heading-certification">Certificări: trainer autorizat ANC, profesional coach program ICF, asociatte coach ICF</p>
                </div>
                <div class="col-md">
                    <img src="../../assets/img/trainers/bogdan-vizitiu-rsz-trainer.jpg" class="img-fluid rounded" alt="Bogdan Vizitiu">
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
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#entrepreneurship">Entrepreneurship</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#coaching-and-mentoring">Coaching and mentoring</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#strategic-thinking">Strategic thinking</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="entrepreneurship">
                        <?php include "../../includes/themes/entrepreneurship.php" ?>
                    </div>
                    <div class="tab-pane fade" id="coaching-and-mentoring" >
                        <?php include "../../includes/themes/coaching-and-mentoring.php" ?>
                    </div>
                    <div class="tab-pane fade" id="strategic-thinking" >
                        <?php include "../../includes/themes/strategic-thinking.php" ?>
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