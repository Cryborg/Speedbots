# Speedbots

## Postman

### Environment
Install the Speedbots environment by importing the `/postman/Speedbots.postman_environment.json` file using the "Manage environment" button at the top right of the screen.

### Collection
Install the `/postman/Speedbots.postman_collection.json` file using the "Import" button at the top left of the screen.

## Seeding

    php artisan migrate:fresh --seed

## Commands

### Race

During development we have one command to add Speedbots to a queue, to allow them to race.

    php artisan race:queue -r 1

This will register Speedbots in the race ID#1. Another similar command is used to start the race:

    php artisan race:start -r 1
