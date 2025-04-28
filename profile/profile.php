<?php
function renderProfile(array $posts, $user) {
    ?>
        <div class="content">
            <div class="title">
                <img class="avatar" src=<?php echo "../profile/images/" . $user['profile_image'] ?> alt="аватарка">
                <h3 class="name"><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h3>
                <p class="text chto-to"><?php echo $user['about'];?></p>
                <div class="post-block">
                    <img src="../profile/images/image17.svg" alt="добавить изображение">
                    <span> <?php echo count($posts);?> поста </span>
                </div>
            </div>
            <div class="images">
                <?php
                foreach ($posts as $post) {
                    ?>
                    <img src=<?php echo "../profile/images/" . $post['images'][0];?> style= "width: 322px; height:322px;" alt="изображение">
                    <?php
                }
                ?>
            </div>
        </div>
    <?php
}
?>