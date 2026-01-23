<?php
/**
 * SECTION : UX PERSONA - PILOTE
 * Fichier : includes/persona/main-persona.php
 */

$active_persona = isset($_GET['persona']) ? intval($_GET['persona']) : 1;
?>

<div class="persona-tabs">
    <?php for($i = 1; $i <= 3; $i++): ?>
        <a href="ux-persona.php?persona=<?php echo $i; ?>#projets" 
           class="tab-btn <?php echo ($active_persona === $i) ? 'active' : ''; ?>">
            Persona 0<?php echo $i; ?>
        </a>
    <?php endfor; ?>
</div>

<div class="persona-display-area">
    <?php 
        $fragment = __DIR__ . "/main-persona{$active_persona}.php";
        if (file_exists($fragment)) {
            include $fragment;
        } else {
            echo "<p>Erreur : Le fichier $fragment est introuvable.</p>";
        }
    ?>
</div>