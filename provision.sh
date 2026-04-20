#!/bin/bash
# Actualiza los paquetes de ubuntu para tener todo al dia
apt-get update -y
# Instalamos docker, docker-compose y git
apt-get install -y docker.io docker-compose git
# Inicio el servicio de docker y lo pongo para que arranque solo al iniciar la maquina virtual
systemctl enable docker
systemctl start docker
# Me meto en la carpeta compartida que es donde tengo el docker-compose.yml
cd /vagrant
# Por si ya habia contenedores corriendo los paro
docker-compose down
# Arranco los contenedores en segundo plano
docker-compose up -d
echo "Listo, entra en http://localhost:8080"