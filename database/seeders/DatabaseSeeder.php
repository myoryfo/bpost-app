<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(3)->create();

        User::create([
            'name' => 'Ryfo Myory',
            'username' => 'myoryfo',
            'email' => 'ryfomyory@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Ika Mulqaidah',
            'username' => 'kiddie',
            'email' => 'ikamulqaidah@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Muyassirah',
            'username' => 'swarf',
            'email' => 'viramuyassirah@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Design Visual',
            'slug' => 'design-visual'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);



        // Post::create([
        //     'tittle' => 'Judul pertama',
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi minima magni, quaerat cumque blanditiis placeat architecto id a officiis sequi labore at nesciunt voluptate iste optio tenetur aut odit fugiat! Magnam, sint iste! Velit voluptas porro est facere,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi minima magni, quaerat cumque blanditiis placeat architecto id a officiis sequi labore at nesciunt voluptate iste optio tenetur aut odit fugiat! Magnam, sint iste! Velit voluptas porro est facere, sapiente esse incidunt numquam ab qui voluptatem. Inventore eaque recusandae repellat non voluptatem.</p><p>Dolore voluptatum, quod quidem, eaque veniam officia modi, cum minima voluptatibus earum ducimus consequatur eos quo? Reiciendis eveniet cumque deserunt vitae cupiditate ut nihil mollitia consequuntur assumenda adipisci unde perferendis, vel aut culpa? Dolorum sint tempore harum tenetur eius accusamus aperiam hic reprehenderit autem voluptatem. </p><p>Quaerat aspernatur itaque optio odio earum repudiandae iste quod ad cupiditate molestiae ipsa officia quam nihil deleniti, voluptas doloribus dignissimos et perferendis voluptates quia accusamus voluptate illo perspiciatis. Assumenda quos quod molestiae iste fugit neque. Corporis, voluptas mollitia. Nisi at ut odio voluptates, soluta sunt ratione nostrum voluptas, assumenda expedita reprehenderit! Magni, optio!</p>'
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'category_id' => '2',
        //     'user_id' => '2',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi minima magni, quaerat cumque blanditiis placeat architecto id a officiis sequi labore at nesciunt voluptate iste optio tenetur aut odit fugiat! Magnam, sint iste! Velit voluptas porro est facere,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi minima magni, quaerat cumque blanditiis placeat architecto id a officiis sequi labore at nesciunt voluptate iste optio tenetur aut odit fugiat! Magnam, sint iste! Velit voluptas porro est facere, sapiente esse incidunt numquam ab qui voluptatem. Inventore eaque recusandae repellat non voluptatem.</p><p>Dolore voluptatum, quod quidem, eaque veniam officia modi, cum minima voluptatibus earum ducimus consequatur eos quo? Reiciendis eveniet cumque deserunt vitae cupiditate ut nihil mollitia consequuntur assumenda adipisci unde perferendis, vel aut culpa? Dolorum sint tempore harum tenetur eius accusamus aperiam hic reprehenderit autem voluptatem. </p><p>Quaerat aspernatur itaque optio odio earum repudiandae iste quod ad cupiditate molestiae ipsa officia quam nihil deleniti, voluptas doloribus dignissimos et perferendis voluptates quia accusamus voluptate illo perspiciatis. Assumenda quos quod molestiae iste fugit neque. Corporis, voluptas mollitia. Nisi at ut odio voluptates, soluta sunt ratione nostrum voluptas, assumenda expedita reprehenderit! Magni, optio!</p>'
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ketiga',
        //     'category_id' => '3',
        //     'user_id' => '1',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi minima magni, quaerat cumque blanditiis placeat architecto id a officiis sequi labore at nesciunt voluptate iste optio tenetur aut odit fugiat! Magnam, sint iste! Velit voluptas porro est facere,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi minima magni, quaerat cumque blanditiis placeat architecto id a officiis sequi labore at nesciunt voluptate iste optio tenetur aut odit fugiat! Magnam, sint iste! Velit voluptas porro est facere, sapiente esse incidunt numquam ab qui voluptatem. Inventore eaque recusandae repellat non voluptatem.</p><p>Dolore voluptatum, quod quidem, eaque veniam officia modi, cum minima voluptatibus earum ducimus consequatur eos quo? Reiciendis eveniet cumque deserunt vitae cupiditate ut nihil mollitia consequuntur assumenda adipisci unde perferendis, vel aut culpa? Dolorum sint tempore harum tenetur eius accusamus aperiam hic reprehenderit autem voluptatem. </p><p>Quaerat aspernatur itaque optio odio earum repudiandae iste quod ad cupiditate molestiae ipsa officia quam nihil deleniti, voluptas doloribus dignissimos et perferendis voluptates quia accusamus voluptate illo perspiciatis. Assumenda quos quod molestiae iste fugit neque. Corporis, voluptas mollitia. Nisi at ut odio voluptates, soluta sunt ratione nostrum voluptas, assumenda expedita reprehenderit! Magni, optio!</p>'
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Keempat',
        //     'category_id' => '2',
        //     'user_id' => '2',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi minima magni, quaerat cumque blanditiis placeat architecto id a officiis sequi labore at nesciunt voluptate iste optio tenetur aut odit fugiat! Magnam, sint iste! Velit voluptas porro est facere,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi minima magni, quaerat cumque blanditiis placeat architecto id a officiis sequi labore at nesciunt voluptate iste optio tenetur aut odit fugiat! Magnam, sint iste! Velit voluptas porro est facere, sapiente esse incidunt numquam ab qui voluptatem. Inventore eaque recusandae repellat non voluptatem.</p><p>Dolore voluptatum, quod quidem, eaque veniam officia modi, cum minima voluptatibus earum ducimus consequatur eos quo? Reiciendis eveniet cumque deserunt vitae cupiditate ut nihil mollitia consequuntur assumenda adipisci unde perferendis, vel aut culpa? Dolorum sint tempore harum tenetur eius accusamus aperiam hic reprehenderit autem voluptatem. </p><p>Quaerat aspernatur itaque optio odio earum repudiandae iste quod ad cupiditate molestiae ipsa officia quam nihil deleniti, voluptas doloribus dignissimos et perferendis voluptates quia accusamus voluptate illo perspiciatis. Assumenda quos quod molestiae iste fugit neque. Corporis, voluptas mollitia. Nisi at ut odio voluptates, soluta sunt ratione nostrum voluptas, assumenda expedita reprehenderit! Magni, optio!</p>'
        // ]);
    }
}
