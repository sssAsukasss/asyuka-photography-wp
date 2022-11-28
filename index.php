<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <div class="bg-cyan-100 mt-12">
        <h2 class=""><?php the_title(); ?></h2>
        <p class=""><?php the_content(); ?></p>
        <p class="">Author : <?php the_author(); ?></p>
        <p class="">Time : <?php the_date(); ?></p>
        <a class="" href="<?php the_permalink(); ?>">Link</a>
      </div>  
    <?php endwhile; ?>
  <?php else: ?>
    <div>We have no posts.</div>
  <?php endif; ?>
  <?php get_footer(); ?>
</body>
</html>