<?php
/**
 * SECTION : UX JOURNEY - PILOTE
 * Fichier : includes/journey/main-journey.php
 */

$active_journey = isset($_GET['journey']) ? intval($_GET['journey']) : 1;
?>

<div class="journey-tabs">
    <?php for($i = 1; $i <= 3; $i++): ?>
        <a href="ux-journey.php?journey=<?php echo $i; ?>#projets" 
           class="tab-btn <?php echo ($active_journey === $i) ? 'active' : ''; ?>">
            Parcours 0<?php echo $i; ?>
        </a>
    <?php endfor; ?>
</div>

<div class="journey-display-area">
    <?php 
        $fragment = __DIR__ . "/main-journey{$active_journey}.php";
        if (file_exists($fragment)) {
            include $fragment;
        } else {
            echo "<p>Erreur : Le fichier $fragment est introuvable.</p>";
        }
    ?>
</div>