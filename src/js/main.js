(function() {
    "use strict";

    const init = () => {
        console.log("🚀 Moteur Alpha activé...");

        const burger = document.getElementById('burger-trigger');
        const menu = document.querySelector('.mega-menu-content'); 
        const themeBtn = document.getElementById('theme-switch');

        // --- GESTION DU MENU BURGER ---
        if (burger && menu) {
            burger.addEventListener('click', function(e) {
                e.preventDefault();
                burger.classList.toggle('is-active');
                menu.classList.toggle('is-active');
                document.body.classList.toggle('no-scroll');
                console.log("Menu Alpha : " + (menu.classList.contains('is-active') ? "OUVERT" : "FERMÉ"));
            });

            menu.addEventListener('click', (e) => {
                if (e.target.tagName === 'A') {
                    burger.classList.remove('is-active');
                    menu.classList.remove('is-active');
                    document.body.classList.remove('no-scroll');
                }
            });
        }

        // --- GESTION DU THÈME ---
        if (themeBtn) {
            themeBtn.addEventListener('click', function() {
                document.body.classList.toggle('dark-theme');
                const isDark = document.body.classList.contains('dark-theme');
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
            });
            if (localStorage.getItem('theme') === 'dark') {
                document.body.classList.add('dark-theme');
            }
        }

        // --- GESTIONNAIRE DE COPIE CSS (MODERNE) ---
        document.addEventListener('click', async function(event) {
            const btn = event.target.closest('.btn-copy');
            if (btn) {
                event.preventDefault();
                
                // Utilisation de .dataset (Recommandé par Sonar)
                const codeToCopy = btn.dataset.code;
                
                if (codeToCopy) {
                    try {
                        // Utilisation de l'API Clipboard (Remplace execCommand déprécié)
                        await navigator.clipboard.writeText(codeToCopy);
                        
                        const originalHTML = btn.innerHTML;
                        btn.innerHTML = '<i class="fas fa-check"></i> Copié !';
                        btn.classList.add('copy-success');
                        
                        setTimeout(() => {
                            btn.innerHTML = originalHTML;
                            btn.classList.remove('copy-success');
                        }, 2000);
                        
                    } catch (err) {
                        console.error('Erreur de copie avec Clipboard API :', err);
                    }
                }
            }
        });
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();