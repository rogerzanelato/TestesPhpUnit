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