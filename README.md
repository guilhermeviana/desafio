<p align="center">
    <h1 align="center">Desafio Carriers - PHP - Yii2 PHP Framework</h1>
    <br>
</p>



DIRECTORY STRUCTURE
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



CONFIGURATION
-------------

### Database

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