<?php 
/*
 * Template Name: About Template
 * description: >-
  Page template 
 */


get_header(); ?>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
	.p {
}    .ps {
        height: 400px;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        position: relative;
        margin-bottom: 0; }
 
        #h1{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
		body{
			background: rgb(243,242,255);
background: linear-gradient(90deg, rgba(243,242,255,1) 0%, rgba(196,233,240,0.9139005944174545) 77%, rgba(155,239,255,0.6870098381149334) 100%);

}
</style>
<div class="p ps   d-flex">
    <h1 id="h1" class="align-self-center pr-5 pl-5">/bio</h1>

</div>

     
      

       <?php if(have_posts()) : ?> <!--  If there are pages available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are pages, iterate the page in the loop
-->
       
       <?php the_content();?><!--retrieves content-->

       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no page is found then: -->

       <p>No page found</p>
       <?php endif; ?> <!-- end if -->
   </div>


 

	<!-- Static content for About page -->
	<div class="container-fluid about">
		<div class="row m-4 justify-content-center" data-aos="fade-up"
     data-aos-duration="1000">
            <figure class="figure">
  				<img src="https://static.wixstatic.com/media/989c51_a11a2a885a484f15ab33f6a33058f337~mv2_d_3151_1853_s_2.png" class="figure-img img-fluid" alt="...">
  			<figcaption class="figure-caption text-left small">Foto: Bernd Sieber</figcaption>
</figure>
		</div>
		
		<div class="text-center bg bg-transparent mb-5" data-aos="fade-up"
     data-aos-duration="1000">
			<h3>/cv</h3><br>
			<p>1975 geboren in Susice (Tschechische Republik), lebt und arbeitet in Wien</p>
			<p>Studium Malerei am Institut für Bildende und Mediale Kunst,</p>
			<p>Diplom Universität für angewandte Kunst, Wien (Klasse Johanna Kandl)</p>
		</div>
		
		<div class="accordion" id="accordionExample">
		  <div class="card bg bg-transparent col-12" data-aos="fade-up"
     data-aos-duration="1000">
		    <div class="card-header" id="headingOne">
		      <h2 class="mb-0">
		        <button class=" btn btn-link btn-block text-center text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          EINZELAUSSTELLUNGEN
		        </button>
		      </h2>
		    </div>

		    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
		      <div class="card-body text-center">
			 <p> DIE ZWEITE HAUT, alina Art Galerie, Leipzig (2018)</p>

			 <p>BODY TALKS, Galerie Wagner + Marks, Frankfurt a.M. (2014/15)</p>

			 <p>BODY TALKS, Galerie Tančící dům - Art Salon S, Prag (2014/15)</p>

			 <p>SCHON SCHÖN, Galerie Neuheisel, Saarbrücken (2013)</p>

			 <p>SELBST.BILDER, Galerie Wagner + Marks, Frankfurt a.M. (2012)</p>

			 <p>Und sowas malt eine Frau, Galerie Wagner + Marks, Frankfurt a.M. (2009)</p>

​<p>Lange Nacht, Galerie J. A. Ehrenberg, Mannheim (2008)</p>
					<?php 
						
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'category_name' => 'einzelausstellungen',
							'posts_per_page' => 500,
							
						);
						$arr_posts = new WP_Query( $args );

						if ($arr_posts->have_posts()):

							while ($arr_posts->have_posts()) :
								$arr_posts->the_post();
								?>
								 <?php the_content();?>
								<?php
							endwhile;

						endif;
					?>
		      </div>
		    </div>
		  </div>
		  <div class="card bg bg-transparent col-12" data-aos="fade-up"
     data-aos-duration="1000">
		    <div class="card-header" id="headingTwo">
		      <h2 class="mb-0">
		        <button class="btn btn-link btn-block text-center text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          GRUPPENAUSSTELLUNGEN
		        </button>
		      </h2>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		      <div class="card-body text-center">


			  <p>Reflexion durch Weitergang. alina Art Galerie, schönherr.fabrik, Chemnitz (2017)</p>

			  <p>Die Leinwand des Leibes. Körperkult als neue soziale Plastik, ​​Künstlerverein Walkmühle, Wiesbaden (2013)</p>

			  <p>BOYS 'N' GIRLS – IMMER WIEDER ANDERS, Staatliche Kunsthalle Karlsruhe, Junge Kunsthalle (2013)</p>

			  <p>Illuminazioni II, Ausstellungszentrum Heiligenkreuzer Hof, Refektorium, Wien (2012)</p>

			  <p>The Essence 2012, Künstlerhaus Wien (2012)</p>
			  <p>Illuminazioni I, Bulgarisches Kulturinstitut Haus Wittgenstein, Wien (2012)</p>

			  <p>Hybrid, base-level, Wien (2011)</p>

			  <p>​One Day One Work, Galerie Michaela Stock, Wien (2010)</p>

			  <p>​Klassen-los, Akademie Galerie Nürnberg (2010)</p>

			  <p>​Body & Soul, Trierenberg Art (2010)</p>

			  <p>​Female positions, Galerie Wagner + Marks, Frankfurt a.M. (2009)</p>


			  <p>​ARTRMX Cologne, Köln (2008)</p>

		       	<?php 
						
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'category_name' => 'gruppenausstellungen',
							'posts_per_page' => 500,
							
						);
						$arr_posts = new WP_Query( $args );

						if ($arr_posts->have_posts()):

							while ($arr_posts->have_posts()) :
								$arr_posts->the_post();
								?>
								<p> <?php the_content();?> </p>
								<?php
							endwhile;

						endif;
					?>
		      </div>
		    </div>
		  </div>
		  <div class="card bg bg-transparent col-12" data-aos="fade-up"
     data-aos-duration="1000">
		    <div class="card-header" id="headingThree">
		      <h2 class="mb-0">
		        <button class="btn btn-link btn-block text-center text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          KUNSTMESSEN
		        </button>
		      </h2>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body text-center">

			  <p>Art Karlsruhe (2016)</p>

			  <p>Art Karlsruhe (2015)</p>

			  <p>Art Karlsruhe (2014)</p>

			  <p>art.fair Cologne (2013)</p>

			  <p>Art Karlsruhe (2013)</p>

			  <p>art.fair Cologne (2012)</p>

			  <p>Art Karlsruhe (2012)</p>

			  <p>art.fair Cologne (2011)</p>

			  <p>Art Karlsruhe (2011)</p>

			  <p>Art Karlsruhe (2010)</p>
		        <?php 
						
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'category_name' => 'kunstmessen',
							'posts_per_page' => 500,
							
						);
						$arr_posts = new WP_Query( $args );

						if ($arr_posts->have_posts()):

							while ($arr_posts->have_posts()) :
								$arr_posts->the_post();
								?>
								<p> <?php the_content();?> </p>
								<?php
							endwhile;

						endif;
					?>

		      </div>
		    </div>
		  </div>
		</div>

	</div>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<?php get_footer(); ?>	