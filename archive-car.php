<?php
wp_head();
while (have_posts()) {
    the_post();
?>
    <h1><?php
        the_title();
        ?></h1>
    <img class="carImage" src="<?php the_post_thumbnail_url() ?>" alt="">
    <p><?php
        the_content();
        ?></p>
<?php
}
?>