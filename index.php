<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/scripts/script.js" defer></script>
    <title>Formulaire d'Adhesion à la Fédération Française de l'Apéro   </title>
</head>
<body>
    <header>
        <h1><strong>FORMULAIRE D'ADHESION À LA FFA</strong></h1>
    </header>
    <main>
        <section class="formuContainer">
            
                
                    <!-- L'attribut action permet de définr la destination du formulaire -->
                    <!-- L'attribut method défini la méthode d'envoi des données -->
                <form action="" method="POST">
                    <label for="pseudo">Pseudo</label>
                    <input name="pseudo" id="pseudo" type="text"  placeholder="Entrer votre nom">
                 
                    <label for="sujet">Sujet</label>
                    <input id="sujet" type="text" name="sujet"  placeholder="Entrer le sujet de votre message">
                   
                    <label for="email">EMail</label>
                    <input id="email" type="email" name="email"  placeholder="Entrer votre E-Mail">

                    <label for="phone">Phone</label>
                    <input id="phone" type="phone" name="phone"  placeholder="Entrer votre Numéro de téléphone">

                    <label for="message">Message</label>
                    <textarea id="message" type="text" name="message" rows="5" cols="30" placeholder="Entrer votre message"></textarea>
            
                    <input class="subButton" type="submit" value="Envoyer">
                </form>
                
                
            </ul>
        </section>
    </main>
    <!-- 1 Vérifier que la request à bien été soumise
         2 Récupérer les données
         3 Vérifier les données 
         4 Nettoyer les données
         5 Renvoyer quelque choses -->

         <!-- VÉRIFIER QUE LA REQUEST À BIEN ÉTÉ SOUMISE -->

         <?php
        //  $_SERVER = est une 'superkey' qui permet de récupérer les informations de 'POST' 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // 2 on récupère les données

                $pseudo = $_POST["pseudo"] ?? '';
                $sujet = $_POST["sujet"] ?? '';
                $email = $_POST["email"] ?? '';
                $phone = $_POST["phone"] ?? '';
                $message = $_POST["message"] ?? '';

                // 3 valider les données
                $errors =[];
                if(empty($pseudo)){
                    $errors[] = "Votre Pseudo n'est pas renseigné";
                }
                if(empty($sujet)){
                    $errors[] = "Votre Sujet n'est pas renseigné";
                }
                if(empty($email)){
                    $errors[] = "Votre E-Mail n'est pas renseigné";
                }
                 if(empty($phone)){
                    $errors[] = "Votre Numéro de téléphone n'est pas renseigné";
                }
                if(empty($message)){
                    $errors[] = "Votre Message n'est pas renseigné";
                }
            //   var_dump($errors);
                // echo $pseudo;
                // echo $sujet;
                // echo $message;

                //  vérifier que j'ai bien reçu des données
                //  si une donnée est vide je redige un message!


            //    var_dump(empty($seudo));

            //  NETTOYER LES DONNÉES
            
              if (empty($errors)) {
                // $pseudo= trim($pseudo);
                // $pseudo= htmlspecialchars($pseudo); =

                $pseudo = htmlspecialchars(trim($pseudo));
                $sujet = htmlspecialchars(trim($sujet));
                $email = htmlspecialchars(trim($email));
                $phone = htmlspecialchars(trim($phone));
                $message = htmlspecialchars(trim($message));
                // var_dump("hello world", $pseudo, $sujet, $message);

                // Renvoyer quelque chose
              }
                if (empty($errors)) {
                    // j'affiche le message
                    ?> <span><strong> Nous avons pris en compte votre demande avec succés </strong></span>
                    <?php

                }else{
                    // j'affiche un message d'erreur
                    foreach($errors as $error) {
                      ?>
                        <div class="error">
                            <span><?= $error ?></span>
                        </div>
                     <?php
                    }
                }

            
            // input mail
            // input phone (regex)
            // mes champs de type string ai une taille minimum de 5 characteres et max 255 characteres.
        }
         ?>
    <footer>
        <span>© All Right Reserved</span>
    </footer>
</body>
</html>