# on arrete les serveurs
docker stop server-web
docker stop server-php
docker stop server-phpmyadmin
docker stop server-mysql
# on suprime les images
docker image  rm php_mysql-server-web
docker image  rm php_mysql-server-mysql
# on vide le dossier contenant la base de données
rmdir mysqldata /S /Q
# on lance l'application
docker-compose up -d
