# Aprendendo Symfony

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
