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

        // --- GESTIONNAIRE DE COPIE CSS (ALPHA) ---
        document.addEventListener('click', function(event) {
            const btn = event.target.closest('.btn-copy');
            if (btn) {
                event.preventDefault();
                const codeToCopy = btn.getAttribute('data-code');
                
                if (codeToCopy) {
                    const textArea = document.createElement("textarea");
                    textArea.value = codeToCopy;
                    // On rend le textarea invisible
                    textArea.style.position = "fixed";
                    textArea.style.left = "-9999px";
                    document.body.appendChild(textArea);
                    textArea.select();
                    
                    try {
                        const successful = document.execCommand('copy');
                        if (successful) {
                            const originalHTML = btn.innerHTML;
                            btn.innerHTML = '<i class="fas fa-check"></i> Copié !';
                            btn.classList.add('copy-success');
                            
                            setTimeout(() => {
                                btn.innerHTML = originalHTML;
                                btn.classList.remove('copy-success');
                            }, 2000);
                        }
                    } catch (err) {
                        console.error('Erreur de copie :', err);
                    }
                    document.body.removeChild(textArea);
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