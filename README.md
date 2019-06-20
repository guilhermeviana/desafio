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

Versão do PHP 5.4.0 ou superior </br>
Versão do Mysql 5.6 ou superior (8.0 ideal) </br>
Versão do Composer 1.8.5 ou superior</br>
Apache2</br>
Postman 7.0</br>

CONFIGURAÇÃO
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

Caso ocorra algum erro você terá que verificar as libs do PHP. Abaixo segue o comando no Linux para instalar todas as libs que são necessárias para funcionar o comando.

```php
sudo apt-get install libapache2-mod-php7.0 php7.0-mcrypt php7.0-
mysql php7.0-dev php7.0-json php7.0-mbstring php7.0-odbc php7.0-
opcache php7.0-xml php7.0-xmlrpc php7.0-xsl php7.0-zip php7.0-gd
```

Verifique se todas as libs foram instaladas e prossiga com o comando da etapa anterior.

### Apache 

Verifique se a reescrita de url está permitida em seu apache.

Link de configuração para o Windows: <a href="http://www.rafaelwendel.com/2011/08/como-usar-url-amigaveis-no-servidor-apache/"> Clique </a> <br>

Link de configuração para o Linux: 
<a href="https://www.vivaolinux.com.br/dica/Ativando-modo-de-reescrita-de-URL-mod-rewrite-no-Apache"> Clique </a> <br>



TESTES
-------------

### Endpoints e exemplos de requisições

A API REST posssui 5 endpoints. Para testar os mesmos, basta você abrir o Postam e inserir as rotas descritas abaixo e ir mudando o tipo de requisição (GET,POST,PUT,DEL);



```php
`GET http://localhost/desafio/web/funcionarios` 
```

Essa requisão retorna todos os funcionários cadastrados no banco de dados.


```
`GET http://localhost/desafio/web/funcionarios/<id>` 
```

Essa requisição retorna um funcionário em específico, basta colocar o id do funcionario como parâmetro e será retornado as informações do funcionário com id inserido. Caso esse funcionário não exista no BD, o retorno da requisição informa. 

```
`POST http://localhost/desafio/web/funcionarios`
```

Essa requisição serve para inserir um funcionário (POST), para isso é necessário você informar os atributos do funcionário (nome,sobrenome, idade e sexo), conforme o exemplo abaixo:


```
Passar os parâmetos (nome,sobrenome,idade, sexo) via body da requisição (JSON) conforme o exemplo abaixo:
{
  "nome": "Exemplo",
  "sobrenome": "exemplo",
  "idade": 30,
  "sexo": 1
}
```


```
`PUT http://localhost/desafio/web/funcionarios/<id>` 
```

Essa requisão serve para alterar um funcionário. Basta você informar o id do funcionário (VIA URL) e informar também os novos valores dos atributos, conforme o exemplo abaixo.

```
Passar os parâmetos (nome,sobrenome,idade, sexo) via body da requisição (JSON) conforme o exemplo abaixo: <br>

{
  "nome": "Novo nome",
  "sobrenome": "Novo sobrenome",
  "idade": 10,
  "sexo": 0
}
```

```
  `DELETE http://localhost/desafio/web/funcionarios/<id>`
```

Essa requisição serve para deletar um usuário do banco de dados. Basta vc informar o id do fucionário VIA URL.


```
  GET http://localhost/desafio/web/funcionarios/relatorio`
```

Essa requisição serve para extrair o relatório solicitado no desafio.