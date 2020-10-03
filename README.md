# PHP-FPM, NGINX AND MYSQL FOR IDN INFRASTRUCTURE ENGINEER TEST PROJECT
## Folder Structure
```
.
├── data
│   └── db
│       └── mysql
│           ├── auto.cnf
│           ├── ca-key.pem
│           ├── etc
├── .docker
│   ├── conf
│   │   ├── mysql
│   │   │   └── gatewaymy.cnf
│   │   ├── nginx
│   │   │   └── default.conf
│   │   └── php
│   │       ├── php-fpm.conf
│   │       ├── php.ini
│   │       └── xdebug.ini
│   └── Dockerfile
├── docker-compose.yaml
├── .env
├── README.md
└── web
    ├── index.php
    └── info.php

```

- `.docker/conf`
> Folder configuration for mysql, nginx and php.
- `.docker/Dockerfile`
> In this project Dockerfile is containing blueprint of our php module and other system requirement depedency based on alpine 3.11 operating system.
- `docker-compose.yaml`
> With docker-compose our project can be run services of php, nginx and mysql together with a single command
- `.env`
> Containing environment for our services if you changes mysql version or other information like username anda password.
- `web`
> You can put php project ini this folder
- `data`
> after running docker-compose this folder will be generated and containing several file and folder for our mysql data

## How to run

```bash
$ docker-compose up --build
```
    or

```bash
$ docker-compose up -d --build
````
    to running on the background
