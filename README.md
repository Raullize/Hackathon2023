<h1 align="center"> CalamityControl </h1>

<p align="center">
  Plataforma de gerenciamento de doações e suprimentos para cidades afetadas por inundações.
</p>

<p align="center">
  <img src="https://img.shields.io/static/v1?label=STATUS&message=ARQUIVADO&color=lightgrey&style=for-the-badge"/>
  <img src="https://img.shields.io/badge/7%C2%AA%20CharCode-2023-6A0DAD?style=for-the-badge"/>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
  <img src="https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white"/>
</p>

> **Nota histórica:** o código deste repositório foi congelado no estado do primeiro upload completo do projeto (commit `df2c76a`). O repositório foi criado no GitHub em 25/09/2024, após a realização da hackathon, portanto não existe um commit de 06–07/10/2023. Este README foi reescrito em 2026 para padronização e não é o README original da época.

## Descrição

O **CalamityControl** é uma aplicação web desenvolvida para apoiar a gestão de doações e suprimentos em cidades atingidas por inundações. O protótipo reúne ranking de prioridade das cidades, necessidades por categoria, previsão do tempo e notícias, além de cadastro/login de usuários e uma área administrativa.

O projeto foi construído em PHP com arquitetura MVC, usando MySQL para persistência e Composer para gerenciamento de dependências.

## Contexto do Evento

| Campo | Informação |
|---|---|
| Evento | 7ª CharCode — Hackathon |
| Instituição | IFSul Câmpus Charqueadas |
| Data | 06 e 07 de outubro de 2023 |
| Local | Charqueadas, RS |
| Formato | Hackathon presencial de 24 horas |
| Tema/desafio | Propor soluções para mitigar os impactos de inundações, preservando vidas e reduzindo prejuízos econômicos |
| Equipe | 5 integrantes |

## Funcionalidades

- **Ranking de calamidade:** lista cidades conforme o nível de necessidade de suprimentos.
- **Cadastro e login de usuários:** autenticação com sessão.
- **Área do usuário:** perfil e cadastro de projetos/necessidades.
- **Cadastro e login de administradores:** acesso separado para a área administrativa.
- **Painel administrativo:** cadastro de FAQ e gerenciamento de conteúdos.
- **Doações por categoria:** estrutura para alimentos, higiene, roupas, materiais e dinheiro.
- **Metas de arrecadação:** acompanhamento por cidade e categoria.
- **Previsão do tempo:** integração com a API do OpenWeatherMap.
- **Notícias:** informações sobre cidades em situação de calamidade.
- **Exportação em PDF:** geração de listagens em PDF com Dompdf.

> Algumas funcionalidades ficaram como protótipo ou apenas como estrutura de dados. O projeto não teve continuidade após o evento.

## Tecnologias Utilizadas

- **PHP** com arquitetura MVC
- **MySQL/MariaDB**
- **Composer**
- **CoffeeCode Router**
- **League Plates** para templates
- **Dompdf** para geração de PDF
- **HTML5, CSS3 e JavaScript**
- **Bootstrap 4** e **Font Awesome**
- **OpenWeatherMap API** para previsão do tempo

## Banco de Dados

O script de criação e carga inicial está em [`01-bd/bd-mocitec-manha-tarde.sql`](./01-bd/bd-mocitec-manha-tarde.sql). Ele cria o banco `bd-hackaton` e as tabelas de cidades, usuários, administradores, doações, notícias, avisos e metas por categoria.

## Demonstração

Não há vídeo ou GIF de demonstração registrado para este projeto. O protótipo pode ser executado localmente seguindo as instruções abaixo.

## Como Executar o Projeto

### Pré-requisitos

- PHP 8.0 ou superior
- Composer
- MySQL ou MariaDB
- Apache com suporte a `.htaccess` (XAMPP, WAMP ou similar)

### Instalação

1. **Clone o repositório**

   ```bash
   git clone https://github.com/Raullize/Hackathon2023.git
   cd Hackathon2023
   ```

2. **Instale as dependências**

   ```bash
   composer install
   ```

