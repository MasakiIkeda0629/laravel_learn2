<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <title>IM</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">

    </head>
    <body class="container">
        <div class="">
            <p class="title">IM</p>
        </div>
        <!-- Navigation-->
        <!--<script src="<?php echo e(asset('/js/script.js')); ?>"></script>
        <nav class="">
            <div class="">
                <button class="menu_btn" type="button"  data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="nav">
                    <ul class="nav_bar">
                        <a class="nav-link" href="#about">自己紹介</a>
                        <a class="nav-link" href="#contact">Contact</a>
                    </ul>
                </div>
            </div>
        </nav>-->
        <!-- profile-->
        <header class="header">
            <div class="">
                <!-- Masthead Heading-->
                <h1 class="text-uppercase mb-0">池田真颯</h1>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Students - Web Designer</p>
            </div>
        </header>
        
        <!-- About Section-->
         <section class="section">
            <div class="section">
                <!-- About Section Heading-->
                <h2 class="introduce">自己紹介</h2>
                <!-- About Section Content-->
                <div class="">
                    <div class="detail"><p class="">私は池田真颯です。関西大学の経済学部に在籍しており、日々学校に行っております。普段はにぎり長次郎でバイトしており、学生生活を楽しんでいます。</p></div>
                    <div class="greet"><p class="">私はいただいた仕事に真摯に向き合い、要望通りなものを作成します。ぜひ私にお任せください。</p></div>
                </div>                
            </div>
        </section>
        <!-- Contact Section-->
         <section class="section">
            <div class="text-center">
                <!-- Contact Section Heading-->
                <h2 class="contact_me">Contact Me</h2>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                            <!-- Name input-->
                            <div class="">
                                <label for="name" class="name">Full name</label><br>
                                <input class="contact_name" placeholder="Enter your name..."/>
                            </div>
                            <!-- Email address input-->
                            <div class="">
                                <label for="email" class="email">Email address</label><br>
                                <input class="contact_email" placeholder="name@example.com"/>
                            <!-- Phone number input-->
                            <div class="">
                                <label for="phone" class="phone">Phone number</label><br>
                                <input class="contact_number bg-black" id="phone" type="tel" placeholder="(123) 456-7890"/>
                            </div>
                            <!-- Message input-->
                            <div class="">
                                <label for="message" class="message">Message</label><br>
                                <textarea class="contact_message" id="message" type="text" placeholder="Enter your message here..."></textarea>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="send_btn">Send</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            大阪府吹田市原町2-54-16-108
                            <br />
                            
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">SNS</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/instagram/"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://x.com/"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.line.me/ja/"><i class="fab fa-fw fa-line"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com"><i class="fab fa-fw fa-facebook-f"></i></a>
                    </div>
                    <div class="">
                        <h4 class="text-uppercase mb-4"></h4>
                        創業年月日 2025/01/12
                        <p class="lead mb-0">

                            
                        </p>
                    </div>

                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copy_right">
            <div class="container"><small>Copyright &copy; 2025</small></div>
        </div>
               
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solutioncontact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
    </html><?php /**PATH /Applications/MAMP/htdocs/all-atami/ikura/resources/views/profile.blade.php ENDPATH**/ ?>