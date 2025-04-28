<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>страница</title>
    <link rel="stylesheet " href="styles.css">
</head>

<body>
    <?php
    //json
    $users_json = file_get_contents("../data/json/users.json", true);
    $users = json_decode($users_json, true);
    $posts_json = file_get_contents("../data/json/posts.json", true);
    $posts = json_decode($posts_json, true);

    //mysql
    require_once '../home/script.php';
    $users = getUsers();
    $users = array_values($users);
    $posts = getPosts();
    $posts = array_values($posts);


    $id = 1; //по умолчанию 1//
    $user_data = $users[$id];
    if (isset($_GET['id'])) {///проверяет передали ли его нам ///
        if (is_numeric($_GET['id'])) { //валидация //
            $id = $_GET['id'];
        }
    }
    foreach ($users as $user) {
        if ($user['user_id'] == $id) {
            $user_data = $user;
        }
    }
    $id = $user_data['user_id']-1;
    $user_posts = array_filter($posts, function ($post) use ($id) {
        return $post['user_id'] == $id;
    });
    $user_posts = array_values($user_posts);//чтобы было 123
    ?>
    <div class="main">
        <div class="icon">
            <img src="../profile/images/house.svg" alt="домой">
            <img src="../profile/images/user24.svg" alt="личный кабинет">
            <img src="../profile/images/plus24.svg" alt="добавить пост">
        </div>
        <?php
        require_once 'profile.php';
        renderProfile($user_posts, $user_data);
        ?>
    </div>
    </div>
</body>

</html>