<?php

namespace App\Models;



class Post 
{
    private static $blog_posts =   [
        [
            "title" => "judul pertama",
            "slug" => "link pertama",
            "author" => "Dendi Riki Rahmawan",
            "body" => "Dendi Riki Rahmawan mencoba untuk mencoba belajar bahasa pemrograman dengan fremwork laravel yang katanya di gadang gadang menjadi fromwork php yang
            saat ini sangat sering di gunakan dan paling digemari. meski begitu karena baru mempelajari laravel Dendi Riki pun merasa kesulitan dalam mengunakan bahasa tersebut
            cara untuk mengimplementasikan bagaimana cara kerja tersebut"
        ],
        [
            "title" => "judul kedua",
            "slug" => "link kedua",
            "author" => "Mardika",
            "body" => "sangat sulit untuk mempelajari pemrograman merasa semua hal yang dilakukan adalah hal yang sulit namun memiliki semangat seperti tokoh utama dalam filem
            sebenarnya dia tidak tau apa yang harus dilakukan untuk bisa maju kedepanya nanti tapi yah aku berharap dia bisa lulus tahun ini"
        ]
     ];


     public static function all() {

        return collect(self::$blog_posts);

     }

     public static function find($slug){
         $posts = static::all();

        //     $post = [];
        // foreach ($posts as $p ) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }

        // }

        return $posts->firstWhere('slug',$slug);

     }

}
