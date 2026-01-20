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





# 8. MÉMO TECHNIQUE : LAB-CREA-CODE (Version 1.1)

## 1. NAVIGATION : MÉGA-MENU (Structure 3x3)
Le menu est stabilisé sur une grille de 3 colonnes symétriques.
- **Colonne 1 (Création)** : Identité / Arts Numériques / Post-Prod.
- **Colonne 2 (Conception)** : UX / UI / Architecture Design System.
- **Colonne 3 (Ressources)** : Composants CSS / Layouts / Standards Web.

## 2. COMPOSANTS : CARDS & GRADIENTS
- **Layout** : Full Bleed (le dégradé occupe 100% du conteneur haut).
- **Style de bouton** : "Real Frosted Glass".
    - Fond : Anthracite (`rgba(35, 35, 35, 0.75)`).
    - Flou : `blur(15px)`.
    - Détail Premium : Biseau supérieur blanc (`border-top`) et effet de reflet (shimmer) au survol.

## 9. PROTOCOLE GIT (Validé)
Dernière séquence validée :
1. `git add includes/header.php`
2. `git commit -m "Fix: Finalize Mega-Menu symmetry (3x3 structure)"`
3. `git push origin main`

---
**STATUT : STABILISÉ & PUSHÉ**

## 10. STRUCTURE DE TRAVAIL "LAB-CREA-CODE"

Cette étape définit la création d'une bibliothèque de composants UX-UI isolés. Chaque module est une entité autonome (Page Distinctive) permettant une démonstration stratégique auprès du client.

### 10.1 Philosophie d'Isolation
* **Indépendance totale** : Chaque outil possède son propre fichier racine PHP et son propre fichier de style SCSS.
* **Encapsulation CSS** : Utilisation d'une classe racine unique (ex: `.ux-page-persona`) pour garantir l'étanchéité du style.
* **Objectif Client** : Fournir des briques de réflexion utilisables comme modèles de démonstration ou d'éducation (notamment pour les franchisés).

### 10.2 Ordre d'Exécution des Modules
1. **Page Persona** : Définition de la cible et des besoins psychologiques.
2. **Page User Journey** : Cartographie du parcours utilisateur et des points de contact.
3. **Page Style Tile** : Synthèse visuelle (couleurs, typographies, textures) avant design final.
4. **Page Brand Guidelines** : Éducation au respect de la charte et des contraintes de marque.

### 10.3 Évolution de l'Arborescence
L'intégration de ces modules impacte la structure comme suit :

```text
C:.
│   ux-persona.php          <-- Page distinctive 01
│   ux-journey.php          <-- Page distinctive 02
│   ux-styletile.php        <-- Page distinctive 03
│   ux-brand.php            <-- Page distinctive 04
│
└───src
    └───scss
        ├───pages
        │       _ux-persona.scss    <-- Style isolé 01
        │       _ux-journey.scss    <-- Style isolé 02
        │       _ux-styletile.scss  <-- Style isolé 03
        │       _ux-brand.scss      <-- Style isolé 04
```
### ETAPE 1 : Création de la Page 01 (Persona)




### ETAPE 2 : Création de la Page 01 (Persona)







**Souhaites-tu que je te génère le code complet pour `ux-persona.php` et son fichier SCSS `_ux-persona.scss` en suivant scrupuleusement cette règle d'isolation ?**