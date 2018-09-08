# TestesPhpUnit


#### Dependência

```shell
composer require phpunit/phpunit --dev
```
Obs: Atribuímos a flag **dev ** para separarmos as dependências que são desnecessárias para o sistema em produção.

#### Configuração Autoload no composer.json [exemplo]
```
"autoload": {
        "psr-4": {
            "SON\\": "src/"            
        }
    }
```

```shell
composer dumpautoload
```

#### Executando Testes
```shell
vendor/bin/phpunit.bat tests
```
Ou
```shell
phpunit.bat tests --bootstrap=tests/bootstrap.php
```

**Opções:**
- --debug: Exibe os testes que o método está executando
- --verbose: Informações extras
- --colors: Exibe o resultado do teste com cores

Podemos também definir esses parâmetros em um arquivo de configuração phpunit.xml para facilitar a utilização:
```xml
<?xml version="1.0" encoding="UTF-8" ?>
<phpunit colors="true" bootstrap="tests/bootstrap.php">
    <testsuites>
        <testsuite name="Minha suíte de teste">
            <directory>./tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```
E depois podemos executar os testes rodando no terminal `phpunit.bat`.


**Observações:**
`protected function setUp(){}` É uma função que é chamada antes de cada método de teste ser executado.
`@depends nome_do_metodo` É um PHPDoc que indica que um teste depente de outro ser executado primeiro para ser efetuado. O resultado desse teste pode ser passado como parâmetro
`@expectedException _excecao_` Indicamos que esperamos que o método retorne uma exceção
`@expectedExceptionMessage _mensagem_da_excecao` Indicamos parte do nome da mensagem que deve vir na exceção. Funciona como um like do SQL