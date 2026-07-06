# Calculatrice
La Calculatrice en PHP est une application web simple qui permet à un utilisateur d'effectuer des opérations mathématiques de base à partir d'une interface HTML.
La Calculatrice en PHP est une application web simple qui permet à un utilisateur d'effectuer des opérations mathématiques de base à partir d'une interface HTML. L'utilisateur saisit deux nombres, choisit une opération (addition, soustraction, multiplication ou division), puis clique sur un bouton pour obtenir le résultat.

Ce projet a pour objectif de mettre en pratique les notions fondamentales de PHP, notamment la récupération des données d'un formulaire HTML avec $_POST, l'utilisation des variables, des opérateurs arithmétiques et des structures conditionnelles (if ou switch). Il permet également d'apprendre à valider les données saisies par l'utilisateur et à gérer les erreurs courantes, comme les champs vides, les valeurs non numériques ou la division par zéro.

Bien que simple, ce projet constitue une excellente première étape pour comprendre le fonctionnement d'une application web dynamique développée avec PHP.

# Objectifs du projet

## Objectif général

Développer une application web de calculatrice en PHP permettant à un utilisateur d'effectuer des opérations mathématiques de base à partir d'un formulaire HTML.

## Objectifs fonctionnels

L'application devra permettre à l'utilisateur de :

* Saisir un premier nombre.
* Saisir un deuxième nombre.
* Choisir une opération mathématique :

  * Addition (+)
  * Soustraction (-)
  * Multiplication (×)
  * Division (÷)
* Lancer le calcul à l'aide d'un bouton.
* Afficher le résultat de l'opération.
* Afficher un message d'erreur lorsque les données saisies sont invalides.

## Objectifs pédagogiques

À la fin de ce projet, le développeur sera capable de :

* Créer un formulaire HTML.
* Récupérer les données envoyées avec la méthode `POST`.
* Déclarer et utiliser des variables en PHP.
* Utiliser les opérateurs arithmétiques.
* Écrire des conditions avec `if`, `else` ou `switch`.
* Vérifier la validité des données saisies.
* Gérer les erreurs courantes.
* Séparer la partie HTML de la logique PHP de manière simple.
* Déboguer une petite application PHP.

# Analyse des besoins

## Présentation

L'objectif de cette application est de permettre à un utilisateur d'effectuer rapidement une opération mathématique de base à partir d'une interface web simple et intuitive.

L'utilisateur saisit deux nombres, sélectionne une opération, puis lance le calcul afin d'obtenir le résultat.

---

# Besoins fonctionnels

L'application doit permettre de :

* Saisir un premier nombre.
* Saisir un deuxième nombre.
* Choisir une opération mathématique.
* Lancer le calcul.
* Afficher le résultat.
* Afficher un message d'erreur si une saisie est incorrecte.

---

# Besoins non fonctionnels

L'application devra également respecter les contraintes suivantes :

* L'interface doit être simple et facile à comprendre.
* Les calculs doivent être rapides.
* Les données doivent être validées avant le calcul.
* Les messages d'erreur doivent être clairs.
* Le code doit être organisé et lisible.

---

# Données d'entrée

Les informations fournies par l'utilisateur sont :

| Donnée          | Type           | Obligatoire |
| --------------- | -------------- | ----------- |
| Premier nombre  | Nombre         | Oui         |
| Deuxième nombre | Nombre         | Oui         |
| Opération       | Liste de choix | Oui         |

---

# Données de sortie

Après le calcul, l'application doit afficher :

* Le résultat de l'opération.

ou

* Un message d'erreur si le calcul ne peut pas être effectué.

---

# Règles de gestion

L'application doit respecter les règles suivantes :

* Les deux champs doivent être remplis.
* Les deux valeurs doivent être numériques.
* Une opération doit être sélectionnée.
* La division par zéro est interdite.
* En cas d'erreur, aucun calcul ne doit être effectué.
* Si toutes les données sont valides, le résultat est affiché.

---

# Gestion des erreurs

L'application doit être capable de détecter les situations suivantes :

* Premier nombre manquant.
* Deuxième nombre manquant.
* Valeur non numérique.
* Aucune opération sélectionnée.
* Division par zéro.

Pour chaque erreur détectée, un message explicite sera affiché afin d'aider l'utilisateur à corriger sa saisie.

# Liste des fonctionnalités

## Fonctionnalité 1 : Saisir les nombres

### Description

L'utilisateur doit pouvoir saisir les deux nombres nécessaires au calcul.

### Éléments de l'interface

* Champ "Premier nombre"
* Champ "Deuxième nombre"

### Statut

☐ À développer

---

## Fonctionnalité 2 : Choisir une opération

### Description

L'utilisateur doit pouvoir choisir l'opération mathématique à effectuer.

### Opérations disponibles

* Addition (+)
* Soustraction (-)
* Multiplication (×)
* Division (÷)

### Statut

☐ À développer

---

## Fonctionnalité 3 : Lancer le calcul

### Description

Un bouton permet d'envoyer les données du formulaire au serveur afin que PHP effectue le calcul.

### Élément de l'interface

* Bouton "Calculer"

### Statut

☐ À développer

---

## Fonctionnalité 4 : Effectuer le calcul

### Description

Selon l'opération choisie, l'application doit effectuer le calcul correspondant.

### Traitements

* Addition
* Soustraction
* Multiplication
* Division

### Statut

☐ À développer

---

## Fonctionnalité 5 : Afficher le résultat

### Description

Après le calcul, le résultat doit être affiché de manière claire à l'utilisateur.

### Exemple

Résultat : 42

### Statut

☐ À développer

---

## Fonctionnalité 6 : Valider les données

### Description

Avant tout calcul, l'application doit vérifier que les données saisies sont valides.

### Vérifications

* Les deux champs sont remplis.
* Les valeurs sont numériques.
* Une opération est sélectionnée.

### Statut

☐ À développer

---

## Fonctionnalité 7 : Gérer les erreurs

### Description

Lorsque les données sont invalides, l'application doit empêcher le calcul et afficher un message d'erreur adapté.

### Cas à gérer

* Champ vide.
* Valeur non numérique.
* Division par zéro.
* Opération non sélectionnée.

### Statut

☐ À développer

---

## Fonctionnalité 8 : Réinitialiser le formulaire (Optionnelle)

### Description

Permettre à l'utilisateur d'effacer toutes les données saisies afin de recommencer un nouveau calcul.

### Élément de l'interface

* Bouton "Réinitialiser"

### Statut

☐ À développer
