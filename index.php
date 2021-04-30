<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'mimsinaz@gmail.com';
      $mail->Password = '741852963mimsi';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('alexakleinayes@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('alexakleinayes@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      $mail->send();
      $output = '<div class="">
                  <h5 class="alert-sucess">Thankyou! for contacting  me, I\'ll get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="">
                  <h5 class="alert-danger">' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<style>
    #box1 {
        width: 530px;
        height: 625px;
        background-image: url('assets/laptop1.png');
        background-repeat: no-repeat;
        position: absolute;
        bottom: -100%;
        left: 30%;
        animation: anim 2s forwards, anim2 3s forwards 3s;
    }

    #box1::after {
        content: '';
        position: absolute;
        background-repeat: no-repeat;
        width: 530px;
        height: 625px;
        background-image: url('assets/laptop2.png');
        left: 0px;
        z-index: -1;
    }

    @keyframes anim {
        from {
            bottom: -100%;
        }

        to {
            bottom: 0%;
        }
    }

    @keyframes anim2 {
        from {
            left: 30%;
            width: 530px;
        }

        to {
            width: 0px;
            left: 50%;
        }
    }


    #box2 {
        width: auto;
        height: auto;
        color: white;
        line-height: 130px;
        position: absolute;
        top: 250px;
        left: 100px;
        overflow: hidden;

    }

    #text {
        position: relative;
        left: -100%;
        animation: anim3 2s forwards 3s;
    }

    @keyframes anim3 {
        from {
            left: -100%;
        }

        to {
            left: 0%;
        }
    }


    @media only screen and (max-width: 801px) {
        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: 140;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 10%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: 10%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -40%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }

    @media only screen and (max-width: 768px) {
        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: 120;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 10%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: 10%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -5%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }


    @media only screen and (max-width: 600px) {

        .main_text {
            font-size: 30px;
        }

        .sub_text {
            font-size: 22px;
            margin-top: 0px;
            margin-bottom: 10px;
        }

        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: -70;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 0%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: 0%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -35%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }

    @media only screen and (max-width: 480px) {
        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: -0;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 0%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: 0%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -40%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }

    @media only screen and (max-width: 414px) {
        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: -50;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 0%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: 0%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -30%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }

    @media only screen and (max-width: 411px) {
        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: -50;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 0%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: 0%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -20%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }

    @media only screen and (max-width: 375px) {
        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: -70;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 0%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: 0%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -30%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }

    @media only screen and (max-width: 360px) {
        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: -70;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 0%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: 0%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -35%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }

    @media only screen and (max-width: 320px) {
        #box1 {
            width: 530px;
            height: 625px;
            background-image: url('assets/laptop1.png');
            background-repeat: no-repeat;
            position: absolute;
            bottom: -100%;
            left: -90;
            animation: anim 2s forwards, anim2 3s forwards 3s;

        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: -10%;
            }
        }

        @keyframes anim2 {
            from {
                bottom: -10%;
                width: 530px;
            }

            to {
                width: 0px;
                bottom: -50%;
            }
        }

        #box2 {
            position: absolute;
            left: 0px;
            top: 170;
            text-align: center;
            width: 100%;
            line-height: 50px;
            animation: anim3 1s forwards 2s;

        }
    }


    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
</style>

