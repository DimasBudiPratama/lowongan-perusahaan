<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'      => 'Dimas',
            'username'  => 'dimas',
            'email'     => 'dimasbudipratama@gmail.com',
            'password'  => bcrypt('12345')
        ]);

        // User::create([
        //     'name'      => 'Celline Pratiwi',
        //     'email'     => 'cellinepratawi@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        User::factory(2)->create();

        // Category::create([
        //     'name'      => 'Anime',
        //     'slug'      => 'anime'
        // ]);

        // Category::create([
        //     'name'      => 'Web Programming',
        //     'slug'      => 'web-programming'
        // ]);

        // Category::create([
        //     'name'      => 'Movie',
        //     'slug'      => 'movie'
        // ]);

        Post::factory(6)->create();

        // Post::create([
        //     'title'     => 'Judul Pertama',
        //     'slug'      => 'judul-pertama',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dignissimos voluptates corporis, quae cupiditate expedita blanditiis nobis temporibus cum quidem error ea, officiis ducimus esse dolore, et voluptatum laudantium eos!',
        //     'body'      => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati harum modi hic recusandae accusamus sunt, quod perspiciatis cumque error?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum numquam architecto amet cupiditate porro quidem, optio, sunt cumque quasi impedit magnam eum explicabo, nam quisquam facere. Debitis odit aliquam,</p><p> laudantium neque minima quis pariatur nulla voluptate? Ullam soluta harum nostrum? Perferendis exercitationem eos ipsa recusandae nemo minima labore at sit dolorem voluptatem minus asperiores officia architecto reiciendis velit doloribus, voluptates magnam esse ratione ipsum dignissimos sunt cumque aspernatur qui? Eaque aspernatur molestiae consequuntur, culpa, voluptatibus sequi quidem suscipit nobis facilis similique quasi vel odio error excepturi dignissimos iste assumenda exercitationem rem,</p><p> perferendis fugit explicabo accusantium vitae. Nobis iste perferendis, sunt cumque in blanditiis officia magnam officiis ipsum beatae, consequatur similique placeat possimus architecto illum, eos deleniti ratione aperiam assumenda sequi doloremque et eum? Facere, itaque, consequatur nam nobis neque labore dolorum fugiat veritatis amet minus, totam veniam? Sed, temporibus vero! Nam minus quam cumque neque quis atque voluptates corrupti ipsum.</p>',
        //     'category_id' => 1,
        //     'user_id'   => 2
        // ]);

        // Post::create([
        //     'title'     => 'Judul Kedua',
        //     'slug'      => 'judul-kedua',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dignissimos voluptates corporis, quae cupiditate expedita blanditiis nobis temporibus cum quidem error ea, officiis ducimus esse dolore, et voluptatum laudantium eos!',
        //     'body'      => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati harum modi hic recusandae accusamus sunt, quod perspiciatis cumque error?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum numquam architecto amet cupiditate porro quidem, optio, sunt cumque quasi impedit magnam eum explicabo, nam quisquam facere. Debitis odit aliquam,</p><p> laudantium neque minima quis pariatur nulla voluptate? Ullam soluta harum nostrum? Perferendis exercitationem eos ipsa recusandae nemo minima labore at sit dolorem voluptatem minus asperiores officia architecto reiciendis velit doloribus, voluptates magnam esse ratione ipsum dignissimos sunt cumque aspernatur qui? Eaque aspernatur molestiae consequuntur, culpa, voluptatibus sequi quidem suscipit nobis facilis similique quasi vel odio error excepturi dignissimos iste assumenda exercitationem rem,</p><p> perferendis fugit explicabo accusantium vitae. Nobis iste perferendis, sunt cumque in blanditiis officia magnam officiis ipsum beatae, consequatur similique placeat possimus architecto illum, eos deleniti ratione aperiam assumenda sequi doloremque et eum? Facere, itaque, consequatur nam nobis neque labore dolorum fugiat veritatis amet minus, totam veniam? Sed, temporibus vero! Nam minus quam cumque neque quis atque voluptates corrupti ipsum.</p>',
        //     'category_id' => 2,
        //     'user_id'   => 1
        // ]);

        // Post::create([
        //     'title'     => 'Judul Ketiga',
        //     'slug'      => 'judul-ketiga',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dignissimos voluptates corporis, quae cupiditate expedita blanditiis nobis temporibus cum quidem error ea, officiis ducimus esse dolore, et voluptatum laudantium eos!',
        //     'body'      => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati harum modi hic recusandae accusamus sunt, quod perspiciatis cumque error?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum numquam architecto amet cupiditate porro quidem, optio, sunt cumque quasi impedit magnam eum explicabo, nam quisquam facere. Debitis odit aliquam,</p><p> laudantium neque minima quis pariatur nulla voluptate? Ullam soluta harum nostrum? Perferendis exercitationem eos ipsa recusandae nemo minima labore at sit dolorem voluptatem minus asperiores officia architecto reiciendis velit doloribus, voluptates magnam esse ratione ipsum dignissimos sunt cumque aspernatur qui? Eaque aspernatur molestiae consequuntur, culpa, voluptatibus sequi quidem suscipit nobis facilis similique quasi vel odio error excepturi dignissimos iste assumenda exercitationem rem,</p><p> perferendis fugit explicabo accusantium vitae. Nobis iste perferendis, sunt cumque in blanditiis officia magnam officiis ipsum beatae, consequatur similique placeat possimus architecto illum, eos deleniti ratione aperiam assumenda sequi doloremque et eum? Facere, itaque, consequatur nam nobis neque labore dolorum fugiat veritatis amet minus, totam veniam? Sed, temporibus vero! Nam minus quam cumque neque quis atque voluptates corrupti ipsum.</p>',
        //     'category_id' => 2,
        //     'user_id'   => 1
        // ]);
        // Post::create([
        //     'title'     => 'Judul Keempat',
        //     'slug'      => 'judul-keempat',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dignissimos voluptates corporis, quae cupiditate expedita blanditiis nobis temporibus cum quidem error ea, officiis ducimus esse dolore, et voluptatum laudantium eos!',
        //     'body'      => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati harum modi hic recusandae accusamus sunt, quod perspiciatis cumque error?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum numquam architecto amet cupiditate porro quidem, optio, sunt cumque quasi impedit magnam eum explicabo, nam quisquam facere. Debitis odit aliquam,</p><p> laudantium neque minima quis pariatur nulla voluptate? Ullam soluta harum nostrum? Perferendis exercitationem eos ipsa recusandae nemo minima labore at sit dolorem voluptatem minus asperiores officia architecto reiciendis velit doloribus, voluptates magnam esse ratione ipsum dignissimos sunt cumque aspernatur qui? Eaque aspernatur molestiae consequuntur, culpa, voluptatibus sequi quidem suscipit nobis facilis similique quasi vel odio error excepturi dignissimos iste assumenda exercitationem rem,</p><p> perferendis fugit explicabo accusantium vitae. Nobis iste perferendis, sunt cumque in blanditiis officia magnam officiis ipsum beatae, consequatur similique placeat possimus architecto illum, eos deleniti ratione aperiam assumenda sequi doloremque et eum? Facere, itaque, consequatur nam nobis neque labore dolorum fugiat veritatis amet minus, totam veniam? Sed, temporibus vero! Nam minus quam cumque neque quis atque voluptates corrupti ipsum.</p>',
        //     'category_id' => 1,
        //     'user_id'   => 2
        // ]);
    }
}
