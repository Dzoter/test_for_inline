<?php



$db = require('BDConnect.php');

$posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'), true);
$comments = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/comments'), true);
$postCount = 0;
$commentCount = 0;
foreach ($posts as $post) {
    $queryForPost = $db->prepare("INSERT INTO `posts` SET `user_id` = :user_id, `title` = :title,`body` = :body");

    $queryForPost->execute(array('user_id' => $post['userId'], 'title' => $post['title'], 'body' => $post['body']));
    $postCount++;
}

foreach ($comments as $comment) {
    $queryForComment = $db->prepare(
        "INSERT INTO `comments` SET `post_id` = :post_id, `name` = :name,`email` = :email,`body` = :body"
    );

    $queryForComment->execute(
        array('post_id' => $comment['postId'], 'name' => $comment['name'], 'email' => $comment['email'], 'body' => $comment['body'])
    );
    $commentCount++;
}
print "Загружено ".$postCount." записей и ".$commentCount." комментариев";