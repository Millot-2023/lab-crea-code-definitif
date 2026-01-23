<?php
/**
 * Projet : Mega-Projet
 * Fichier : stress-tester.php (Racine)
 */
include 'includes/header.php'; 
?>

<main class="main-content">
    <div class="container">
        <h1>Stress Tester Lab</h1>
        <p>Testez la résistance de vos composants face à des contenus extrêmes.</p>
        <hr>
        
        <?php 
        // Appel du module spécifique
        $um_dir = 'includes/stress-tester';
        if (file_exists($um_dir . '/main-stress-tester.php')) {
            include $um_dir . '/main-stress-tester.php'; 
        } else {
            echo "<p style='color:red;'>Erreur : Module stress-tester introuvable.</p>";
        }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>