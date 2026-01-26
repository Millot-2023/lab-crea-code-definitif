<?php 
    /**
     * Projet : Mega-Projet
     * Fichier : ux-vierge.php
     * Rôle : Structure saine connectée à la feuille de style globale.
     */
// --- PILOTAGE DU HERO ---
    $titreHero     = "UX Vierge"; 
    $sousTitreHero  = "Outils de précision pour le design.";
    $urlImageHero  = "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1920&auto=format&fit=crop";
    // ------------------------
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | Architecture</title>
    
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">

    <style>
        /* AJUSTEMENT LOCAL STRICT POUR L'ANCRE */
        html {
            scroll-behavior: smooth;
        }

        .hero-fs {
            height: 100svh;
            width: 100%;
            display: block;
            position: relative;
            overflow: hidden;
        }

        .hero-fs img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* La seule règle nécessaire pour que l'image disparaisse sous ton Header */
        #projets {
            scroll-margin-top: 80px; /* À ajuster selon la hauteur de ton header CMILLOT */
            background: #fff;
            min-height: 100vh;
        }
    </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs">
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1920&auto=format&fit=crop" alt="UX Tools">
        
        <div class="hero-overlay" style="position: absolute; inset: 0; z-index: 2; display: flex; flex-direction: column; align-items: center; justify-content: center; background: rgba(0,0,0,0.3); color: white; text-align: center;">
            <h1 style="font-size: clamp(3rem, 8vw, 5rem); font-weight: 800; margin: 0;"><?php echo $titreHero; ?></h1>
            <p style="font-size: 1.2rem; opacity: 0.9;"><?php echo $sousTitreHero; ?></p>
        </div>

        <a href="#projets" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); z-index: 10;">
            <svg viewBox="0 0 24 24" width="50" height="50" fill="none" stroke="white" stroke-width="2">
                <path d="M7 10L12 15L17 10"></path>
            </svg>
        </a>
    </section>

    <div id="projets">
        <div class="container">
            <?php include 'includes/vierge/main-vierge.php'; ?>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="src/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>