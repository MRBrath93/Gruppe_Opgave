<?php
wp_head();
?>

<h1><?php
    the_title();
    ?></h1>
<img class="carImage" src="<?php the_post_thumbnail_url() ?>" alt="">
<p><?php
    the_content();
    ?></p>