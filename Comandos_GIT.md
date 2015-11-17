# Principais Comandos GIT

### CONFIGURAÇÃO INICIAL
- git config --global user.name
- git config --global user.email

### CRIAR REPOSITÓRIO
1) Acessar o diretório onde será o repositório
2) git init

### ADICIONAR ARQUIVO AO CONTROLE GIT
- git add *nome_do_arquivo*
- git add *
(para incluir todos)

### REALIZAR O COMMIT (DEPOIS DE ADD)
- git commit -m "Mensagem do log do commit"

### REMOVER ARQUIVO DO COMMIT E DEIXAR COMO UNSTAGE
- git reset HEAD *nome_do_arquivo*

### VER O LOG
- git log
- git log -p (completo, incluindo diff)
- git log --pretty=format:"%h - %an, %ar : %s" (opção formatada)
- git log --since=2.days (log só dos últimos 2 dias)

### VOLTAR COMMIT
- git checkout *hash_do_commit_a_restaurar*

### VOLTAR COMMIT ATÉ O PONTO ONDE O ARQUIVO FOI ADICIONADO (o ˜1 indica o último commit, pode ser 2, 3, etc)
- git reset HEAD˜1 --soft (trocando o --soft por --hard remove todos os commits)

### VOLTAR COMMIT
- git reset HEAD˜1 (o ˜1 indica o último commit, pode ser 2, 3, etc)

### VOLTAR O ARQUIVO A VERSÃO ORIGINAL
- git checkout -- *nome_do_arquivo*

### MOSTRAR A BRANCH ATUAL
- git branch

### MOSTRAR TODAS AS BRANCHES, INCLUSIVE REMOTAS
- git branch -a (a branch com * será a atual)

### CRIAR BRANCH
- git checkout -b *nome_da_branch*

### PARA JUNTAR BRANCHES (MERGE)
1) Acessar a branch que vai receber o merge
2) git merge *nome_da_branch_que_vai_juntar*

### PARA CONFIGURAR UM REPOSITÓRIO REMOTO
- git remote add *nome_repositorio_remoto* *endereco_do_repositorio*
(o nome *origin* é um padrão utilizado para denominar o nome do repositório remoto / preferencialmente usar repositórios http)

### PARA CRIAR/ENVIAR UMA BRANCH NO REPOSITÓRIO REMOTO
- git push nome_repositorio_remoto *nome_branch_local* --tags (o padrão de nome_repositorio_remoto é origin / sempre enviar com tags para os releases)

### PARA CLONAR UM REPOSITORIO REMOTO
- git clone *endereco_do_repositorio_remoto* *nome_pasta_local* (nome da pasta local somente se desejar, caso não definido usará o nome do repositório remoto)

### PARA CRIAR UMA BRANCH LOCAL BASEADO EM UMA BRANCH DE UM REPOSITÓRIO REMOTO
- git checkout -b *nome_branch_local* *caminho_branch_remoto*

### PARA OBTER AS ALTERAÇÕES DE UMA BRANCH DO REPOSITÓRIO REMOTO
- git pull *nome_branch_repositorio_remoto* *nome_branch_local*

### PARA CRIAR UMA TAG DA BRANCH (RELEASE)
- git tag *nome_da_tag* (é o RELEASE, usar preferencialmente versionamento semântico)

### PARA REMOVER UMA TAG NO REPOSITÓRIO REMOTO
- git push *nome_repositorio_remoto* :refs/tags/*nome_da_tag*

### PARA REMOVER UMA BRANCH NO REPOSITÓRIO REMOTO
- git push origin :*nome_da_branch*
