<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<?php get_header(); ?>
<section>
<?php
wp_nav_menu( array(
    'theme_location' => 'custom-menu',
    'container'      => 'nav',
    'container_class' => 'custom-menu-class',
    'menu_class'     => 'custom-menu-list',
) );
?>
  
  <article>
    <h1>BOOK LOVER</h1>
    <p>In the company of books,silence is the sweetest conversation</p>
    <p>Each book a silent mentor ,waiting to share its wisdom to whom who seeks</p>
  </article>
</section>

<hr>
<?php do_shortcode('[weather]') ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <h1> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h1>
        <p> <?php the_content(); ?>  </p>
        <hr>
        <?php
    endwhile;
endif;
?>
<div class="main-2">
 <div class="sidebar">
  <h1>BOOK LOVER</h1>
  <p>Each book a silent mentor ,waiting to share its wisdom to whom who seeks</p>
 </div>
 <div class="sidebar_display">
  <?php get_sidebar() ?>

 </div>
</div>


<?php get_footer(); ?>

</body>
</html>



