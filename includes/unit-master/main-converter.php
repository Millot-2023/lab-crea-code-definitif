<?php
/**
 * Projet : Unit-Master
 * Fichier : converter.php
 * Rôle : Interface de conversion Dynamique (Pixels vers REM/EM)
 */

// Sécurité
if (!function_exists('um_px_to_rem')) {
    $func_path = dirname(__FILE__) . '/functions.php';
    if (file_exists($func_path)) {
        require_once $func_path;
    }
}
?>

<div class="um-tool-container">
    <div class="um-field-row" style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 25px;">
        
        <div class="um-field-group">
            <label class="um-label">Valeur en Pixels (px)</label>
            <input type="number" id="um-px-input" class="um-input-styled" placeholder="16" value="16">
        </div>

        <div class="um-field-group">
            <label class="um-label">Base Root (px)</label>
            <input type="number" id="um-base-input" class="um-input-styled" placeholder="16" value="16">
        </div>

    </div>

    <div class="um-results-layout" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
        
        <div class="um-res-card" style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 15px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <small style="display: block; color: #64748b; font-size: 0.7rem; font-weight: bold; text-transform: uppercase;">Unité REM</small>
                <code id="um-res-rem" style="font-size: 1.25rem; font-weight: bold; color: #1e293b;">1.000rem</code>
            </div>
            <button class="um-btn-copy" onclick="copyUmValue('rem')" style="padding: 5px 10px; font-size: 0.65rem;">COPIER</button>
        </div>

        <div class="um-res-card" style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 15px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <small style="display: block; color: #64748b; font-size: 0.7rem; font-weight: bold; text-transform: uppercase;">Unité EM</small>
                <code id="um-res-em" style="font-size: 1.25rem; font-weight: bold; color: #1e293b;">1.000em</code>
            </div>
            <button class="um-btn-copy" onclick="copyUmValue('em')" style="padding: 5px 10px; font-size: 0.65rem;">COPIER</button>
        </div>

    </div>
</div>

<script>
/**
 * Logique de calcul isolée
 */
(function() {
    const pxIn = document.getElementById('um-px-input');
    const baseIn = document.getElementById('um-base-input');

    const updateCalcul = () => {
        const px = parseFloat(pxIn.value) || 0;
        const base = parseFloat(baseIn.value) || 16;
        
        if (px >= 0 && base > 0) {
            const val = (px / base).toFixed(3);
            document.getElementById('um-res-rem').innerText = val + 'rem';
            document.getElementById('um-res-em').innerText = val + 'em';
        }
    };

    pxIn.addEventListener('input', updateCalcul);
    baseIn.addEventListener('input', updateCalcul);
})();

function copyUmValue(unit) {
    const text = document.getElementById('um-res-' + unit).innerText;
    navigator.clipboard.writeText(text).then(() => {
        // Feedback discret sans alert
        console.log('Valeur ' + unit + ' copiée');
    });
}
</script>