<?php 
    /**
     * Projet : Mega-Projet
     * Fichier : ux-journey.php
     * Rôle : Page Racine Journey
     */

    $titreHero = "UX Journey";
    $sousTitreHero = "Analyse des parcours utilisateurs et points de contact.";
    
    // Chemin mis à jour vers le dossier dédié Journey
    $file = 'includes/journey/main-journey.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | Journey Architecture</title>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs" style="position: relative; height: 100vh; width: 100vw; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=1920&auto=format&fit=crop" 
             alt="UX Journey Background" 
             class="hero-bg-img"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">

        <div class="hero-overlay" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.4);">
            <div class="hero-container">
                <div class="hero-content" style="text-align: center; color: white;">
                    <h1 style="font-size: clamp(3.5rem, 8vw, 6rem); margin: 0;"><?php echo $titreHero; ?></h1>
                    <p style="font-size: 1.5rem; opacity: 0.9;"><?php echo $sousTitreHero; ?></p>
                </div>
            </div>
        </div>

        <a href="#projets" class="hero-chevron" aria-label="Défiler"
           style="position: absolute; bottom: 30px; left: 50%; z-index: 999; width: 50px; height: 50px; transform: translateX(-50%);">
            <svg viewBox="0 0 24 24" style="width: 100%; height: 100%;" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

    <div id="projets" class="container">
        <?php 
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<section class='section-projects'><h1>Erreur</h1><p>Le fichier pilote est introuvable dans <strong>$file</strong>.</p></section>";
            }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="src/js/main.js?v=<?php echo time(); ?>"></script>

</body>
</html>