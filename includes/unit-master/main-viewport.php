<?php
/**
 * Projet : Unit-Master
 * Fichier : main-viewport.php
 * Rôle : Interface de conversion Dynamique (Pixels vers VW/VH)
 */

// Sécurité : On s'assure que les fonctions mathématiques sont chargées
$func_path = dirname(__FILE__) . '/main-functions.php';
if (file_exists($func_path)) {
    require_once $func_path;
}
?>

<div class="um-tool-container">
    <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 25px;">
        
        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="font-size: 0.75rem; font-weight: 700; color: #4b5563; text-transform: uppercase;">Valeur en Pixels (px)</label>
            <input type="number" id="um-viewport-px-input" 
                   style="padding: 10px; border: 2px solid #e2e8f0; border-radius: 6px; width: 140px; font-size: 1rem;" 
                   placeholder="Ex: 100" value="100">
        </div>

        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="font-size: 0.75rem; font-weight: 700; color: #4b5563; text-transform: uppercase;">Base Viewport (px)</label>
            <input type="number" id="um-viewport-base-input" 
                   style="padding: 10px; border: 2px solid #e2e8f0; border-radius: 6px; width: 140px; font-size: 1rem;" 
                   placeholder="1920" value="1920">
        </div>

    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 15px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <small style="display: block; color: #64748b; font-size: 0.65rem; font-weight: 800; text-transform: uppercase;">VW</small>
                <code id="um-res-vw" style="font-size: 1.1rem; font-weight: 700; color: #1e293b;">5.208vw</code>
            </div>
            <button onclick="copySingleValue('um-res-vw')" 
                    style="background: #e2e8f0; border: none; padding: 4px 8px; border-radius: 3px; font-size: 0.6rem; cursor: pointer; font-weight: bold;">
                COPIER
            </button>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 15px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <small style="display: block; color: #64748b; font-size: 0.65rem; font-weight: 800; text-transform: uppercase;">VH</small>
                <code id="um-res-vh" style="font-size: 1.1rem; font-weight: 700; color: #1e293b;">9.259vh</code>
            </div>
            <button onclick="copySingleValue('um-res-vh')" 
                    style="background: #e2e8f0; border: none; padding: 4px 8px; border-radius: 3px; font-size: 0.6rem; cursor: pointer; font-weight: bold;">
                COPIER
            </button>
        </div>

    </div>
</div>

<script>
(function() {
    const pxIn = document.getElementById('um-viewport-px-input');
    const baseIn = document.getElementById('um-viewport-base-input');
    const resVw = document.getElementById('um-res-vw');
    const resVh = document.getElementById('um-res-vh');

    const runViewportCalc = () => {
        const px = parseFloat(pxIn.value) || 0;
        const baseW = parseFloat(baseIn.value) || 1920;
        const baseH = 1080; 
        
        if (baseW > 0) {
            resVw.innerText = ((px * 100) / baseW).toFixed(3) + 'vw';
            resVh.innerText = ((px * 100) / baseH).toFixed(3) + 'vh';
        }
    };

    pxIn.addEventListener('input', runViewportCalc);
    baseIn.addEventListener('input', runViewportCalc);
})();
</script>