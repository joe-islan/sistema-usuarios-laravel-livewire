# Projeto de Gerenciamento de Usuários

Este é um projeto desenvolvido em **Laravel 11** com **Livewire** e **Tailwind CSS** para gerenciar usuários. Ele conta com **autenticação** e gerenciamento de sessões implementados via **Jetstream**, que se integra perfeitamente ao Livewire. O projeto inclui funcionalidades de listagem de usuários, busca e a possibilidade de acessar a conta de outro usuário com apenas um clique.

## Funcionalidades

### Autenticação:
- Registro de usuários.
- Login de usuários cadastrados.
- Validação dos dados de login.

### Listagem de Usuários:
- Exibição de uma lista de usuários com nome, e-mail e data de cadastro.
- Funcionalidade de busca por nome ou e-mail.
- Ordenação dos usuários por nome.
- Paginação da lista de usuários.
- **Impersonalizar**: possibilidade de entrar (fazer login) como outro usuário com apenas um clique, para fins de suporte ou testes.

### Interface Moderna:
- Design responsivo e intuitivo utilizando Tailwind CSS.
- Botão para acessar a conta de outro usuário diretamente.

## Tecnologias Utilizadas

- **Laravel 11**: Framework PHP para desenvolvimento web.
- **Livewire**: Biblioteca para criar interfaces interativas em Laravel.
- **Tailwind CSS**: Framework CSS para estilização de componentes.
- **Laravel Jetstream**: Kit de autenticação com suporte a Livewire.

## Como Executar o Projeto

Siga as instruções abaixo para configurar e executar o projeto localmente.

### Pré-requisitos

- PHP 8.2 ou superior.
- Composer instalado.
- Node.js e npm instalados.
- Banco de dados (MySQL, PostgreSQL, SQLite, etc.).
- Git instalado.

### Passo 1: Clonar o Repositório

Clone o repositório do projeto para o seu ambiente local:

```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio
```

### Passo 2: Instalar Dependências

Instale as dependências do PHP usando o Composer:

```bash
composer install
```

Instale as dependências do JavaScript usando o npm:

```bash
npm install
```

### Passo 3: Configurar o Ambiente

Crie uma cópia do arquivo `.env.example` e renomeie para `.env`:

```bash
cp .env.example .env
```

Configure as variáveis de ambiente no arquivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

Gere uma chave de aplicação:

```bash
php artisan key:generate
```

### Passo 4: Executar Migrations

Execute as migrations para criar as tabelas no banco de dados:

```bash
php artisan migrate --seed
```

### Passo 5: Compilar Assets

Compile os assets do Tailwind CSS e JavaScript:

```bash
npm run build
```

### Passo 6: Executar o Servidor

Inicie o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

Acesse a aplicação no navegador:

```
http://localhost:8000
```

### Passo 7: Acessar um Usuário

Para testar a aplicação, basta logar com um usuário já existente no banco de dados.

Caso tenha rodado o seeder padrão, utilize as seguintes credenciais:

- **E-mail**: `admin@example.com`
- **Senha**: `password`

Ou pode criar um novo usuário manualmente, na pagina de Registro

## Estrutura do Projeto

- **Controllers**: `app/Http/Controllers`
- **Models**: `app/Models`
- **Livewire Components**: `app/Livewire`
- **Views**: `resources/views`
- **Tailwind CSS**: `resources/css`
- **JavaScript**: `resources/js`
- **Migrations**: `database/migrations`


## Considerações Técnicas

### Decisão de Arquitetura
A funcionalidade de autenticação como outro usuário foi mantida intencionalmente simples no controller (`DashboardController`), priorizando:

- Clareza de implementação
- Adequação ao escopo do teste
- Integração com Jetstream

Em um ambiente de produção, implementaria:

✅ Camada de serviço dedicada  
✅ Registro de logs de auditoria  
✅ Validação de permissões hierárquicas  
✅ Testes de segurança adicionais

