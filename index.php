<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php/PHPMailer/src/Exception.php';
require 'php/PHPMailer/src/PHPMailer.php';
require 'php/PHPMailer/src/SMTP.php';

// Message à afficher
$form_message = null;


if (!empty($_POST)) {

    // GET les informations du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($name != '' && $email != '' && $message != '') {

        /****************
         * MAIL
        *****************/
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                // $mail->isSMTP();                                            //Send using SMTP
                /*$mail->Host       = 'burrito.o2switch.net';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'contact@marinelancelin.fr';                     //SMTP username
                $mail->Password   = 'baM3i7m2RiRx';                               //SMTP password
                $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('contact@marinelancelin.fr', 'Mailer');
                $mail->addAddress('atelierboulette@gmail.com');     //Add a recipient

                // Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Prise de contact';
                $mail->Body    = '<p>'.$message.'</p><p>'.$name.'</p><p>'.$email.'</p>';

                // Envoi du mail
                $mail->send();*/
                $form_message = 'Message envoy<img src="image/slide-contact/lettre e.svg" alt="é"> !';
            } catch (Exception $e) {
                $form_message = "Erreur de formulaire : {$mail->ErrorInfo}";
            }
        //
    } else {
        $form_message = "Merci de remplir tous les champs.";
    }
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier Boulette</title>

    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/fullpage.min.css">

    <!-- TODO: Décommenter en ligne -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-R89XSB38RB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-R89XSB38RB');
    </script> -->
</head>

