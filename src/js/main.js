/**
 * Fichier : src/js/main.js
 * Rôle : Gestion des interactions de la bibliothèque de gradients
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- GESTION DE LA COPIE DES GRADIENTS ---
    const copyButtons = document.querySelectorAll('.btn-copy');

    if (copyButtons.length > 0) {
        copyButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                // On stoppe la propagation si la carte entière est cliquable
                // Cela évite des conflits si on ajoute un lien sur la carte plus tard
                e.stopPropagation();

                // On récupère le code CSS stocké dans le data-attribute du bouton
                const codeToCopy = button.getAttribute('data-code');

                if (codeToCopy) {
                    // Utilisation de l'API Clipboard moderne
                    navigator.clipboard.writeText(codeToCopy).then(() => {
                        
                        // 1. Sauvegarde du contenu original (Texte + Icône)
                        const originalContent = button.innerHTML;
                        
                        // 2. Feedback visuel immédiat
                        button.innerHTML = '<i class="fas fa-check"></i> Copié !';
                        button.classList.add('is-copied');

                        // 3. Reset après 2 secondes pour revenir à l'état initial
                        setTimeout(() => {
                            button.innerHTML = originalContent;
                            button.classList.remove('is-copied');
                        }, 2000);

                    }).catch(err => {
                        console.error('Erreur lors de la copie : ', err);
                        alert("Désolé, la copie a échoué.");
                    });
                }
            });
        });
    }
});