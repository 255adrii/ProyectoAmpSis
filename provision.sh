#!/bin/bash

echo "Actualizando paquetes..."
apt-get update -y

echo "Instalando Docker, Docker Compose y Git..."
apt-get install -y docker.io docker-compose git

echo "Iniciando servicio Docker..."
systemctl enable docker
systemctl start docker

echo "Accediendo a la carpeta compartida..."
cd /vagrant

echo "Deteniendo contenedores anteriores..."
docker-compose down

echo "Levantando contenedores..."
docker-compose up -d

echo "Entorno desplegado correctamente."
echo "Accede a WordPress desde: http://localhost:8080"
