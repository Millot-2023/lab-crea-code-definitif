# PROCÉDURE DE SÉCURITÉ XAMPP (OBLIGATOIRE)

Ce protocole doit être suivi strictement pour garantir la stabilité de l'environnement de développement local et éviter la corruption des bases de données SQL.

---

## 1. Ouverture (Start)
1. Faire un clic droit sur l'icône XAMPP et choisir **"Exécuter en tant qu'administrateur"**.
2. Cliquer sur le bouton **Start** d'Apache.
3. Cliquer sur le bouton **Start** de MySQL.
   * *Note : Attendre que les deux indicateurs soient sur fond vert avant de lancer votre navigateur.*

---

## 2. Fermeture (Stop)
**Ne jamais éteindre le PC ou fermer la session avant d'avoir effectué ces trois étapes dans l'ordre :**

1. **Arrêt MySQL** : Cliquer sur le bouton **Stop**.
2. **Arrêt Apache** : Cliquer sur le bouton **Stop**.
3. **Quitter l'application** : Cliquer impérativement sur le bouton **Quit** pour libérer la mémoire vive et les ports.

---

## 3. En cas de dysfonctionnement
Si le bouton SQL refuse de passer au vert :
* Vérifier qu'aucune instance de `mysqld.exe` n'est active dans le Gestionnaire des tâches.
* Supprimer les fichiers `.pid` ou `multi-master.info` dans le dossier `C:\xampp\mysql\data\`.