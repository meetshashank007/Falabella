# Falabella

#Use docker to setup local env for the project using the
docker-compose build

#create the conatiner
dokcer-compose up

#use command to get the running container
use docker ps -a

#bash into the running container using
docker exec -it <conatiner id> /bin/bash

#run composer require --dev phpunit/phpunit ^8

execute the MyClassTest.php using the vendor/bin/phpunit
