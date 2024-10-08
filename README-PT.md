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

2. **Comandos básicos para configuração:** Apos subir os containers, é preciso configurar o laravel para funcionar tudo perfeitamente. Para isso acesse o terminal usando o seguinte comando `docker compose exec app bash`, após abrir o terminal execute os comandos abaixo:
```shell
cd Vacation_API/
composer install
cp .env.example .env
```
### Preencha os campos abaixo no arquivo .env
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=vacation_plans
DB_USERNAME=root
DB_PASSWORD=root
```
#### Depois rode
```
php artisan migrate 
php artisan key:generate
```


3. **Basta acessar as rotas**: Após esse processo, acesse o seu `localhost`, você já pode testar as rotas utilizando programas para testes de APIs, como POSTMAN, INSOMNIA e outros. Abaixo segue a Collection em Json das rotas.
   [**Clique aqui para ver**](./.github/Vacations%20Planner.postman_collection.json)
