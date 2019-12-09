# naijahacks2019-Youthcorpers_App
Providing innovation/solution for Nigeria Youth Corpers in terms of Accommodation, mobility and inter state connect

Accommodation
For those who get posted to states outside their states of residence, accommodation can be a big problem with other basic needs.
Getting a comfortable place on a corper’s salary can be a bit challenging and also getting a smart place to stay before can be a pain in the ass.
It is truly a serious matter. Corps members have been grappling with the problem of accommodation in Nigeria for a long time. It is either a corps member lived in the particular state before youth service posting or he has relations living within the city, or he resorts to squatting with friends

## Installation step

- Clone the repo.
- composer install
- copy .env.example to .env .
- Add the database details to the .env.
- php artisan key:generate
- php artisan config:cache
- php artisan migrate
- php artisan serve

## For fresh migrations and update

<h6>Run the below commands</h6> <br>
- composer update <br>
- php artisan migrate:fresh --seed <br>
- php artisan passport:install <br>
- php artisan serve <br>
<br>