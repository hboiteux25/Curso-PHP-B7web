<?php

class Post {
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function __construct(){
    echo 'teste';
  }

  public function aumentarLike(){
    $this->likes++;
  }
}


$post1 = new Post();
$post1->aumentarLike();

echo "POST 1: ".$post1->$likes."</br>";