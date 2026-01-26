<?php
/**
 * SECTION : TEST VIERGE
 * Fichier : includes/vierge/main-vierge.php
 * Rôle : Validation de l'alignement structurel dans l'enceinte #projets.
 */
?>

<style>
    /* Structure du Wrapper de Test */
    .journey-wrapper {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }
    /* Animation simple pour confirmer le chargement */
    .journey-wrapper p {
        animation: fadeInVierge 0.6s ease-out;
    }
    @keyframes fadeInVierge {
        from { opacity: 0; }
        to { opacity: 1; }
    }

.paragraphe{
    display: flex;
    flex-direction: column;
    flex: 1;
    min-width: 0;

    }
.deuxBlocs{

    display:flex;
    flex-direction: column;
    }
    .deuxParagraphes {

    display: flex;
    flex-direction: row;
    gap: 10px;
    }

.troisBlocs{
    /*background-color: red;*/
    display:flex;
    flex-direction: column;
    }
    .troisParagraphes {

    display: flex;
    flex-direction: row;
    gap: 10px; /* ESPACE RÉEL ENTRE LES PARAGRAPHES */
    }
    
@media (max-width: 800px) {
    .deuxParagraphes {
        /*background-color: #ffcccc;*/
        display: flex;
        flex-direction: column;
        gap: 10px; /* ESPACE RÉEL ENTRE LES PARAGRAPHES */
        }

    .troisParagraphes {
        /*background-color: #ffcccc;*/
        display: flex; 
        flex-direction: column;
        gap: 10px; /* ESPACE RÉEL ENTRE LES PARAGRAPHES */
        }

}
</style>

<div class="journey-wrapper">
    <h1>H1 - Vierge</h1>
        <div class="">
            <p>Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam at enim repellendus, temporibus animi ut ab dolor doloribus aut consequatur harum mollitia natus corrupti? Explicabo quis veritatis facilis neque! Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam at enim repellendus, temporibus animi ut ab dolor doloribus aut consequatur harum mollitia natus corrupti? Explicabo quis veritatis facilis neque!Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor.</p>
        </div>

    <h2>H2 - Titre de chapitre</h2>
        <div class="">
            <p>Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam at enim repellendus, temporibus animi ut ab dolor doloribus aut consequatur harum mollitia natus corrupti? Explicabo quis veritatis facilis neque! Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam at enim repellendus, temporibus animi ut ab dolor doloribus aut consequatur harum mollitia natus corrupti? Explicabo quis veritatis facilis neque!Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor.</p>
        </div>

    <h3>H3 - Titre d'articles</h3>
        <div class="">
            <p>Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam at enim repellendus, temporibus animi ut ab dolor doloribus aut consequatur harum mollitia natus corrupti? Explicabo quis veritatis facilis neque! Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam at enim repellendus, temporibus animi ut ab dolor doloribus aut consequatur harum mollitia natus corrupti? Explicabo quis veritatis facilis neque!Introduction à la hiérarchie visuelle de la page. Lorem ipsum dolor.</p>
        </div>
        
<div class="deuxBlocs">
    <h3>H3 - Titre 2 Blocs</h3>
    <div class="deuxParagraphes">

        <div class="paragraphe">
        <h4>Titre paragraphe</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, tempora dolore debitis nam unde consequatur saepe repudiandae, aliquam ducimus delectus quaerat corrupti odit quibusdam recusandae id, facere rerum aspernatur neque.</p>
        </div>
        <div class="paragraphe">
        <h4>Titre paragraphe</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, tempora dolore debitis nam unde consequatur saepe repudiandae, aliquam ducimus delectus quaerat corrupti odit quibusdam recusandae id, facere rerum aspernatur neque.</p>
        </div>
                <div class="paragraphe">
        <h4>Titre paragraphe</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, tempora dolore debitis nam unde consequatur saepe repudiandae, aliquam ducimus delectus quaerat corrupti odit quibusdam recusandae id, facere rerum aspernatur neque.</p>
        </div>
        <div class="paragraphe">
        <h4>Titre paragraphe</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, tempora dolore debitis nam unde consequatur saepe repudiandae, aliquam ducimus delectus quaerat corrupti odit quibusdam recusandae id, facere rerum aspernatur neque.</p>
        </div>

    </div>
</div>

    <div class="troisBlocs">
        <h4>H4 - Titre 3 Blocs</h4>
        <div class="troisParagraphes">
            <div class="paragraphe">
                <h4>Titre bloc 02</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, tempora dolore debitis nam unde consequatur saepe repudiandae, aliquam ducimus delectus quaerat corrupti odit quibusdam recusandae id, facere rerum aspernatur neque.</p>
            </div>
            <div class="paragraphe">
                <h4>Titre bloc 02</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, tempora dolore debitis nam unde consequatur saepe repudiandae, aliquam ducimus delectus quaerat corrupti odit quibusdam recusandae id, facere rerum aspernatur neque.</p>
            </div>
            <div class="paragraphe">
                <h4>Titre bloc 02</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, tempora dolore debitis nam unde consequatur saepe repudiandae, aliquam ducimus delectus quaerat corrupti odit quibusdam recusandae id, facere rerum aspernatur neque.</p>
            </div>
    </div>

</div><!--FERMETURE WRAPPER-->





    
    
    







<script>
/**
 * Logique de test (IIFE)
 */
(function() {
    console.log("Main-vierge injecté avec succès dans #projets");
})();
</script>