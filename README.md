
## 📰 Hotel Miranda website

  

Hotel Miranda public website for customers where they can check the room availability and send a message to the hotel administration since it's connected to the MySQL DB. Also working with the google maps API in the contacts section.

  

## 🔧 Built With

  

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white) ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E) ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white) ![SASS](https://img.shields.io/badge/SASS-hotpink.svg?style=for-the-badge&logo=SASS&logoColor=white)
  


## 🔑 Steps to make it run



1. You need PHP in your system 

- Be aware that fresh installation of PHP on windows OS needs to set the `php.ini` file since it comes with php.ini-development and php.ini-production. And create the environment variable path to the php installation folder.

- Also inside `php.ini` you need to make sure that `mysqli` and `mbstring` extensions are not commented with the semicolon `;` .

_You can check if both extensions are running using_  `php -m`  _or setting the_  `info.php`  _page to display the info about the running PHP package._

2. Set the variable data in `.env` file as shown in `.env.example` to make it work against a MySQL instance and make the google maps API work.

3. Make sure the MySQL instance is up and running.

4. Start the built-in local web server

```javascript
 $ php -S localhost:8000 // you can choose whichever free port you have
```
_As side note, this app works with the [EFTEC\BladeOne](https://github.com/EFTEC/BladeOne) repo (BladeOne outside of Laravel) and the [vlucas\phpdotenv](https://github.com/vlucas/phpdotenv) repo, both installed manually inside the libs folder. (You could install both via composer for easier installation/manteinence)._

## 💻 Take a look

[https://hotelmiranda.000webhostapp.com/](https://hotelmiranda.000webhostapp.com/)