<?php
/**
 * CONTENU : ACCESSIBILITÉ & SEO
 * Fichier : includes/accessibilite-seo/main-seo.php
 */
?>

<section id="seo-audit-content" style="padding: 60px 0;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <header style="margin-bottom: 50px; text-align: center;">
            <h2 style="font-size: 2.5rem; margin-bottom: 10px; color: var(--text-color, #333);">Audit & Standards</h2>
            <p style="font-size: 1.2rem; color: var(--text-color, #555);">Le protocole de robustesse appliqué au Lab.</p>
        </header>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 25px;">
            
            <div class="audit-card" style="background: #1a1a1a; color: #fff; padding: 30px; border-radius: 15px; border-top: 4px solid #2ed573; display: flex; flex-direction: column;">
                <h3 style="color: #2ed573; text-transform: uppercase; letter-spacing: 1px; margin-top: 0;">🚀 SEO & Sémantique</h3>
                <p style="font-size: 0.9rem; color: #ddd; margin-bottom: 20px;">Visibilité et indexation moteurs.</p>
                <ul style="list-style: none; padding: 0; line-height: 1.8; font-size: 0.95rem;">
                    <li><span style="color: #2ed573;">✔</span> <strong>Structure Hn :</strong> Hiérarchie logique sans sauts.</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Metadonnées :</strong> Title & Description par page.</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Sitemap :</strong> Arborescence XML automatisée.</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Canonical :</strong> Éviter le "duplicate content".</li>
                </ul>
            </div>

            <div class="audit-card" style="background: #1a1a1a; color: #fff; padding: 30px; border-radius: 15px; border-top: 4px solid #2ed573; display: flex; flex-direction: column;">
                <h3 style="color: #2ed573; text-transform: uppercase; letter-spacing: 1px; margin-top: 0;">♿ Accessibilité (A11y)</h3>
                <p style="font-size: 0.9rem; color: #ddd; margin-bottom: 20px;">Inclusion et navigation universelle.</p>
                <ul style="list-style: none; padding: 0; line-height: 1.8; font-size: 0.95rem;">
                    <li><span style="color: #2ed573;">✔</span> <strong>ARIA Roles :</strong> Labels pour lecteurs d'écran.</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Alt-Text :</strong> Description d'images systématique.</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Contraste :</strong> Ratio WCAG AA certifié (Lighthouse 100).</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Keyboard :</strong> Navigation Tab et Focus visible.</li>
                </ul>
            </div>

            <div class="audit-card" style="background: #1a1a1a; color: #fff; padding: 30px; border-radius: 15px; border-top: 4px solid #2ed573; display: flex; flex-direction: column;">
                <h3 style="color: #2ed573; text-transform: uppercase; letter-spacing: 1px; margin-top: 0;">⚡ Performance Web</h3>
                <p style="font-size: 0.9rem; color: #ddd; margin-bottom: 20px;">Vitesse et Core Web Vitals.</p>
                <ul style="list-style: none; padding: 0; line-height: 1.8; font-size: 0.95rem;">
                    <li><span style="color: orange;">⚠</span> <strong>WebP :</strong> Conversion des images (En cours).</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Minification :</strong> CSS & JS compressés pour le push.</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Caching :</strong> Headers .htaccess validés.</li>
                    <li><span style="color: #2ed573;">✔</span> <strong>Lazy-load :</strong> Chargement différé des médias.</li>
                </ul>
            </div>

        </div>

        <div style="margin-top: 50px; padding: 30px; border: 2px dashed #ddd; border-radius: 15px; text-align: center;">
            <p style="font-style: italic; color: #666;">"Un code qui n'est pas accessible est un code qui n'est pas terminé."</p>
        </div>
    </div>
</section>