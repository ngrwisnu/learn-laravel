<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title"=>"First Post",
            "slug"=>"first-post",
            "author"=>"Ngr",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aperiam eaque distinctio cum, amet et exercitationem. Placeat aperiam molestias earum amet neque vitae saepe itaque aliquam commodi exercitationem quas aspernatur, minima fuga vel, deserunt quidem! Molestiae hic laudantium mollitia voluptas, iusto architecto libero distinctio, voluptatum odit dolor dignissimos earum vitae optio nesciunt! Ea quisquam eligendi nemo quae dolorem hic, accusamus omnis dolor voluptatem? Natus, impedit. Maiores natus aliquid, atque quidem voluptate distinctio veniam. Magnam perspiciatis est, amet hic, voluptatibus non nam optio natus labore ducimus nisi in! Tenetur debitis voluptate nobis dicta similique reiciendis deleniti fuga ad quasi. Et, sed."
        ],
        [
            "title"=>"Second Post",
            "slug"=>"second-post",
            "author"=>"Ngr",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aperiam eaque distinctio cum, amet et exercitationem. Placeat aperiam molestias earum amet neque vitae saepe itaque aliquam commodi exercitationem quas aspernatur, minima fuga vel, deserunt quidem! Molestiae hic laudantium mollitia voluptas, iusto architecto libero distinctio, voluptatum odit dolor dignissimos earum vitae optio nesciunt! Ea quisquam eligendi nemo quae dolorem hic, accusamus omnis dolor voluptatem? Natus, impedit. Maiores natus aliquid, atque quidem voluptate distinctio veniam. Magnam perspiciatis est, amet hic, voluptatibus non nam optio natus labore ducimus nisi in! Tenetur debitis voluptate nobis dicta similique reiciendis deleniti fuga ad quasi. Et, sed."
        ],
        [
            "title"=>"Third Post",
            "slug"=>"third-post",
            "author"=>"Ngr",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aperiam eaque distinctio cum, amet et exercitationem. Placeat aperiam molestias earum amet neque vitae saepe itaque aliquam commodi exercitationem quas aspernatur, minima fuga vel, deserunt quidem! Molestiae hic laudantium mollitia voluptas, iusto architecto libero distinctio, voluptatum odit dolor dignissimos earum vitae optio nesciunt! Ea quisquam eligendi nemo quae dolorem hic, accusamus omnis dolor voluptatem? Natus, impedit. Maiores natus aliquid, atque quidem voluptate distinctio veniam. Magnam perspiciatis est, amet hic, voluptatibus non nam optio natus labore ducimus nisi in! Tenetur debitis voluptate nobis dicta similique reiciendis deleniti fuga ad quasi. Et, sed."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        // $selected_post = [];

        // foreach($posts as $post) {
        //     if($post['slug'] === $slug) {
        //         $selected_post = $post;
        //     };
        // };

        return $posts->firstWhere('slug', $slug);
    }
}
