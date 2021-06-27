# docker-hub-webapp
Repositorio designado para la actividad 2.2 Webapp y Docker Hub de la materia Desarrollo web profesional, donde se hará uso de SQLite3.

# correr Dockerfile
docker build -t webapp:v1 .

# crear contenedor
docker run -it -p 8080:8080 -v /workspace/docker-hub-webapp/docker:/docker --name webapp -h webapp webapp:v1

# crear la bd
sqlite3 agenda.db

# leer schema.sql dentro de la bd
.read schema.sql

# visualización de tablas
.table 
.schema + nombre de la tabla
select * from + nombre de la tabla
.header on

# crear repositorio en Docker Hub
docker tag local-image:tagname new-repo:tagname
docker push new-repo:tagname

docker tag webapp:v1 301417/webapp:v1
docker push 301417/webapp:v1