<?php
/**
 * Projet : Unit-Master
 * Fichier : main-pitch.php
 * Rôle : Visualiseur de pas (Pitch) et d'espacement dynamique.
 */

$func_path = dirname(__FILE__) . '/main-functions.php';
if (file_exists($func_path)) {
    require_once $func_path;
}
?>

<div class="um-tool-container">
    <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 25px; align-items: flex-end;">
        
        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="font-size: 0.75rem; font-weight: 700; color: #4b5563; text-transform: uppercase;">Pas (Pitch) en px</label>
            <input type="number" id="um-pitch-val" 
                   style="padding: 10px; border: 2px solid #e2e8f0; border-radius: 6px; width: 120px; font-size: 1rem;" 
                   value="8" min="1" oninput="um_update_pitch()">
        </div>

        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="font-size: 0.75rem; font-weight: 700; color: #4b5563; text-transform: uppercase;">Répétitions</label>
            <input type="number" id="um-pitch-count" 
                   style="padding: 10px; border: 2px solid #e2e8f0; border-radius: 6px; width: 100px; font-size: 1rem;" 
                   value="12" min="1" oninput="um_update_pitch()">
        </div>

        <div style="flex-grow: 1; text-align: right;">
             <code id="um-pitch-info" style="font-size: 0.85rem; color: #64748b;">Total : 96px</code>
        </div>
    </div>

    <div id="um-pitch-preview" 
         style="background: #f1f5f9; border: 1px solid #e2e8f0; padding: 20px; border-radius: 6px; min-height: 100px; display: flex; align-items: flex-start; gap: 8px;">
        </div>
</div>

<script>
/**
 * Génération dynamique des repères visuels
 */
function um_update_pitch() {
    const pitch = parseInt(document.getElementById('um-pitch-val').value) || 8;
    const count = parseInt(document.getElementById('um-pitch-count').value) || 12;
    const preview = document.getElementById('um-pitch-preview');
    const info = document.getElementById('um-pitch-info');

    // Mise à jour de l'info texte
    info.innerText = `Total : ${pitch * count}px`;

    // Nettoyage et génération des barres
    preview.innerHTML = '';
    preview.style.gap = `${pitch}px`;

    for (let i = 0; i < count; i++) {
        const bar = document.createElement('div');
        bar.style.width = '2px';
        bar.style.height = (i % 4 === 0) ? '40px' : '25px'; // Accentuation tous les 4 pas
        bar.style.background = (i % 4 === 0) ? '#3b82f6' : '#cbd5e1';
        bar.style.borderRadius = '2px';
        preview.appendChild(bar);
    }
}

// Initialisation au chargement
document.addEventListener('DOMContentLoaded', um_update_pitch);
</script>