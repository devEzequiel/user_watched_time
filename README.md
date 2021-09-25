## Rest API developed with Laravel 8

## Requirements

As it is build on the Laravel framework, it has a few system requirements.

-   PHP >= 7.3
-   MySql >= 5.5
-   Composer
-   OpenSSL PHP Extension
-   PDO PHP Extension
-   Mbstring PHP Extension
-   Tokenizer PHP Extension
-   XML PHP Extension
-   Ctype PHP Extension
-   JSON PHP Extension
-   BCMath PHP Extension

You can check all the laravel related dependecies
[here](https://laravel.com/docs/8.x/deployment#server-requirements)

## Running the API

Clone the repository and setup

`$ git clone https://github.com/devEzequiel/user_watched_time.git` <br />
`$ cd user_watched_time` <br />

Then, create the database and add them to the `.env` file.

```
DB_DATABASE=watched_db
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate, seed, all that jazz:

1. `$ composer install`
2. `$ php artisan migrate:fresh --seed`
3. `$ php artisan key:generate`
4. `$ php artisan serve`

The API will be running on `localhost:8000`

## Insomnia collection

Import the `Insomnia.json` file inside `.insomnia` folder to your Insomnia.
Or, use the REST client you prefer following the endpoints below.

## API Endpoints and Routes

Laravel follows the Model View Controller (MVC) pattern I have created models associated with
each resource. You can check in the **routes/api.php** file for all the routes that map to
controllers in order to send out JSON data that make requests to our API.

### api/channels

Route to get all channels ranked by the time they were watched.

#### Output

```javascript
{
  "data": [
    "Time each channel was watched",
    [
      {
        "name": "History",
        "channel_id": 1,
        "minutes": 1400
      },
      {
        "name": "MTV",
        "channel_id": 2,
        "minutes": 835
      }
    ]
  ]
}
```

### api/

Route to get all users sorted by the time they watched a certain channel on a certain date

#### Output

```javascript
{
  "data": [
    "User watched time record",
    [
      {
        "name": "Bruno",
        "minutes": 190,
        "date": "2021-01-06 00:00:00"
      },
      {
        "name": "Brian",
        "minutes": 180,
        "date": "2021-01-02 00:00:00"
      },
      {
        "name": "Otavio",
        "minutes": 170,
        "date": "2021-01-01 00:00:00"
      },
      ...
    ]
  ]
}
```

## Authorization

None of the routes require authorization to access.
