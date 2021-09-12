<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // na PostFactory estão os parametros de id de User e Category
        // então quando cria um post, como está relacionado, cria também um usuário e categoria automático
        Post::factory(10)->create();


        // caso queira dar override em algum campo do seeder
        // Chama o criador e passa o atributo travado como array key => value
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
