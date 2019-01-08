[![StyleCI](https://github.styleci.io/repos/145233622/shield?branch=master)](https://github.styleci.io/repos/145233622)

# Framework Task

A REST API application to CRUD against in `Articles` Model:
- GET By ID:  `/article/{id}`
```
GET: /article/{id}
ResponseBody: 
{
    id: 1,
    title: 'Red Dacca',
    description: 'Dacca Red Dacca',
    created_at: '2019-01-08 00:39:29',
    updated_at: '2019-01-08 00:39:29',
    deleted_at: null,
}

 ResponseStatus: 200
```

- GET All Articles:  `/article/`
```
GET: /article/{id}
ResponseBody: 
[
    {
        id: 1,
        title: 'Red Dacca',
        description: 'Dacca Red Dacca',
        created_at: '2019-01-08 00:39:29',
        updated_at: '2019-01-08 00:39:29',
        deleted_at: null,
    },
]
 ResponseStatus: 200
```

- POST `/article/`
```
Post: /article
Body: 
{
   title: 'Red Dacca',
   description: test
}
ResponseStatus: 200
```
- DELETE `/article/{id}`

```
DELETE: /article/{id}
ResponseStatus: 204
```

### Installing

- Run `composer install && composer dump-autoload`
- Update `/App/Config/Config.php` file.
```
    define('DBDRIVER','mysql');
    define('DBHOST','localhost');
    define('DBNAME','framework');
    define('DBUSER','root');
    define('DBPASS','');
```
- Run `./migrations.sh`
- Run `./start.sh`


## TODO
- Create DI to inject `ArticleService` in `ArticleController`, to inject `ArticleRepository` in `ArticleService`
- So I'll use service in `ArticleController` to interact with `ArticleRepository`
- Create custom middelware to protect `POST, Delete` requests
- Run `docker-compose run php composer install` to install the dependencies.
- Run `docker-compose up`
- Run `docker-compose run php /www/vendor/bin/phpunit`

## Built With

* [PHP7.0](http://php.net)
* [symfony/http-foundation](http://www.symfony.com) 
* [symfony/routing](http://www.symfony.com) 
* [illuminate/database](http://www.laravel.com) 
