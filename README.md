## Iniciar PROJETO LARAVEL:
01 -> Instalar o PHP e configurar variáveis de ambiente.

02 -> Instalar o COMPOSER: https://getcomposer.org/download/
Resumo Composer: O Composer é um gerenciador de dependências para o PHP, amplamente utilizado no desenvolvimento com o framework Laravel. Ele facilita a instalação, atualização e gerenciamento de bibliotecas e pacotes necessários para o desenvolvimento de aplicações PHP, automatizando tarefas que antes eram feitas manualmente.
- Após instalar podemos conferir a versão do composer: composer --version
 
03 -> Configurando o composer para obter os pacotes (Configuração única):
 CMD:  composer config -g repo.packagist composer https://packagist.org

04 -> Configurando HTTP/HTTPS/SSH para o composer acessar o GIT (Configuração única):
CMD: composer config -g github-protocols https ssh

05 -> Criando projeto LARAVEL através do COMPOSER:
Obs: para criar o projeto, no php.ini a extensão fileinfo deverá ser habilitada: extension=fileinfo
CMD: composer create-project --prefer-dist laravel/laravel MEU_PROJETO

06 -> Rodando projeto através do próprio servidor embutido do laravel:
- OBS: um projeto criado geralmente vem com a configuração do laravel para se comunicar com o banco sqLite, então, no php.ini vamos habilitar: extension=pdo_sqlite
- Ao criar projeto, acesse a pasta ‘public’ cd public e dê o comando:
CMD: php -S localhost:8009
O sistema rodará na porta 8009 nesse exemplo acima;


## Comandos Composer / Artisan úteis
Comando artisan para criar controller:  php artisan make:controller TesteController


## Dependência usada para ler XSLX:
composer require phpoffice/phpspreadsheet