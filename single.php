<!-- 4-10 The Famous "Loop" in WordPress -->

<?php

  while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  <?php
  }

?>
