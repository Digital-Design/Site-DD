# Site Digital Design
Site web pour le club Digital Design, club de développement et design de l'ISEN Brest.

## Installation

Installer ```composer```, faire un composer install à la racine du projet, remplir les champs demandé.  Si vous voulez les modifier ils sont disponible dans le fichier ```app/config/parameters.yml```.

Installation de la base de données via la commande ```php app/console doctrine:schema:update --force```.

Création d'un utilisateur admin via la commande ```php app/console fos:user:create [nomdecompte] [mail] [motdepasse] --super-admin```, remplacer les [] par vos données.

Vider le cache ```php app/console cache:clear --env=prod``` en production.

## Utilisation

Accèder via l'url admin ```[votre url]/admin```

## Développeur

Lors du dev toujours lancer le fichier ```app_dev.php```.
Les vues sont disponible dans le dossier ```app/Ressources/views```, le css, js et scss sont disponible dans le dossier ```web/assets``` et le routage est dans ```src/AppBundle/Controller/DefaultController.php```.

## Maquettes

### Accueil
![alt tag](https://github.com/Digital-Design/Site-DD/blob/master/maquettes/home.png)

### Projets
![alt tag](https://github.com/Digital-Design/Site-DD/blob/master/maquettes/projets.png)

### Contact
![alt tag](https://github.com/Digital-Design/Site-DD/blob/master/maquettes/contact.png)

## Couleurs
Bleu : #709ab2  
Gris Foncé : #1a1a1a  
Gris clair (blanc presque) : #f2f2f2  

## Fonts
### Titres
Normal : Bebas Book (à voir comment elle rend en web)  
Gras : Bebas Regular   

### Texte
Normal : Open Sans Regular  
Gras : Open Sans Bold  
