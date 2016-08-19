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
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
<script type="text/javascript">
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
        .mdl-button{position:absolute;top:20px;left:500px;}

        @font-face{font-family:newfont;
                    src:url("fonts/Montserrat-Black")}
        p {font-family:newfont;}
        .demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('Images/a.gif') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
            
    </style>

    </head>
<body id=in>
<div class=wrapper><h1 class=hd>Life @ IIT Mandi</h1>
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

        <div id=mycarousel class="carousel slide col-sm-8 col-sm-offset-2" data-ride=carousel>
            <ol class="carousel-indicators"><li data-target=#mycarousel data-slide-to="0" class=active></li>
            <li data-target=#mycarousel data-slide-to="1"></li><li data-target=#mycarousel data-slide-to="2"></li><li data-target=#mycarousel data-slide-to="3"></li></ol>
        <div class=carousel-inner>
            
            <div class="item active"><img src="Images/exo.jpg" class="ppor"><div class=carousel-caption><h3>Exodia 2016</h3><p>Nalayak The Band</p></div></div>
            <div class="item"><img src="Images/Self.jpg" class=ppor><div class=carousel-caption><h3>Dahi Handi</h3><p>2015</p></div></div>
            <div class="item"><img src="Images/b.gif" class="ppor"><div class=carousel-caption><h3>dfvdv</h3><p>dvvdv</p></div></div>
            <div class="item"><img class=ppor src=Images/jan.jpg><div class=carousel-caption><h3>Janmashtami</h3><p>Dahi Handi</p></div></div>
            </div>
            
            
              <a class="left carousel-control" href="#mycarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#mycarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    
  </a>
            
        </div>
    
        <section class="artic">


<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    PHP Script
  </div>
  <div class="mdl-card__supporting-text">
  Good Work
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      READ MORE
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
 
<?php
include 'connect.inc.php';
$query="SELECT * FROM `posts`;";
$result=mysql_query($query);
$rows=mysql_num_rows($result);

for($i=0;$i<$rows;$i++)
	{
		$title=mysql_result($result,$i,'title');
		$content=mysql_result($result,$i,'content');
		$imgln=mysql_result($result,$i,'imgln');
		$author=mysql_result($result,$i,'author');
		echo '<div class="demo-card-wide mdl-card mdl-shadow--2dp">';
		echo '<div class="mdl-card__title">'.$title.'</div>';
		echo '<div class="mdl-card__supporting-text">'.$content.'</div>';
		echo '<div class="mdl-card__actions mdl-card--border">
		    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">READ MORE</a></div>';
		echo '<div class="mdl-card__menu">
		    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
		      <i class="material-icons">share</i></button></div></div>';

	}
?>

            


           

            <section id=recmain>
                <h2 id=rc>Recent news</h2><marquee direction=up>
                <h3 class=rect>New Website</h3><h4 class=recst>Learn To make a new website</h4>
                <h3 class=rect>PHP Scripts</h3><h4 class=recst>Make your web pages interactive</h4></marquee>
     </section>

            <section id=addrmain>

                <h2 id=devl>About Developer</h2>
                <img src="Images/02.jpg" class="pport">
                <p id=devlp><strong>VAIBHAV AGARWAL</strong><br />

                    B6 Hostel<br />

                    IIT MANDI,Mandi<br />

                    Himachal Pradesh,India</p>

            </section>

        </aside>

    <div class="container-fluid">
        
        <div class=row>
        
    <div class="container-fluid">
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
    
    <!-- Colored mini FAB button -->
<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" data-toggle=modal data-target=#modl>
  <i class="material-icons">add</i>
</button>
<div class="modal fade" id=modl>
        <div class="modal-dialog">
            <div class=modal-content>
                <div class=modal-header>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>New Post</h4>
                </div>
                <div class="modal-body"><form method="post" action=index.php enctype="multipart/form-data">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3"  name=pttl maxlength="200" required>
    <label class="mdl-textfield__label" for="sample3">Title</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample4"  name=pauth maxlength="50" required>
    <label class="mdl-textfield__label" for="sample4">Author</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows=5 cols=30 maxlength="1000" name=pcont required id="sample5" ></textarea>
    <label class="mdl-textfield__label" for="sample5">Write your feelings here ....</label>
  </div>

                    
                    <input type=file accept='image/*' name=img required>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-default">Post</button>
                </div></form>
            </div>
        </div>
    </div>

    <!-- .wrapper -->
    <!--&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modl">Click Me</button>
    
    <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
    <a data-toggle="popover" title="i am header" data-content="i am content">Toggle popover</a>
    <br><br>-->
            
</body>
</html>



<?php
if(isset($_POST['pttl'])&&isset($_POST['pauth'])&&isset($_POST['pcont'])&&isset($_FILES['img']['name']))/*to check that user has submitted the signup form*/
    {
    $cont=$_POST['pcont'];//getting values from fields using post method
      $auth=$_POST['pauth'];
      $ttl=$_POST['pttl'];
      $im=$_FILES['img']['name'];//getting file name
      $imtmp=$_FILES['img']['tmp_name'];//getting its temporary location
     
      if(!empty($cont) && !empty($auth)&& !empty($im)&& !empty($ttl))/*to see the values are not empty*/
        {
             
              $location='imgposts/'.$im;
                echo $location;
                echo $imtmp;/*moving the profile picture onto our server*/
                if(move_uploaded_file($imtmp,$location))
                {
                    $query="INSERT INTO `blog`.`posts` (`id`, `title`, `author`, `content`, `imgln`, `time`) VALUES (NULL, '".$ttl."', '".$auth."', '".$cont."', '".$location."', CURRENT_TIMESTAMP);";//query to upload our data on server database
                    if($result=mysql_query($query))//run the query
                    {
                      echo "<br><br><br><br><div class=\"alert alert-success signup\">Your post has been  successfully created<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a></div>";/*giving notification about successful creation of account*/
                       
                        
                    }
                    else {echo 'error';}
              }
              else {echo "<div class=\"alert alert-danger fade in signup\">Error uploading image<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a></div>";}//display error about image
            

      }
  else echo "<div class=\"alert alert-danger fade in signup\">Please fill in all the fields<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a></div>";//display error about empty fields
  }

?>
    
    
</body>
</html>
