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

# Cas d'utilisation (Use Cases)

## Acteur principal

**Utilisateur**

L'utilisateur est la seule personne qui interagit avec l'application.

---

# UC-01 : Effectuer un calcul

## Description

Permet à l'utilisateur d'effectuer une opération mathématique entre deux nombres.

## Préconditions

* L'application est ouverte.
* Le formulaire est affiché.

## Scénario principal

1. L'utilisateur saisit le premier nombre.
2. L'utilisateur saisit le deuxième nombre.
3. L'utilisateur sélectionne une opération.
4. L'utilisateur clique sur le bouton **Calculer**.
5. L'application vérifie les données.
6. L'application effectue le calcul demandé.
7. Le résultat est affiché à l'utilisateur.

## Résultat attendu

Le résultat du calcul apparaît à l'écran.

---

# UC-02 : Saisie incomplète

## Description

L'utilisateur oublie de remplir un ou plusieurs champs.

## Scénario

1. L'utilisateur laisse un champ vide.
2. Il clique sur **Calculer**.
3. L'application détecte l'erreur.
4. Un message indique que tous les champs sont obligatoires.

## Résultat attendu

Aucun calcul n'est effectué.

---

# UC-03 : Valeur invalide

## Description

L'utilisateur saisit une valeur qui n'est pas un nombre.

## Scénario

1. L'utilisateur saisit une valeur non numérique.
2. Il clique sur **Calculer**.
3. L'application vérifie les données.
4. Un message d'erreur est affiché.

## Résultat attendu

Le calcul est interrompu.

---

# UC-04 : Division par zéro

## Description

L'utilisateur tente de diviser un nombre par zéro.

## Scénario

1. L'utilisateur saisit 0 comme deuxième nombre.
2. Il choisit la division.
3. Il clique sur **Calculer**.
4. L'application détecte la division par zéro.
5. Un message d'erreur est affiché.

## Résultat attendu

Le calcul n'est pas effectué.

---

# UC-05 : Réinitialiser le formulaire

## Description

L'utilisateur souhaite effectuer un nouveau calcul.

## Scénario

1. L'utilisateur clique sur le bouton **Réinitialiser**.
2. Tous les champs sont vidés.
3. Le formulaire revient à son état initial.

## Résultat attendu

L'utilisateur peut commencer un nouveau calcul.

📂 Structure du projet
quickcalc/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   │
│   ├── js/
│   │   └── script.js
│   │
│   ├── images/
│   │   └── logo.png
│   │
│   └── icons/
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── navbar.php
│   └── functions.php
│
├── pages/
│   ├── history.php
│   └── settings.php
│
├── config/
│   └── config.php
│
├── index.php
│
├── README.md
│
└── .gitignore

# Algorithme (Langage naturel)

1. L'utilisateur ouvre la calculatrice.
2. Il saisit le premier nombre.
3. Il saisit le deuxième nombre.
4. Il choisit une opération.
5. Il clique sur le bouton « Calculer ».
6. L'application récupère les données du formulaire.
7. L'application vérifie que les champs sont remplis.
8. L'application vérifie que les valeurs sont numériques.
9. L'application vérifie qu'une opération a été choisie.
10. Si l'opération est une division, vérifier que le deuxième nombre est différent de zéro.
11. Si une erreur est détectée, afficher un message d'erreur.
12. Sinon, effectuer le calcul correspondant.
13. Afficher le résultat.
14. Fin du traitement.

# Pseudo-code

Début

```
Lire number1
Lire number2
Lire operation

Si number1 est vide
    Afficher "Veuillez saisir le premier nombre."
    Arrêter

Si number2 est vide
    Afficher "Veuillez saisir le deuxième nombre."
    Arrêter

Si operation est vide
    Afficher "Veuillez sélectionner une opération."
    Arrêter

Si number1 n'est pas numérique
    Afficher "Le premier nombre est invalide."
    Arrêter

Si number2 n'est pas numérique
    Afficher "Le deuxième nombre est invalide."
    Arrêter

Selon operation

    Cas Addition
        résultat ← number1 + number2

    Cas Soustraction
        résultat ← number1 - number2

    Cas Multiplication
        résultat ← number1 × number2

    Cas Division

        Si number2 = 0
            Afficher "Division par zéro impossible."
            Arrêter

        résultat ← number1 ÷ number2

Afficher résultat
```

Fin

                Début
                   │
                   ▼
        Saisie des données
                   │
                   ▼
       Vérifier les champs vides
             │             │
           Oui             Non
            │               │
            ▼               ▼
   Afficher une erreur   Vérifier les nombres
                              │
                        Valides ?
                        │     │
                      Non     Oui
                       │       │
                       ▼       ▼
            Afficher une erreur
                               │
                               ▼
                    Choisir l'opération
                               │
         ┌──────────┬──────────┬──────────┬──────────┐
         ▼          ▼          ▼          ▼
     Addition  Soustraction Multiplication Division
                                              │
                                              ▼
                                Le diviseur vaut 0 ?
                                      │       │
                                     Oui     Non
                                      │       │
                                      ▼       ▼
                           Afficher une erreur
                                              │
                                              ▼
                                  Calcul du résultat
                                              │
                                              ▼
                                 Afficher le résultat
                                              │
                                              ▼
                                             Fin

