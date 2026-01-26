# 🧪 Lab Crea Code : *L'Arsenal de Robustesse*

Ce document centralise les outils de diagnostic et de configuration du Lab. Chaque module est conçu pour garantir un **CSS robuste** et une **UX incassable**.

---

## 🛠️ Stress-Tester UI : *Laboratoire d'Isolation*
> **"Un bon design n'est pas seulement beau, il est incassable."**

Le **Stress-Tester** est un environnement dédié à la validation extrême des composants, loin du "Happy Path" (design idéal).

* **Injections XXL** : Validation de la gestion des débordements (`overflow`) et des hauteurs fluides.
* **Mots incassables** : Test de résistance via `word-break` (URLs longues, termes techniques).
* **Ratios critiques** : Stabilité visuelle via `object-fit: cover` sur des formats imprévisibles.

---

## 🎨 Variable Customizer : *L'Architecte du Design System*
Outil de prototypage dynamique pour moduler l'identité visuelle sans toucher au code source.

* **Contrôle Temps Réel** : Ajustement des palettes, `border-radius` et échelles typographiques.
* **Générateur SCSS** : Production instantanée du bloc de variables pour `_variables.scss`.
* **Exportation** : Système de copier-coller pour pérenniser la configuration validée.

---

## 📐 Grid Comparator : *Le Duel des Structures*
Aide à la décision technique pour choisir l'architecture de layout la plus adaptée.

* **🔄 Commutateur Dynamique** : Basculement instantané entre **Flexbox** et **CSS Grid**.
* **⚖️ Analyse Comparative** : Visualisation des alignements, des `gap` et des éléments orphelins.
* **📱 Stress-Test Responsive** : Observation de la fluidité lors du redimensionnement.

---

## 🕵️ Ghost Inspector : *Visualiseur de Squelette*
Outil de diagnostic pour rendre l'invisible visible et respecter strictement la **Box-Model**.

* **Analyse Structurelle** : Mise en évidence des bordures, `margin` et `padding` par code couleur.
* **Détection d'Alignement** : Identification des "espaces fantômes" et des blocs hors-flux.
* **Finition Pixel Perfect** : Validation de la symétrie avant mise en production.

---

## 📏 Unit-Master : *Convertisseur de Mesures*
Maîtrise des échelles pour un design véritablement adaptatif et scalable.

* **🔄 Conversion Fluide** : Passage des unités fixes (`px`) aux unités relatives (`rem`, `em`, `ch`).
* **🌐 Viewport Calculator** : Calculateur de ratios pour unités de vue (`vw`, `vh`).
* **📐 Visualiseur de Pitch** : Indicateur des écarts selon les standards de résolution (96 DPI).

---

## 👓 Contrast-Checker : *Garant de l'Accessibilité*
Vérification de conformité aux normes **WCAG** pour un design inclusif.

* **⚖️ Score de Contraste** : Calcul du ratio texte/arrière-plan en temps réel.
* **✅ Validation AA / AAA** : Indicateurs de réussite pour les exigences légales.
* **💡 Suggestions** : Aide à l'ajustement des teintes sans trahir l'identité visuelle.

---

## 📝 Synthèse Technique & Engagements (Janvier 2026)

### 🏗️ Arborescence Logicielle
* **Fichier Racine** : `stress-tester.php`
* **Dossier Inclusions** : `includes/stress-tester/` -> `main-stress-tester.php`
* **Style Dédié** : `src/scss/pages/_stress-tester.scss`

### 📋 Règles de Navigation & Structure
1.  **Menu Mobile** : Fonctionnement impératif en système **d'accordéon**.
2.  **Affichage Restreint** : Seuls les 6 piliers (Identité, Arts, Post-Prod, UX, UI, Architecture) sont visibles au chargement initial sur mobile.
3.  **Intégrité Desktop** : Aucune modification du menu desktop actuel n'est autorisée.
4.  **Droit de Veto** : Christophe Millot conserve un droit de veto absolu sur les marges des fichiers "includes".
5.  **Priorité CSS** : Utilisation de l'architecture CSS robuste privilégiée face au SVG.

---
*Ce module fait partie intégrante de la méthodologie **Lab Crea Code**.*