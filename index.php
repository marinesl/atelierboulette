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
            try {
                $mail = new PHPMailer;
                $mail->isSMTP();                                     // Send using SMTP
                $mail->Host       = MAILER_SMTP;
                $mail->SMTPAuth   = true;                            // Enable SMTP authentication
                $mail->Username   = MAILER_EMAIL;
                $mail->Password   = MAILER_PASSWORD;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = MAILER_PORT;
                $mail->CharSet = 'UTF-8';

                //Recipients
                $mail->setFrom(MAILER_EMAIL, 'Mailer');
                $mail->addAddress(MAILER_EMAIL_DEST);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Prise de contact';
                // Body message
                $body = '<p>'.$message.'</p><p>'.$name.'</p><p>'.$email.'</p>';
                $altMessage = strip_tags($body);
                $altMessage = htmlspecialchars($altMessage);
                $mail->Body    = $body;
                $mail->AltBody = $altMessage;

                // Envoi du mail
                $mail->send();

                // Message à afficher sous le formulaire
                $form_message = 'Message envoy<img src="image/slide-contact/lettre-e.svg" alt="é"> !';

            } catch (Exception $e) {
                // Message à afficher sous le formulaire
                $form_message = "Erreur de formulaire : {$mail->ErrorInfo}";
            }
        //

    } else {
        // Message à afficher sous le formulaire
        $form_message = "Merci de remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier Boulette</title>

    <meta name="description" content="L'atelier Boulette vous propose des accessoires et de la décoration via les méthodes suivantes : Paper art, Résine, Upcycling, Flocage.">
    <meta name="keywords" content="atelier, boulette, paper art, décoration, résine, upcycling, flocage">

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
                <div><a href="#paper-art" title="Paper Art">Paper Art</a></div>
                <div><a href="#decoration" title="Décoration">Décoration</a></div>
                <div><a href="#resine" title="Résine">Résine</a></div>
                <div><a href="#upcycling" title="Upcycling">Upcycling</a></div>
                <div><a href="#flocage" title="Flocage">Flocage</a></div>
                <div class="header-contact"><a href="#contact" title="Contact">Contact</a></div>
            </header>

            <div class="logo mobile"><img src="image/slide-header/LOGO.svg" alt="Atelier Boulette"><h1>Atelier Boulette</h1></div>

            <header class="mobile">
                <nav id="nav" class="nav">
                    <!-- ACTUAL NAVIGATION MENU -->
                    <ul class="nav__menu" id="menu" tabindex="-1" aria-label="main navigation" hidden>
                        <li class="nav__item"><a href="#paper-art" class="nav__link" title="Paper Art">Paper Art</a></li>
                        <li class="nav__item"><a href="#decoration" class="nav__link" title="Décoration">Décoration</a></li>
                        <li class="nav__item"><a href="#resine" class="nav__link" title="Résine">Résine</a></li>
                        <li class="nav__item"><a href="#upcycling" class="nav__link" title="Upcycling">Upcycling</a></li>
                        <li class="nav__item"><a href="#flocage" class="nav__link" title="Flocage">Flocage</a></li>
                        <li class="nav__item header-contact"><a href="#contact" class="nav__link" title="Contact">Contact</a></li>
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
                <img src="image/slide-accueil/frame-1.svg" alt="Paper Art">
                <img src="image/slide-accueil/frame-2.svg" alt="Décoration">
                <img src="image/slide-accueil/frame-3.svg" alt="Résine">
                <img src="image/slide-accueil/frame-4.svg" alt="Upcycling">
                <img src="image/slide-accueil/cactus.svg" alt="Flocage">
            </div>

            <div id="button-etsy-mobile" class="button-etsy"><a href="https://etsy.me/3BCv00C" target="_blank" title="Boutique ETSY">en savoir +</a></div>
        </div>

        <!-- Slide Paper art -->
        <div class="section" id="section-paper-art" data-anchor="paper-art">
            <div class="content">
                <div class="content-text">
                    <div class="titre"><img src="image/slide-paper-art/paper-art.svg" alt="Paper art"></div>
                    <div class="description">
                        <div>Cake topper, cartes étapes,</div>
                        <div>panneaux, initiales 3D,</div>
                        <div>fanions, cartes de v&#339;ux...</div>
                    </div>
                </div>

                <div class="content-image">
                    <img src="image/slide-paper-art/frame-1.svg" alt="Cake topper">
                    <img src="image/slide-paper-art/tasse.svg" alt="Cartes étapes">

                    <img src="image/slide-paper-art/frame-2.svg" alt="Panneaux">
                    <img src="image/slide-paper-art/frame-3.svg" alt="Initiales 3D">
                    <img src="image/slide-paper-art/frame-4.svg" alt="Fanions">
                    <img src="image/slide-paper-art/frame-5.svg" alt="Cartes de v&#339;ux">
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
                <div class="titre"><img src="image/slide-deco/deco.svg" alt="Décoration"></div>
            </div>

            <div class="content-image">
                <img src="image/slide-deco/frame-1.svg" alt="Couronnes de fleurs">
                <img src="image/slide-deco/frame-2.svg" alt="Fanions">
                <img src="image/slide-deco/frame-3.svg" alt="Initiales 2D">
                <img src="image/slide-deco/frame-4.svg" alt="Couronnes de fleurs">
                <img src="image/slide-deco/frame-5.svg" alt="Fanions">

                <img src="image/slide-deco/ampoule.svg" alt="Initiales 2D">
                <img src="image/slide-deco/crayon.svg" alt="Couronnes de fleurs">
            </div>
        </div>

        <!-- Slider Résine -->
        <div class="section" id="section-resine" data-anchor="resine">
            <div class="content">
                <div class="content-text">
                    <div class="titre"><img src="image/slide-resine/resine.svg" alt="Résine"></div>
                    <div class="description">
                        <div>Porte clés, cake topper,</div>
                        <div>marques page...</div>
                    </div>
                </div>

                <div class="content-image">
                    <img src="image/slide-resine/frame-1.svg" alt="Porte clés">
                    <img src="image/slide-resine/frame-2.svg" alt="Cake topper">
                    <img src="image/slide-resine/frame-3.svg" alt="Marques page">
                    <img src="image/slide-resine/frame-4.svg" alt="Porte clés">
                    <img src="image/slide-resine/frame-5.svg" alt="Cake topper">

                    <img src="image/slide-resine/cactus.svg" alt="Marques page">
                    <img src="image/slide-resine/tasse.svg" alt="Porte clés">
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
                    <div class="titre"><img src="image/slide-upcycling/upcycling.svg" alt="Upcycling"></div>
                </div>

                <div class="content-image">
                    <img src="image/slide-upcycling/frame-1.svg" alt="Portes clé">
                    <img src="image/slide-upcycling/frame-2.svg" alt="Marques page">
                    <img src="image/slide-upcycling/frame-3.svg" alt="&#201;tiquettes de voyage">
                    <img src="image/slide-upcycling/frame-4.svg" alt="Portes clé">
                    <img src="image/slide-upcycling/frame-5.svg" alt="Marques page">

                    <img src="image/slide-upcycling/ampoule.svg" alt="&#201;tiquettes de voyage">
                    <img src="image/slide-upcycling/crayon.svg" alt="Portes clé">
                </div>
            </div>
        </div>

        <!-- Slider Flocage -->
        <div class="section" id="section-flocage" data-anchor="flocage">
            <div class="content">
                <div class="content-text">
                    <div class="titre"><img src="image/slide-flocage/flocage.svg" alt="Flocage"></div>
                    <div class="description">
                        <div>Portes clé, marques page,</div>
                        <div>étiquettes de voyage,</div>
                        <div>tote bag, pochettes...</div>
                    </div>
                </div>

                <div class="content-image">
                    <img src="image/slide-flocage/frame-1.svg" alt="Pochettes">
                    <img src="image/slide-flocage/tasse.svg" alt="Marques page">

                    <img src="image/slide-flocage/frame-2.svg" alt="&#201;tiquettes de voyage">
                    <img src="image/slide-flocage/frame-3.svg" alt="Tote bag">
                    <img src="image/slide-flocage/frame-4.svg" alt="Pochettes">

                    <img src="image/slide-flocage/cactus.svg" alt="Tote bag">
                </div>
            </div>
        </div>

        <!-- Slider Contact -->
        <div class="section" id="section-contact" data-anchor="contact">
            <div><h3>Toutes ces réalisations sont personnalisables</h3></div>

            <div class="content">
                <div>
                    <div class="titre"><img src="image/slide-contact/une-question.svg" alt="Une question ?"></div>
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
                        <div class="titre"><img src="image/slide-contact/un-like.svg" alt="Un like ?"></div>
                        <div class="rs"><a href="https://www.facebook.com/atelierboulette/" target="_blank" title="Facebook"><img src="image/slide-contact/facebook.svg" alt="Facebook"></a></div>
                        <div class="rs"><a href="https://www.instagram.com/atelierboulette/" target="_blank" title="Instagram"><img src="image/slide-contact/instagram.svg" alt="Instagram"></a></div>
                        <div class="rs"><a href="https://etsy.me/3BCv00C" target="_blank" title="Boutique ETSY"><img src="image/slide-contact/etsy.svg" alt="Etsy"></a></div>
                    </div>

                    <footer>
                        <div>
                            <a href="mentions-legales.html" title="Mentions légales">Mentions légales</a>
                        </div>
                    </footer>
                </div>

            </div>
        </div>
    </div>

    <div id="button-etsy-desktop" class="button-etsy"><a href="https://etsy.me/3BCv00C" target="_blank" title="Boutique ETSY">en savoir +</a></div>
    

    <script src="script/jquery-3.6.0.min.js"></script>
    <script src="script/fullpage.min.js"></script>
    <script src="script/script.js"></script>

</body>

</html>