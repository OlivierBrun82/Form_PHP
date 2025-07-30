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
                   
                    <label for="message">Message</label>
                    <textarea id="message" type="text" name="message"  placeholder="Entrer votre message"></textarea>
            
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
                $message = $_POST["message"] ?? '';

                // 3 valider les données
                $errors =[];
                if(empty($pseudo)){
                    $errors[] = "Votre Pseudo n'est pas renseigné";
                }
                if(empty($sujet)){
                    $errors[] = "Votre Sujet n'est pas renseigné";
                }
                if(empty($message)){
                    $errors[] = "Votre Message n'est pas renseigné";
                }
                var_dump($errors);
                // echo $pseudo;
                // echo $sujet;
                // echo $message;

                //  vérifier que j'ai bien reçu des données
                //  si une donnée est vide je redige un message!


            //    var_dump(empty($seudo));

            //  NETTOYER LES DONNÉES
            
            if (empty($errors)) {
                


            }


            }
            
         ?>
    <footer>
        <span>© All Right Reserved</span>
    </footer>
</body>
</html>