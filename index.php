<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
    <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});
</script>
    <style type="text/css">
        @font-face{font-family:newfont;
                    src:url("fonts/Montserrat-Black")}
        p {font-family:newfont;}
        .bg-grey{background-color: gainsboro;}    
    </style>
    </head>
<body id=in>
<div class=wrapper><h1 class=hd>Home</h1>
        <nav>
           <ul class="nav nav-pills nav-justified"><li class=active>
                    <a href="#">Home</a>
                </li>
                <li >
                    <a href="contact.php">Contact Us</a>
                </li>
                <li>
                    <a href="aboutus.php">About Us</a>
                </li>
            </ul>
        </nav><br>
    
        <section class="artic">

            <article>

                <figure>

                    <img src="Images/1.JPG" class=medium>

                    <figcaption>PHP Script</figcaption>

                </figure>

                <hgroup>

                    <h2 class=ttl>PHP Script</h2>
                    <br>
                    <h3 class=subttl>Let your pages speak</h3>

                </hgroup>


                <p>A five week introduction to .Php script to make dynamic content on the web</p>

            </article>

            <article>

                <figure>

                    <img src="Images/5.jpg" class=medium>

                    <figcaption>Web Development</figcaption>

                </figure>

                <hgroup>

                    <h2 class=ttl>Web Development</h2>
                    <br>

                    <h3 class=subttl>One day workshop</h3>

                </hgroup>

                <p>An intensive one-day course looking at how to create the most delicious
sauces for use in a range of Japanese cookery.</p>

            </article>

        </section>

        <aside>

            <section id=recmain>
                <h2 id=rc>Recent news</h2>
                <h3 class=rect>New Website</h3><h4 class=recst>Learn To make a new website</h4>
                <h3 class=rect>PHP Scripts</h3><h4 class=recst>Make your web pages interactive</h4>
            </section>

            <section id=addrmain>

                <h2 id=devl>About Developer</h2>
                <img src="im.JPG" class="pport">
                <p id=devlp><strong>VAIBHAV AGARWAL</strong><br />

                    B6 Hostel<br />

                    IIT MANDI,Mandi<br />

                    Himachal Pradesh,India</p>

            </section>

        </aside>

        <footer id=newf>
&copy; Vaibhav Agarwal 2016 All Rights Reserved
        </footer>
    <div class="container-fluid bg-grey">
        <h3 class="text-center">CONTACT</h3>
        <div class=row>
        <div class=col-sm-5>
            <p><span class="glyphicon glyphicon-map-marker"></span> B6 Hostel,IIT Mandi</p>
            <p><span class="glyphicon glyphicon-phone"></span> 9736260564</p>
              <p>  <span class="glyphicon glyphicon-envelope"></span> vaibhavagarwal220@gmail.com
            </p></div>
        <div class=col-sm-7>
        <div class="row">
        <div class="col-sm-6 form-group">
            <input type="text" placeholder="Name" class="form-control"></div>
            
                <div class="col-sm-6 form-group">
                    <input type="text" placeholder="Email Address" class="form-control">
                </div>
            </div>
            <textarea class="form-control" rows=5 placeholder=Comment></textarea><br>
        <div class=row>
        <div class=col-sm-12>
            <button class="btn btn-default pull-right" type="submit">Send</button><br><br>
                </div>
        </div></div>     
        </div>
        </div>
    
    
    </div>
    <br>
    <!-- .wrapper -->
    &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modl">Click Me</button>
    <div class="modal fade" id=modl>
        <div class="modal-dialog">
            <div class=modal-content>
                <div class=modal-header>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>i am modal header</h4>
                </div>
                <div class="modal-body">
                    <p>I am modal content</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
    <a data-toggle="popover" title="i am header" data-content="i am content">Toggle popover</a>
    <br><br>
    
    
</body>
</html>