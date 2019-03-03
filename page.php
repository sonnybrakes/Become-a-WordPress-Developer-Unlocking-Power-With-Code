<!-- 4-10 The Famous "Loop" in WordPress -->

<?php

  while(have_posts()) {
    the_post(); ?>
    <h1>This is a page not a post</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  <?php
  }

?>
