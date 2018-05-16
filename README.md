# Revisionable Laravel
Repositório para testar o funcionamento da biblioteca Revisionable para o Laravel.

# Rodando o projeto

Depois de toda configuração inicial do Laravel (.env, banco de dados). 

Execute os seguinte comandos:

```
    compoer update
```
Criando as tabelas
```
php artisan migrate
```

Criando as tabelas da biblioteca
```
php artisan migrate --path=vendor/venturecraft/revisionable/src/migrations
```

Rodando o projeto
```
php artisan serve
```

# Resultados do teste
 Formulário de cadastro
<p align="center"><img src="https://github.com/jilcimar/revisionable-laravel/blob/master/public/imagens/store.png"></p>

Listagem dos itens cadastrados e exibindo o histórico de modificação de cada item

<p align="center"><img src="https://github.com/jilcimar/revisionable-laravel/blob/master/public/imagens/history.png"></p>

Histórico:
- Nome de quem alterou
- Nome do campo
- Valor anterior e atual 

# Biblioteca
Mais informações na documentação da biblioteca.

LINK: https://github.com/VentureCraft/revisionable