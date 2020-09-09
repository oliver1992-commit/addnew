<?php 
/*
 * Template Name: Work Template
 * description: >-
  Page template 
 */
get_header(); ?>

      <div class="content" background="img/art.png">
       <?php if(have_posts()) : ?> <!--  If there are pages available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are pages, iterate the page in the loop -->
           <h1 class="bold text-primary text-center"> <?php the_title(); ?> </h1>    <!--retrieves page title--> 
      <?php the_content();?><!--retrieves content-->
       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no page is found then: -->

       <p>No page found</p>
       <?php endif; ?> <!-- end if -->
    
   </div>
<?php get_footer(); ?>