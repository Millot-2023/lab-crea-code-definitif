<?php 
    /**
     * Projet : Mega-Projet
     * Fichier : accessibilite-seo.php
     * Rôle : Hub Standards Web (Adaptation de la structure Robuste)
     */

    // Configuration spécifique pour cette page
    $titreHero = "Accessibilité & SEO";
    $sousTitreHero = "L'alliance de la structure sémantique et de la visibilité numérique.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | Accessibilité & SEO</title>
    <meta name="description" content="Audit et standards de performance, sémantique HTML5 et inclusion universelle du laboratoire.">
    
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs" style="position: relative; height: 100vh; width: 100vw; overflow: hidden; background: #333;">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1920&auto=format&fit=crop" 
             alt="SEO and Accessibility Background" 
             class="hero-bg-img"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">

        <div class="hero-overlay" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.5); color: white;">
            <div style="text-align: center; padding: 0 20px;">
                <h1 style="font-size: clamp(2.5rem, 8vw, 6rem); margin: 0;"><?php echo $titreHero; ?></h1>
                <p style="font-size: 1.5rem; opacity: 0.9; max-width: 800px; margin: 20px auto;"><?php echo $sousTitreHero; ?></p>
            </div>
        </div>

        <a href="#contenu-seo" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); width: 50px; z-index: 10;">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

    <div id="contenu-seo" class="container">
        <?php include 'includes/accessibilite-seo/main-seo.php'; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="src/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>