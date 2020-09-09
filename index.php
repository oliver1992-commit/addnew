
   <?php get_header(); ?>
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
                                    <?php if(have_posts()) : ?> <!--  If there are posts available  -->

                                    <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop-->
                                    <hr>
                                    <a href="<?php the_permalink(); ?>"><!--retrieves URL for the permalink-->
                                    <h3><?php the_title(); ?></h3>     <!--retrieves blog title-->
                                    </a><br>
                                    

                                    <p class="card-text"><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->

                                    <p class="card-text">Author: <?php the_author(); ?></p><!--retrieves author of blog entry-->
                                    
                                    <?php the_excerpt(); ?><!--retrieves excerpt-->
       
                                    <img><?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(array(300,300)); ?> <!--Größe des thumbnails-->
                                    <?php endif; ?></img><br><br>
                                    <a href="<?php the_permalink(); ?>"><button class="btn mt-2 mb-3 btn-light disa btn-lg border" >READ MORE</button></a>
                                   

                                    <?php endwhile; ?><!--end the while loop-->

                                    <?php else :?> <!-- if no posts are found then: -->

                                    <p class="card-text">No posts found</p> 
                                    <?php endif; ?> <!-- end if -->
       
                                </div><!--END CARD BODY-->
                    </div><!--END CARD-->
                </div><!--END ROW-->
    </div><!--END PARALLAX 2-->

    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX 1-->
     
     
   </div><!--END CONTAINER-->
 <?php get_footer(); ?>



</body>
</html>