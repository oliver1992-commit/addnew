<?php 
/*
 * Template Name: gallery template
 * description: >-
  Page template 
 */
get_header(); ?>
<style>
    body{
			background: rgb(243,242,255);
background: linear-gradient(90deg, rgba(243,242,255,1) 0%, rgba(196,233,240,0.9139005944174545) 77%, rgba(155,239,255,0.6870098381149334) 100%);

}
</style>

<div class="container-fluid m-0 p-0">

<div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->

       <div class="parallax_section2 parallax_image">
                <div class="row">
                    <div class="card">
                                <div class="card-body">
                                   
                                    <?php if(have_posts()) : ?> <!--  If there are pages available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are pages, iterate the page in the loop -->
           <h1 class="bold text-primary text-center"> <?php the_title(); ?> </h1>    <!--retrieves page title--> 
      <?php the_content();?><!--retrieves content-->
       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no page is found then: -->

       <p>No page found</p>
       <?php endif; ?> <!-- end if -->
                                   <!--Gallery/Folder/.....go here-->
                                   
                                   
       
                                </div><!--END CARD BODY-->
                    </div><!--END CARD-->
                </div><!--END ROW-->
    </div><!--END PARALLAX 2-->

    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX 1-->
    
    
      </div><!--END CONTAINER-->
 <?php get_footer(); ?>


