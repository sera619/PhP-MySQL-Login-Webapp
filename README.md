# Hack-Lab "php Webapp Login" #

> Hey and welcome. This small project is just to use this for bruteforce, SQL-injections or some other stuff.
> Please notice you need a local server like [Xampp](https://www.apachefriends.org/de/index.html) to run a php website.
> Just copy/pase the files in this repository to your Xampp installation-directory in the sub-directory "htdocs/login" (you need create the "login" directory manualy, example "C:\\Xampp\\htdocs\\").
>
> You need to install and run the MySQL service on xampp too.
> For the first initialization you need to create a new Database-Table.
> For this you can use the follow SQL command on the "phpmyadmin" panel at the "test" database in your webbrowser.

```sql
    CREATE TABLE `users` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `username` varchar(25) NOT NULL,
        `password` varchar(255) NOT NULL,
        `email` varchar(100) NOT NULL,
        PRIMARY KEY(`id`),
        UNIQUE KEY `username` (`username`) 
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
```

> After this the setup is finished and you can reach the website with

```html
    http://localhost
```

>in your browser.