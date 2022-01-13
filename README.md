# RestaurantWebsite
Restaurant App built with Laravel using some advance features

### Features So far :
- make new order with Ajax.
- ar-en Language
- login using (Mobile OR E-mail)



### In order to run the project first you have to install Composer
#### Let's check if you have Composer first
- Go to cmd(For windows) or Terminal(for mac)
- Run this command : composer -V
- If You have composer you will see the composer verison , otherwise you will have a message that till you command not found
- If You don't have a composer then Install It and proceed to The configration part.
- #### [Composer Install](https://getcomposer.org/download/)
- #### You may want visual installation steps , check this Videos [Mac](https://youtu.be/pXV7XGiDvLs) OR [Windows](https://youtu.be/BGyuKpfMB9E)


# Configration 
## Follow these steps to run the project on your local machine
1.  run in the project path : composer update
2.  run in the project path : cp .env.example .env
3.  run in the project path : php artisan key:generate

### Create database and migrate
1. Create database named : pizzahouse
2. run in the project path : php artisan migrate

- Now the project is ready , run in the project path : php artisan serve
