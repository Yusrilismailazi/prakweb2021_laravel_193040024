<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Catagory;
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
        

        User::create([
            'name' => 'Yusril Ismail Azi',
            'username' => 'yusrilismailazi',
            'email' => 'Aziyusril30@gmail.com',
            'password' => bcrypt('12345')
 
        ]);

       // User::create([
         //   'name' => 'ajii',
         //   'email' => 'ajii@gmail.com',
         //   'password' => bcrypt('12345')
 
       // ]);

       User::factory(3)->create();

        Category::create([
            'name' => 'Web programming',
            'slug' => 'web-programming'

        ]);

         Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'

        ]);

        Category::create([
           'name' => 'Personal',
           'slug' => 'Personal'
        ]);

        Post::factory(20)->create(); 

    //        post::create([
    //            'tittle' => 'Judul pertama',
    //            'slug' => 'Judul-pertama',
    //           'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem',
    //           'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, explicabo, cumque, facilis illum eligendi harum deserunt voluptas voluptatum natus unde voluptatem delectus porro fugiat! Atque molestiae quae possimus natus eius.',
    //           'category_id' => 1,
    //            'user_id' => 1 
    //        ]);

     //       post::create([
       //         'tittle' => 'Judul Ke Dua',
         //       'slug' => 'Judul-ke-dua',
          //      'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem',
           //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, explicabo, cumque, facilis illum eligendi harum deserunt voluptas voluptatum natus unde voluptatem delectus porro fugiat! Atque molestiae quae possimus natus eius.',
            //    'category_id' => 1,
             //   'user_id' => 1 
           // ]);

           // post::create([
             //   'tittle' => 'Judul Ke Tiga',
              //  'slug' => 'Judul-ke-tiga',
               // 'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem',
               // 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, explicabo, cumque, facilis illum eligendi harum deserunt voluptas voluptatum natus unde voluptatem delectus porro fugiat! Atque molestiae quae possimus natus eius.',
               // 'category_id' => 2,
               // 'user_id' => 1 
           // ]);

            //post::create([
              //  'tittle' => 'Judul Ke Empat',
               // 'slug' => 'Judul-ke-empat',
               // 'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem',
               // 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, explicabo, cumque, facilis illum eligendi harum deserunt voluptas voluptatum natus unde voluptatem delectus porro fugiat! Atque molestiae quae possimus natus eius.',
               // 'category_id' => 2,
                //'user_id' => 2
           // ]);
    }
}
 