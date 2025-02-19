<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Athènes - Accueil</title>
</head>
<body>
    <main class="container">
    <?php include("inc/banniere.php");?>
    <section>
   <?php include("inc/menu.php");?>
    </section>

   

           
<main class="mainAcc">
    <div class="titttre"><h1>Pour nous contacter</h1></div>
   
        <header>
            <h2>Pour nous laisser un comentaire </h2>
        </header>
    <section class="contact">
        <img src="img/contacts.jpg" alt="Contact Image" class="contact-img">

        <form action="#" method="post" class="contact-form">
            <div class="form-group">
                <label for="nom">NOM :</label><input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">PRENOM :</label><input type="text" id="prenom" name="prenom" required>
            </div>
            
            <div class="form-group">
                <label for="ville">VILLE :</label>
                <input type="ville" id="ville" name="ville" required>
            </div>
            <div class="form-group">
                <label for="email">E-MAIL :</label>
                <input id="email" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="commentaires"> COMMENTAIRES :</label>
                <input type="text" style="height: 10vh;">
            </div>
            <button type="submit">Envoyer votre message</button>
        </form>
    </section>
  
     
</main>
  

</main>
  
</body>
</html>






 