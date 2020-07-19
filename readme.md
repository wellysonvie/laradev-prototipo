# LaraDev - Protótipo

<p>CRUD simples de imóveis utilizando Laravel 5.7 e PHP 7.2.</p>

## Preparando o ambiente

### Instalando dependências
- `sudo apt install php7.2`
- `sudo apt install composer`
- `sudo apt install php7.2-xml php7.2-mbstring php7.2-mysql`
- `sudo apt install nodejs npm`

### Novo projeto
- Criando estrutura: `composer create-project --prefer-dist laravel/laravel nome-projeto "5.7.*"`
- Setando namespace padrão: `php artisan app:name NovoNome`
- Setar timezone em `config/app.php` com `'timezone' => 'America/Sao_Paulo'`
- Adicionando pt-br:
    - `cd resources/lang/`
    - `git clone -b 'v5.6' --single-branch https://github.com/UpInside/laravel-pt-BR.git ./pt-BR`
    - `rm -rf pt-BR/.git/`
    - Setar idioma em `config/app.php` com`'locale' => 'pt-br'`

### Clonando projeto
- `git clone https://github.com/wellysonvie/laradev-prototipo.git`

### Executando projeto em localhost
- Via servidor de testes: `php artisan serve`
- Via lampp:
    - mover projeto para a pasta `/opt/lampp/htdocs/` e acessar via `https://localhost/nome-projeto/public/`

