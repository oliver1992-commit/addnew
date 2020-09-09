<?php wp_footer(); ?>


 
<style>

    ul{
        list-style-type: none;
    }
    a{
        color: black;
        transition: color .2s;
    }
    a:hover{
        text-decoration:none;
        color: #F7ABAC;
        font-weight: bolder;
    }
    

#bb{
    height: 40px !important;
    width: 40px !important;
}
#aa{
  
    height: 20px !important;
    width: 20px !important;
}

.btt {
  background: none;
  border: 0;
  box-sizing: border-box;
  margin: 1em;
  padding: 1em 2em;
  box-shadow: inset 0 0 0 2px #f45e61;
  color: #f45e61;
  font-size: inherit;
  font-weight: 700;
  position: relative;
  vertical-align: middle;
}
.btt::before, .btt::after {
  box-sizing: inherit;
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
}

.draw {
  -webkit-transition: color 0.25s;
  transition: color 0.25s;
}
.draw::before, .draw::after {
  border: 2px solid transparent;
  width: 0;
  height: 0;
}
.draw::before {
  top: 0;
  left: 0;
}
.draw::after {
  bottom: 0;
  right: 0;
}
.draw:hover {
  color: #60daaa;
}
.draw:hover::before, .draw:hover::after {
  width: 100%;
  height: 100%;
}
.draw:hover::before {
  border-top-color: #60daaa;
  border-right-color: #60daaa;
  -webkit-transition: width 0.25s ease-out, height 0.25s ease-out 0.25s;
  transition: width 0.25s ease-out, height 0.25s ease-out 0.25s;
}
.draw:hover::after {
  border-bottom-color: #60daaa;
  border-left-color: #60daaa;
  -webkit-transition: border-color 0s ease-out 0.5s, width 0.25s ease-out 0.5s, height 0.25s ease-out 0.75s;
  transition: border-color 0s ease-out 0.5s, width 0.25s ease-out 0.5s, height 0.25s ease-out 0.75s;
}

.meet:hover {
  color: #fbca67;
}
.meet::after {
  top: 0;
  left: 0;
}
.meet:hover::before {
  border-top-color: #fbca67;
  border-right-color: #fbca67;
}
.meet:hover::after {
  border-bottom-color: #fbca67;
  border-left-color: #fbca67;
  -webkit-transition: height 0.25s ease-out, width 0.25s ease-out 0.25s;
  transition: height 0.25s ease-out, width 0.25s ease-out 0.25s;
}

.center:hover {
  color: #6477b9;
}
.center::before, .center::after {
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  -webkit-transform-origin: center;
          transform-origin: center;
}
.center::before {
  border-top: 2px solid #6477b9;
  border-bottom: 2px solid #6477b9;
  -webkit-transform: scale3d(0, 1, 1);
          transform: scale3d(0, 1, 1);
}
.center::after {
  border-left: 2px solid #6477b9;
  border-right: 2px solid #6477b9;
  -webkit-transform: scale3d(1, 0, 1);
          transform: scale3d(1, 0, 1);
}
.center:hover::before, .center:hover::after {
  -webkit-transform: scale3d(1, 1, 1);
          transform: scale3d(1, 1, 1);
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
}

.spin {
  width: 5em;
  height: 5em;
  padding: 0;
}
.spin:hover {
  color: #0eb7da;
}
.spin::before, .spin::after {
  top: 0;
  left: 0;
}
.spin::before {
  border: 2px solid transparent;
}
.spin:hover::before {
  border-top-color: #0eb7da;
  border-right-color: #0eb7da;
  border-bottom-color: #0eb7da;
  -webkit-transition: border-top-color 0.15s linear, border-right-color 0.15s linear 0.1s, border-bottom-color 0.15s linear 0.2s;
  transition: border-top-color 0.15s linear, border-right-color 0.15s linear 0.1s, border-bottom-color 0.15s linear 0.2s;
}
.spin::after {
  border: 0 solid transparent;
}
.spin:hover::after {
  border-top: 2px solid #0eb7da;
  border-left-width: 2px;
  border-right-width: 2px;
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
  -webkit-transition: border-left-width 0s linear 0.35s, -webkit-transform 0.4s linear 0s;
  transition: border-left-width 0s linear 0.35s, -webkit-transform 0.4s linear 0s;
  transition: transform 0.4s linear 0s, border-left-width 0s linear 0.35s;
  transition: transform 0.4s linear 0s, border-left-width 0s linear 0.35s, -webkit-transform 0.4s linear 0s;
}

.circle {
  border-radius: 100%;
  box-shadow: none;
}
.circle::before, .circle::after {
  border-radius: 100%;
}

.thick {
  color: #f45e61;
}
.thick:hover {
  color: #fff;
  font-weight: 700;
}
.thick::before {
  border: 2.5em solid transparent;
  z-index: -1;
}
.thick::after {
  mix-blend-mode: color-dodge;
  z-index: -1;
}
.thick:hover::before {
  background: #f45e61;
  border-top-color: #f45e61;
  border-right-color: #f45e61;
  border-bottom-color: #f45e61;
  -webkit-transition: background 0s linear 0.4s, border-top-color 0.15s linear, border-right-color 0.15s linear 0.15s, border-bottom-color 0.15s linear 0.25s;
  transition: background 0s linear 0.4s, border-top-color 0.15s linear, border-right-color 0.15s linear 0.15s, border-bottom-color 0.15s linear 0.25s;
}
.thick:hover::after {
  border-top: 2.5em solid #f45e61;
  border-left-width: 2.5em;
  border-right-width: 2.5em;
}

.buttons {
  isolation: isolate;
}

#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 20px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: lightblue; /* Set a background color */
  color: black; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 5px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
  opacity: 90%;
}

#myBtn:hover {
  opacity: 100%;
  background-color: lightblue;

}

</style>
<div class=" pt-5 footer bg-light">
<div class="container-fluid">
  <div class="row m-0 p-0">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>/elena.steiner</h2>
      <p class="pr-5 ">Dedicated Artist, Lorem Ipsum</p>
      <p><button class="spin circle btt"><a  href="https://www.facebook.com/elena.steiner1"><img id="bb" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" height="40" width="40"></a></button></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li class="">- <a href="http://www.galerie-wagner-marks.de/">Galerie Wagner & Marks</a></li>
          <li>- <a href="http://www.artsalons.cz/">Artsalon S</a></li>
          <li>- <a href="http://www.galerie-neuheisel.de/">Galerie Neuheisel</a></li>
          <li>- <a href="http://www.basis-wien.at/db/person/110351">Basis Wien</a></li>
          <li>- <a href="http://www.base-level.com/">Base Level</a></li>
          <li>- <a href="http://www.barboramastrlova.com/">Barbora Maštrlová</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Contact</h4>
      <p>Lorem Ipsum</p>
      <p class="mb-0"><i><img id="aa" src="<?php echo get_template_directory_uri(); ?>/img/telefon.png" height="20" width="20"></i>   (2222) 123123</p>
      <p><i><img  id="aa" src="<?php echo get_template_directory_uri(); ?>/img/mail.png" height="20" width="20"></i>  <a href="mailto:art@elenasteiner.at​">art@elenasteiner.at​</a></p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="">©Elena Steiner</small></p>
    </div>
  </div>
</div>
</div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>


        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>


            <a id="myBtn" style="display: none;" href="#" class="btn btn-secondary btn-sm border border-dark back-to-top" role="button">↑TOP↑</a>




            <script>
    //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

    </body>
</html>