<?php
    if(isset($_GET['mail_state'])) {
        $mail_state = $_GET['mail_state'];
        if($mail_state == "true") {
            $mail_msg = '<p style="color: green;" class="mail_sucess" >Le mail a été envoyé avec succès!</p>';
        } else {
            $mail_msg = '<p style="color: red;" class="mail_error>Erreur lors de l\'envoi du mail. Veuillez réessayer.</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Philibert Gentien</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
</head>
<body>
<div id="overlay" class="overlay"></div>
<header>
      <nav>
         <ul>
            <li class="link" ><a href="#presentation">Présentation</a></li>
            <li class="link" ><a href="#competences">Compétences</a></li>
            <li class="link" ><a href="#diplome">Diplômes / Experiences</a></li>
            <!-- <li class="link" ><a href="#mon_travail">Mon travail</a></li> -->
            <li class="link" ><a href="#services">Mes services</a></li>
            <li class="nav_btn"><a href="#form_contact">Me contacter</a></li>
         </ul>
      </nav>
      <section class="first_info_main_container">
         <section class="text">
            <h6>Bonjour, je suis</h6>
            <h1>Philibert Gentien</h1>
            <p class="objectif">Objectif : Front-end Développeur Web</p>
         </section>
         <img src="assets/img/moi.svg" alt="Philibert Gentien photo">
      </section>
   </header>
   <section class="presentation" id="presentation">
      <section class="about_me_text">
         <div class="texte">
            <div class="title_white">
               <p>Présentation</p>
            </div>
            <p>Je m'appelle Philibert Gentien, j'ai 17 ans et je souhaite devenir Développeur Web plus spécifiquement backend développeur mais pour l'instant je me concentre sur le front-end. Je suis en Terminale STI2D option SIN à Jules Ferry à Versailles</p>
         </div>
         <a href="assets/pdf/Philibert_Gentien_CV.pdf" class="download-effect" download><span>Télécharger mon CV</span></a>
      </section>
      <img src="assets/img/code_3D.svg" alt="Symbole de code ">
   </section>
   <section class="about">
      <div class="section_container">
         <section class="competences" id="competences">
            <div class="title_black">
               <p>Compétences</p>
            </div>
            <div class="main_competences_container">
               <div class="competences_card">
                  <img src="assets/img/HTML.svg" alt="HTML logo">
                  <p>HTML</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/CSS.svg" alt="Css logo">
                  <p>CSS</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/MySQL.svg" alt="MySQL logo">
                  <p>MySQL</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/php.svg" alt="PHP logo">
                  <p>PHP</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/figma.svg" alt="Figma logo">
                  <p>Figma</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/JS.svg" alt="JS logo">
                  <p>JavaScript</p>
               </div>
            </div>
         </section>
         <section class="diplome" id="diplome">
            <div class="title_black">
               <p>Diplômes/Experiences</p>
            </div>
            <div class="main_card_dipl_container">
               <button class="popup-open-btn" onclick="open_experience_modal('popup1')">
                  <div class="tag">
                     <p>Depuis septembre 2022</p>
                  </div>
                  <div class="content">
                     <h2 class="title_card">Serveur</h2>
                     <span class="lieu">Crêperie de Gally</span>
                     <p class="desc_card">Prise de commande, service des plats et des boisson, renfort de l'équipe à la plonge et rangement de fin de service. Etablisement sous licence 3</p>
                  </div>
               </button>
               <div class="popup" id="popup1">
                  <div class="content">
                     <div class="button_container">
                        <button class="popup-close-btn" onclick="close_experience_modal('popup1')">&times;</button>
                     </div>
                     <div class="text_on_image" style="background-image: url('assets/img/gally.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                        <h1>Job étudiant : Serveur dans une crêperie</h1>
                     </div>
                     <p>Depuis septembre 2022 je suis employé en tant que serveur à la crêperie de gally.</p>
                     <p>Cet établissement sous licence 3 permet d'y travaillé à partir de 16 ans.</p>
                     <p>Pendant le travail, je prends les commandes, je sers les plats ainsi que les boissons. Je peux renforcer une équipe (ex : la plonge), je fais les rangement de fin de service.</p>
                  </div>
               </div>
               <button class="popup-open-btn" onclick="open_experience_modal('popup2')">
                  <div class="tag">
                     <p>Juin 2022</p>
                  </div>
                  <div class="content">
                     <h2 class="title_card">Stage d'observation</h2>
                     <span class="lieu">Doctolib Paris</span>
                     <p class="desc_card">Stage d'observation de 2nde dans le service Software Engineer</p>
                  </div>
               </button>
               <div class="popup" id="popup2">
                  <div class="content">
                     <div class="button_container">
                        <button class="popup-close-btn" onclick="close_experience_modal('popup2')">&times;</button>
                     </div>
                     <div class="text_on_image" style="background-image: url('assets/img/doctolib.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                        <h1>Stage d'observation chez Doctolib</h1>
                     </div>
                     <p>J'ai effectué lors de ma seconde générale à Blanche de Castille un stage de 2 semaines dans le service Software Engineer.</p>
                     <p>Ce stage à été pour moi une confirmation dans le choix de mon futur métier. En effet depuis là 4ème je souhaite devenir développeur.</p>
                     <p>Pendant ce stage j'ai pu découvrire comment les équipes s'organisaient. J'ai même décider de faire mon rapport de stage sous forme de site web.</p>
                  </div>
               </div>



               <div id="content_to_display" class="content_to_display">
                  <button class="popup-open-btn" onclick="open_experience_modal('popup4')">
                     <div class="tag">
                        <p>Juin 2021</p>
                     </div>
                     <div class="content">
                        <h2 class="title_card">Stage d'observation</h2>
                        <span class="lieu">RENAULT Le Chesnay</span>
                        <p class="desc_card">Stage d'observation de 3ème dans le garage Renault Rue de Glatigny au Chesnay</p>
                     </div>
                  </button>
                  <button class="popup-open-btn" onclick="open_experience_modal('popup5')">
                     <div class="tag">
                        <p>2021</p>
                     </div>
                     <div class="content">
                        <h2 class="title_card">Stage Magick Makers</h2>
                        <span class="lieu">Magick Makers</span>
                        <p class="desc_card">Stage pour apprendre les bases en programmation web (HTML et CSS).</p>
                     </div>
                  </button>
               </div>
               <button id="btn" onclick="see_more()" class="effect-4">Voir plus</button>
               <script src="assets/js/see_more_btn.js"></script>

                  <div class="popup" id="popup3">
                     <div class="content">
                        <div class="button_container">
                           <button class="popup-close-btn" onclick="close_experience_modal('popup3')">&times;</button>
                        </div>
                        <div class="text_on_image" style="background-image: url('assets/img/doctolib.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                           <h1>Stage d'observation chez Doctolib</h1>
                        </div>
                        <p>J'ai effectué lors de ma seconde générale à Blanche de Castille un stage de 2 semaines dans le service Software Engineer.</p>
                        <p>Ce stage à été pour moi une confirmation dans le choix de mon futur métier. En effet depuis là 4ème je souhaite devenir développeur.</p>
                        <p>Pendant ce stage j'ai pu découvrire comment les équipes s'organisaient. J'ai même décider de faire mon rapport de stage sous forme de site web.</p>
                     </div>
                  </div>
                  <div class="popup" id="popup4">
                     <div class="content">
                        <div class="button_container">
                           <button class="popup-close-btn" onclick="close_experience_modal('popup4')">&times;</button>
                        </div>
                        <div class="text_on_image" style="background-image: url('assets/img/renault_1.webp'); background-position: bottom; background-repeat: no-repeat; background-size: cover;">
                           <h1>Stage d'observation garage RENAULT</h1>
                        </div>
                        <p>J'ai fait ce stage en 3ème pour découvrir un autre métier que celui de développeur car je m'intéresse à la mécanique.</p>
                        <p>J'ai observé le fonctionnement d'un garage aussi bien la partie "administrative" que la partie de réparation ou de maintenance.</p>
                        <p>J'ai pu effectuer des actions comme la vidange et le changement de bougies.</p>
                     </div>
                  </div>
                  <div class="popup" id="popup5">
                     <div class="content">
                        <div class="button_container">
                           <button class="popup-close-btn" onclick="close_experience_modal('popup5')">&times;</button>
                        </div>
                        <div class="text_on_image" style="background-image: url('assets/img/mm.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                           <h1>Stage Magick Makers</h1>
                        </div>
                        <p>Je me suis intéressé au web pendant le confinement ou tout plein de site sortaient tous plus cool que les autres.</p>
                        <p>J'ai donc demandé de faire un stage pour apprendre les bases de la programmation web et durant 2 semaines l'après midi j'ai commencé à faire mon site web.</p>
                        <p>Puis je me suis lancé en autodidacte en faisant des site pour des amis ou ce site par exemple.</p>
                        <p>Depuis ce stage je sais que je veux devenir développeur ou ingénieur en cybersécurité.</p>
                     </div>
                  </div>
            </div>
            <script src="assets/js/pop_up.js"></script>
         </section>
      </div>
      <!-- <section class="montravail" id="mon_travail">
         <div class="title_white">
            <p>Mon travail</p>
         </div>
         <div class="work_card_container">
            <div class="card">
               <img src="assets/img/projet_street_search.svg" alt="Street Search home page">
               <div class="div_content_project_card">
                  <div class="texte_container">
                     <span class="project_title_card">Street Search</span>
                     <p class="project_desc">
                        J'ai rejoins le projet Street Search, le but étant de faire une web app permetant aux fans de street workout de faire des rassemblement, de recencer les parks, et pourvoir facilité la comunication.
                     </p>
                  </div>
                  <a href="projet/strS.html" class="effect-4"><span>Voir plus</span></a>
               </div>
            </div>
            <div class="card">
               <img src="assets/img/MDL.svg" alt="MDL dashboard">
               <div class="div_content_project_card">
                  <div class="texte_container">
                     <span class="project_title_card">Dashboard Maison des lycéen</span>
                     <p class="project_desc">
                        J'ai effectué un dashboard pour maintenir plus facilement le contenu du site qui doit être rapidement mis à jour presque quotidiennement
                     </p>
                  </div>
                  <a href="projet/dashboard.html" class="effect-4"><span>Voir plus</span></a>
               </div>
            </div>
         </div>
      </section> -->
      <div class="section_container2">
         <section class="services" id="services">
            <div class="title_black">
               <p>Mes services</p>
            </div>
            <div class="service_card_container">
               <div class="service_content">
                  <div class="top">
                     <img src="assets/img/service1.svg" alt="Stylo et règle">
                     <p class="serv_title">Développer vos sites en HTML CSS</p>
                  </div>
                  <div class="desc_services">
                     <p>
                        Envoyer moi par mail des maquettes ou images de ce que vous voulez, les textes rédigés, et les images que vous voulez utiliser. (Je ne m'occupe pas de l'hébergement sauf si vous me demander à l'avance.)</p>
                  </div>
               </div>
               <div class="service_content">
                  <div class="top">
                     <img src="assets/img/service2.svg" alt="Outils de répartaion mécanique">
                     <p class="serv_title">Accompagnement</p>
                  </div>
                  <div class="desc_services">
                     <p>Parcequ'un site entretenu c'est mieux, Je vous donne une “formation” sur comment entretenir votre site. 
                        Si toutes fois vous ne voulez pas apprendre à maintenir votre site je peux vous faire un dashboard mais attention que le front-end pour l’instant, et cela ralongera la date pour rendre votre site <p>
                  </div>
               </div>
               <div class="service_content">
                  <div class="top">
                     <img src="assets/img/service3.svg" alt="Un ordinateur avec des engrenage">
                     <p class="serv_title">Garentie</p>
                  </div>
                  <div class="desc_services">
                     <p>Et oui, je vous donne une assurance allant de 2 mois à 1 an en fonction du site que vous m'avez demandé, elle fonctionne pour tout type de destruction éventuelle du site que vous avez mis en ligne. Attention je ferais un devis au préalable pour voir les dégâts.</p>
                  </div>
               </div>
            </div>
         </section>
         <section class="contact_form" id="form_contact">
            <div class="title_black">
               <p>Me contacter</p>
            </div>
            <form action="assets/php/email.php" method="post">
               <div class="name_plus_gender">
                  <div class="name_input label_and_input">
                     <label for="name">Quelle est votre nom ?</label>
                     <input type="text" name="name" id="name" placeholder="Type here...">
                  </div>
                  <div class="gender_checkbox">
                     <label for="">Quel est votre genre ?</label>
                     <div class="options">
                        <div class="input_radio">
                           <input type="radio" name="genre" id="monsieur" value="Monsieur">
                           <label for="monsieur">M.</label>
                        </div>
                        <div class="input_radio">
                           <input type="radio" name="genre" id="madame" value="Madame">
                           <label for="madame">Mme.</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="email_plus_subject">
                  <div class="email label_and_input">
                     <label for="mail">Votre adresse mail :</label>
                     <input type="email" name="mail" id="mail" placeholder="Type here...">
                  </div>
                  <div class="subject label_and_input">
                     <label for="sujet">Sujet de votre message : </label>
                     <input type="text" name="subject" id="subject" placeholder="Type here...">
                  </div>
               </div>
               <div class="message_content">
                  <label for="message">Votre message :</label>
                  <textarea name="message" id="message" cols="30" rows="10" placeholder="Type here..."></textarea>
               </div>
               <button type="submit" class="submit_btn" name="send_mail">Envoyer le message</button>
            </form>
         </section>
      </div>
      <br><br><br>
   </section>
   <footer>
      <p>Copyright ©2022. All right reserved</p>
   </footer>
</body>
</html>

