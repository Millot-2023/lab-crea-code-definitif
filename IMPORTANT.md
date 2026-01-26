# 🛠️ CHARTE DE TRAVAIL : STRUCTURE MASTER CLONE
**Projet :** LAB-CREA-CODE
**Objectif :** Zéro régression, Zéro spéculation, Collage parfait sous le Hero.

---

## 1. LE SQUELETTE DE RÉFÉRENCE (`page-modele.php`)
Ce fichier est la "coque" de chaque page racine. Il garantit que le Header et le Hero (100vh) sont correctement déclarés avant d'appeler le contenu.

```php
<?php 
    // 1. CONFIGURATION DE LA PAGE
    $titreHero = "TITRE DE VOTRE PAGE"; 
    $sousTitreHero = "Description courte pour le Hero.";
    $monContenu = 'includes/main-votre-fichier.php'; 
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
        <img src="URL_IMAGE" alt="Fond" class="hero-bg-img">
        <div class="hero-overlay">
            <div class="hero-container">
                <div class="hero-content">
                    <h1><?php echo $titreHero; ?></h1>
                    <p><?php echo $sousTitreHero; ?></p>
                </div>
            </div>
        </div>
        <a href="#contenu-fixe" class="hero-chevron">
            <svg viewBox="0 0 24 24" fill="none"><path d="M7 10L12 15L17 10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
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