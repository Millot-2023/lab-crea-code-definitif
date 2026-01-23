# 🧪 Stress-Tester UI : *Laboratoire de Robustesse*

> **"Un bon design n'est pas seulement beau, il est incassable."**

Le **Stress-Tester** est un environnement d'isolation dédié à la ***validation ergonomique et technique*** des composants du Lab. Loin du *« Happy Path »* (le design idéal avec des contenus calibrés), cet outil permet de soumettre l'interface à des **conditions réelles et extrêmes** :

### 🚀 Points de contrôle critiques
* **Injections de textes XXL** : Pour valider la gestion des débordements (`overflow`) et des hauteurs fluides.
* **Mots incassables** : Pour tester la résistance des conteneurs face aux termes techniques allemands ou aux URLs longues via `word-break`.
* **Ratios d'images critiques** : Pour garantir la stabilité visuelle via `object-fit: cover` malgré des formats de fichiers imprévisibles.

---

### 🛠️ Architecture du module
L'outil est conçu pour être **totalement autonome** et **portable** :
1.  `index.php` : Structure de la zone de rendu (Sandbox).
2.  `style.css` : Design système de l'interface de test.
3.  `script.js` : Logique d'injection de données "toxiques".

**L'objectif final** : Garantir un **CSS robuste** et une ***expérience utilisateur (UX) irréprochable***, capable de résister à n'importe quelle variabilité de contenu en production.

---

*Ce module fait partie intégrante de la méthodologie **Lab Crea Code**.*


# 🎨 Variable Customizer : *L'Architecte de Design System*

Le **Variable Customizer** est un outil de prototypage dynamique permettant de moduler l'identité visuelle du Lab sans modifier une seule ligne de code source.

* **Contrôle en temps réel** : Ajustement des palettes chromatiques, des rayons de bordure (`border-radius`) et des échelles typographiques via une interface intuitive.
* **Générateur de configuration** : L'outil produit instantanément le bloc de variables SCSS correspondant à vos réglages.
* **Exportation simplifiée** : Une fois le design validé visuellement, il suffit de copier-coller le code généré dans le fichier `_variables.scss` pour pérenniser la configuration.

**L'objectif :** Accélérer la phase de recherche graphique et garantir la cohérence d'un Design System avant sa mise en production.



# 📐 Grid Comparator : *Le Duel des Structures*

> **"Choisir la bonne architecture pour un layout incassable."**

Le **Grid Comparator** est un outil d'analyse structurelle permettant de confronter les deux piliers du layout moderne : **Flexbox** et **CSS Grid**.

* **🔄 Commutateur Dynamique** : Basculement instantané d'un même groupe de composants entre une architecture *Flex* et une architecture *Grid*.
* **⚖️ Analyse Comparative** : Visualisation des différences d'alignement, de gestion des espacements (`gap`) et de comportement des éléments orphelins.
* **📱 Stress-Test Responsive** : Observation de la fluidité des deux méthodes lors du redimensionnement de la fenêtre pour identifier la structure la plus robuste.

**L'objectif :** Servir d'outil d'aide à la décision technique pour sélectionner la méthode de mise en page la plus adaptée à la complexité d'un composant.



# 📏 Ghost Inspector : *Visualiseur de Squelette CSS*

> **"Rendre visible l'invisible pour une précision au pixel près."**

Le **Ghost Inspector** est un outil de diagnostic structurel qui permet d'afficher instantanément l'architecture "invisible" de n'importe quel composant ou mise en page. Il est le garant du respect strict de la **Box-Model**.

* **🕵️ Analyse de la Box-Model** : Mise en évidence automatique des bordures, marges (`margin`) et zones de remplissage (`padding`) via un code couleur spécifique.
* **🎯 Détection d'Alignement** : Identification immédiate des éléments qui sortent du flux, des "espaces fantômes" ou des blocs mal imbriqués dans le DOM.
* **💎 Finition "Pixel Perfect"** : Un mode diagnostic indispensable pour valider la propreté de l'intégration et la symétrie des structures avant la mise en production.

**L'objectif :** Garantir une rigueur absolue dans l'application des espacements et faciliter la maintenance du code en visualisant l'empilement réel des balises HTML.



# 📏 Unit-Master : *Convertisseur de Mesures Contextuel*

> **"Maîtriser les échelles pour un design véritablement adaptatif."**

Le **Unit-Master** est un outil de calcul et de conversion dédié aux unités CSS modernes. Il permet de traduire instantanément les intentions de design en valeurs techniques précises.

* **🔄 Conversion Dynamique** : Passage fluide entre les unités fixes (`px`, `cm`, `mm`) et les unités relatives (`rem`, `em`, `ch`).
* **🌐 Viewport Calculator** : Calculateur de ratios pour les unités de vue (`vw`, `vh`), essentiel pour les layouts fluides.
* **📐 Visualiseur de Pitch** : Indicateur théorique des écarts entre les mesures CSS "logiques" et les mesures physiques selon les standards de résolution (96 DPI).

**L'objectif :** Supprimer les approximations lors de l'intégration et faciliter la mise en place d'une typographie et d'espacements parfaitement scalables.



# 👓 Contrast-Checker : *Garant de l'Accessibilité UI*

> **"Le design inclusif commence par une lisibilité parfaite."**

Le **Contrast-Checker** est un outil de vérification de conformité aux normes **WCAG** (Web Content Accessibility Guidelines). Il permet de valider la viabilité de tes palettes chromatiques en temps réel.

* **⚖️ Score de Contraste** : Calcul instantané du ratio de contraste entre le texte et l'arrière-plan.
* **✅ Validation AA / AAA** : Indicateurs de réussite pour les différents niveaux d'exigences légales et ergonomiques.
* **💡 Suggestions de Correction** : Aide à l'ajustement des teintes pour atteindre le seuil de lisibilité sans trahir l'identité visuelle.

**L'objectif :** Intégrer l'accessibilité au cœur du processus de création pour des interfaces utilisables par tous.

---

## 📝 PRIORITE ABSOLUE - Synthèse Technique & Engagements (21/01/2026)

### 🏗️ Arborescence Logicielle
* **Fichier Racine** : `stress-tester.php`.
* **Dossier Inclusions** : `includes/stress-tester/` contenant `main-stress-tester.php`.
* **Style Dédié** : `src/scss/pages/_stress-tester.scss`.

### 📋 Engagements de navigation
* **Mode Accordéon** : Le menu mobile doit fonctionner en système d'accordéon.
* **Affichage Restreint** : Seuls les 6 piliers (Identité, Arts, Post-Prod, UX, UI, Architecture) sont visibles au chargement du menu mobile.
* **Intégrité Desktop** : Aucune modification du menu desktop actuel n'est autorisée.
* **Droit de Veto** : Christophe Millot conserve un droit de veto absolu sur les marges des fichiers "includes".