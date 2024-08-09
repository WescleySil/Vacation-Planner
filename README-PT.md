# Vacation-Planner

Já pensou em planejar aquelas férias dos sonhos, mas acabou se perdendo no meio dos planos? Não se preocupe, a Vacation Planner está aqui para resolver isso! Com essa API, você pode organizar suas férias e feriados com facilidade. Adicione participantes, escolha os locais, defina as datas, e muito mais. Deixe a bagunça pra trás e comece a planejar sua próxima aventura do jeito que você sempre quis!

___

## Como instalar ? 

**Quer colocar esse projeto pra rodar?** Não se preocupe, não tem muito mistério. Tudo o que você vai precisar é do **Git**, pra baixar o repositório, e do **Docker**, pra rodar o projeto. Simples assim! 😉 [Aqui estão os links pra instalar o Git](https://git-scm.com/downloads), [Docker para Windows](https://docs.docker.com/desktop/install/windows-install/) e [Docker para Linux](https://docs.docker.com/engine/install/ubuntu/).

**Passo a passo de como rodar o projeto : (Exemplo com linux)**

> **Aviso:** Caso você tenha instalado no seu computador servidores locais como nginx e apache2, será necessário parar o processo dos mesmos, para não conflitar as portas utilizadas. Em linux rode esses comandos para pausar o funcionamento dos programas citados sudo systemctl stop apache2 nginx

1. **Clone o repositório:** Abra uma nova janela do terminal, escolha uma pasta onde você deseja clonar o projeto e, em seguida, execute os seguintes comandos
```shell 
#Esses comandos são para verificar se o git e docker estão instalados com sucesso.
git version
docker compose version
```
```shell
git clone https://github.com/WescleySil/Vacation-Planner.git
cd Vacation-Planner/
docker compose up -d
```

2. **Adicionar ip no hosts:** Execute os comandos abaixo para adicionar indicar o ip local para o dominio necessário.
```shell
sudo vim /etc/hosts
```
>**Exemplo de tela do Vim:** Você irá clicar na tecla " i " do seu teclado e adicionar o seguinte texto ao final do arquivo `127.0.0.1  plan.vacation.com`, após adicionar clique a tecla "Esc" depois clique em  " : " e digite wq, e clique " Enter "
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

3. **Comandos básicos para configuração:** Apos subir os containers, é preciso configurar o laravel para funcionar tudo perfeitamente. Para isso acesse o terminal usando o seguinte comando `docker compose exec app bash`, após abrir o terminal execute os comandos abaixo:
```shell
cd Vacation_API/
composer install
php artisan migrate
php artisan key:generate
```

4. **Basta acessar as rotas**: Após esse processo você já pode acessar as rotas utilizando programas para testes de APIs, como POSTMAN, INSOMNIA e outros. Abaixo segue a Collection em Json das rotas.
   [**Clique aqui para ver**](./collection.json)
