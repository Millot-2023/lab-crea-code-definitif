/**
 * GESTION DU THÈME (DARK MODE)
 * Projet : Lab Crea Code
 */

document.addEventListener('DOMContentLoaded', () => {
    const themeBtn = document.getElementById('theme-switch');
    const body = document.body;

    // 1. Vérifier si un thème est déjà enregistré dans le localStorage
    const currentTheme = localStorage.getItem('theme');

    // 2. Si un thème a été enregistré, on l'applique immédiatement
    if (currentTheme === 'dark') {
        body.classList.add('dark-theme');
    }

    // 3. Écouteur de clic sur le bouton de changement de thème
    if (themeBtn) {
        themeBtn.addEventListener('click', () => {
            // Basculer la classe sur le body
            body.classList.toggle('dark-theme');

            // Sauvegarder le choix de l'utilisateur
            let theme = 'light';
            if (body.classList.contains('dark-theme')) {
                theme = 'dark';
            }
            localStorage.setItem('theme', theme);
            
            // Log de contrôle (optionnel)
            console.log(`Thème switché : ${theme}`);
        });
    }
});