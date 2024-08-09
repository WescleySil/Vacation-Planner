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

2. **Add IP to hosts:** Run the commands below to map the local IP to the required domain.
```shell
sudo vim /etc/hosts
```
> **Example of Vim Screen:** You will press the " **i** " key on your keyboard and add the following text to the end of the file: `127.0.0.1  plan.vacation.com`. After adding the text, press " **Esc** ", then press " **:** " and type `wq`, and hit " **Enter** ".
> 
>```vim
>" Vim configuration file
>set number          " Show line numbers
>syntax on           " Enable syntax highlighting
>" Press `i` to enter insert mode
>" Press `Esc` to return to normal mode
>127.0.0.1       plan.vacation.com
>~                                  
>~                                  
>~                                  
>~                                  
>~                                  
>~                                  
>~                                  
>~                                  
>~                                  
>~                                  
>" ~                                 
>" 12 lines, 0 characters

3. **Just access the routes:** After this process, you can access the routes using API testing tools like POSTMAN, INSOMNIA, and others. Below is the JSON Collection of the routes.
[**Click here to see**](./collection.json)

And you’re all set! Just follow these steps and you’ll have the project up and running in no time.



