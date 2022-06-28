<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


// estraiamo le chiavi dall'array $posts
$keys_posts = array_keys($posts);
var_dump($keys_posts);

 $n_posts = count($posts);
 for ($i = 0; $i < $n_posts; $i++) {
    $key = $keys_posts[$i] ?>
 <h1><?=  $key ?> </h1> <?php
 
 $posts_of_date = $posts[$key];
 $n_posts_of_date = count($posts_of_date);

 for ($j = 0; $j < $n_posts_of_date ; $j++) { $post = $posts_of_date [$j]; ?>
    <div>
        <h2> <?= $post[`title`] ?> </h2>
        <h3> <?= $post[`author`] ?> </h3>
        <p> <?= $post[`text`] ?> </p>
    </div> 
    <?php   
 }

     
}
