# Currency-conversion-service-PHP
Regular Currency Converter ^_^
## Usage
Install PHP 8.1 and higher if it is not installed.

Clone the project <br>
```
https://github.com/se1y4/Currency-conversion-service-php.git
```
To begin with, we can update the file with all currencies.
1. We can run it <br>
```
php download.php
```
2.We can make it run cron
```
crontab -e
```
```
0 0 * * * php <path to your download file'>
```
The most important thing is that our file.the json has been updated at least once a day
So, how do I launch the converter itself?
Let's start the server
Go to the project directory and run it in your Linux terminal
```
php -S localhost:8000
```
Then follow the link that you specify + /login.php
In our case, it will look like this 'localhost:8000/login.php'
That's all, an example of the simplest currency converter with authorization is ready
Login information
Login
```
admin
```
Password
```
password
```
