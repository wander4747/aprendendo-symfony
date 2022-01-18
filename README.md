# Aprendendo Symfony

### Aplicação feita

Um simples CRUD de produtos com alguns conceitos básicos do Symfony.
http://localhost:8099/product/

![video](https://user-images.githubusercontent.com/6461792/150030213-91bce995-c616-428c-b721-d9e85f1e6f17.gif)


### Criando primeira página

- Criar um controller dentro de `src/Controller/`
- Declarar rota dentro de `config/routes.yaml`. Exemplo:

```yaml
hello_world:
    path: /hello-world
    controller: App\Controller\HelloController::hello
```

- Acesse http://localhost:8099/hello-world

### Annotation Routes

Em vez de definir sua rota em YAML, o Symfony também permite que você use rotas de anotação ou atributo(embutidos no PHP a partir do PHP 8).

```sh 
composer require annotations
```
- Basta seguir os exemplos com annotation e attribute https://symfony.com/doc/current/page_creation.html#annotation-routes
- Acesse http://localhost:8099/annotation
- Acesse http://localhost:8099/attributes


### Twig

Instalação do Twig

```sh
composer require twig
```

Ao instalar o twig é criada uma pasta template.
Crie um controller retornando o método:

```php 
...
$name = "Fulano";
return $this->render("home/index.html.twig", ['name' => $name]);
```

### Doctrine

Instalação do Doctrine

```sh 
composer require symfony/orm-pack
```

```sh 
composer require --dev symfony/maker-bundle
```

#### Criar banco de dados com Doctrine
```sh 
php bin/console doctrine:database:create
```

#### Criar entidade
```sh 
php bin/console make:entity EntityName  
```

#### Criar migration
```sh 
php bin/console doctrine:migrations:diff
```

Ao criar um migration é criado um arquivo dentro da pasta `migrations`

Rodar o migration criado
```sh 
php bin/console doctrine:migrations:migrate
```

### Forms e Validator

Instalação do Forms e Validator

```sh 
composer require  symfony/validator symfony/form
```