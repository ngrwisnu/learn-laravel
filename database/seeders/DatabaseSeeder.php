<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();

        // ! manual User seeder
        // User::create([
            //     'name' => 'John Doe',
        //     'email' => 'john@email.com',
        //     'password' => bcrypt('johandfwj1231')
        // ]);
        // User::create([
        //     'name' => 'Loern Doe',
        //     'email' => 'loern@email.com',
        //     'password' => bcrypt('loerjnfdfwj1231')
        // ]);
        // ! end of manual User seeder

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Product Design',
            'slug' => 'product-design'
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Category::create([
            'name' => 'Astronomy',
            'slug' => 'astronomy'
        ]);

        Post::factory(20)->create();

        // ! manual Post seeder
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Expedita nobis cum exercitationem nesciunt odio quae ullam quisquam doloremque, sapiente sed! Molestias, eius. Asperiores iusto repellat rem quae dicta cupiditate itaque sapiente',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto enim accusantium nam exercitationem animi natus, ut praesentium minus voluptate sunt corrupti pariatur repellat illum vero odit, dicta amet illo, quisquam possimus doloremque nemo quod impedit? Expedita nobis cum exercitationem nesciunt odio quae ullam quisquam doloremque, sapiente sed! Molestias, eius. Asperiores iusto repellat rem quae dicta cupiditate itaque sapiente quis quibusdam aut eius maxime, magni odit sit quia vitae labore consequuntur, ut harum dolor voluptatum voluptate tenetur. A exercitationem ipsam sapiente?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita laudantium eos, eligendi voluptatem sunt ea cumque fugit magnam omnis quo ratione est perspiciatis totam accusamus distinctio cum libero placeat repudiandae sit asperiores illum! Laborum modi voluptatibus aut harum. Dicta quo facilis rem quod. Beatae, sed ullam nostrum cum velit recusandae dolores dolorem! Eligendi nulla doloremque vel qui ut. Eos iusto nesciunt recusandae eveniet? Molestias magnam cupiditate amet saepe ea iste ab nesciunt libero necessitatibus eum aut incidunt veritatis eos, laboriosam nam exercitationem nemo voluptas repellendus neque! Saepe veniam illo in, tenetur quidem earum ut exercitationem veritatis asperiores ad, omnis nostrum sint minima odio distinctio consectetur? Consequuntur reiciendis nulla eaque doloremque numquam, incidunt dolorum. Blanditiis deserunt, quas nesciunt excepturi saepe facilis?</p>',
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Expedita nobis cum exercitationem nesciunt odio quae ullam quisquam doloremque, sapiente sed! Molestias, eius. Asperiores iusto repellat rem quae dicta cupiditate itaque sapiente',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto enim accusantium nam exercitationem animi natus, ut praesentium minus voluptate sunt corrupti pariatur repellat illum vero odit, dicta amet illo, quisquam possimus doloremque nemo quod impedit? Expedita nobis cum exercitationem nesciunt odio quae ullam quisquam doloremque, sapiente sed! Molestias, eius. Asperiores iusto repellat rem quae dicta cupiditate itaque sapiente quis quibusdam aut eius maxime, magni odit sit quia vitae labore consequuntur, ut harum dolor voluptatum voluptate tenetur. A exercitationem ipsam sapiente?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita laudantium eos, eligendi voluptatem sunt ea cumque fugit magnam omnis quo ratione est perspiciatis totam accusamus distinctio cum libero placeat repudiandae sit asperiores illum! Laborum modi voluptatibus aut harum. Dicta quo facilis rem quod. Beatae, sed ullam nostrum cum velit recusandae dolores dolorem! Eligendi nulla doloremque vel qui ut. Eos iusto nesciunt recusandae eveniet? Molestias magnam cupiditate amet saepe ea iste ab nesciunt libero necessitatibus eum aut incidunt veritatis eos, laboriosam nam exercitationem nemo voluptas repellendus neque! Saepe veniam illo in, tenetur quidem earum ut exercitationem veritatis asperiores ad, omnis nostrum sint minima odio distinctio consectetur? Consequuntur reiciendis nulla eaque doloremque numquam, incidunt dolorum. Blanditiis deserunt, quas nesciunt excepturi saepe facilis?</p>',
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt' => 'Expedita nobis cum exercitationem nesciunt odio quae ullam quisquam doloremque, sapiente sed! Molestias, eius. Asperiores iusto repellat rem quae dicta cupiditate itaque sapiente',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto enim accusantium nam exercitationem animi natus, ut praesentium minus voluptate sunt corrupti pariatur repellat illum vero odit, dicta amet illo, quisquam possimus doloremque nemo quod impedit? Expedita nobis cum exercitationem nesciunt odio quae ullam quisquam doloremque, sapiente sed! Molestias, eius. Asperiores iusto repellat rem quae dicta cupiditate itaque sapiente quis quibusdam aut eius maxime, magni odit sit quia vitae labore consequuntur, ut harum dolor voluptatum voluptate tenetur. A exercitationem ipsam sapiente?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita laudantium eos, eligendi voluptatem sunt ea cumque fugit magnam omnis quo ratione est perspiciatis totam accusamus distinctio cum libero placeat repudiandae sit asperiores illum! Laborum modi voluptatibus aut harum. Dicta quo facilis rem quod. Beatae, sed ullam nostrum cum velit recusandae dolores dolorem! Eligendi nulla doloremque vel qui ut. Eos iusto nesciunt recusandae eveniet? Molestias magnam cupiditate amet saepe ea iste ab nesciunt libero necessitatibus eum aut incidunt veritatis eos, laboriosam nam exercitationem nemo voluptas repellendus neque! Saepe veniam illo in, tenetur quidem earum ut exercitationem veritatis asperiores ad, omnis nostrum sint minima odio distinctio consectetur? Consequuntur reiciendis nulla eaque doloremque numquam, incidunt dolorum. Blanditiis deserunt, quas nesciunt excepturi saepe facilis?</p>',
        // ]);
        // ! end of manual Post seeder

    }
}
