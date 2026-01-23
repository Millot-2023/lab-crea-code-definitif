C:.
│   index.php
│
├───css
│       index.css
│       styles.css              <-- (CSS compilé : Dark Mode inclus)
│
├───includes
│       footer.php
│       header.php              <-- (Modifié : Switch thèmes & Icônes)
│
├───src
│   ├───js
│   │       main.js
│   │       theme.js            <-- (Nouveau : Logique Dark Mode)
│   │
│   └───scss
│       │   styles.scss         <-- (Modifié : Import base/theme)
│       │
│       ├───abstracts
│       │       _index.scss
│       │       _variables.scss
│       │
│       ├───base
│       │       _reset.scss
│       │       _theme.scss      <-- (Nouveau : Styles Dark & Burger)
│       │
│       ├───components
│       │       _buttons.scss
│       │       _cards.scss
│       │
│       └───layout
│               _header.scss
│               _megamenu.scss  <-- (Stabilisé : Structure pills)




Le Laboratoire (Complet)

http://localhost/unit-master/unit-master.php


Le Hub (Module seul)

http://localhost/unit-master/stress-testeur.php


Le Convertisseur

http://localhost/unit-master/main-converter.php


tree /f


Outil	Fichier à créer	Rôle
Clamp Generator	main-clamp.php	Typographie fluide.
Aspect Ratio	main-ratio.php	Proportions d'images.
Color Lab	main-color.php	HEX vers HSL & Accessibilité.






### 📂 Architecture des Modules

| Page Racine | Dossier Includes Dédié | Fichier de Contenu (Main) |
| :--- | :--- | :--- |
| `ux-journey.php` | `includes/journey/` | `main-journey.php` |
| `ux-persona.php` | `includes/persona/` | `main-persona.php` |
| `ux-tools.php` | `includes/tools/` | `main-tools.php` |
| `unit-master.php` | `includes/unit-master/` | `main-unit-master.php` |
| `stress-tester.php` | `includes/stress-tester/` | `main-stress-tester.php` |