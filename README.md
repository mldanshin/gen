# Genealogy Website
Creation of a closed family pedigree website. A card is created for each family member, containing information about the surname, first name, patronymic, former surnames, dates of birth, residential addresses, occupation, phone numbers and other data. Organized list search, sorting. A tree is dynamically created for each family member in SVG format, which can be downloaded. You can also download the entire genealogy in PDF format or a card for an individual family member. It is possible to create a subscription to a newsletter about the upcoming events of family members (birthday, memorial day).

## Requirements
- PHP 8.0 or higher  
- Composer 
- Git
- MySql

## Installation Instructions
Clone the repository using git

    git clone https://github.com/mldanshin/gen

Install dependencies using composer

    composer install --optimize-autoloader --no-dev

Create a symbolic link

    ln -s ../storage/app/public public/storage

Create a database with encoding utf8mb4_general_ci  

Create a file .env:

    cp .env.example .env

and *be sure to set the values*
- APP_URL  
- DB_DATABASE  
- DB_USERNAME  
- DB_PASSWORD  
- MAIL_MAILER=smtp
- MAIL_HOST=
- MAIL_PORT=
- MAIL_USERNAME=
- MAIL_PASSWORD=
- MAIL_FROM_ADDRESS=
- SMS_RU_ID=  
- TELEGRAM_BOT_TOKEN=  

The application uses API [SMS RU](https://sms.ru/api), [Telegram](https://core.telegram.org/), therefore, you need to get the appropriate tokens by adding to the specified .env file.

Fill in the database by doing

    php artisan migrate
    php artisan db:seed

Due to the fact that the entrance to the site is only after registration, and only a family member can register, you need to create one family member in the 'people' table. Link a phone or email to it, respectively, in the phones or emails table. The phone number consists only of digits, without spaces, 7, 8.  
Add the administrator role of the created family member in the people_role table. By default, the role will be set as a regular user.
Then go through registration.  
After that, the addition of family members is available through the app.  

Add the execution of the command to the task scheduler to delete temporary data.  
- php artisan download:clear
- php artisan photo:clear 

Add it to the task scheduler to send information about upcoming events
- php artisan send:events

## Using
Supported localizations: en, ru. Why do I need to change the localization in the configuration file 'app.php '.  
Login to the site is carried out exclusively through a login and password. You can change this behavior by removing the 'auth' intermediary on the route group.  
Only a person from the family tree who has a phone number or email address, which must be available in the corresponding database table, can register.  
There are three possible roles: administrator, vip user, and regular. The first two can perform CRUD operations with family members.  
You can subscribe to receive "upcoming events", registration is available only for telegrams.  
The photo is placed in the storage/app/public/photo directory.  
The application supports a non-standard date format, with a question mark (?) symbol that replaces an unknown number in the date. Therefore, standard PHP, JS, and HTML date functions and elements cannot be used in the code.  
The connection between mom + baby and dad + child is based on the principle that a child can only have one dad or mom.  

### Console commands
- php artisan download:clear
- php artisan lang:json
- php artisan photo:clear
- php artisan send:events

## Testing
To run the tests, run  

    php artisan test

## Demo site
[Demo](https://demo-gen.danshin.net) with 'en' localization, part of the functionality is disabled or may give errors due to the absence of environment variables.  
Administrator

- Login: admin@fake.rus  
- Password: admin

Regular user

- Login: user@fake.rus  
- Password: user  

## Contacts
mail@danshin.net

## License

Open source software licensed in accordance with [MIT license](https://opensource.org/licenses/MIT).
