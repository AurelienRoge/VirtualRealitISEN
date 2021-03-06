<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Virtual Realit'ISEN, leader de la visite en réalité virtuelle">
    <title>Virtual Realit'ISEN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="icon" type="image/png" href="img/logo.png"/>
</head>
<body class="body">
    <div id="page-container">
        <div id="content-wrap">
            <header>
            <a href="index.php" class="logoheader"><img src="img/logo.png" alt="VIRTUAL REALIT'ISEN" width="80" height="80"></a>
                <nav>
                    <ul class="navheader">
                        <?php
                        printf("<li class='limerveilles %s'><a href='merveilles.php'>Les merveilles</a></li>",$merveilles);
                        printf("<li class='linotreprojet %s'><a href='projet.php'>Notre projet</a></li>",$projet);
                        printf("<li class='licontact %s'><a href='contact.php'>Nous contacter</a></li>", $contact);
                        ?>
                        <li class="lireseaux">
                            <a href="https://instagram.com/" target="_blank" class="igicon"><i class="fab fa-instagram fa-x"></i></a>
                            <a href="https://twitter.com/" target="_blank" class= "twittericon"><i class="fab fa-twitter fa-x"></i></a>
                            <a href="https://www.youtube.com/" target="_blank" class="yticon"><i class="fab fa-youtube fa-x"></i></a>
                            <a href="https://www.tripadvisor.com/" target="_blank" class="tripicon"><i class="fab fa-tripadvisor fa-x"></i></a>
                           
                        </li>
                    </ul>
                </nav>
            </header>