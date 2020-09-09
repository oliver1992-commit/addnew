

 <?php get_header(); ?>  
 <style>
     body{
			background: rgb(243,242,255);
background: linear-gradient(90deg, rgba(243,242,255,1) 0%, rgba(196,233,240,0.9139005944174545) 77%, rgba(155,239,255,0.6870098381149334) 100%);

}
 </style>
<div class="container-fluid">
  
    
   
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->


       <div class="parallax_section2 parallax_image">
                <div class="row">
                    <div class="card">
                            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                                <div class="card-body">
  

                            <?php if(have_posts()) : ?> <!--  If there are posts available  -->

                            <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop-->
       
                            <h3 class="card-text"><?php the_title(); ?></h3>    <!--retrieves blog title-->
                            
                            <hr>
                            
                          
                                    
                            <hr>

                            <p class="card-text"><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->
                            
                            

                            <p class="card-text">Author: <?php the_author(); ?></p><!--retrieves author of blog entry-->
                            
                            <hr>
       
                            <p class="card-text"><?php the_content(); ?></p><!--retrieves content-->
                            
                            <hr><p class="card-text"><?php comments_template(); ?></p>
                            


                            <?php endwhile; ?><!--end the while loop-->

                            <?php else :?> <!-- if no posts are found then: -->

                            <p>No posts found</p> 
                            <?php endif; ?> <!-- end if -->
                        </div><!--END CARD BODY-->
                    </div><!--END CARD-->
                </div><!--END ROW-->
    </div><!--END PARALLAX 2-->

    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX 1-->
    
    
</div><!--END CONTAINER-->

 <?php get_footer(); ?>