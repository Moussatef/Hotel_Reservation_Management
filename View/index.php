<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>



<body>
    <?php include '../includs/headre.php'; ?>
    <main>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../img/h2.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="500" height="300">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Live the Marrakech way</h1>
                    <p class="lead">Book with us - experience a magnifique blend of French elegance with local culture and gastronomy at
                        Sofitel's collection of luxury hotels and resorts., and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-center mb-5">I'm Back to work in Hotel Forme</h1>

    </main>


    <main id="main">

        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">


                <div class="row">


                    <div class="card border-secondary mb-3 ms-4" style="max-width: 18rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Loyalty program</h5>
                            <p class="card-text">We see to it that your loyalty is handsomely rewarded.</p>
                        </div>
                    </div>


                    <div class="card border-secondary mb-3 ms-4" style="max-width: 18rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Best price guarantee!</h5>
                            <p class="card-text">If you find a better rate within 24 hours of booking, we promise to outdo
                                it by 25%.</p>
                        </div>
                    </div>


                    <div class="card border-secondary mb-3 ms-4" style="max-width: 18rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">24-hour customer care</h5>
                            <p class="card-text">Chat to someone who knows how to help, at any time, in your preferred
                                language.</p>
                        </div>
                    </div>

                    <div class="card border-secondary mb-3 ms-4" style="max-width: 18rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">CERTIFIED CUSTOMER REVIEWS</h5>
                            <p class="card-text">All reviews published on the all.accor.com website are only written by
                                genuine customers who have stayed at one of our hotels.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Featured Services Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h3><span>Contact Us</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                        vitae autem.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6 mb-5">
                        <form action="" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group mb-2">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col form-group mb-2">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mb-2">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-secondary" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->



    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">

            <span class="text-muted ">
                <h6 class="text-center mb-3">Moussatef Othman &copy; 2021 set web Hotel MS</h3>
            </span>

        </div>

    </footer>
    <!-- <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#" class="nav-link">Web design</a></li>
                        <li><a href="#" class="nav-link">Development</a></li>
                        <li><a href="#" class="nav-link">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#" class="nav-link">Company</a></li>
                        <li><a href="#" class="nav-link">Team</a></li>
                        <li><a href="#" class="nav-link">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>YouCode</h3>
                    <p class="lead">YouCode… Ce n’est pas un simple nom. C’est toute une philosophie. YouCode est
                        une école
                        inclusive qui ouvre les chances à tous. You… comme… toi. YouCode place l’individu au centre
                        de sa pédagogie en même temps qu’elle l’aide à développer une synergie de travail avec les
                        autres .</p>
                </div>
                <div class="col item social"><a href="#" class="nav-link"><i class="icon ion-social-facebook"></i></a><a
                        href="#" class="nav-link"><i class="icon ion-social-twitter"></i></a><a href="#"
                        class="nav-link"><i class="icon ion-social-snapchat"></i></a><a href="#" class="nav-link"><i
                            class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">YouCode &copy; 2021</p>
        </div>
    </footer> -->
</body>
<script src="../js/bootstrap.js"></script>

</html>