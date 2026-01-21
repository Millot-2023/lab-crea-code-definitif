<?php
/**
 * FICHIER : main-ux-journey.php
 * DESTINATION : Section Journey de la page ux-journey.php
 * STRUCTURE : Header hiérarchique + Sélecteur de parcours dynamiques
 */
?>

<section class="section-projects" id="projets">
    <div class="container section-header" style="margin-bottom: 40px;">
        <h1>Expérience & Parcours</h1>
        <h2>Cartographie des interactions et points de contact</h2>
        <h3>Visualisation des étapes clés de l'expérience utilisateur</h3>
    </div>

    <div class="userJourney-wrapper">
        
        <div class="journey-navigation">
            <button class="btn-persona active" onclick="selectPersona(event, '1')">Parcours 01</button>
            <button class="btn-persona" onclick="selectPersona(event, '2')">Parcours 02</button>
            <button class="btn-persona" onclick="selectPersona(event, '3')">Parcours 03</button>
        </div>

        <div class="journey-toolbar">
            <button type="button" class="btn-tool" onclick="copyHTML(event)">
                <span>📋</span> Copier le HTML
            </button>
            <button type="button" class="btn-tool" onclick="copyCSS(event)">
                <span>🎨</span> Copier le SCSS
            </button>
        </div>

        <div id="journey-dynamic-container">
            <div id="persona-1" class="persona-content active">
                <?php include 'includes/journey/main-journey1.php'; ?>
            </div>
            <div id="persona-2" class="persona-content">
                <?php include 'includes/journey/main-journey2.php'; ?>
            </div>
            <div id="persona-3" class="persona-content">
                <?php include 'includes/journey/main-journey3.php'; ?>
            </div>
        </div>
    </div>
</section>

<script>
function selectPersona(e, personaId) {
    if(e) e.stopPropagation();

    const buttons = document.querySelectorAll('.btn-persona');
    buttons.forEach(btn => btn.classList.remove('active'));
    if(e && e.currentTarget) e.currentTarget.classList.add('active');

    const contents = document.querySelectorAll('.persona-content');
    contents.forEach(content => content.classList.remove('active'));
    
    const activeContent = document.getElementById('persona-' + personaId);
    if(activeContent) activeContent.classList.add('active');
}

function copyHTML(e) {
    if(e) e.stopPropagation();
    
    const activePersona = document.querySelector('.persona-content.active');
    const content = activePersona.querySelector('[id^="source-"]');
    
    if (content) {
        const htmlCode = content.innerHTML.trim();
        navigator.clipboard.writeText(htmlCode).then(() => {
            alert("✅ HTML du parcours copié !");
        }).catch(err => {
            console.error('Erreur de copie :', err);
        });
    }
}

function copyCSS(e) {
    if(e) e.stopPropagation();
    
    const scssCode = `.userJourney-wrapper {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;

    .userJourney-timeline {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 40px;

        &::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e0e0e0;
        }
    }

    .userJourney-step {
        display: flex;
        gap: 30px;
        position: relative;

        .step-marker {
            flex: 0 0 42px;
            height: 42px;
            background: #4834d4;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            z-index: 2;
            box-shadow: 0 0 0 6px #fff;
        }

        .step-content {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #eee;
            flex: 1;

            .step-phase {
                font-size: 0.8rem;
                text-transform: uppercase;
                color: #4834d4;
                font-weight: 700;
                display: block;
                margin-bottom: 8px;
            }

            h4 { font-size: 1.3rem; margin-bottom: 12px; color: #2c3e50; }
            p { color: #555; line-height: 1.6; }

            .step-meta {
                display: flex;
                gap: 20px;
                border-top: 1px solid #f0f0f0;
                padding-top: 15px;
                font-size: 0.9rem;
            }
        }
    }
}`;

    navigator.clipboard.writeText(scssCode).then(() => {
        alert("✅ Code SCSS copié avec succès !");
    }).catch(err => {
        console.error('Erreur de copie :', err);
    });
}
</script>