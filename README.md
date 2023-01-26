
# Connexion PHP Mysql


## Installation

Installation :

```bash
  docker-compose up -d
```

## Mon but : J'aimerais changé le port de la base de données.

Mes essais : 
  J'ai modifié dans le docker-compose : ligne 48 
  et ajouté la ligne 65
  résultat : si je change 3306 en 3310 par exemple, 
  ma base démarre et mon phpmyadmin discute avec
par contre pas mon application malgré la modification de mon fichier de connection : /nginx/www/DbConnect.php

J'ai essayé de trouvé une variable d'environnement à ajouter au serveur web, rien de concluant.

## Ma question: Où intervenir pour que le serveur web accède à la base de données sur un autre port?
