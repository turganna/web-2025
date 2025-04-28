<?php
/*
$connection = connectDatabase();
$postId = savePostToDatabase($connection, [
    "user_id" => 1,
    "title" => "Новый пост",
    "subtitle" => "Новый подзаголовок",
    "content" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, repellat eveniet temporibus rerum totam deserunt perspiciatis molestiae pariatur aperiam reprehenderit explicabo quia neque id eaque, eius corporis, similique sed dignissimos!",
    "likes_count" => 11,
]);

$post = findPostInDatabase($connection, $postId);

var_dump($post);
*/

function getPosts(): ?array
{
    return connectDatabase()->query("SELECT * FROM post")->fetchAll(PDO::FETCH_ASSOC);
}
function getUsers(): ?array
{
    return connectDatabase()->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
}
function connectDatabase(): PDO
{
    $dsn = 'mysql:host=127.0.0.1;dbname=blog';
    $user = 'Anya@localhost';
    $password = 'password';
    return new PDO($dsn, $user, $password);
}

/*function savePostToDatabase(PDO $connection, array $postParams): int
{
    $query = <<<SQL
        INSERT INTO 
            post (
                user_id, 
                like,
                content
            )
        VALUES (
                user_id, 
                like,
                content
        )
    SQL;
    $statement = $connection->prepare($query);
    $statement->execute([
        ':user_id' => $postParams['user_id'],
        ':like' => $postParams['like'],
        ':content' => $postParams['content'],
    ]);
    return (int) $connection->lastInsertId();
}

function findPostInDatabase(PDO $connection, int $id): ?array
{
    $query = <<<SQL
        SELECT
            post_id,
            user_id, 
            like,
            content, 
            posted_at
        FROM post
        WHERE post_id = $id    
    SQL;
    $statement = $connection->query($query);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row ?: null;
}*/