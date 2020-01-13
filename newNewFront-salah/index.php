<?php
//Verification si le mail est déjà en BDD
if($_POST){
    if(!empty($_POST['nom'])  && !empty($_POST['prenom'])  && !empty($_POST['email'])) {
        $r = $bdd->prepare("SELECT * FROM participant WHERE email = '$_POST[email]' ");
        $r->execute();
        if($r->rowCount() >= 1 ){
            $inscrip = '<div style="color:red;text-align:center;">Email indisponible</div>';
        }
        unset($r);
        if (empty($inscrip)){
            $r= $bdd->prepare("INSERT INTO participant(nom, prenom, email) VALUES('$_POST[nom]', '$_POST[prenom]', '$_POST[email]')");
            $r->execute();
        }
    }
}
?>

<?php if(!empty($inscrip)){
    echo ($inscrip);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ipssi_day_event.com</title>
        <script src="https://kit.fontawesome.com/165c31b1e6.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Rubik:300,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/CSS-salah/stylesheet.css">
        <link rel="stylesheet" href="public/CSS-salah/header.css">
        <link rel="stylesheet" href="public/CSS-salah/main-section.css">
        <link rel="stylesheet" href="public/CSS-salah/section-presentation.css">
        <link rel="stylesheet" href="public/CSS-salah/planing.css">
        <link rel="stylesheet" href="public/CSS-salah/partner.css">
        <link rel="stylesheet" href="public/CSS-salah/forms.css">
        <link rel="stylesheet" href="public/CSS-salah/section-information.css">
        <link rel="stylesheet" href="public/CSS-salah/footer.css">
    </head>
    <body>
        <header>
            <nav id="navBar">
                <a href="#section1" class="navBar-link">Home</a>
                <a href="#section2" class="navBar-link">Description</a>
                <a href="#section3" class="navBar-link">Partenaires</a>
                <a href="#section4" class="navBar-link">Organisation</a>
                <a href="#section5" class="navBar-link">Formulaire</a>
                <a href="#section6" class="navBar-link">Information</a>
            </nav>
        </header>
        <section class="section-main">
            <img src="public/images/background-1.png" class="main-background" alt="">
            <h1 class="main-title" id="title-1">L'Ecole Ipssi vous invite</h1>
            <h1 class="main-title" id="title-2">A la rencontre du monde digital</h1>
            <a href="" class="contact-button">Contactez-nous</a>
        </section>
        <section class="section-presentation">
            <article class="container-article-1">
                <h1 class="presentation-title">Qu'est-ce que l'IPSSY Day ?</h1>
                <div class="content-article-1">
                    <p class="content-art"><span>20</span></br></br>Conférences</p>
                    <p class="content-art"><span>10</span></br></br>Intervenants</p>
                    <p class="content-art"><span>300</span></br></br>Participants</p>
                </div>
            </article>
            <article class="container-article-2">
                <p class="content-text">
                    L'IPSSY Day, c'est occasion de rencontrer professionnel du web, de la programation,
                    de s'informer des dernières pratiques ou participer à un vaste salon de networking.
                    <br/><br/>
                    Pendant une journée, L'IPPSY Paris vous ouvre ses portes pour assister à plus de 35
                    conférences dispensées par pas moins de 10 intervenants d'horizon variées.
                    <br/><br/>
                    Mais il y a plus encore que de simples conférences. Venez tester votre ingéniosité
                    sur nos hacks contest, confrontez vous lors de folles Kahoot party, trouvez votre
                    futur employeur à un buffets après une intense session d'apprentissage, ...
                    <br/><br/>
                    Vous l'aurez compris, l'IPSSY Day est un évènenement à ne pas manquer ;)
                </p>
            </article>
        </section>
        <section class="section-planing">
            <article class="container-planing-1">
                <h1 class="title-planing">Comment ça se passe ?</h1>
                <div class="content-planning">
                    <table>
                        <tr class="line-first">
                            <td class="col-salle-0" colspan="2"></td>
                            <td class="col-salle-1">Salle 1</td>
                            <td class="col-salle-2">Salle 2</td>
                            <td class="col-salle-conf-1" colspan="2">Salle de conférence principal</td>
                            <td class="col-salle-conf-2" colspan="2">Salle de conférence 2</td>
                            <td class="col-salle-3">Salle 3</td>
                            <td class="col-salle-4">Salle 4</td>
                        </tr>
                        <tr>
                            <td class="col-side" colspan="2">HORAIRES :</td>
                            <td class="col-salle-1">ATELIER Question pour un champion "La gestion d'une entreprise de e-commerce" (Kahoot / Quizz)</td>
                            <td class="col-salle-2">ATELIER Hackathon + "Crocheter une serrure"</td>
                            <td class="col-salle-c-1">"Comment améliorer l efficacite de la cybersecurité »</td>
                            <td class="col-salle-c-1">"Ipssi Alumnis (anciens élèves IPSSI): ils racontent leur parcours"</td>
                            <td class="col-salle-c-2">"L'évolution de la place des big data dans le monde digital "</td>
                            <td class="col-salle-c-2">"L'explosion et l'evolution de JavaScript dans le monde informatique"</td>
                            <td class="col-salle-3">"L'explosion et l'evolution de JavaScript dans le monde informatique"</td>
                            <td class="col-salle-4">"L importance de stratégie social media pour une entreprise "</td>
                        </tr>
                        <tr>
                            <td class="col-side">DEBUT</td>
                            <td class="col-side">FIN</td>
                            <td class="col-void" colspan="8"></td>
                        </tr>
                        <tr>
                            <td class="col-side">9h45</td>
                            <td class="col-side">10h</td>
                            <td class="col-limite" colspan="8">Conférence d'ouverture, présentation de la journée et des sponsors...</td>
                        </tr>
                        <tr>
                            <td class="col-side">10h</td>
                            <td class="col-side">10h30</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">10h30</td>
                            <td class="col-side">11h</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">11h</td>
                            <td class="col-side">11h30</td>
                            <td class="col-salle-1">PAUSE / Coffee</td>
                            <td class="col-salle-2">PAUSE / Coffee</td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">11h30</td>
                            <td class="col-side">12h</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">12h</td>
                            <td class="col-side">12h30</td>
                            <td class="col-salle-1">PAUSE / Coffee</td>
                            <td class="col-salle-2">PAUSE / Coffee</td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">12h30</td>
                            <td class="col-side">13h</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">14h</td>
                            <td class="col-side">14h30</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">14h30</td>
                            <td class="col-side">15h</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">15h</td>
                            <td class="col-side">15h30</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">15h30</td>
                            <td class="col-side">16h</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">16h</td>
                            <td class="col-side">16h30</td>
                            <td class="col-salle-1">PAUSE / Coffee</td>
                            <td class="col-salle-2">PAUSE / Coffee</td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>

                        <tr>
                            <td class="col-side">16h30</td>
                            <td class="col-side">17h</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">17h</td>
                            <td class="col-side">17h30</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">17h30</td>
                            <td class="col-side">18h</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">18h</td>
                            <td class="col-side">18h30</td>
                            <td class="col-salle-1">PAUSE / Coffee</td>
                            <td class="col-salle-2">PAUSE / Coffee</td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">18h30</td>
                            <td class="col-side">19h</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">19h</td>
                            <td class="col-side">19h30</td>
                            <td class="col-salle-1"></td>
                            <td class="col-salle-2"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-1"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-c-2"></td>
                            <td class="col-salle-3"></td>
                            <td class="col-salle-4"></td>
                        </tr>
                        <tr>
                            <td class="col-side">19h30</td>
                            <td class="col-side">19h45</td>
                            <td class="col-limite" colspan="8">Conférence de fermeture, remerciement et clotûre</td>
                        </tr>
                    </table>
                </div>

            </article>
            <article class="container-planing-2">
                <h1>CONFERENCE PRINCIPALE</h1>
                <div class="container-conf">
                    <div class="content-conf">
                        <p class="speacker">M. Rick Sanchez</p>
                        <p class="speach-name">"Comment améliorer l'efficacité de la cybersécurité"</p>
                    </div>
                    <div class="content-conf">
                        <p class="speacker">Mme. Olivia Poop</p>
                        <p class="speach-name">“L'évolution de la place des big data dans le monde”</p>
                    </div>
                    <div class="content-conf">
                        <p class="speacker">M. Tyler Durden</p>
                        <p class="speach-name">“L’importance de la stratégie social media pour une entreprise”</p>
                    </div>
                </div>
                <h1>CONFERENCE SECONDAIRE</h1>
                <div class="container-conf">
                    <div class="content-conf">
                        <p class="speacker">M.Inigo Montoya</p>
                        <p class="speach-name">“La gestion d’une entreprise de e-commerce”</p>
                    </div>
                    <div class="content-conf">
                        <p class="speacker">M. Vito Corleone</p>
                        <p class="speach-name">L’explosion et l’évolution de JavaScript dans le monde informatique”</p>
                    </div>
                    <div class="content-conf">
                        <p class="speacker">Mme. Ellen Ripley</p>
                        <p class="speach-name">“IPSSI ALUMNIS ( anciens élèves IPSSI) : Ils racontent leur parcours”</p>
                    </div>
                </div>
            </article>
        </section>
        <section class="section-forms">
            <h1 class="title-forms">Participez à l'Ipssi Day !</h1>
            <form class="container-forms"  method="post">
                <div class="container-forms-bloc1">
                    <div class="content-forms">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" maxlength="100" required>
                    </div>
                    <div class="content-forms">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" maxlength="100" required>
                    </div>
                    <div class="content-forms">
                        <label for="email">Email</label>
                        <input type="email" name="email" maxlength="100" required>
                    </div>
                </div>
                <div class="container-forms-bloc2">
                    <input type="submit" value="Valider" class="button">
                </div>
            </form>
        </section>
        <section class="section-partner">
            <article class="article-parntership">
                <div class="container-partner-presentation">
                    <div class="content-partner-text">
                        <p>
                            Offrez vous plus de visibilité en devenant notre sponsors.</br></br>
                            Nous avons mis en place divers dispositifs afin que votre entreprise puissent particper à notre évenement
                            et ayez l'affichage souhaiter pour vous promouvoir.
                        </p>
                        <p id="title-liste">LES AVANTAGES DE NOUS SPONSORISER :</p>
                        <ul>
                            <li>Avoir votre logo afficher sur divers surface</li>
                            <li>Présentation de vos produits sur le site de l'évènement</li>
                            <li>Communication sur nos réseaux sociaux</li>
                            <li>...</li>
                        </ul>
                    </div>
                </div>
                <div class="container-partner-image">
                    <img src="" class="" alt="">
                    <a class="button-sponsor">SPONSORISER !</a>
                </div>
            </article>
        </section>
        <section class="section-info">
            <article class="container-info-left">

            </article>
            <article class="container-info-right">
                <div class="container-adresse">
                    <p>IPSSI</p>
                    <p>25 Claude Tillier</p>
                    <p>75012, Paris</p>
                </div>
                <div class="container-social">
                    <a class="social-link"><img src="public/images/icon/facebook.png" class="social-image" alt=""></a>
                    <a class="social-link"><img src="public/images/icon/twitter%20(2).png" class="social-image" alt=""></a>
                    <a class="social-link"><img src="public/images/icon/linkedin%20(3).png" class="social-image" alt=""></a>
                    <a class="social-link"><img src="public/images/icon/logo%20(1).png" class="social-image" alt=""></a>
                </div>
            </article>
        </section>
        <footer>
            <div class="container-link">
                <a class="footer-link"></a>
                <a class="footer-link"></a>
                <a class="footer-link">A propos</a>
                <a class="footer-link">Confidentialité</a>
                <a class="footer-link">Cookies</a>
            </div>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="public/js/planning.js"></script>
</html>