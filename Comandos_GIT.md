# Principais Comandos GIT

### CONFIGURAÇÃO INICIAL
- git config --global user.name
- git config --global user.email

### CRIAR REPOSITÓRIO
- git init (dentro do diretório onde será o repositório)

## COMMITS

### ADICIONAR ARQUIVO AO CONTROLE GIT
- git add *nome_do_arquivo*
- git add * (para incluir todos)

### PARA REMOVER UM ARQUIVO
- git rm *nome_do_arquivo* -f (opçõa -f força a remoção)

### REALIZAR O COMMIT (DEPOIS DE ADD/DELETE)
- git commit -a -m "Mensagem do log do commit" (opção -a faz o commit tanto dos arquivos add com os delete)

### REMOVER ARQUIVO DO COMMIT E DEIXAR COMO UNSTAGE
- git reset HEAD *nome_do_arquivo*

### VOLTAR COMMIT
- git checkout *hash_do_commit_a_restaurar*
- git reset HEAD˜1 (o ˜1 indica o último commit, pode ser 2, 3, etc)

### VOLTAR COMMIT ATÉ O PONTO ONDE O ARQUIVO FOI ADICIONADO (o ˜1 indica o último commit, pode ser 2, 3, etc)
- git reset HEAD˜1 --soft (trocando o --soft por --hard remove todos os commits)

### VOLTAR O ARQUIVO A VERSÃO ORIGINAL
- git checkout -- *nome_do_arquivo*

### VER O LOG
- git log
- git log -p (completo, incluindo diff)
- git log --pretty=format:"%h - %an, %ar : %s" (opção formatada)
- git log --since=2.days (log só dos últimos 2 dias)

## TRABALHANDO COM BRANCHES

### MOSTRAR A BRANCH ATUAL
- git branch

### MOSTRAR TODAS AS BRANCHES, INCLUSIVE REMOTAS
- git branch -a (a branch com * será a atual)

### CRIAR BRANCH
- git checkout -b *nome_da_branch*

### EXCLUIR BRANCH
- git checkout -b *nome_da_branch*

### PARA JUNTAR BRANCHES
- git rebase *nome_da_branch_que_vai_juntar* (deve ser feito dentro da branch que vai receber o rebase)
- git merge *nome_da_branch_que_vai_juntar* (mesmo efeito e condição do rebase, mas exige mensagem de commit)

## REPOSITÓRIOS REMOTOS

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

### PARA REMOVER UMA BRANCH NO REPOSITÓRIO REMOTO
- git push origin :*nome_da_branch*

### PARA ATUALIZAR O REPOSITÓRIO REMOTO (SOMENTE IDENTIFICAR DIFERENÇAS)
- git fetch *nome_repositorio_remoto*

## TAGS

### PARA CRIAR UMA TAG DA BRANCH (RELEASE)
- git tag *nome_da_tag* (é o RELEASE, usar preferencialmente versionamento semântico)

### PARA LISTAR AS TAGS
- git tag -l

### PARA REMOVER UMA TAGS
- git tag -d *nome_da_tag*

### PARA REMOVER UMA TAG NO REPOSITÓRIO REMOTO
- git push *nome_repositorio_remoto* :refs/tags/*nome_da_tag*