<?php 
    /**
     * Projet : Mega-Projet
     * Fichier : ux-journey.php
     */
    $titreHero = "UX Journey";
    $sousTitreHero = "Analyse des parcours utilisateurs.";
    $file = 'includes/journey/main-journey.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey</title>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs" style="position: relative; height: 100vh; width: 100vw; overflow: hidden; background: #333;">
        <div class="hero-overlay" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.4); color: white;">
            <div style="text-align: center;">
                <h1><?php echo $titreHero; ?></h1>
                <p><?php echo $sousTitreHero; ?></p>
            </div>
        </div>
        <a href="#projets" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); width: 50px; z-index: 10;">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
    </section>

    <div id="projets" class="container">
        <?php 
            if (file_exists($file)) {
                include $file;
            } else {
                echo "Erreur : Fichier $file introuvable.";
            }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="src/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>