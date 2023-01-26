
# Project Titre
Connexion PHP Mysql


## Installation

Installation :

```bash
  docker-compose up -d
```

Decoupage : 
4 dossiers
  mysql : contient 
                - le dockerFile pour l'image mariaDB
                - le script de création et d'initialisation de la base
  mysqldata : contient les fichiers persistant de la base de données
  nginx : serveur Web contient
                - le dockerFile pour mettre en place le serveur Web
                - le dossier de log
                - le dossier projet www avec tous les fichiers PHP
  php : contient le dockerFile pour mettre en place le serveur Php

