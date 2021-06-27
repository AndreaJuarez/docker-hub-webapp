# docker-hub-webapp
Repositorio designado para la actividad 2.2 Webapp y Docker Hub de la materia Desarrollo web profesional, donde se hará uso de SQLite3.

# correr Dockerfile
docker build -t webapp:v1 .

# crear contenedor
docker run -it -p 8080:8080 -v /workspace/docker-hub-webapp/docker:/docker --name webapp -h webapp webapp:v1

# 