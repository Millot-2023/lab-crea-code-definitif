<?php 
    /**
     * Projet : Mega-Projet
     * Fichier : ux-tools.php
     * Rôle : Hub des outils (Clone structurel de ux-journey.php)
     */

    // Configuration spécifique pour cette page
    $titreHero = "Laboratoire UX & Tools";
    $sousTitreHero = "Outils de précision pour le design et le développement.";
    
    // Le fichier de contenu que cette page doit charger
    $file = 'includes/main-tools.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | Tools Architecture</title>
    <meta name="description" content="Accès aux outils de conversion, grilles et stress-tests du laboratoire.">
    
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs" style="position: relative; height: 100vh; width: 100vw; overflow: hidden; background: #333;">
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1920&auto=format&fit=crop" 
             alt="UX Tools Background" 
             class="hero-bg-img"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">

        <div class="hero-overlay" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.4); color: white;">
            <div style="text-align: center;">
                <h1 style="font-size: clamp(3.5rem, 8vw, 6rem); margin: 0;"><?php echo $titreHero; ?></h1>
                <p style="font-size: 1.5rem; opacity: 0.9;"><?php echo $sousTitreHero; ?></p>
            </div>
        </div>

        <a href="#projets" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); width: 50px; z-index: 10;">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

    <div id="projets" class="container">
        <?php 
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<section class='section-projects' style='padding: 100px 0; text-align: center;'>
                        <h1>Erreur 404</h1>
                        <p>Le fichier de contenu <strong>$file</strong> est introuvable.</p>
                      </section>";
            }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="src/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>