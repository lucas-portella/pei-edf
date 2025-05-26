# Scripts e descrição do Banco de Dados
Antes de acessar o site de forma local, é necessário a configuração do SGBD.
Para esse projeto, utilizar MySQL na versão 8.0.42.
[Download MySQL Server](https://dev.mysql.com/downloads/mysql/8.0.html)

O nome do banco de dados utilizado para esse projeto é ```pei_edf``.
Para criar as tabelas do banco de dados, execute o arquivo ``build.sh``.

## Modelo Entidade-Relacionamento

### Tabela: Alunos
Tabela com informações dos alunos cadastrados
* IdAluno chave primária
* Nome
* Sobrenome
* Email
* NivelAtual
