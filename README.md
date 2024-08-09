# Vacation-Planner

 Ever thought about planning that dream vacation but got lost in the process? Don't worry, Vacation Planner is here to save the day! This API lets you easily organize your vacations and holidays. Add participants, pick locations, set dates, and more. Say goodbye to the chaos and start planning your next adventure just the way you want!
___

## How to install ?

**Ready to get this project up and running?** Don’t worry, it’s pretty straightforward. All you need is **Git** to clone the repository and **Docker** to run the project. Easy peasy! 😉 [Here are the links to install Git](https://git-scm.com/downloads), [Docker for Windows](https://docs.docker.com/desktop/install/windows-install/), and [Docker for Linux](https://docs.docker.com/engine/install/ubuntu/).

**Step-by-step guide to running the project:(Example with linux)**

> **Note:** If you have local servers like nginx and apache2 installed on your computer, you will need to stop their processes to avoid port conflicts. On Linux, run the following command to stop these programs: `sudo systemctl stop apache2 nginx`
1. **Clone the repository:** Open a new terminal window, pick a folder where you want to clone the project, then run these commands
```shell 
#This commands verify if you installed git and docker with sucess.
git version
docker compose version
```
```shell
git clone https://github.com/WescleySil/Vacation-Planner.git
cd Vacation-Planner/
docker compose up -d
```

2. **Basic setup commands:** After starting the containers, you need to configure Laravel to ensure everything works perfectly. To do this, access the terminal using the following command: `docker compose exec app bash`. Once the terminal is open, run the commands below:
```shell
cd Vacation_API/
composer install
cp .env.example .env
```
### Fill this fields in the .env file
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=vacation_plans
DB_USERNAME=root
DB_PASSWORD=root
```
#### Then run
```
php artisan migrate 
php artisan key:generate
```

3. **Just access the routes:** After this process, acess `localhost`, you can test the routes using API testing tools like POSTMAN, INSOMNIA, and others. Below is the JSON Collection of the routes.
[**Click here to see**](.github/Vacations%20Planner.postman_collection.json)

And you’re all set! Just follow these steps and you’ll have the project up and running in no time.



