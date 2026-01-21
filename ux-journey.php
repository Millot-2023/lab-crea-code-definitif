<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | UX Persona</title>
<link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body class="ux-page-persona">

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs" style="position: relative; height: 100vh; width: 100vw; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1920&q=80" 
             alt="UX Research" 
             class="hero-bg-img"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">

        <div class="hero-overlay" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.3);">
            <div class="hero-container">
                <div class="hero-content" style="text-align: center; color: white;">
                    <h1 style="font-size: clamp(3.5rem, 8vw, 6rem); margin: 0;">User Journey</h1>
                    <p style="font-size: 1.5rem; opacity: 0.9;">Analyse psychologique et comportementale des cibles.</p>
                </div>
            </div>
        </div>

        <a href="#projets" class="hero-chevron" 
           style="position: absolute; bottom: 30px; left: 50%; z-index: 999; width: 50px; height: 50px; display: block !important; transform: translateX(-50%);">
            <svg viewBox="0 0 24 24" style="width: 100%; height: 100%; display: block;" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

    <div id="projets" class="container" style="padding-top: 0;">
        <?php include 'includes/main-journey.php'; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="src/js/main.js?v=<?php echo time(); ?>"></script>

</body>
</html>