
docker image  rm php_mysql-server-web
docker image  rm php_mysql-server-mysql
rmdir mysqldata /S /Q
docker-compose up -d
