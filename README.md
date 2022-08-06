# TODO app

> This example uses laravel to create a todo list web app. 


## How to use

Run the example using [Sail](https://laravel.com/docs/9.x/sail)


- Open a new terminal and clone the repository with:

```bash
git clone git@github.com:roberto-laz/laravel-todo.git
```
now run

```bash
 cd laravel-todo && ./vendor/bin/sail up
```


- This will start the docker containers needed for this project

> IMPORTANT: You must run a migration first to create the tables, so just do:

```bash
./vendor/bin/sail artisan migrate
```


- Then visit the url `localhost:80`
- Note: To stop the dockers just run:

```bash
  ./vendor/bin/sail down
```

## Problems?

> If you run into trouble, do CTRL + C and run sail up again
> and make sure you have the .env file


Thanks :)
