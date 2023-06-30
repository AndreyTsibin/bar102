<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<!-- Фото -->
<section class="main">
    <img src="assets/images/photo-section.jpg" alt="фото бара 102" class="main__photo">
  </section>

  <!-- Афиша -->
  <section class="afisha" id="afisha">
    <h2 class="h2__title">Афиша</h2>

    <!-- Карточки анонсов -->
    <div class="afisha__card wrapper">

      <div class="image-container">
        <img src="assets/images/DhPjYCnFnoc.jpg" alt="концерт в 102 сургут" class="afisha__card-img">
      </div>

<?php global $post;

$myposts = get_posts([ 
  'numberposts' => -1,
    'category_name' => 'afisha',
]);

if( $myposts ){
foreach( $myposts as $post ){
  setup_postdata( $post ); ?>

    <div class="image-container">
    <img>
      <?php the_post_thumbnail( 
      full,
      array('class' => 'afisha__card-img',) 
      ); ?>
    </img>
  </div>

<?php } } 
wp_reset_postdata(); ?>

    </div>
  </section>
<?php get_footer();?>