# Aprendendo Symfony

### Criando primeira página

- Criar um controller dentro de `src/Controller/`
- Declarar rota dentro de `config/routes.yaml`. Exemplo:

```yaml
hello_world:
    path: /hello-world
    controller: App\Controller\HelloController::hello
```
