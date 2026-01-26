<?php
/**
 * FICHIER : main-persona.php
 * NAVIGATION : Gestion des onglets et fonctions de copie paramétrées
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
/**
 * Gère le changement d'onglet et l'état actif des boutons
 */
function selectPersona(e, personaId) {
    if(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // 1. NETTOYAGE : Désactive tous les boutons persona
    const buttons = document.querySelectorAll('.btn-persona');
    buttons.forEach(btn => {
        btn.classList.remove('active');
    });

    // 2. ACTIVATION : Allume le bouton cliqué
    if(e && e.currentTarget) {
        e.currentTarget.classList.add('active');
    }

    // 3. AFFICHAGE : Masque tous les contenus et affiche le sélectionné
    const contents = document.querySelectorAll('.persona-tab-content');
    contents.forEach(content => {
        content.classList.remove('active');
        content.style.display = 'none';
    });
    
    const activeContent = document.getElementById('persona-' + personaId);
    if(activeContent) {
        activeContent.classList.add('active');
        activeContent.style.display = 'flex'; // Maintient la structure Flexbox
    }
}

/**
 * COPIE HTML : Récupère la structure du persona actif
 */
function copyHTML(e) {
    if(e) e.stopPropagation();
    
    // Cible spécifiquement la .persona-card dans l'onglet actif
    const activePersona = document.querySelector('.persona-tab-content.active .persona-card');
    
    if (activePersona) {
        const htmlCode = activePersona.outerHTML;
        navigator.clipboard.writeText(htmlCode).then(() => {
            alert("✅ Structure HTML du Persona copiée !");
        }).catch(err => {
            console.error('Erreur de copie HTML :', err);
        });
    }
}

/**
 * COPIE SCSS : Envoie le bloc de style robuste paysage
 */
function copyCSS(e) {
    if(e) e.stopPropagation();
    
    const scssCode = `.persona-card {
    display: flex;
    flex-direction: row;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    min-height: 500px;
    border: 1px solid #eee;

    .persona-sidebar {
        flex: 0 0 320px;
        background-color: #2c3e50;
        color: #fff;
        padding: 3rem 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .persona-main {
        flex: 1;
        padding: 3.5rem;
        background: #fff;
    }

    @media (max-width: 900px) {
        flex-direction: column;
    }
}`;

    navigator.clipboard.writeText(scssCode).then(() => {
        alert("✅ Code SCSS (Architecture Flex) copié !");
    }).catch(err => {
        console.error('Erreur de copie SCSS :', err);
    });
}
</script>