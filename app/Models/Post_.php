<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Belajar IPA",
            "slug" => "judul-post-pertama",
            "author"=> "Ricky",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid ullam
            sapiente corrupti nesciunt numquam dolor facilis ea. Voluptatum rem expedita nesciunt
            sint voluptatem nulla sapiente, ducimus facilis ratione quae id tempore eligendi illum
            praesentium animi incidunt accusamus corrupti ad soluta consequatur beatae delectus
            aliquam inventore. Velit, nam. Amet sit reiciendis, alias blanditiis, aliquid cum ea
            recusandae et magni accusamus quos eum in aut necessitatibus quo possimus quasi.
            Explicabo hic ratione nostrum cumque, natus voluptatum nulla, molestiae labore quod,
            unde eius."
        ],
        [
            "title" => "Belajar IPS",
            "slug" => "judul-post-kedua",
            "author"=> "Caroluce",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid ullam
            sapiente corrupti nesciunt numquam dolor facilis ea. Voluptatum rem expedita nesciunt
            sint voluptatem nulla sapiente, ducimus facilis ratione quae id tempore eligendi illum
            praesentium animi incidunt accusamus corrupti ad soluta consequatur beatae delectus
            aliquam inventore. Velit, nam. Amet sit reiciendis, alias blanditiis, aliquid cum ea
            recusandae et magni accusamus quos eum in aut necessitatibus quo possimus quasi.
            Explicabo hic ratione nostrum cumque, natus voluptatum nulla, molestiae labore quod,
            unde eius.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid ullam
            sapiente corrupti nesciunt numquam dolor facilis ea. Voluptatum rem expedita nesciunt
            sint voluptatem nulla sapiente, ducimus facilis ratione quae id tempore eligendi illum
            praesentium animi incidunt accusamus corrupti ad soluta consequatur beatae delectus
            aliquam inventore. Velit, nam. Amet sit reiciendis, alias blanditiis, aliquid cum ea
            recusandae et magni accusamus quos eum in aut necessitatibus quo possimus quasi.
            Explicabo hic ratione nostrum cumque, natus voluptatum nulla, molestiae labore quod,
            unde eius."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }

}




        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
