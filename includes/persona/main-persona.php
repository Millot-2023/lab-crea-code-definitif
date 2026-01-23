<?php
/**
 * SECTION : UX PERSONA - PILOTE
 * Fichier : includes/persona/main-persona.php
 * Rôle : Affichage par onglets statiques sans rechargement de page.
 */
?>

<div class="persona-wrapper">

    <nav class="persona-tabs">
        <button type="button" class="tab-btn active" data-persona="1">Persona 01</button>
        <button type="button" class="tab-btn" data-persona="2">Persona 02</button>
        <button type="button" class="tab-btn" data-persona="3">Persona 03</button>
    </nav>

    <div class="persona-display-area">
        <?php for($i = 1; $i <= 3; $i++): ?>
            <div id="persona-content-<?php echo $i; ?>" 
                 class="persona-tab-content <?php echo ($i === 1) ? 'active' : ''; ?>">
                <?php 
                    $fragment = __DIR__ . "/main-persona{$i}.php";
                    if (file_exists($fragment)) {
                        include $fragment;
                    } else {
                        echo "<p style='padding:40px; text-align:center;'>Fragment Persona {$i} introuvable.</p>";
                    }
                ?>
            </div>
        <?php endfor; ?>
    </div>

</div>

<script>
/**
 * Logique de switch Persona
 */
(function() {
    const buttons = document.querySelectorAll('.persona-tabs .tab-btn');
    const contents = document.querySelectorAll('.persona-tab-content');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = 'persona-content-' + btn.getAttribute('data-persona');

            // Mise à jour des boutons
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Mise à jour des fiches
            contents.forEach(c => c.classList.remove('active'));
            const targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });
})();
</script>