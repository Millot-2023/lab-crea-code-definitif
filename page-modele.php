<?php 
    // Variables à modifier pour chaque clone
    $titreHero = "TITRE DU CLONE";
    $sousTitreHero = "Description du projet.";
    // Pointer vers le contenu spécifique dans includes/
    $monContenu = 'includes/NOM_DE_VOTRE_FICHIER.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | <?php echo $titreHero; ?></title>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs">
        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1920&q=80" 
             alt="Fond" class="hero-bg-img">

        <div class="hero-overlay">
            <div class="hero-container">
                <div class="hero-content" style="text-align: center; color: white;">
                    <h1 style="font-size: clamp(3.5rem, 8vw, 6rem); margin: 0;"><?php echo $titreHero; ?></h1>
                    <p style="font-size: 1.5rem; opacity: 0.9;"><?php echo $sousTitreHero; ?></p>
                </div>
            </div>
        </div>
        
        <a href="#contenu-fixe" class="hero-chevron">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

    <div id="contenu-fixe" class="container">
        <?php 
            if (file_exists($monContenu)) {
                include $monContenu;
            } else {
                echo "Erreur : le fichier $monContenu est introuvable.";
            }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
<script src="src/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>