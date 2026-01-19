# PROJET : LAB-CREA-CODE
---

# Mega-Projet : Structure du Menu & Workflow

## 0. Méthode & Engagements (Le Verrou)
- **Zéro initiative :** Je ne modifie jamais les couleurs, les classes ou l'organisation des fichiers sans ton accord préalable.
- **Zéro Chirurgie :** On ne modifie pas un partiel validé. On crée une version v2 si nécessaire.
- **Intégrité :** Toujours fournir les fichiers complets pour éviter les fragments cassés.
- **Architecture SCSS :** Système de modules Dart Sass (`@use`). Standard pérenne.
- **Thématisation :** Dark Mode Hybride. Automatique (Système) + Commutateur manuel.
- **Indépendance CSS :** Une classe unique par élément. Pas d'empilage de classes.
- **Unités :** `rem` (contenu) et `px` (structure fixe). Base 62.5% (1rem = 10px).
- **Responsive :** Desktop (3 col), Tablette (clic), Mobile (burger).
- **Fix :** Alignement rail 1200px et centrage section Monk's.

## 1. Pilier : CRÉATION (Le Visuel)
* **Logos & Identités**
* **Illustrations**
* **Retouches**

## 2. Pilier : CONCEPTION (L'UX)
* **Stratégie**
* **Maquettes & Prototypes**
* **Design Systems**

## 3. Pilier : RESSOURCES (Le Code)
* **Cards CSS (Libre-service)**
* **Grilles & Layouts**
* **Système REM**

## 4. Informations de Contact & Vie Privée
- **Standard :** Lien `mailto:` pour accessibilité recrutement (ATS).
- **Sécurité :** Masquage léger par entités HTML.
- **Confidentialité :** Exclusion totale du téléphone, de l'adresse et de l'état civil.

## 5. Proposition d'Arborescence (Structure des Dossiers)

```text
/root
│
├── index.html           # Fichier principal
│
├── /assets
│   ├── /images          # Logos, Illustrations, Retouches
│   └── /icons           # SVGs et icônes interface
│
├── /src
│   └── /scss
│       ├── main.scss    # LE CHEF D'ORCHESTRE (Système @use)
│       ├── /abstracts   # Configuration (Privée via @use)
│       │   ├── _index.scss      # Point de relais des abstracts
│       │   ├── _variables.scss
│       │   ├── _typography.scss
│       │   └── _functions.scss
│       ├── /base        # Fondations
│       │   └── _reset.scss
│       ├── /layout      # Squelette
│       │   ├── _header.scss
│       │   ├── _footer.scss
│       │   ├── _megamenu.scss
│       │   └── _layout.scss
│       └── /components  # Briques
│           ├── _cards.scss
│           ├── _buttons.scss
│           └── _contact-info.scss
│
└── /dist                # Fichiers compilés
    └── style.css
```

## 6. architecture Mega-menu
```text
[ BARRE DE NAVIGATION (Sticky) ]
├── LOGO (Retour Home)
├── LIEN : CRÉATION ────────┐
├── LIEN : CONCEPTION ──────┤ (Au survol/clic -> Ouverture Mega-Menu)
├── LIEN : RESSOURCES ──────┘
└── BOUTON : COMMUTATEUR THÈME (Jour/Nuit)

[ CONTENU DU MEGA-MENU (3 Colonnes) ]
│
├── COLONNE 1 : CRÉATION
│   ├── SECTION : Identité Visuelle
│   │   ├── Logos Vectoriels
│   │   ├── Chartes Graphiques
│   │   └── Brand Guidelines
│   ├── SECTION : Arts Numériques
│   │   ├── Illustrations Concept
│   │   ├── Roughs & Storyboards
│   │   └── Peinture Digitale
│   └── SECTION : Post-Production
│       ├── Retouches Haute-Fréquence
│       ├── Colorimétrie (Lut)
│       └── Montage Photo (Compositing)
│
├── COLONNE 2 : CONCEPTION
│   ├── SECTION : Analyse & UX
│   │   ├── Études Personas
│   │   ├── Parcours Utilisateurs
│   │   └── Audits Ergonomiques
│   ├── SECTION : Interface UI
│   │   ├── Maquettes Haute Fidélité
│   │   ├── Prototypes Interactifs
│   │   └── Micro-animations
│   └── SECTION : Architecture
│       ├── Bibliothèques Figma
│       ├── Design Systems Scalables
│       └── Documentation Atome
│
├── COLONNE 3 : RESSOURCES
│   ├── SECTION : Composants (CSS)
│   │   ├── Cards & Glassmorphism
│   │   ├── Boutons & Inputs
│   │   └── Effets de Hover (Survol)
│   ├── SECTION : Mise en Page
│   │   ├── Grilles CSS Grid
│   │   ├── Flexbox Containers
│   │   └── Layouts Responsive
│   └── SECTION : Standards Web
│       ├── Typographie (REM)
│       ├── Règles Accessibilité W3C
│       └── Optimisation SEO/Code
│
└── [ PIED DE MENU (Minimaliste) ]
    └── "Informations : contact[at]votre-domaine.com — Profil Professionnel"
```

## 7. architecture Mega-menu
```text
[ CHOIX TECHNIQUE : DART SASS ]
├── STANDARD : Abandon de @import (Méthode dépréciée)
├── SOLUTION : Utilisation systématique de @use et @forward
├── OBJECTIF : Zéro obsolescence technique & Modularité
└── REGLE : Import local via abstracts/index dans chaque partiel
```