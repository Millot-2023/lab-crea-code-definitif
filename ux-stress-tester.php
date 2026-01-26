<?php 
    /**
     * Projet : Mega-Projet
     * Fichier : ux-stress-tester.php
     * Rôle : Page Racine Stress Tester (Standardisée & Auditée)
     */

    // 1. CONFIGURATION DE LA PAGE
    $titreHero = "Stress Tester Lab";
    $sousTitreHero = "Test de résistance et robustesse des composants UI.";
    $file = 'includes/stress-tester/main-stress-tester.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php 
        // 2. APPEL DU HEAD CENTRALISÉ (Contient Meta, CSS, Reset et Styles Hero)
        include 'includes/main-head.php'; 
    ?>
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs">
        <img src="https://images.unsplash.com/photo-1581092921461-eab62e92c859?q=80&w=1920&auto=format&fit=crop" 
             alt="UX Stress Tester Background">

        <div class="hero-overlay" style="position: absolute; inset: 0; z-index: 2; display: flex; flex-direction: column; align-items: center; justify-content: center; background: rgba(0,0,0,0.4); color: white; text-align: center;">
            <h1 style="font-size: clamp(3.5rem, 8vw, 6rem); font-weight: 800; margin: 0;"><?php echo $titreHero; ?></h1>
            <p style="font-size: 1.5rem; opacity: 0.9;"><?php echo $sousTitreHero; ?></p>
        </div>

        <a href="#projets" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); z-index: 10;">
            <svg viewBox="0 0 24 24" width="50" height="50" fill="none" stroke="white" stroke-width="3">
                <path d="M7 10L12 15L17 10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

    <div id="projets">
        <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
            <?php 
                // 3. INJECTION SÉCURISÉE DU CONTENU
                if (file_exists($file)) {
                    include $file;
                } else {
                    echo "<section class='section-projects'><h1>Erreur</h1><p>Le fichier pilote est introuvable dans <strong>$file</strong>.</p></section>";
                }
            ?>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="src/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>