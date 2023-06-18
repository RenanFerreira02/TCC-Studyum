# Studyum - Documentação do Projeto

Este é o repositório do projeto Studyum, uma plataforma web de organização voltada para alunos. O objetivo principal da plataforma é auxiliar os estudantes no gerenciamento de suas tarefas e materiais, proporcionando uma experiência mais eficiente e produtiva.

&nbsp;
&nbsp;

<div align="center">
  <img src="Studyum/public/images/templates/Logo.svg" alt="Logo Studyum" width="35%">
</div>

### Design:

[<img src='https://img.shields.io/badge/figma-0D1117.svg?style=for-the-badge&logo=figma&logoColor=white' align="center">](https://www.figma.com/file/kh2DDYWou2Hcww2MjoFPR1/Design-TCC?type=design&node-id=608%3A8221&t=nBfzDQKygFu8H5we-1)

### Tecnologias utilizada

<div>
    <img src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=e34f26&color=0d1117"/>
    <img src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=1572b6&color=0d1117"/>
    <img src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=f7df1e&color=0d1117"/>
    <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=777bb4&color=0d1117"/>
    <img src="https://img.shields.io/badge/laravel-0D1117.svg?style=for-the-badge&logo=laravel&logoColor=23FF2D20&labelColor=0D1117"/>
    <img src="https://img.shields.io/badge/mysql-0D1117.svg?style=for-the-badge&logo=mysql&logoColor=white&labelColor=0D1117"/>
    <img src="https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=38bcf6&color=0D1117"/>   
    <img src='https://img.shields.io/badge/SweetAlert2-0D1117?style=for-the-badge&logo=&logoColor=white&labelColor=0D1117&color=0D1117'/>
</div>

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

O Studyum possui uma interface intuitiva para guardar suas informações de estudo. Para utilizar siga os passos abaixo:

1. Após acessar o Studyum em seu navegador, prossiga para a parte de cadastro caso você ainda não tenha um.

2. Depois de cadastrar ou logar, você será redirecionado para a tela inicial das matérias.

3. Você verá todas as matérias nessa parte, separado por série, agora, basta você selecionar a matéria que deseja.

4. Quando a matéria for acessada, será possível visualizar um conteúdo de exemplo e o botão para adicionar os seus próprios conteúdos.

5. Adicione seus conteúdos.

## Contribuição

Se você deseja contribuir para o desenvolvimento deste projeto, siga estas etapas:

1. Faça um fork do repositório
2. Crie uma nova branch com sua funcionalidade ou correção de bug: `git checkout -b minha-funcionalidade`
3. Faça as alterações necessárias e adicione os arquivos modificados: `git add .`
4. Faça o commit das alterações: `git commit -m "Minha funcionalidade"`
5. Faça o push para a branch: `git push origin minha-funcionalidade`
6. Envie um Pull Request no repositório original

## Contato

Se você tiver alguma dúvida ou sugestão sobre a plataforma, sinta-se à vontade para entrar em contato através das redes sociais dos desenvolvedores. Agradecemos seu interesse!

 <!-- color #24AFC4   figma - #006989 #007090 #EAEBAD  -->
