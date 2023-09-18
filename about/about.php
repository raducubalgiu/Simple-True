<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kristi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Simple True | Despre noi</title>
</head>
<body>
    <header class="header">
        <?php include "includes/navigation.php"; ?>
    </header>
    
    <main>
        <section class="section-top">
            <div class="heading-box-title text-center">
                <div class="container">
                    <h2><span class="heading-primary--main">Despre</span></h2>
                    <h3 class="heading-tertiary">noi</h3>
                </div>
            </div>
        </section>
        
        <section class="section-our-story">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="heading-box-about">
                            <h2 class="heading-secondary">
                                <span class="heading-secondary--main">Echipa noastră</span>
                                <span class="heading-secondary--sub">Ne place să fim creativi</span>
                            </h2>
                            <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto libero, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit, reprehenderit quod eligendi sed possimus repellat voluptatem sequi? Earum. Iusto libero, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit</p>
                        </div>
                    </div>

                    <div class="col-md">
                        <img src="assets/img/our-story.jpg" alt="" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-chef">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <img src="assets/img/chef.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-md">
                        <div class="heading-box-about">
                            <h2 class="heading-secondary">
                                <span class="heading-secondary--main text-light">Echipa noastră</span>
                                <span class="heading-secondary--sub">Ne place să fim creativi</span>
                            </h2>
                            <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto libero, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit, reprehenderit quod eligendi sed possimus repellat voluptatem sequi? Earum. Iusto libero, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit, deserunt consectetur eveniet illum sit doloremque iure reiciendis laborum suscipit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto libero, deserunt consectetur eveniet illum</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "includes/services.php" ?>

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