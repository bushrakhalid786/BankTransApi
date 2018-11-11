<p align="center">Laravel API</p>


## Setup

Laraval version 5.7, PHP version 7.2.5

- $Git clone ... (repo)
- $php artisan migrate
- $php artisan db:seed 
- $vendor/bin/phpunit (optional - for tests

for more information about setting up laravel homestead on vagrant follow the link [documentation](https://laravel.com/docs/5.7/homestead).

## API 

API to create new transaction through POST method:

- /api/tran/

body: 
{
"user_id": 1,
"amount": "250",
"booking_date": "2018-11-10 21:46:39",
"bookingpart": [
{
"amount": "100.00",
"transaction_reason_id": 1
},
{
"amount": "150.00",
"transaction_reason_id": 2
}
]
}

Show All transactions for a User through get method

- /api/trans/{id}

Show a transaction and transaction parts through get method

- /api/tran/{id}

Delete a transaction and all transaction parts of this transaction through delete method

- /api/tran/{id}