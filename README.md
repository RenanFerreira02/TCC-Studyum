# Studyum - Documentação do Projeto

Este é o repositório do projeto Studyum, uma plataforma web de organização voltada para alunos. O objetivo principal da plataforma é auxiliar os estudantes no gerenciamento de suas tarefas e materiais, proporcionando uma experiência mais eficiente e produtiva.

## Requisitos

|                                                        | Version |
| ------------------------------------------------------ | ------- |
| PHP                                                    | 8.1.x   |
| [Composer](https://getcomposer.org/download/)          | 2.5.x   |
| [Laravel](https://laravel.com/docs/10.x/configuration) | 10.4.x  |
| [Node](https://nodejs.org/en)                          | 18.x    |
| Xampp                                                  |         |

## Instalação

1. Clone este repositório em sua máquina local:

   ```bash
   git clone https://github.com/RenanFerreira02/TCC-Studyum.git
   ```

2. Acesse o diretório do projeto:

   ```bash
   cd .\Studyum\
   ```

3. Instale as dependências do Laravel usando o Composer:

   ```bash
   composer install
   ```

4. Crie um arquivo `.env` na raiz do projeto, com base no arquivo `.env.example`:

   ```bash
   cp .env.example .env
   ```

5. Gere a chave de criptografia do Laravel:

   ```bash
   php artisan key:generate
   ```

6. Execute as migrações do banco de dados:

   ```bash
   php artisan migrate
   ```

7. Execute as seeders do banco de dados:

   ```bash
   php artisan db:seed
   ```

8. Instale as dependências do front-end usando o NPM:

   ```bash
   npm install
   ```

9. Compile os assets do front-end:

   ```bash
   npm run dev
   ```

10. Inicie o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

Agora você pode acessar o Studyum em seu navegador em `http://localhost:8000`.

## Uso

O Studyum possui uma interface intuitiva para guardar suas informações de estudo

## Contribuição

Se você deseja contribuir para o desenvolvimento deste projeto, siga estas etapas:

1. Faça um fork do repositório
2. Crie uma nova branch com sua funcionalidade ou correção de bug: `git checkout -b minha-funcionalidade`
3. Faça as alterações necessárias e adicione os arquivos modificados: `git add .`
4. Faça o commit das alterações: `git commit -m "Minha funcionalidade"`
5. Faça o push para a branch: `git push origin minha-funcionalidade`
6. Envie um Pull Request no repositório original

## Contato

Se você tiver alguma dúvida ou sugestão sobre a plataforma, sinta-se à vontade para entrar em contato através do email studyum. Agradecemos seu interesse!

 <!-- color #24AFC4   figma - #006989 #007090 #EAEBAD  -->
