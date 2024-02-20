<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ryfo Myory",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut repellat beatae non voluptate error sunt debitis omnis, ipsa voluptatibus quaerat placeat id perferendis tempora est, atque qui mollitia maiores. Maxime, placeat est! Doloremque ut similique molestiae voluptatum voluptate nesciunt delectus! Assumenda officiis deserunt laborum perferendis cumque voluptatibus numquam quis veritatis alias vero! Quidem totam alias unde repudiandae, deleniti rem cupiditate minus fugiat rerum quos, libero harum nobis cum tenetur dignissimos sapiente culpa nihil beatae repellat numquam amet itaque reprehenderit. Velit harum, autem corporis molestiae rem cupiditate corrupti id repellendus nesciunt quaerat. Laborum porro molestiae cupiditate atque, ipsam accusamus soluta sunt."
        ],
        [
            "tittle" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ika Mulqaidah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ipsam. Eaque, tenetur enim perferendis dolores quibusdam recusandae? Nulla, iure. Quisquam officiis ut animi commodi labore illo, expedita totam unde exercitationem. Ea dolorum, molestias aperiam ex atque, dolorem iusto sint, veniam sunt doloribus laudantium sequi assumenda ipsum est voluptatum delectus quis doloremque aspernatur dicta nemo. Ea velit aut fugit deleniti consequatur illo molestiae rerum? Atque culpa quod eligendi optio asperiores a dicta illum! Ipsam, dolores magnam blanditiis odit velit incidunt vero quibusdam libero soluta, tempore numquam at beatae, temporibus dolor exercitationem nisi? Tempora quisquam natus odit nemo doloremque dolorum ullam atque."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
