
<?php 
  get_header(); 
  pageBanner(array(
    'title' => 'All Events',
    'subtitle' => 'Keep Up With Our latest New'
  ));
  ?>
  <div class="container container--narrow page-section">
   <?php  
    while (have_posts()) {
      the_post();
      get_template_part('templates-parts/content', 'event');
    }
    echo paginate_links();
   ?>
   <hr class="section-break">
   <p>Hey, Are You missed our Events. Go back for the <a href="<?php echo site_url('/past-events') ?>">Past Events</a> </p>
  
  </div>

  <?php get_footer();
?>