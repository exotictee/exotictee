<?php

class post
{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
       $this->title = $title;
       $this->author = $author;
       $this->published = $published; 
    }
}

$posts = [
    new post('My First post', 'JW', true),
    new post('My Second post', 'KF', true),
    new post('My Third post', 'MP', true),
    new post('My Fourth post', 'TR', false)
];

// $UnpublishedPosts = array_filter($posts, function($post) {
   // return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function($post) {
   // return  $post->published;
// });

// $titles = array_map(function ($post){
   // return ['title' => $post->title];
// }, $posts);


$posts = array_map(function($post) {
    return (array) $post;
}, $posts);


$author = array_column($posts, 'author', 'title');

var_dump($author);