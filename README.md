# API de listagem de Projetos

Crie um arquivo **.env** na pasta **/backend-simbi/rouanet** e copie tudo que está na **.env.example**

Na pasta raiz, execute os seguintes comandos para rodar o projeto:

- ```docker compose up -d --build``` ou ```docker-compose up -d --build```
- ```docker exec setup-php php artisan config:cache```
- ```docker exec setup-php php artisan key:generate```
- ```docker exec setup-php composer install``` ou ```docker exec setup-php composer-install```
- ```docker exec setup-php php artisan migrate```


Caso não queira usar o Docker, terá que realizar a configuração e conexão do banco de dados manualmente.

Qualquer erro estou a disposição!
## **Link documentação Swagger**

> http://localhost:8080/api/documentation



