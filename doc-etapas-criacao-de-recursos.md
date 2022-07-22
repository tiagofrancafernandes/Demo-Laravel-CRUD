table: posts

migation: create_posts_tables

model: Post

PostFactory

controller: PostController
    - index
    - show
    - edit
    - create
    - store
    - destroy

-----------

1 - php artisan make:model -f -m
    - cria, model, factory e migration

2 - php artisan make:controller PostController --resource

3 - Escrevendo na migration o esquema da tabela posts

4 - Vou na model e informo os campos que são preenchiveis (atributo fillable) e os casts (se for necessário)

5 - Vou na factory e crio a estrutura de dados fake

6 - Vou no database seeder e informo quantos posts preciso que sejam criados
    - \App\Models\Post::factory()->count(5)->create();

7 - php artisan migrate --step
    - Rodo a migração

8 - php artisan db:seed
    - Rodo os seeders

9 - Vou nas rotas e crio uma rota do tipo resource e aponto a controller de posts

10 - Vou na controller e ajusto cada método para cada ação conforme for necessário testar
    - index, show, delete, create, edit
