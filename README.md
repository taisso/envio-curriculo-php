# Envio de currículos

APLICAÇÃO LARAVEL PARA ENVIO DE CURRÍCULOS

## Antes de começar
- Como o banco é numvem lentidos durante as requisiçõs podem acontecer.


### Configuração do projeto
- Baixe o composer https://getcomposer.org/download/ (Caso não possua)
- Em seguida escolha uma das configurações abaixo


### Configuração MÉTODO 1:
- Use as variaveis envia para vocês e coloque `.env` dentro da raiz do projeto e preencha as informações do banco de dados.
  (o Windows não permitirá que você faça isso, então você tem que abrir seu console, cd, seu diretório raiz do projeto e executar `mv .env.example .env`)
- Abra o console e faça cd do diretório raiz do seu projeto
- Execute `composer install` ou` `` php composer.phar install```
- Execute `php artisan migrate`
- Execute `php artisan serve`



### Configuração MÉTODO 2(Caso queira configurar manualmente o banco e o serviço de email):
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
-> PostgreSQL
```

### Se for usar o PostgreSQL:
- É possível que você enfrente esse erro:
[
![Imagem de erro](https://user-images.githubusercontent.com/54849874/109437617-7ec17e80-7a04-11eb-9ba6-406d6b46a2c8.png)
](url)

- Caso se depare com ele, acesse esse [Post](https://tonyfrenzy.medium.com/using-postgresql-with-laravel-c4c320ca7f34) para sanar o prolema. O motivo é do erro foi, pois o PHP é configurado por padrão para utilizar o MySQL, para isso é necessário ativar o PostgreSQL na configuração do PHP para funcionar.
