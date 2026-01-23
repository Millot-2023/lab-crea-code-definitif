<?php
/**
 * Projet : Unit-Master
 * Fichier : main-unit-master.php
 * Rôle : Hub central (Structure, CSS robuste et JS de copie)
 */
$um_dir = dirname(__FILE__);

// Chargement de la logique mathématique
if (file_exists($um_dir . '/main-functions.php')) {
    require_once $um_dir . '/main-functions.php';
}
?>

<style id="um-internal-style">
    /* Architecture CSS Robuste */
    .um-master-stack { display: flex; flex-direction: column; gap: 40px; font-family: sans-serif; }
    .um-block { background: #fff; border-radius: 8px; border: 1px solid #d1d5db; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); }
    
    .um-block-header { 
        background: #111827; color: #fff; padding: 12px 20px; 
        display: flex; justify-content: space-between; align-items: center;
        border-bottom: 4px solid #3b82f6;
    }
    
    .um-block-header h2 { margin: 0; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; }
    
    .um-controls { display: flex; gap: 8px; }
    .btn-copy-tool {
        background: #374151; color: #f3f4f6; border: 1px solid #4b5563;
        padding: 5px 12px; font-size: 0.65rem; font-weight: bold; cursor: pointer; border-radius: 3px;
    }
    .btn-copy-tool:hover { background: #3b82f6; border-color: #3b82f6; }

    .um-block-body { padding: 30px; }
    .um-tool-title { margin: 0 0 20px 0; font-size: 1.2rem; border-left: 4px solid #3b82f6; padding-left: 15px; }
</style>

<div class="um-master-stack">

    <article class="um-block" id="block-01">
        <header class="um-block-header">
            <h2>01. UNIT-MASTER : MESURES RELATIVES</h2>
            <div class="um-controls no-export"> 
                <button class="btn-copy-tool" onclick="copyCleanCode('block-01', 'html')">Copier le Code</button>
                <button class="btn-copy-tool" onclick="copyCleanCode('block-01', 'css')">Copier le CSS</button>
            </div>
        </header>
        <div class="um-block-body">
            <h3 class="um-tool-title">Convertisseur Pixels / REM / EM</h3>
            <?php if (file_exists($um_dir . '/main-converter.php')) include $um_dir . '/main-converter.php'; ?>
        </div>
    </article>

    <article class="um-block" id="block-02">
        <header class="um-block-header">
            <h2>02. GRID-CREATOR : ARCHITECTURE FLUX</h2>
            <div class="um-controls no-export">
                <button class="btn-copy-tool" onclick="copyCleanCode('block-02', 'html')">Copier le Code</button>
                <button class="btn-copy-tool" onclick="copyCleanCode('block-02', 'css')">Copier le CSS</button>
            </div>
        </header>
        <div class="um-block-body">
            <h3 class="um-tool-title">Calculateur de Viewport (VW / VH)</h3>
            <?php if (file_exists($um_dir . '/main-viewport.php')) include $um_dir . '/main-viewport.php'; ?>
        </div>
    </article>

    <article class="um-block" id="block-03">
        <header class="um-block-header">
            <h2>03. UNIT-MASTER : RYTHME & PITCH</h2>
            <div class="um-controls no-export">
                <button class="btn-copy-tool" onclick="copyCleanCode('block-03', 'html')">Copier le Code</button>
                <button class="btn-copy-tool" onclick="copyCleanCode('block-03', 'css')">Copier le CSS</button>
            </div>
        </header>
        <div class="um-block-body">
            <h3 class="um-tool-title">Visualiseur de Pas (Pitch)</h3>
            <?php if (file_exists($um_dir . '/main-pitch.php')) include $um_dir . '/main-pitch.php'; ?>
        </div>
    </article>

</div>

<script>
/**
 * Fonction de copie : isole le bloc, retire les boutons, copie le HTML
 */
function copyCleanCode(blockId, type) {
    if (type === 'css') {
        const style = document.getElementById('um-internal-style').innerHTML;
        navigator.clipboard.writeText(style.trim());
        alert("CSS copié !");
        return;
    }

    const block = document.getElementById(blockId).cloneNode(true);
    const controls = block.querySelector('.no-export');
    if (controls) controls.remove();

    navigator.clipboard.writeText(block.outerHTML.trim()).then(() => {
        alert("Code HTML copié pour le " + blockId);
    });
}
</script>