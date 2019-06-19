<p align="center">
    <h1 align="center">Desafio Carriers - PHP - Yii2 PHP Framework</h1>
    <br>
</p>



ESTRUTURA DE DIRETÓRIOS
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

Versão do PHP 5.4.0 ou superior
Versão do Mysql 5.6 ou superior (8.0 ideal)
Versão do Composer 1.8.5 ou superior
Apache2
Postman 7.0

CONFIGURATION
-------------

### Banco de dados

Edite o arquivo `config/db.php` e configure conforme o exemplo abaixo (não se esqueça de alterar o usuário e senha de acordo com as suas configurações):

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=desafio',
    'username' => 'seuusuario',
    'password' => 'suasenha',
    'charset' => 'utf8',
];
```

Após isso, faça a importação da dump localizada no caminho `db_dump/db_desafio.sql` em seu MysqlWorkbench ou no próprio terminal.

Link de como fazer a importação:
<a href="https://dev.mysql.com/doc/workbench/en/wb-admin-export-import-management.html"> Clique </a> <br>


### Dependências 

Para que o desafio rode é preciso fazer o download das dependências do projeto. Para fazer o download basta você acessar a pasta do projeto `desafio` pelo terminal e depois dar o seguinte comando:

```php
composer update
```



### Apache 

Verifique se a reescrita de url está permitida em seu apache.

Link de configuração para o Windows: <a href="http://www.rafaelwendel.com/2011/08/como-usar-url-amigaveis-no-servidor-apache/"> Clique </a> <br>

Link de configuração para o Linux: 
<a href="https://www.vivaolinux.com.br/dica/Ativando-modo-de-reescrita-de-URL-mod-rewrite-no-Apache"> Clique </a> <br>



TESTES
-------------

### Endpoints

A API REST posssui 5 endpoints, sendos eles: 




```php
`GET http://localhost/desafio/web/funcionarios` <br>
`GET http://localhost/desafio/web/funcionarios/relatorio` <br>
`GET http://localhost/desafio/web/funcionarios/<id>` <br>
`POST http://localhost/desafio/web/funcionarios` Passar os parâmetos (nome,sobrenome,idade, sexo) via body da requisição (JSON) conforme o exemplo abaixo: <br>

    {
        "nome": "Exemplo",
        "sobrenome": "exemplo",
        "idade": 30,
        "sexo": 1
    }

`PUT http://localhost/desafio/web/funcionarios/<id>` Passar os parâmetos (nome,sobrenome,idade, sexo) via body da requisição (JSON) conforme o exemplo abaixo: <br>

    {
        "nome": "Novo nome",
        "sobrenome": "Novo sobrenome",
        "idade": 10,
        "sexo": 0
    }<br>

    `DEL http://localhost/desafio/web/funcionarios/<id>` <br>
```