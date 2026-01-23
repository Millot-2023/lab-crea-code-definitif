<?php
/**
 * Projet : Unit-Master
 * Fichier : main-stress-tester.php
 * Rôle : Testeur de robustesse (Overflow, Long text, Breakpoints)
 */

$func_path = dirname(__FILE__) . '/main-functions.php';
if (file_exists($func_path)) {
    require_once $func_path;
}
?>

<div class="um-tool-container">
    <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 20px;">
        
        <button class="um-btn-copy" onclick="um_inject_stress('short')" style="background: #10b981;">Texte Court</button>
        <button class="um-btn-copy" onclick="um_inject_stress('long')" style="background: #f59e0b;">Texte Long</button>
        <button class="um-btn-copy" onclick="um_inject_stress('break')" style="background: #ef4444;">Anti-Break (Mot Long)</button>
        <button class="um-btn-copy" onclick="um_reset_stress()" style="background: #6b7280;">Reset</button>

    </div>

    <div id="um-stress-sandbox" 
         style="background: #ffffff; border: 2px dashed #cbd5e1; padding: 20px; border-radius: 6px; min-height: 120px; transition: all 0.3s ease;">
        <p style="color: #94a3b8; font-style: italic;">La zone de test est vide. Injectez du contenu pour tester la résistance de votre layout.</p>
    </div>

    <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
        <small style="color: #64748b; font-weight: bold; text-transform: uppercase; font-size: 0.65rem;">Simulateur d'encombrement</small>
        <div style="display: flex; align-items: center; gap: 10px;">
            <label style="font-size: 0.7rem; font-weight: bold;">Largeur Zone :</label>
            <input type="range" min="200" max="1000" value="1000" style="width: 150px;" oninput="um_resize_sandbox(this.value)">
        </div>
    </div>
</div>

<script>
/**
 * Logique d'injection de contenu "stressant"
 */
const stressContent = {
    short: "Lorem ipsum dolor sit amet.",
    long: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
    break: "Supercalifragilisticexpialidocious-avec-une-suite-de-caractères-interminable-qui-devrait-normalement-tout-casser-sur-son-passage-si-le-word-wrap-est-mal-regle"
};

function um_inject_stress(type) {
    const sandbox = document.getElementById('um-stress-sandbox');
    sandbox.innerHTML = `<div style="color: #1e293b; line-height: 1.5;">${stressContent[type]}</div>`;
}

function um_reset_stress() {
    const sandbox = document.getElementById('um-stress-sandbox');
    sandbox.innerHTML = '<p style="color: #94a3b8; font-style: italic;">La zone de test est vide.</p>';
    sandbox.style.width = "100%";
}

function um_resize_sandbox(val) {
    const sandbox = document.getElementById('um-stress-sandbox');
    sandbox.style.width = val + "px";
}
</script>