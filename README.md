# Envio de currículos

APLICAÇÃO LARAVEL PARA ENVIO DE CURRÍCULOS

## Resalte

- O banco de dados utilizado em nuvem foi [Postgres](https://www.postgresql.org/)



## Configuração do projeto
- Baixe o composer https://getcomposer.org/download/
- Extraia o projeto Laravel / php do provedor git.


## Configuração FORMA 1:
- Renomeie o arquivo `.env.example` para` .env` dentro da raiz do projeto e preencha as informações do banco de dados.
  (o Windows não permitirá que você faça isso, então você tem que abrir seu console, cd, seu diretório raiz do projeto e executar `mv .env.example .env`)
- Abra o console e faça cd do diretório raiz do seu projeto
- Execute `composer install` ou` `` php composer.phar install```
- Execute `php artisan migrate`
- Execute `php artisan serve`



## Configuração FORMA 2(Caso queira configurar manualmente o banco e o serviço de email):
- No` .env` dentro da raiz do projeto e preencha as informações do banco de dados de sua preferência.
  (o Windows não permitirá que você faça isso, então você tem que abrir seu console, cd, seu diretório raiz do projeto e executar `mv .env.example .env`)
- Abra o console e faça cd do diretório raiz do seu projeto
- Execute `composer install` ou` `` php composer.phar install```
- Execute `php artisan migrate`
- Execute `php artisan serve`

##### Agora você pode acessar seu projeto em localhost: 8000 :)

### Porta da aplicação 

```
http://localhost:8000
```


### Depêndencias e ferramentas utilizadas:

```
-> PHP
-> Laravel
-> Gerenciador de pacote: composer
-> Bootstrap
```

### Possível erro:
