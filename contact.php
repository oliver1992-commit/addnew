<?php
/*
 * Template Name: Contact Template
 * description: >-
  Page template 
 */


get_header();


?>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



<style>
    .jhh {

        background-image: url("https://i.imgur.com/4P8z1U4.png");
        height: 80vh;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;

    }

    .jhh1 {

        background-image: url("https://cdn.pixabay.com/photo/2016/03/27/16/23/woman-1283009_1280.jpg");
        height: 80vh;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;

    }

    .jhh2 {

        background-image: url("https://cdn.pixabay.com/photo/2015/04/29/09/28/graffiti-745072_1280.jpg");
        height: 80vh;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    .p {
    }

    .ps {
        height: 400px;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    #h1 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        overflow: hidden;
    }
</style>

<video autoplay muted loop id="myVideo">
    <source src="<?php echo get_template_directory_uri(); ?>/vid/Paint.mp4" type="video/mp4">
</video>

<div class="p ps   d-flex">
    <h1 id="h1" class="align-self-center pr-5 pl-5">/contact</h1>

</div>


<div class="container m-5">
    <div class="row">

        <div class="col-6 jhh p-5" data-aos="fade-right" data-aos-duration="500">

        </div>

        <div class="col-6 justify-content-center d-flex flex-column" data-aos="fade-left" data-aos-duration="500">
            <h1>Elena Steiner</h1>
            <br>
            <p>Phone: +43 664 461 74 70</p>
            <p>Mail: art@elenasteiner.at​</p>
            <p>Web: www.elenasteiner.at</p>
        </div>

    </div>

    <div class="row">

        <div class="col-6 jhh1 p-5" data-aos="fade-right" data-aos-duration="500">

        </div>

        <div class="col-6 justify-content-center d-flex flex-column p-5" data-aos="fade-left" data-aos-duration="500">
            <h1>Galerie Wagner + Partner</h1>
            <br>
            <p>Phone: +43 664 461 74 70</p>
            <p>Mail: mail@galerie-wagner-partner.com​</p>
            <p>Web: https://www.galerie-wagner-partner.com/</p>
        </div>

    </div>

    <div class="row">

        <div class="col-6 jhh2 p-5" data-aos="fade-right" data-aos-duration="500">

        </div>

        <div class="col-6 justify-content-center d-flex flex-column p-5" data-aos="fade-left" data-aos-duration="500">
            <h1>Galerie Art salons</h1>
            <br>

            <p>Web: https://www.artsalons.cz/</p>
        </div>

    </div>




    <?php if (have_posts()) : ?>
    <!--  If there are pages available  -->

    <?php while (have_posts()) : the_post(); ?>
        <!-- if there are pages, iterate the page in the loop
-->
        <!--    <h1 class="bold text-primary text-center"> <?php the_title(); ?> </h1>    -->
        <!--retrieves page title-->

        <?php the_content(); ?>
        <!--retrieves content-->

    <?php endwhile; ?>
    <!--end the while loop-->

<?php else : ?>
    <!-- if no page is found then: -->

    <p>No page found</p>
<?php endif; ?>
<!-- end if -->



</div>





<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<?php get_footer(); ?>