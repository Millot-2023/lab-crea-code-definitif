<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | Book Architecture</title>
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
                <h1 style="font-size: clamp(3.5rem, 8vw, 6rem); margin: 0;">Bienvenue dans le Lab</h1>
                <p style="font-size: 1.5rem; opacity: 0.9;">Le rail de 1200px est désormais le seul garant de la structure centrale.</p>
            </div>
        </div>
    </div>

<a href="#projets" class="hero-chevron" 
   style="position: absolute; bottom: 30px; left: 50%; z-index: 999; width: 50px; height: 50px; display: block !important;">
    <svg viewBox="0 0 24 24" style="width: 100%; height: 100%; display: block;" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</a>
</section>

    <div id="projets" class="container">
        <section class="section-projects">
            <div class="flex-grid">
                <article class="card"><h3>Projet A</h3><p>...</p></article>
                <article class="card"><h3>Projet B</h3><p>...</p></article>
                <article class="card"><h3>Projet C</h3><p>...</p></article>

                <article class="card"><h3>Projet A</h3><p>...</p></article>
                <article class="card"><h3>Projet B</h3><p>...</p></article>
                <article class="card"><h3>Projet C</h3><p>...</p></article>

                <article class="card"><h3>Projet A</h3><p>...</p></article>
                <article class="card"><h3>Projet B</h3><p>...</p></article>
                <article class="card"><h3>Projet C</h3><p>...</p></article>
 
                <article class="card"><h3>Projet A</h3><p>...</p></article>
                <article class="card"><h3>Projet B</h3><p>...</p></article>
                <article class="card"><h3>Projet C</h3><p>...</p></article>

                <article class="card"><h3>Projet A</h3><p>...</p></article>
                <article class="card"><h3>Projet B</h3><p>...</p></article>
                <article class="card"><h3>Projet C</h3><p>...</p></article>
            </div>
        </section>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const megaParent = document.querySelector('.has-mega');
        const burgerBtn = document.querySelector('.burger-btn');
        const themeBtn = document.getElementById('theme-switch');
        const body = document.body;

        // Gestion du Menu
        if (burgerBtn && megaParent) {
            burgerBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                megaParent.classList.toggle('is-active');
                burgerBtn.classList.toggle('is-active');
            });

            document.addEventListener('click', (e) => {
                if (!megaParent.contains(e.target)) {
                    megaParent.classList.remove('is-active');
                    burgerBtn.classList.remove('is-active');
                }
            });
        }

        // Switch de Thème
        if (themeBtn) {
            themeBtn.addEventListener('click', () => {
                body.classList.toggle('dark-theme');
            });
        }
    });
</script>

</body>
</html>