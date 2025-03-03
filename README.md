# README - Projet Vibe

## 📌 Présentation du Projet

Vibe est une plateforme sociale qui permet aux utilisateurs de s'inscrire, personnaliser leur profil et retrouver facilement d'autres membres grâce à un système de recherche performant. Ce projet vise à offrir une expérience utilisateur fluide et sécurisée en intégrant des fonctionnalités d'authentification avancées et de gestion des relations entre membres.

## 🎯 Fonctionnalités Principales

### 🔐 Authentification et Gestion des Utilisateurs
- Inscription et connexion sécurisées
- Gestion de la récupération de mot de passe
- Vérification des emails (optionnelle mais recommandée)
- Implémentation de Laravel Breeze ou Jetstream pour l'authentification

### 👤 Gestion du Profil Utilisateur
- Modification des informations du profil (pseudo unique, nom, prénom, email avec vérification optionnelle, bio et photo de profil)
- Changement de mot de passe avec vérification de l'ancien mot de passe

### 🔍 Recherche d'Utilisateurs
- Champ de recherche permettant de retrouver un utilisateur par pseudo ou email

### 🎁 Bonus
- Ajout d'amis
- Notifications en temps réel pour les demandes d'amitié
- Accepter ou refuser une demande d'amitié

## 🛠️ Technologies Utilisées
- **Backend** : Laravel 10 avec Laravel Breeze 
- **Base de Données** : MySQL
- **Frontend** : Blade, Tailwind CSS, Livewire (optionnel)
- **Authentification** : Laravel Breeze 
- **Gestion des Relations en Temps Réel** : Laravel Echo et Pusher

## 📂 Structure du Projet
```
/vibe
│── app/
│── bootstrap/
│── config/
│── database/
│── public/
│── resources/
│── routes/
│── storage/
│── tests/
│── .env.example
│── .gitignore
│── artisan
│── composer.json
│── package.json
│── README.md
```

## 📜 UML
Les diagrammes UML du projet sont disponibles dans le dossier `doc/`.
