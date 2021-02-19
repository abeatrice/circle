# Circle Ci Test Application

## Description
This will use CircleCi to build an image and push it to dockerhub

## Requirements
 - Docker
 - docker-compose

## Run Dockerhub Image
```sh
$ docker run --rm abeatrice/circle app greet
```

### Local Development
```sh
# Get the source
$ git clone git@github.com:abeatrice/circle.git
$ cd circle

## Build image and run
$ docker build -t circle .
$ docker run --rm circle app greet 

# With docker-compose:
$ docker-compose up -d --build
# enter container
$ docker-compose exec circle bash
# execute from host
$ docker-compose exec circle app greet
# run tests
$ docker-compose exec circl bin/phpunit
# stop running container
$ docker-compose down
```
