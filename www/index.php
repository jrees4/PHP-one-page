<!DOCTYPE html>
<html> 
    <!-- header -->
    <?php 
    $page = 'Home';
    include('Header.php'); 
    include('Navbar.php');
    ?>

    <body class="paddtop ">
        <!-- Keep everything where it should be via a containter with styles -->
        <div class="wrapper main"> 
        <!-- Anything in this tag below includes php code -->
        
        <div id="home-content" class="hidden">
            <h1>Home</h1>
            <?php
            
            // $varTest = "test";

            // echo("Hello World");
            // echo("<p>This is a $varTest website</p>");
           
            ?> 
            <p>This website is made using php, jquery, html, css. But unfortunately SQL has yet to be implemented until i find something cool to do with it!</p>
        </div>
        
     
        <div id="project-content" class="hidden">
            <h1>Porjects i've worked on</h1>
            <?php
            include('projects.php');
            ?> 
        </div>
        
      
        <div id="about-content" class="hidden">
            <h1 class="center">Who am i?</h1>
            <?php
            include('about.php');
            ?> 
        </div>
      
        <div id="contact-content" class="hidden">
            <h1>Contact Information</h1>
            <?php
            include('contact.php');
            ?> 
        </div>
        
        </div> 
<!-- End of main content -->
        <?php
            include('Footer.php');
        ?>
        
    </body>
     
</html>