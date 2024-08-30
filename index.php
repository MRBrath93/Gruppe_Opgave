<?php

$car = new WP_Query(array(
    "post_type" => "car"
));

while ($car->have_posts()) {
    $car->the_post(); ?>
    <h2><?php
        the_title();
        ?></h2>
<?php

}
?>