<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>страница</title>
    <link rel="stylesheet " href="style.css">
</head>

<body>
    <?php
    //require_once 'script.php';
    //json
    $users_json = file_get_contents("../data/json/users.json", true);
    $users = json_decode($users_json, true);
    $posts_json = file_get_contents("../data/json/posts.json", true);
    $posts = json_decode($posts_json, true);

    //mysql на 7 лабе закомментить
    /*$users = getUsers();  
    $users = array_values($users);
    $posts = getPosts();
    $posts = array_values($posts);*/
    ?>
    <div class="main">
        <div class="icon">
            <img src="../profile/images/house.svg" alt="домой">
            <img src="../profile/images/user24.svg" alt="личный кабинет">
            <img src="../profile/images/plus24.svg" alt="добавить пост">
        </div>
        <div class="content">
            <?php
            require_once 'post.php';
            foreach ($posts as $post) {
                //mysql
                /*$user_data = $users[array_search($post["user_id"]+1, array_column($users, "user_id"))];*/
                //json
                //$user_data = $users[array_search($post["user_id"], array_column($users, "user_id"))];
                //получаем пользователя из поста и ищем его данные из массива пользователей
                renderPost($post, $user_data);
                /*$user_id = array_search($post["user_id"], array_column($users, "user_id"));
                $user= $users[$user_id];
                renderPost($post, $user);*/
            }
            ?>
        </div>
</body>

</html>