3. **Crie o banco de dados**

   - Inicie o MySQL no XAMPP (ou no seu ambiente local).
   - Importe o arquivo `01-bd/bd-mocitec-manha-tarde.sql` pelo phpMyAdmin ou pela linha de comando:

   ```bash
   mysql -u root -p < 01-bd/bd-mocitec-manha-tarde.sql
   ```

4. **Configure a aplicação**

   Edite [`source/Boot/Config.php`](./source/Boot/Config.php) conforme o seu ambiente:

   ```php
   define("CONF_DB_HOST", "localhost");
   define("CONF_DB_USER", "root");
   define("CONF_DB_PASS", "");
   define("CONF_DB_NAME", "bd-hackaton");
   define("CONF_URL_BASE", "http://localhost/Hackathon2023");
   ```

5. **Coloque o projeto no servidor**

   Copie a pasta para `htdocs/Hackathon2023` (XAMPP) e inicie o Apache.

6. **Acesse a aplicação**

   Abra [http://localhost/Hackathon2023](http://localhost/Hackathon2023) no navegador.

> O arquivo `Config.php` do snapshot do evento usa `http://www.localhost/Hackathon`. Ajuste `CONF_URL_BASE` para o caminho real da sua instalação.

## Estrutura do Projeto

```text
Hackathon2023/
├── 01-bd/                 Script do banco de dados
├── assets/                CSS, JavaScript e imagens
├── source/
│   ├── App/               Controllers (Web, App e Adm)
│   ├── Boot/              Configuração e helpers
│   ├── Core/              Conexão e sessão
│   └── Models/            Modelos de domínio
├── themes/                Views (web, app e admin)
├── index.php              Front controller e rotas
└── composer.json          Dependências PHP
```

## Documentação

- [Script do banco de dados](./01-bd/bd-mocitec-manha-tarde.sql)
- [Configuração da aplicação](./source/Boot/Config.php)
- [Rotas da aplicação](./index.php)
- [Controllers](./source/App/)
- [Modelos](./source/Models/)
- [Views](./themes/)

## Limitações e Status

- Projeto **arquivado**: foi um protótipo de hackathon e não tem manutenção prevista.
- Algumas telas e funcionalidades são estáticas ou estão apenas estruturadas no banco.
- A chave da API de clima está escrita diretamente no JavaScript; em um projeto real, ela deveria ficar em variável de ambiente.
- Não há testes automatizados.

## Contribuindo

Este é um projeto histórico de hackathon. Contribuições não são esperadas, mas você pode abrir uma issue ou enviar um pull request caso encontre algum problema.

1. Faça um fork do projeto.
2. Crie uma branch: `git checkout -b minha-melhoria`.
3. Commit suas mudanças: `git commit -m 'Minha melhoria'`.
4. Envie para o seu fork: `git push origin minha-melhoria`.
5. Abra um pull request.

## Contribuidores

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/Raullize" title="Perfil no GitHub">
        <img src="https://github.com/Raullize.png" width="100px" alt="Foto de Raul Lize Teixeira no GitHub"/><br>
        <sub><b>Raul Lize Teixeira</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/MiguelLewandowski" title="Perfil no GitHub">
        <img src="https://github.com/MiguelLewandowski.png" width="100px" alt="Foto de Miguel Leonardo Strapazon Lewandowski no GitHub"/><br>
        <sub><b>Miguel Leonardo Strapazon Lewandowski</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/Kaio-LSilveira" title="Perfil no GitHub">
        <img src="https://github.com/Kaio-LSilveira.png" width="100px" alt="Foto de Kaio Leote Silveira no GitHub"/><br>
        <sub><b>Kaio Leote Silveira</b></sub>
      </a>
    </td>
    <td align="center">
      <sub><b>Bruna Rosa Bragança de Lima</b></sub>
    </td>
    <td align="center">
      <sub><b>Elano Tavares do Nascimento</b></sub>
    </td>
  </tr>
</table>

## Licença

Este projeto foi desenvolvido para fins educacionais durante a 7ª CharCode. Não há uma licença definida no repositório; entre em contato com os autores antes de reutilizar o código.
