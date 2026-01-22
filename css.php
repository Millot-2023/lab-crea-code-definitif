<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | Architecture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <!-- <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico"> -->
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-fs">
        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1920&q=80" 
             alt="Architecture Abstract" 
             class="hero-bg-img">

        <div class="hero-overlay">
            <div class="hero-container">
                <div class="hero-content">
                    <h1>Bienvenue dans le Lab</h1>
                    <p>Le rail de 1200px est désormais le seul garant de la structure centrale.</p>
                </div>
            </div>
        </div>

        <a href="#projets" class="hero-chevron">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

    <div id="projets" class="container">
        <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            $file = 'includes/main-' . $page . '.php';
            
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<section class='section-projects'><h1>Erreur 404</h1><p>Le fichier <strong>$file</strong> est introuvable.</p></section>";
            }
        ?>
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

        // Moteur de Copie pour les futures cards CSS
        const copyButtons = document.querySelectorAll('.btn-copy');
        copyButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const code = btn.getAttribute('data-code');
                navigator.clipboard.writeText(code).then(() => {
                    const originalText = btn.innerHTML;
                    btn.innerHTML = '<i class="fas fa-check"></i> Copié !';
                    setTimeout(() => { btn.innerHTML = originalText; }, 2000);
                });
            });
        });
    });
</script>

</body>
</html>