<body>

    <div id="fullpage">

        <!-- Slide Home -->
        <div class="section" id="section-home" data-anchor="accueil">
            <header class="desktop">
                <div><img src="image/slide-header/LOGO.svg" alt="Atelier Boulette"><h1>Atelier Boulette</h1></div>
                <div><a href="#paper-art">Paper Art</a></div>
                <div><a href="#decoration">Décoration</a></div>
                <div><a href="#resine">Résine</a></div>
                <div><a href="#upcycling">Upcycling</a></div>
                <div><a href="#flocage">Flocage</a></div>
                <div class="header-contact"><a href="#contact">Contact</a></div>
            </header>

            <div class="logo mobile"><img src="image/slide-header/LOGO.svg" alt="Atelier Boulette"><h1>Atelier Boulette</h1></div>

            <header class="mobile">
                <nav id="nav" class="nav">
                    <!-- ACTUAL NAVIGATION MENU -->
                    <ul class="nav__menu" id="menu" tabindex="-1" aria-label="main navigation" hidden>
                        <li class="nav__item"><a href="#paper-art" class="nav__link">Paper Art</a></li>
                        <li class="nav__item"><a href="#decoration" class="nav__link">Décoration</a></li>
                        <li class="nav__item"><a href="#resine" class="nav__link">Résine</a></li>
                        <li class="nav__item"><a href="#upcycling" class="nav__link">Upcycling</a></li>
                        <li class="nav__item"><a href="#flocage" class="nav__link">Flocage</a></li>
                        <li class="nav__item header-contact"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                    
                    <!-- MENU TOGGLE BUTTON -->
                    <a href="#nav" class="nav__toggle" aria-expanded="false" aria-controls="menu">
                        <svg class="menuicon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                        <title>Toggle Menu</title>
                        <g><line class="menuicon__bar" x1="13" y1="16.5" x2="37" y2="16.5"/><line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/><line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/><line class="menuicon__bar" x1="13" y1="32.5" x2="37" y2="32.5"/></g>
                        </svg>
                    </a>
                    
                    <!-- ANIMATED BACKGROUND ELEMENT -->
                    <div class="splash"></div>
                </nav>
            </header>

            <div class="content-image">
                <img src="image/slide-accueil/frame 1.svg" alt="Photo">
                <img src="image/slide-accueil/frame 2.svg" alt="Photo">
                <img src="image/slide-accueil/frame 3.svg" alt="Photo">
                <img src="image/slide-accueil/frame 4.svg" alt="Photo">
                <img src="image/slide-accueil/cactus.svg" alt="Cactus">
            </div>

            <button id="button-etsy-mobile" class="button-etsy"><a href="https://etsy.me/3BCv00C" target="_blank" title="Boutique ETSY">en savoir +</a></button>
        </div>

        <!-- Slide Paper art -->
        <div class="section" id="section-paper-art" data-anchor="paper-art">
            <div class="content">
                <div class="content-text">
                    <div class="titre"><img src="image/slide-paper-art/paper art.svg" alt="Paper art"></div>
                    <!-- <div><h2>Paper <span>Art</span></h2></div> -->
                    <div class="description">
                        <div>Cake topper, cartes étapes,</div>
                        <div>panneaux, initiales 3D,</div>
                        <div>fanions, cartes de v&#339;ux...</div>
                    </div>
                </div>

                <div class="content-image">
                    <img src="image/slide-paper-art/frame 1.svg" alt="Photo">
                    <img src="image/slide-paper-art/tasse.svg" alt="Tasse">

                    <img src="image/slide-paper-art/frame 2.svg" alt="Photo">
                    <img src="image/slide-paper-art/frame 3.svg" alt="Photo">
                    <img src="image/slide-paper-art/frame 4.svg" alt="Photo">
                    <img src="image/slide-paper-art/frame 5.svg" alt="Photo">
                </div>
            </div>
        </div>

        <!-- Slider Déco -->
        <div class="section" id="section-deco" data-anchor="decoration">
            <div class="content-text">
                <div class="description">
                    <div>Couronnes de fleurs,</div>
                    <div>fanions, initiales 2D...</div>
                </div>
                <!-- <div><h2>D<img src="image/slide-deco/lettre e.svg" alt="é">co</h2></div> -->
                <div class="titre"><img src="image/slide-deco/deco.svg" alt="Déco"></div>
            </div>

            <div class="content-image">
                <img src="image/slide-deco/frame 1.svg" alt="Photo">
                <img src="image/slide-deco/frame 2.svg" alt="Photo">
                <img src="image/slide-deco/frame 3.svg" alt="Photo">
                <img src="image/slide-deco/frame 4.svg" alt="Photo">
                <img src="image/slide-deco/frame 5.svg" alt="Photo">

                <img src="image/slide-deco/ampoule.svg" alt="Ampoule">
                <img src="image/slide-deco/crayon.svg" alt="Crayon">
            </div>
        </div>

        <!-- Slider Résine -->
        <div class="section" id="section-resine" data-anchor="resine">
            <div class="content">
                <div class="content-text">
                    <!-- <div><h2>R<img src="image/slide-deco/lettre e.svg" alt="é">si<br><span>ne</span></h2></div> -->
                    <div class="titre"><img src="image/slide-resine/resine.svg" alt="Résine"></div>
                    <div class="description">
                        <div>Porte clés, cake topper,</div>
                        <div>marques page...</div>
                    </div>
                </div>

                <div class="content-image">
                    <img src="image/slide-resine/frame 1.svg" alt="Photo">
                    <img src="image/slide-resine/frame 2.svg" alt="Photo">
                    <img src="image/slide-resine/frame 3.svg" alt="Photo">
                    <img src="image/slide-resine/frame 4.svg" alt="Photo">
                    <img src="image/slide-resine/frame 5.svg" alt="Photo">

                    <img src="image/slide-resine/cactus.svg" alt="Cactus">
                    <img src="image/slide-resine/tasse.svg" alt="Tasse">
                </div>
            </div>
        </div>

        <!-- Slider Up cycling -->
        <div class="section" id="section-up-cycling" data-anchor="upcycling">
            <div class="content">
                <div class="content-text">
                    <div class="description">
                        <div>Portes clé, marques page,</div>
                        <div>étiquettes de voyage...</div>
                    </div>
                    <!-- <div><h2><span>Up</span> cycling</h2></div> -->
                    <div class="titre"><img src="image/slide-upcycling/upcycling.svg" alt="Upcycling"></div>
                </div>

                <div class="content-image">
                    <img src="image/slide-upcycling/frame 1.svg" alt="Photo">
                    <img src="image/slide-upcycling/frame 2.svg" alt="Photo">
                    <img src="image/slide-upcycling/frame 3.svg" alt="Photo">
                    <img src="image/slide-upcycling/frame 4.svg" alt="Photo">
                    <img src="image/slide-upcycling/frame 5.svg" alt="Photo">

                    <img src="image/slide-upcycling/ampoule.svg" alt="Ampoule">
                    <img src="image/slide-upcycling/crayon.svg" alt="Crayon">
                </div>
            </div>
        </div>

        <!-- Slider Flocage -->
        <div class="section" id="section-flocage" data-anchor="flocage">
            <div class="content">
                <div class="content-text">
                    <!-- <div><h2>Flo<br><span>cage</span></h2></div> -->
                    <div class="titre"><img src="image/slide-flocage/flocage.svg" alt="Flocage"></div>
                    <div class="description">
                        <div>Portes clé, marques page,</div>
                        <div>étiquettes de voyage, tote bag, pochettes...</div>
                    </div>
                </div>

                <div class="content-image">
                    <img src="image/slide-flocage/frame 1.svg" alt="Photo">
                    <img src="image/slide-flocage/tasse.svg" alt="Tasse">

                    <img src="image/slide-flocage/frame 2.svg" alt="Photo">
                    <img src="image/slide-flocage/frame 3.svg" alt="Photo">
                    <img src="image/slide-flocage/frame 4.svg" alt="Photo">

                    <img src="image/slide-flocage/cactus.svg" alt="Cactus">
                </div>
            </div>
        </div>

        <!-- Slider Contact -->
        <div class="section" id="section-contact" data-anchor="contact">
            <div><h3>Toutes ces réalisations sont personnalisables</h3></div>

            <div class="content">
                <div>
                    <!-- <h2><span>Une</span> question ?</h2> -->
                    <div class="titre"><img src="image/slide-contact/une question.svg" alt="Une question ?"></div>
                    <div>
                        <form action="index.php#contact" 
                        method="post">
                            <input type="text" name="name" id="name" placeholder="Nom et prénom :" required>
                            <input type="email" name="email" id="email" placeholder="Email :" required>
                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Message :" required></textarea>
                            <?php if ($form_message != null): ?><p class="message"><?php echo $form_message; ?></p><?php endif; ?>
                            <input type="submit" value="Envoyer">
                        </form>
                    </div>
                </div>

                <div>
                    <div>
                        <!-- <h2><span>Un</span> like ?</h2> -->
                        <div class="titre"><img src="image/slide-contact/un like.svg" alt="Un like ?"></div>
                        <div class="rs"><a href="https://www.facebook.com/atelierboulette/" target="_blank" title="Page Facebook"><img src="image/slide-contact/facebook.svg" alt="Facebook"></a></div>
                        <div class="rs"><a href="https://www.instagram.com/atelierboulette/" target="_blank" title="Page Instagram"><img src="image/slide-contact/instagram.svg" alt="Instagram"></a></div>
                        <div class="rs"><a href="https://etsy.me/3BCv00C" target="_blank" title="Boutique ETSY"><img src="image/slide-contact/etsy.svg" alt="Etsy"></a></div>
                    </div>

                    <footer>
                        <div>
                            <a href="mentions-legales.html">Mentions légales</a>
                        </div>
                    </footer>
                </div>

            </div>
        </div>
    </div>

    <button id="button-etsy-desktop" class="button-etsy"><a href="https://etsy.me/3BCv00C" target="_blank" title="Boutique ETSY">en savoir +</a></button>
    

    <script src="script/jquery-3.6.0.min.js"></script>
    <script src="script/fullpage.min.js"></script>
    <script src="script/script.js"></script>

</body>

</html>