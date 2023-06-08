<h1>Auctions</h1>
<h2>
Auctions is an open-source ecommerce app built using Laravel, HTML, CSS and Bootstrap.
</h2>
<p>
Auctions is an app that enables customers within the automotive space to bid on salvage cars, spare parts and second hand cars.
    
Here is a test version of the application: (https://sellorbuyke.com)
</p>
<h3>Requirements</h3>

- PHP 7.3+
- Laravel 5.5+
- NPM

<h3> Tech Stack</h3>

![HTML](https://img.shields.io/badge/html5%20-%23E34F26.svg?&style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/css3%20-%231572B6.svg?&style=for-the-badge&logo=css3&logoColor=white)
![JS](https://img.shields.io/badge/javascript%20-%23323330.svg?&style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![LARAVEL](https://img.shields.io/badge/laravel%20-%23e62d15.svg?&style=for-the-badge&logo=laravel&logoColor=%23FFFFFF)
<img alt="Bootstrap" src="https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white"/>

<h3>Configuration and Installation</h3>

1. Fork the repository 
    
2. Clone the forked repository using:
 
 
```shell
git clone https://github.com/OlePundit/Soko.git
```
            
3. Install composer

```
Composer Install
```
            
  
4. Composer will install all the dependencies
5. Edit the env file to ensure that Database connection is set to sqlite

```
DB_CONNECTION=sqlite
```

6. If you are a windows user, install vim from (https://vim.org), and set up the local database using:

```
vim database/database.sqlite
```
            
7. Finally run 

```
php artisan migrate

```
            
To set up the migrations.

8. You might also want to run
  
```
php artisan storage:link 
```
            
To set up a symbolic link between public storage and local storage.
 
9. For Windows users:
<br>
Go to php folder in xampp and open the php.ini and php configurations settings file, and change the line ';extension=gd2' or the line ';extension=gd' to just 'extension=gd2'

NB that php version 8 is stored as ;extension=gd
  
Linux/ Mac users:

```
sudo apt-get install php8.1-gd
```

Depending on the php installation
 
The app should now be ready to go!⚡


<h3>Lead Maintainer</h3>
<table>
  <tbody><tr>
     <td align="center"><a href="https://github.com/OlePundit"><img alt="" src="https://avatars.githubusercontent.com/u/104025672?s=400&v=4" width="125px;"><br><sub><b> OlePundit </b></sub></a><br></td> </a></td>
</tbody></table>
<a href="https://twitter.com/OlePundit">
    <img alt="twitter" src="https://img.shields.io/badge/twitter-%2300acee .svg?style=for-the-badge&logo=twitter&logoColor=white"/>
</a>

<a href="https://twitter.com/OlePundit">
    <img alt="github" src="https://img.shields.io/badge/github-%23323330.svg?style=for-the-badge&logo=github&logoColor=white"/>
</a>

<a href="https://twitter.com/OlePundit](https://www.linkedin.com/in/glenn-omondi-390393140/">
    <img alt="linkedin" src="https://img.shields.io/badge/linkedin-%230072b1 .svg?style=for-the-badge&logo=linkedin&logoColor=white"/>
</a>