<body>

    <div id="home">
        <div class="hero">
            <div class="navbar">
                <!-- <img src="assets/logo.png" class="logo"> -->
                <span class="multicolortext">Alexa.</span>
                <!-- <img src="assets/menu.png" class="menu" onclick="openNav()"> -->
                <span class="side-icon" onclick="openNav()">&#9776;</span>
            </div>
            <div id="box2">
                <div id="text">
                    <h1 class="main_text">Hi I'm Alexa Klein </h1>
                    <h1 class="sub_text">Developer & Designer</h1>
                    <button type="button" onclick="scrollContact()" class="take">Say Hi!</button>
                </div>
            </div>

            <div id="box1">

            </div>
        </div>
    </div>

    <div class="about-main" id="about">
        <div class="about-con">
            <div class="col-1" data-aos="fade-up">
                <img src="assets/me.jpg">
            </div>
            <div class="row-container">
                <div class="heading_par">
                    <p>About Me</p>
                </div>
                <div class="col-2" data-aos="fade-up">
                    <div class="container-div">
                        <div class="lines">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <p class="paragraph">I'm a UI Designer and Front End Developer from Muntinlupa Phillipines. When it
                        comes to
                        design I always value customer preferences combine with my passion for creativity and aesthetic
                        approach. Design that understands both customer & user through functional flows and transitions
                        will be my consistently top priority.
                        <br>
                        <br>
                        I also love coding and developing. Writing clean and efficient code with a touch of proper
                        animation will always enhance user experience, which increase the level of interest on a
                        website.

                    </p>
                </div>
                <button type="button" id="myBtn" class="resume">View my Resume</button>
            </div>

        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="view_pdf"></div>
        </div>

    </div>

    <div class="services-main" id="services">
        <div class="services-con">
            <div class="section-heading">
                <p class="main-serv-text">Services</p>
                <div class="container-div">
                    <div class="lines2">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>

            <div class="my-services">
                <p class="sub-serv-text">What I can do for you</p>
                <div class="my-services-con">
                    <div class="subserve-container" data-aos="fade-right">
                        <img src="web_design.svg">
                        <p class="sub-small-text">Web Design</p>
                    </div>

                    <div class="subserve-container" data-aos="fade-up">
                        <img src="web_dev.svg">
                        <p class="sub-small-text">Web Development</p>
                    </div>

                    <div class="subserve-container" data-aos="fade-left">
                        <img src="mobile_design.svg">
                        <p class="sub-small-text">Mobile App Design</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="skills-main" id="skills">
        <div class="skills-con">

            <div class="row-container2">
                <div class="heading_par">
                    <p class="main-serv-text"> My Skills</p>
                </div>

                <div class="col-2" data-aos="fade-right">
                    <div class="container-div">
                        <div class="lines">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <p class="paragraph">The skills I gathered on every experience further helps me to execute a job properly and on time.
                       However I believe there's always  a room for improvement. Would you let me be your partner in growth and development?<br><br>
                     Kindly check my portfolio and lets work together! <i class="fa fa-smile-o" aria-hidden="true"></i>
                    </p>
                </div>
            </div>

            <div class="skill-list">
                <li>
                    <h3>HTML</h3><span class="bar"><span class="html"></span></span>
                </li>
                <li>
                    <h3>CSS</h3><span class="bar"><span class="css"></span></span>
                </li>
                <li>
                    <h3>JQUERY</h3><span class="bar"><span class="jquery"></span></span>
                </li>
                <li>
                    <h3>JAVASCRIPT </h3><span class="bar"><span class="javascript"></span></span>
                </li>
            </div>

        </div>
    </div>

    <div class="works-main" id="works">
        <div class="work-con">
            <div class="col-2" data-aos="fade-down">
                <div class="heading_par2">
                    <p class="main-serv-text"> My Works</p>
                </div>
                <div class="container-div">
                    <div class="lines">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>

            <div class="swiper-container">
                <p class="paragraph-mockup">Mock up Designs</p>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="banner-img" src="assets/ebanner.png" />
                        <button class="view-work" id="myButton">View Work</button>
                    </div>
                    <div class="swiper-slide">
                        <img class="banner-img" src="assets/mobilebanner.png" />
                        <button class="view-work" id="myButtonapp">View Work</button>
                        <!-- <a href="#" class="view-work">View Work</a> -->
                    </div>
                    <div class="swiper-slide">
                        <img class="banner-img" src="assets/cbanner.png" />
                        <button class="view-work" id="myButtoncoffee">View Work</button>
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>

           

            <div class="col-2" style="margin-top:30px;">
                <div class="container-div">
                    <div class="lines">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>


            <div class="swiper-container">
                <p class="paragraph-mockup">Contributor to a projects under Clique Management</p>
                <div class="swiper-wrapper">
                   
                    <div class="swiper-slide">
                        <img style="width:60%; height:50%;" src="assets/fav.png" />
                        <div class="view-work">Ecommerce Website</div>
                    </div>
                    <div class="swiper-slide">
                        <img style="width:60%; height:80%;" src="assets/banner-con.jpg" />
                        <div class="view-work">Mobile Application</div>

                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>


        
        </div>
    </div>



    <div class="contact-main" id="contact">
        <div class="contact-con">

            <div class="row-container2">
                <div class="heading_par">
                    <p class="main-serv-text"> Say Hi</p>
                </div>

                <div class="col-2">
                    <div class="container-div">
                        <div class="lines">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="contact-data">
                        <ul>
                            <li class="sub-contact" data-aos="fade-up" data-aos-offset="300"
                                data-aos-easing="ease-in-sine" data-aos-delay="200">
                                <div class="seperation">
                                    <div class="round">
                                        <i class="fa fa-phone" style="color: black; font-size: 24px;"
                                            aria-hidden="true"></i>
                                    </div>

                                    <div>
                                        <p class="sub-txt-contact">CALL ME</p>
                                        <p class="par-txt">+639-302-818-979</p>
                                    </div>
                                </div>
                            </li>

                            <li class="sub-contact" data-aos="fade-up" data-aos-offset="300"
                                data-aos-easing="ease-in-sine" data-aos-delay="400">
                                <div class="seperation">
                                    <div class="round">
                                        <i class="fa fa-envelope-o" style="color: black; font-size: 24px;"
                                            aria-hidden="true"></i>
                                    </div>

                                    <div>
                                        <p class="sub-txt-contact">EMAIL ME</p>
                                        <p class="par-txt">alexakleinayes@gmail.com</p>
                                    </div>

                                </div>
                            </li>

                            <li class="sub-contact" data-aos="fade-up" data-aos-offset="300"
                                data-aos-easing="ease-in-sine" data-aos-delay="600">
                                <div class="seperation">
                                    <div class="round">
                                        <i class="fa fa-home" style="color: black; font-size: 24px;"
                                            aria-hidden="true"></i>
                                    </div>

                                    <div>
                                        <p class="sub-txt-contact">ADDRESS</p>
                                        <p class="par-txt">303 E2 Mendiola St. Alabang Muntinlupa City</p>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="fields">
                <h5 id="output_id">
                    <?= $output; ?>
                </h5>
                <form action="#contact" method="post">
                    <input type="text" class="text-input" name="name" placeholder="Your Name" required>
                    <input type="text" class="text-input" name="email" placeholder="Your Email" required>
                    <textarea class="text-area" rows="4" name="message" placeholder="Message" required></textarea>
                    <button class="resume" name="submit" id="submit" type="submit">Submit</button>
                </form>
            </div>

        </div>
    </div>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h2
            style="color:#818181; padding-bottom: 10px; padding-left: 20px; padding-top: 40px; text-transform: uppercase;">
            Hello There !
        </h2>
        <div class="side-menu">
            <a href="#home">Home</a>
            <a id="" href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#skills">Skills</a>
            <a href="#works">Works</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="social-links-2">
            <a href="https://www.facebook.com/alexaklein.ayes" target="_blank"> <img src="assets/fb.png"></a>
            <a href="https://www.instagram.com/cooliemim/" target="_blank"><img src="assets/ig.png"></a>
            <a href="https://twitter.com/AyesAlexa" target="_blank"><img src="assets/tw.png"></a>
        </div>
    </div>

    <div class="cursor"></div>

    <footer class="copyright">
        <div class="up" id="up">
            <i class="fa fa-chevron-up" aria-hidden="true"><a href="#home"></a></i>
        </div>
        <p>&copy; 2021 Alexa Klein Ayes</p>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="pdfobject.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        AOS.init({
            duration: 1600,
        })
        function openNav() {
            document.getElementById("mySidenav").style.width = "200px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        $("#up").on("click", function () {
            $("body").scrollTop(0);
        });


    </script>

    <script>
        const cursor = document.querySelector('.cursor');

        document.addEventListener('mousemove', e => {
            cursor.setAttribute("style", "top: " + (e.pageY - 0) + "px; left: " + (e.pageX - 10) + "px;")
        })

        document.addEventListener('click', () => {
            cursor.classList.add("expand");

            setTimeout(() => {
                cursor.classList.remove("expand");
            }, 500)
        })
    </script>


    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


    <script>
        var viewer = $('#view_pdf');
        PDFObject.embed('Ayes_Alexa_Klein_Resume_New.pdf', viewer);


        document.getElementById("myButton").onclick = function () {
            location.href = "ecommerce.html";
        };

        document.getElementById("myButtoncoffee").onclick = function () {
            location.href = "coffee.html";
        };

        document.getElementById("myButtonapp").onclick = function () {
            location.href = "app.html";
        };

        $("#myButtonobando").on('click', function () {
            window.open("https://obando.clique.com.ph/", "_blank");
        });

        $("#myButtonfavori").on('click', function () {
            window.open("http://favori.clique.com.ph/", "_blank");
        });

    </script>

    <script>
        jQuery(document).ready(function () {
            setTimeout(function () {
                $('#output_id').html('')
            }, 7000);
        });

    </script>

    <script>
        function scrollContact() {
            $('html,body').animate({
                scrollTop: $("#contact").offset().top
            },
                'slow');
        }
    </script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
</body>

</html>