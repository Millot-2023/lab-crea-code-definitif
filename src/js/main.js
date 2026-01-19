document.addEventListener('DOMContentLoaded', () => {
    // --- GESTION DE LA COPIE DES GRADIENTS ---
    const copyButtons = document.querySelectorAll('.btn-copy');

    if (copyButtons.length > 0) {
        copyButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                // On stoppe la propagation si la carte entière est cliquable
                e.stopPropagation();

                const codeToCopy = button.getAttribute('data-code');

                if (codeToCopy) {
                    navigator.clipboard.writeText(codeToCopy).then(() => {
                        // Feedback visuel
                        const originalContent = button.innerHTML;
                        button.innerHTML = '<i class="fas fa-check"></i> Copié !';
                        button.classList.add('is-copied');

                        // Reset après 2 secondes
                        setTimeout(() => {
                            button.innerHTML = originalContent;
                            button.classList.remove('is-copied');
                        }, 2000);
                    }).catch(err => {
                        console.error('Erreur lors de la copie : ', err);
                    });
                }
            });
        });
    }
});