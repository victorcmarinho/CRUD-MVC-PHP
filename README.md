# CRUD-MVC-PHP
Crud em MVC e PHP
### Objetivo: 

>Desenvolver um sistema CRUD simples em PHP 5 ou 7 (sem frameworks) e MySQL para a administração de livros de uma loja.

### Detalhes:

>Os livros devem contar com as seguintes informações:

1. Nome
2. Autor
3. Quantidade de Páginas
4. Preço (em reais, contando centavos)
5. Flag para livro ativo/inativo (não afetando na listagem, somente um valor para referência)
6. Data de inclusão/edição

### Regras: 

>As regras abaixo devem ser seguidas ao cadastrar/editar um livro:

1. Não devem haver livros com o mesmo nome
2. A quantidade de páginas e o preço, não podem ser zerados nem negativos
3. O livro deve ter o valor inicial de inativo, podendo ser alterado posteriormente diretamente por meio da listagem (link ou Ajax) ou edição completa do livro
4. Na listagem o preço deve ser formatado no padrão brasileiro (R$ 1.050,10).


### Detalhes sobre o programa:

1.  init.php são os arquivos de configurações do sistema de livraria
2.  diretório "view" é onde fica todas as telas do sistema
3.  diretório "controller" é onde fica fica as funcionalidades do sistema que interragem com o banco de dados
4.  diretório "model" é onde fica os arquivos de conexão com o banco de dados

No diretório "view" existem 3 páginas principais: editar.php, cadastro.php e index.php. a página head e menu são os escopos do HTML e Menu do sistemas respectivamente.

No diretório "controller" estão os arquivos PHP que executam as funcionalidades do sistema.

No diretório "model" estão os arquivos de conexão com o Banco de Dados

O arquivo script.sql é o scrip em sql que cria o banco e a tabela.
