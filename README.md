# Sample API with Dockerized Laravel

This is a scaffolding for developing Laravel applications with Docker

## Components:
- [Laravel 7](https://laravel.com/docs)
- [bitnami/bitnami-docker-laravel](https://github.com/bitnami/bitnami-docker-laravel)
## Local Development Setup
1. Install [Docker Desktop](https://docs.docker.com/desktop/)
2. Clone this repository to your new empty project directory.
3. Create `.env` file from `.env.example`.
5. Run application services in Docker
```
$ docker-compose up -d
```
## Running commands 
To run commands inside the container:
```
$ docker-compose exec <app service-name> <command>
```
Where `<app service-name>` is the service name of the app defined in `docker-compose.yml`. In this project `myapp` is the app service name.