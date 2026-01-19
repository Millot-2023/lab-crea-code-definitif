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
        <figure class="full-width">
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80" alt="Test plein bord">
        </figure>

        <div class="container">
            <section>
                <h1>Bienvenue dans le Lab</h1>
                <p>Le rail de 1200px est désormais le seul garant de la structure centrale.</p>
            </section>

            <section>
                <div class="flex-grid">
                    <article class="card">
                        <h3>Projet A</h3>
                        <p>Vérification de la robustesse CSS demandée.</p>
                    </article>
                    <article class="card">
                        <h3>Projet B</h3>
                        <p>Vérification de l'alignement.</p>
                    </article>
                    <article class="card">
                        <h3>Projet C</h3>
                        <p>Architecture stabilisée.</p>
                    </article>
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

        // Gestion du Mega Menu au Clic
        if (burgerBtn && megaParent) {
            burgerBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                // Bascule la classe sur le LI parent pour afficher le menu via SCSS
                megaParent.classList.toggle('is-active');
                
                // On ajoute aussi la classe au bouton pour l'animation du X
                burgerBtn.classList.toggle('is-active');
            });

            // Fermeture si on clique n'importe où en dehors du menu
            document.addEventListener('click', (e) => {
                if (!megaParent.contains(e.target)) {
                    megaParent.classList.remove('is-active');
                    burgerBtn.classList.remove('is-active');
                }
            });
        }

        // Gestion du Switch Thème
        if (themeBtn) {
            themeBtn.addEventListener('click', () => {
                body.classList.toggle('dark-theme');
            });
        }
    });
</script>

</body>
</html>