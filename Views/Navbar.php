
<div class="nav" >
    <ul id=" nav-tabs">
        <a id="home" class="active <?php if($page=='Home'){echo 'active';} ?>"  href="#" >Home</a>
        <a id="project" class="<?php if($page=='Project'){echo 'active';} ?>" href="#" >Projects</a>
        <a id="about"class="<?php if($page=='About'){echo 'active';} ?>" href="#" >About</a>
        <a id="contact" class="<?php if($page=='Contact'){echo 'active';} ?>" href="#">Contact</a>
    </ul>
</div>
<!-- A script to hide and show different content -->
<script> 
$(document).ready(function(){

$('a#home').click(function(e) {
  e.preventDefault();
  $('div#project-content').hide();      
  $('div#about-content').hide();  
  $('div#contact-content').hide();  
  $('div#home-content').fadeIn(); 
});

$('a#project').click(function(e) {
  e.preventDefault();
  $('div#about-content').hide();  
  $('div#contact-content').hide();  
  $('div#home-content').hide(); 
  $('div#project-content').fadeIn();  
});


$('a#about').click(function(e) {
  e.preventDefault();
  $('div#project-content').hide();      
  $('div#home-content').hide();  
  $('div#contact-content').hide();  
  $('div#about-content').fadeIn(); 
});   

$('a#contact').click(function(e) {
  e.preventDefault();
  $('div#project-content').hide();      
  $('div#about-content').hide();  
  $('div#home-content').hide();  
  $('div#contact-content').fadeIn(); 
});   

}); 
</script>
<hr>