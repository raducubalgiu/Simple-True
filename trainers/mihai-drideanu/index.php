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
    <title>Simple True | Mihai Drideanu</title>
</head>
<body>
    <header class="header">
        <?php include "../../includes/navigation.php" ?>
    </header>
    
    <main>
        <section class="section-top" style="background-color: #000;">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Mihai</span></h2>
                    <h3 class="heading-tertiary">Drideanu</h3>
                </div>
            </div>
        </section>
        <section class="section-trainer bg-white">
            <div class="container"><div class="row">
                <div class="col-md">
                    <h2 class="heading-secondary">
                        <span class="heading-secondary--main">Mihai Drideanu</span>
                        <span class="heading-secondary--sub">Trainer acreditat &#x2022; <span style="color: #5a5a5a">4 teme</span></span>
                    </h2>
                    <p class="paragraph">Mihai este o persoană foarte curioasă, mereu în căutarea unor lucruri noi de descoperit. El nu este limitat la o anumită sferă de interes, ci se îndreaptă spre orice subiect care îi atrage atenţia.</p>
                    <p class="paragraph">Începând cu anul 2010, Mihai a lucrat in domeniul bancar, unde a dobândit o vastă experienţă în coordonarea şi dezvoltarea echipei de vânzări. În această perioadă, el a învăţat cum să formeze echipe eficiente şi să gestioneze momente dificile. Din 2016, Mihai a fost implicat în proiecte de ambasadoriat, iar din 2019 a început să lucreze intr+o companie care oferă soluţii de învăţare cu un mod empatic de comunicare. El este implicat în dezvoltarea personală şi profesională a oamenilor prin intermediul sesiunilor de team-building şi de training. Printre clienţii cu care a lucrat: HELLA, Ubisoft, Akwel, Hutchinson, Bosch, Iron Mountain, EXpleo, Accenture, Leoni, Libra Bank, C.H. Robinson, Banca Transilvania, IT Smart Systems, FEG, Aspen, Romanian Software, BCR, Iulius Mall, Superbet, Raiffeisen Bank, Petrom, Eturia.</p>
                    <p class="heading-certification">Certificări: trainer autorizat ANC, acreditare specialist îmbunătăţire procese AGILE</p>
                </div>
                <div class="col-md">
                    <img src="../../assets/img/trainers/mihai-drideanu-rsz-trainer.jpg" class="img-fluid rounded" alt="Mihai Drideanu">
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
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#customer-care">Customer Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#trust-collaboration">Trust Through collaboration</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#trustable-seller">Trustable Seller</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#negociation-skills">Negocation skills</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="customer-care">
                        <?php include "../../includes/themes/customer-care.php" ?>
                    </div>
                    <div class="tab-pane fade" id="trust-collaboration" >
                        <?php include "../../includes/themes/trust-through-collaboration.php" ?>
                    </div>
                    <div class="tab-pane fade" id="trustable-seller" >
                        <?php include "../../includes/themes/trustable-seller.php" ?>
                    </div>
                    <div class="tab-pane fade" id="negociation-skills" >
                        <?php include "../../includes/themes/negociation-skills.php" ?>
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