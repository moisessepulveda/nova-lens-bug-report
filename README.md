

# NOVA PROJECT WITH LENSES BUG

## PREREQUISITES
* DOCKER
* DOCKER-COMPOSE

## INSTALLATION

* clone this repository
* move to root project folder
* execute:

```shell
> docker-compose up
```

when installation finish then execute


```shell
> docker exec -it <laravel.test container id> bash
```

Then we will install dependencies


```shell
> composer install
```


Finally open localhost on your brower


```shell
http://localhost
```
