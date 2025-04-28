<?php
function renderPost($data, $user)
{
    ?>
    <div class="portfolio">
        <div class="title">
            <div class="user">
                <img class="profile__imgavatar" src=<?php echo "../profile/images/" . $user['profile_image']; ?>
                    alt="аватарка">
                <a class="profile__name" href=<?php echo '../profile?id=' . $user['user_id'] ?>>
                    <?php echo $user['first_name'] . ' ' . $user['last_name']; ?>
                </a>
            </div>
            <img class="pencil" src="../profile/images/vector.svg" alt="редактировать">
        </div>
        <img class="imgavatar" src=<?php echo "../profile/images/" . $data['images'][0]; ?> alt="изображение">
        <div class="page__block">
            <span>❤️</span>
            <span><?php echo $data['like']; ?></span>
        </div>
        <p><?php echo $data['content']; ?> </p>
        <p class="text"><?php echo date('d.m.Y', $data['posted_at']); ?></p>
    </div>
    <?php
}
?>