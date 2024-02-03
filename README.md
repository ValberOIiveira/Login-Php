**Projeto de Sistema de Login com PHP**

Este é um projeto simples de sistema de login desenvolvido em PHP puro, com a finalidade de oferecer uma base para iniciantes que desejam aprender sobre autenticação de usuários em PHP e MySQL.

### Recursos e Funcionalidades:

1. **Registro de Usuários:**
   - Os usuários podem se cadastrar fornecendo um nome, e-mail e senha.

2. **Login Seguro:**
   - Autenticação segura com hash de senha usando `password_hash` e `password_verify`.

3. **Proteção contra SQL Injection:**
   - Uso de instruções preparadas (prepared statements) para proteger contra SQL injection.

4. **Recuperação de Senha:**
   - Mecanismo básico de recuperação de senha por e-mail não implementado.

5. **Logout:**
   - Funcionalidade de logout que destrói a sessão e redireciona para a tela de login.

### Como Usar:

1. **Configuração do Banco de Dados:**
   - Importe o script SQL fornecido (`database.sql`) para criar a tabela de usuários no banco de dados.

2. **Configuração da Conexão:**
   - Atualize as configurações de conexão com o banco de dados no arquivo `conn.php` com suas credenciais.

3. **Dependências:**
   - Nenhuma dependência externa é necessária além de um servidor web com suporte a PHP e MySQL.

4. **Personalizações:**
   - Adapte o sistema de acordo com suas necessidades, expandindo funcionalidades ou melhorando a segurança.

### Como Contribuir:

Sinta-se à vontade para contribuir para o projeto, abrindo problemas, fornecendo sugestões ou enviando solicitações de pull. Qualquer ajuda para melhorar e expandir este sistema é bem-vinda!

### Licença:

Este projeto é distribuído sob a licença [MIT](LICENSE), o que significa que você é livre para usá-lo, modificar e distribuir conforme necessário.
