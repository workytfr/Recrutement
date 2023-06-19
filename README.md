<p align="center">
  <img src="workyt.png" alt="Logo">
</p>

<h1 align="center">Formulaire de Recrutement en Laravel</h1>

<p align="center">
  <strong>Un formulaire de recrutement en ligne pour les postes de rédacteurs, correcteurs, helpeurs et modérateurs.</strong>
</p>

<p align="center">
  <a href="https://github.com/workytfr/Recrutement/issues">Signaler un problème</a>
  &bull;
  <a href="https://github.com/workytfr/Recrutement/issues">Demander une fonctionnalité</a>
</p>

<br>

## Aperçu

Ce projet consiste en un formulaire de recrutement en ligne développé avec Laravel. Il permet aux candidats de postuler aux postes de rédacteurs, correcteurs, helpeurs et modérateurs. Les administrateurs du site peuvent valider ou refuser les candidatures et sont notifiés par e-mail. De plus, les candidats sont également informés par e-mail si leur candidature est acceptée ou refusée.

![Aperçu du formulaire de recrutement](screenshot.png)

## Prérequis

Avant d'installer et d'exécuter ce projet, assurez-vous d'avoir les éléments suivants :

- PHP 8.2
- Composer
- Serveur de messagerie configuré dans Laravel pour envoyer des e-mails

## Installation

Suivez les étapes ci-dessous pour installer et exécuter ce projet :

1. Clonez ce dépôt : `git clone git@github.com:workytfr/Recrutement.git`
2. Accédez au répertoire du projet : `cd Recrutement`
3. Installez les dépendances : `composer install`
4. Copiez le fichier d'exemple de configuration : `cp .env.example .env`
5. Générez la clé d'application : `php artisan key:generate`
6. Configurez les variables d'environnement dans le fichier `.env`, notamment pour la base de données et le serveur de messagerie
7. Exécutez les migrations de la base de données : `php artisan migrate`
8. Démarrez le serveur de développement : `php artisan serve`

## Utilisation

Une fois le projet installé et le serveur de développement démarré, vous pouvez accéder au formulaire de recrutement en utilisant l'URL suivante : `http://localhost:8000/`

Les candidats peuvent remplir le formulaire avec les informations demandées et soumettre leur candidature. Les administrateurs peuvent se connecter à l'interface d'administration pour consulter les candidatures, les valider ou les refuser.

Assurez-vous de configurer correctement le serveur de messagerie dans Laravel pour que les e-mails de notification fonctionnent.

## Contribuer

Les contributions à ce projet sont les bienvenues. Si vous souhaitez apporter des améliorations, signalez des problèmes ou demandez de nouvelles fonctionnalités, veuillez soumettre une demande pull ou ouvrir une issue.

## Licence

Ce projet est sous licence MIT. Consultez le fichier [LICENSE](LICENSE) pour plus d'informations.
