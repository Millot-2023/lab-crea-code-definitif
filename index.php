<?php 
    // Logique de routage et de titres
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $file = 'includes/main-' . $page . '.php';

    // Titres dynamiques pour le Hero
    $titreHero = "Bienvenue dans le Lab";
    $sousTitreHero = "Le rail de 1200px est désormais le seul garant de la structure centrale.";

    if ($page === 'css') {
        $titreHero = "Laboratoire CSS";
        $sousTitreHero = "Composants dynamiques & Gradients CSS3";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | Book Architecture</title>
    <meta name="description" content="Portfolio de mon méga-projet UX/UI : Études de personas, customer journey et bibliothèque de composants CSS (Cards).">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs" style="position: relative; height: 100vh; width: 100vw; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1920&q=80" 
             alt="Architecture Abstract" 
             class="hero-bg-img"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">

        <div class="hero-overlay" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.3);">
            <div class="hero-container">
                <div class="hero-content" style="text-align: center; color: white;">
                    <h1 style="font-size: clamp(3.5rem, 8vw, 6rem); margin: 0;"><?php echo $titreHero; ?></h1>
                    <p style="font-size: 1.5rem; opacity: 0.9;"><?php echo $sousTitreHero; ?></p>
                </div>
            </div>
        </div>

        <a href="#projets" class="hero-chevron" aria-label="Défiler vers le contenu"
           style="position: absolute; bottom: 30px; left: 50%; z-index: 999; width: 50px; height: 50px; display: block !important; transform: translateX(-50%);">
            <svg viewBox="0 0 24 24" style="width: 100%; height: 100%; display: block;" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

    <div id="projets" class="container">
        <?php 
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<section class='section-projects'><h1>Erreur 404</h1><p>Le fichier <strong>$file</strong> est introuvable.</p></section>";
            }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="src/js/main.js?v=<?php echo time(); ?>"></script>

</body>
</html>