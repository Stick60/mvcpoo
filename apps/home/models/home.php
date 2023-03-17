<?php

require_once('libs/config.php');

class Post
{
    public string $title;
    public string $frenchCreationDate;
    public string $author;
    public string $content;
    public string $identifier;
}

class PostRepository
{
    public DatabaseConnection $connection;

    // public function getPost(string $identifier): Post
    // {
    //     $statement = $this->connection->getConnection()->prepare(
    //         "SELECT post_id, post_title, post_content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date FROM posts WHERE id = ?"
    //     );
    //     $statement->execute([$identifier]);

    //     $row = $statement->fetch();
    //     $post = new Post();
    //     $post->title = $row['title'];
    //     $post->frenchCreationDate = $row['french_creation_date'];
    //     $post->content = $row['content'];
    //     $post->identifier = $row['id'];

    //     return $post;
    // }

    public function getPosts(): array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT post_id, post_title, post_content, post_author, DATE_FORMAT(post_creation_date, '%d/%m/%Y') AS french_creation_date FROM posts ORDER BY creation_date DESC LIMIT 0, 5"
        );
        $posts = [];
        while (($row = $statement->fetch())) {
            $post = new Post();
            $post->title = $row['post_title'];
            $post->frenchCreationDate = $row['french_creation_date'];
            $post->author = $row['post_author'];
            $post->content = $row['post_content'];
            $post->identifier = $row['post_id'];

            $posts[] = $post;
        }

        return $posts;
    }
}