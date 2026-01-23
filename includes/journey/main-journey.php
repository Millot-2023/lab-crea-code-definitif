<?php
/**
 * SECTION : UX JOURNEY - PILOTE
 * Fichier : includes/journey/main-journey.php
 * Rôle : Affichage par onglets statiques sans rechargement de page.
 */
?>

<div class="journey-wrapper">

    <nav class="journey-tabs">
        <button type="button" class="tab-btn active" data-journey="1">Parcours 01</button>
        <button type="button" class="tab-btn" data-journey="2">Parcours 02</button>
        <button type="button" class="tab-btn" data-journey="3">Parcours 03</button>
    </nav>

    <div class="journey-display-area">
        <?php for($i = 1; $i <= 3; $i++): ?>
            <div id="journey-content-<?php echo $i; ?>" 
                 class="journey-tab-content <?php echo ($i === 1) ? 'active' : ''; ?>">
                <?php 
                    $fragment = __DIR__ . "/main-journey{$i}.php";
                    if (file_exists($fragment)) {
                        include $fragment;
                    } else {
                        echo "<p style='padding:40px; text-align:center;'>Fragment Journey {$i} introuvable.</p>";
                    }
                ?>
            </div>
        <?php endfor; ?>
    </div>

</div>

<script>
/**
 * Logique de switch Journey
 */
(function() {
    const buttons = document.querySelectorAll('.journey-tabs .tab-btn');
    const contents = document.querySelectorAll('.journey-tab-content');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = 'journey-content-' + btn.getAttribute('data-journey');

            // Mise à jour des boutons
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Mise à jour des étapes
            contents.forEach(c => c.classList.remove('active'));
            const targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });
})();
</script>