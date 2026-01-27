<?php
/**
 * FICHIER : includes/charte graphique/main-charte.php
 * VISUEL : Palette, Typographie et Icônes centrées
 */
?>

<script src="https://unpkg.com/lucide@latest"></script>

<div class="ux-page-charte" id="charte-graphique-container">
    
    <header class="charte-header">
        <h1>Charte Graphique - Template</h1>
        <p>Codification de l'identité visuelle et normes de marque.</p>
    </header>

    <hr class="separator">


    <h2 class="">01. Palette Chromatique</h2>
    <p>Nom de la police</p>
    <div class="charte-block">
        <div class="grid-layout">
            <div class="grid-item">
                <div class="swatch" style="background-color: #2ecc71;"></div>
                <div class="item-info">
                    <span class="label-primary">Green Lab</span>
                    <span class="label-secondary">#2ECC71</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="swatch" style="background-color: #2c3e50;"></div>
                <div class="item-info">
                    <span class="label-primary">Architect Blue</span>
                    <span class="label-secondary">#2C3E50</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="swatch" style="background-color: #f8f9fa; border: 1px solid #ddd;"></div>
                <div class="item-info">
                    <span class="label-primary">Cloud White</span>
                    <span class="label-secondary">#F8F9FA</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="swatch" style="background-color: #e74c3c;"></div>
                <div class="item-info">
                    <span class="label-primary">Alert Red</span>
                    <span class="label-secondary">#E74C3C</span>
                </div>
            </div>
        </div>
    </div>

    <hr class="separator">

    <h2 class="">02. Système Typographique</h2>
    <p>Nom de la police</p>
   <div class="charte-block">
        <div class="typo-container">
            <div class="typo-row"><h1>Titre h1</h1></div>
            <div class="typo-row"><h2>Titre h2</h2></div>
            <div class="typo-row"><h3>Titre h3</h3></div>
            <div class="typo-row"><h4>Titre h4</h4></div>
            <div class="typo-row"><h5>Titre h5</h5></div>
            <div class="typo-row"><p>Texte de paragraphe standard pour vérification de la lisibilité.</p></div>
        </div>
    </div>

    <hr class="separator">

    <h2 class="">03. Iconographie & Style</h2>
    <p>Nom de la police</p>
    <div class="charte-block">
        <div class="grid-layout">
            <div class="grid-item">
                <div class="icon-holder"><i data-lucide="layers"></i></div>
                <div class="item-info"><span class="label-primary">Architecture</span></div>
            </div>
            <div class="grid-item">
                <div class="icon-holder"><i data-lucide="monitor"></i></div>
                <div class="item-info"><span class="label-primary">Interface</span></div>
            </div>
            <div class="grid-item">
                <div class="icon-holder"><i data-lucide="mouse-pointer-2"></i></div>
                <div class="item-info"><span class="label-primary">Interaction</span></div>
            </div>
            <div class="grid-item">
                <div class="icon-holder"><i data-lucide="smartphone"></i></div>
                <div class="item-info"><span class="label-primary">Mobile</span></div>
            </div>
        </div>
    </div>

</div>

<script>
  lucide.createIcons();
</script>