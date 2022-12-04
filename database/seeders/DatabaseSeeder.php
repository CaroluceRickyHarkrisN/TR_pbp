<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        User::create([
            'name' => 'Caroluce',
            'username' => 'carolucericky',
            'email' => 'rickyharkeris821@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => '1'

        ]);

        // User::create([
        //     'name' => 'Ricky',
        //     'email' => '1rickyharkeris821@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sit velit ipsum,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sit velit ipsum, nulla at corrupti et. Esse nam enim maiores architecto corporis, inventore id animi ex harum ipsa repellat blanditiis ratione ab incidunt, non possimus numquam assumenda et corrupti nihil aperiam vero distinctio perferendis optio. Atque sequi maiores nihil velit dolore libero vitae voluptatem obcaecati. Expedita, accusamus vel! Asperiores deleniti natus non, ab veritatis, nam mollitia amet, suscipit accusantium reiciendis placeat? Culpa ea laboriosam atque nihil distinctio.</p><p>Velit iure laborum soluta perspiciatis commodi, minima et. Explicabo quas quisquam autem rerum, mollitia incidunt sunt dolores aperiam ipsum alias earum excepturi soluta deserunt unde. Officiis reprehenderit molestiae quasi debitis placeat, sint nostrum blanditiis odio sapiente quas corrupti asperiores incidunt consectetur quibusdam pariatur.</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, perferendis veniam! Omnis labore aliquam quod illum consequuntur cupiditate suscipit explicabo vero iure. Cumque vitae cum quasi facere totam maxime nostrum qui veritatis suscipit hic reiciendis dolores praesentium, nisi itaque similique, a adipisci at cupiditate provident explicabo necessitatibus repellendus odio. Similique?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sit velit ipsum,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sit velit ipsum, nulla at corrupti et. Esse nam enim maiores architecto corporis, inventore id animi ex harum ipsa repellat blanditiis ratione ab incidunt, non possimus numquam assumenda et corrupti nihil aperiam vero distinctio perferendis optio. Atque sequi maiores nihil velit dolore libero vitae voluptatem obcaecati. Expedita, accusamus vel! Asperiores deleniti natus non, ab veritatis, nam mollitia amet, suscipit accusantium reiciendis placeat? Culpa ea laboriosam atque nihil distinctio.</p><p>Velit iure laborum soluta perspiciatis commodi, minima et. Explicabo quas quisquam autem rerum, mollitia incidunt sunt dolores aperiam ipsum alias earum excepturi soluta deserunt unde. Officiis reprehenderit molestiae quasi debitis placeat, sint nostrum blanditiis odio sapiente quas corrupti asperiores incidunt consectetur quibusdam pariatur.</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, perferendis veniam! Omnis labore aliquam quod illum consequuntur cupiditate suscipit explicabo vero iure. Cumque vitae cum quasi facere totam maxime nostrum qui veritatis suscipit hic reiciendis dolores praesentium, nisi itaque similique, a adipisci at cupiditate provident explicabo necessitatibus repellendus odio. Similique?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sit velit ipsum,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sit velit ipsum, nulla at corrupti et. Esse nam enim maiores architecto corporis, inventore id animi ex harum ipsa repellat blanditiis ratione ab incidunt, non possimus numquam assumenda et corrupti nihil aperiam vero distinctio perferendis optio. Atque sequi maiores nihil velit dolore libero vitae voluptatem obcaecati. Expedita, accusamus vel! Asperiores deleniti natus non, ab veritatis, nam mollitia amet, suscipit accusantium reiciendis placeat? Culpa ea laboriosam atque nihil distinctio.</p><p>Velit iure laborum soluta perspiciatis commodi, minima et. Explicabo quas quisquam autem rerum, mollitia incidunt sunt dolores aperiam ipsum alias earum excepturi soluta deserunt unde. Officiis reprehenderit molestiae quasi debitis placeat, sint nostrum blanditiis odio sapiente quas corrupti asperiores incidunt consectetur quibusdam pariatur.</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, perferendis veniam! Omnis labore aliquam quod illum consequuntur cupiditate suscipit explicabo vero iure. Cumque vitae cum quasi facere totam maxime nostrum qui veritatis suscipit hic reiciendis dolores praesentium, nisi itaque similique, a adipisci at cupiditate provident explicabo necessitatibus repellendus odio. Similique?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sit velit ipsum,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sit velit ipsum, nulla at corrupti et. Esse nam enim maiores architecto corporis, inventore id animi ex harum ipsa repellat blanditiis ratione ab incidunt, non possimus numquam assumenda et corrupti nihil aperiam vero distinctio perferendis optio. Atque sequi maiores nihil velit dolore libero vitae voluptatem obcaecati. Expedita, accusamus vel! Asperiores deleniti natus non, ab veritatis, nam mollitia amet, suscipit accusantium reiciendis placeat? Culpa ea laboriosam atque nihil distinctio.</p><p>Velit iure laborum soluta perspiciatis commodi, minima et. Explicabo quas quisquam autem rerum, mollitia incidunt sunt dolores aperiam ipsum alias earum excepturi soluta deserunt unde. Officiis reprehenderit molestiae quasi debitis placeat, sint nostrum blanditiis odio sapiente quas corrupti asperiores incidunt consectetur quibusdam pariatur.</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, perferendis veniam! Omnis labore aliquam quod illum consequuntur cupiditate suscipit explicabo vero iure. Cumque vitae cum quasi facere totam maxime nostrum qui veritatis suscipit hic reiciendis dolores praesentium, nisi itaque similique, a adipisci at cupiditate provident explicabo necessitatibus repellendus odio. Similique?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);




    }
}
