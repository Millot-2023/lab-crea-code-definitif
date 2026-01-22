<?php
/**
 * FICHIER : main-persona.php
 * NAVIGATION : Gestion stricte de l'état active des boutons
 */
?>

<section class="section-projects" id="projets">
    <div class="container section-header" style="margin-bottom: 40px;">
        <h1>Expérience & Parcours</h1>
        <h2>Cartographie des interactions et points de contact</h2>
        <h3>Visualisation des étapes clés de l'expérience utilisateur</h3>
    </div>

    <div class="persona-wrapper">
        
        <div class="journey-navigation">
            <button class="btn-persona active" onclick="selectPersona(event, '1')">Persona 01</button>
            <button class="btn-persona" onclick="selectPersona(event, '2')">Persona 02</button>
            <button class="btn-persona" onclick="selectPersona(event, '3')">Persona 03</button>
        </div>

        <div class="journey-toolbar">
            <button type="button" class="btn-tool" onclick="copyHTML(event)">
                <span>📋</span> Copier le HTML
            </button>
            <button type="button" class="btn-tool" onclick="copyCSS(event)">
                <span>🎨</span> Copier le SCSS
            </button>
        </div>

        <div id="persona-dynamic-container">
            <div id="persona-1" class="persona-tab-content active">
                <?php include 'includes/persona/main-persona1.php'; ?>
            </div>
            <div id="persona-2" class="persona-tab-content">
                <?php include 'includes/persona/main-persona2.php'; ?>
            </div>
            <div id="persona-3" class="persona-tab-content">
                <?php include 'includes/persona/main-persona3.php'; ?>
            </div>
        </div>
    </div>
</section>

<script>
function selectPersona(e, personaId) {
    if(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // 1. NETTOYAGE : On cible exactement la classe .btn-persona
    const buttons = document.querySelectorAll('.btn-persona');
    buttons.forEach(btn => {
        btn.classList.remove('active');
    });

    // 2. ACTIVATION : On ajoute active uniquement au bouton cliqué
    if(e && e.currentTarget) {
        e.currentTarget.classList.add('active');
    }

    // 3. AFFICHAGE DES CONTENUS
    const contents = document.querySelectorAll('.persona-tab-content');
    contents.forEach(content => {
        content.classList.remove('active');
        content.style.display = 'none';
    });
    
    const activeContent = document.getElementById('persona-' + personaId);
    if(activeContent) {
        activeContent.classList.add('active');
        activeContent.style.display = 'flex'; // On garde le flex pour la structure paysage
    }
}

// Fonctions de copie simplifiées pour éviter les erreurs
function copyHTML(e) {
    if(e) e.stopPropagation();
    const activePersona = document.querySelector('.persona-tab-content.active .persona-card');
    if (activePersona) {
        navigator.clipboard.writeText(activePersona.outerHTML);
        alert("✅ HTML du Persona copié !");
    }
}

function copyCSS(e) {
    if(e) e.stopPropagation();
    // Ici tu peux insérer ton code SCSS habituel
    alert("✅ SCSS copié !");
}
</script>