<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>shopping</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/css/album.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/css/carousels.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/css/scrolls.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/sly_scroll/sly_scroll_images.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/slick_scroll/slick.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/slick_scroll/slick-themeg.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/slick_scroll/slick_imgs.css" />
    <link href="google_icon/google_icons.css" rel="stylesheet">
    <script src="fontawesome_5_4/js/all.js"></script>

</head>
 <style>
        /* Small devices (landscape phones) */
        @media (min-width:576px) {
          body{
            background:red;
          }
        }

        /* Medium devices (tablets) */
        @media (min-width:768px) {
          body{
            background:blue;
          }
        }

        /* Large devices (desktops) */
        @media (min-width:992px) {
          body{
            background: green;
          }
        }

        /* Extra large devices (large desktops) */
        @media (min-width:1200px) {
          body{
            background:#f8f9fa;
          }
        }

        /* The given screen size or smaller */

        /* Extra small devices (portrait phones)*/
        @media (max-width:575px) {}

        /* Small devices (landscape phones)*/
        @media (max-width:767px) {}

        /* Medium devices (tablets)*/
        @media (max-width:991px) {}

        /* Large devices (desktops)*/
        @media (max-width:1199px) {}
    </style>
<body>
  <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
    
   <main role="main">
     <!-- <div class="row">
       <div class="col-sm-8 m-auto"> -->

        <div id="slider4" class="carousel slide mb-5 " data-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-target="#slider4" data-slide-to="0"></li>
            <li data-target="#slider4" data-slide-to="1"></li>
            <li data-target="#slider4" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="uploads/1.jpg" alt="First Slide">
               <div class="container">
                 <div class="carousel-caption text-left">
                   <h1>Example headline.</h1>
                   <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                   <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                 </div>
               </div>
             </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="uploads/2.jpg" alt="Second Slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Slide Two</h3>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="uploads/474hear.jpg" alt="Third Slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Slide Three</h3>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
            </div>
          </div>
          <a href="#slider4" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>

          <a href="#slider4" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
        
       <!-- </div>
      </div> -->
 <div class="container mt-5">

      <!-- <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section> -->

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="d-none d-md-block">
               <!-- <div class="scrolling-wrapper"> -->
               <div class="frame" id="cycleitems">
               <ul class="clearfix">
                <?php 
                    include 'db.php';
                    $query=$db->query("SELECT * FROM shopping_cart");
                    $rowCount=$query->num_rows;
                    while ($rowAlbum =$query->fetch_assoc()) { 
                        if ($rowCount++ > 1) {?>
                            <li>
                               <img class="" src="uploads/<?php echo $rowAlbum['image'] ;?>" alt="Card image cap">
                         		</li>
                             <!-- <div class="card helllo"> -->
                               <!-- <img class="card-img p-2 rounded" src="uploads/" alt="Card image cap"> -->
                             <!-- </div> -->
                 <?php } 
                 }?>
                   <?php $db->close();?>
                 </ul>
                </div>
               <!-- </div> -->
                  <div class="controls text-center mt-3">
                       <span class="prev" id="prev1"><i class="fa fa-chevron-left"></i></span>
                       <div class="btn-group">
                         <button class="btn pause"><i class="fa fa-pause"></i> pause</button>
                         <button class="btn resume"><i class="fa fa-play"></i> resume</button>
                         <button class="btn toggle"><i class="fa fa-pause"></i> toggle</button>
                       </div>
                       <span class="next" id="next1"><i class="fa fa-chevron-right"></i> </span>
                  </div>
               </div>
             </div>
          </div>

           <div class="row">
            <div class="col-md-12">
              <div class="d-none d-md-block">
               <div class="scrolling-wrapper">
                <?php 
                    include 'db.php';
                    $query=$db->query("SELECT * FROM shopping_cart");
                    $rowCount=$query->num_rows;
                    while ($rowAlbum =$query->fetch_assoc()) { 
                        if ($rowCount++ > 1) {?>
                             <div class="card helllo">
                               <img class="card-img p-2 rounded" src="uploads/<?php echo $rowAlbum['image'] ;?>" alt="Card image cap">
                             </div>
                 <?php } 
                 }?>
                   <?php $db->close();?>
               </div>
                  <div class="controls text-center mt-3">
                       <span class="prev" id="prev1"><i class="fa fa-chevron-left"></i></span>
                       <!-- <div class="btn-group">
                         <button class="btn pause"><i class="fa fa-pause"></i> pause</button>
                         <button class="btn resume"><i class="fa fa-play"></i> resume</button>
                         <button class="btn toggle"><i class="fa fa-pause"></i> toggle</button>
                       </div> -->
                       <span class="next" id="next1"><i class="fa fa-chevron-right"></i> </span>
                  </div>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                  <!-- Slider -->
                 <div class="slider regular">
                    <?php 
                    include 'db.php';
                    $query = $db->query("SELECT * FROM shopping_cart");
                    $rowCount = $query->num_rows;
                    while ($rowAlbum = $query->fetch_assoc()) {
                      if ($rowCount++ > 1) { ?>

                       <!-- <div> <img src="https://via.placeholder.com/200x150/0000FF/808080 ?Text=Digital.com" alt="" /> </div> -->
                       <div> <img src="uploads/<?php echo $rowAlbum['image']; ?>" alt="" /> </div>
                    
                        <?php }
                            } ?>
    
                   <?php $db->close(); ?>
                 </div>
		         		 <!-- control arrows -->
               <!-- <button class="slick-prev" aria-label="Previous" type="button">Previous</button> -->
		         	 <!-- <div class="prev" id="prev"> <span class="fa fa-chevron-left" aria-hidden="true"></span> </div>
		         	 <div class="next" id="next"> <span class="fa fa-chevron-right" aria-hidden="true"></span> </div> -->
                 
              </div>
           </div>


          <div class="row">
             <div class="col-md-12">
               <div class="variable slider">
                  <?php 
                    include 'db.php';
                    $query = $db->query("SELECT * FROM shopping_cart");
                    $rowCount = $query->num_rows;
                    while ($rowAlbum = $query->fetch_assoc()) {
                      if ($rowCount++ > 1) { ?>
                  <div>
                    <img src="uploads/<?php echo $rowAlbum['image']; ?>">
                  </div>
                  <?php }
                            } ?>
    
                   <?php $db->close(); ?>
               </div>
               <!-- <button class="slick-prev" aria-label="Previous" type="button">Previous</button> -->
               <!-- <div class="prev"> <span class="fa fa-chevron-left" aria-hidden="true"></span> </div>
		         	 <div class="next"> <span class="fa fa-chevron-right" aria-hidden="true"></span> </div> -->

            </div>
           </div>

        <div class="row mt-3">
          <?php 
          include 'db.php';
          $query = $db->query("SELECT * FROM shopping_cart");
          $rowCount = $query->num_rows;
          while ($rowAlbum = $query->fetch_assoc()) {
            if ($rowCount++ > 1) { ?>
              
              <div class="col-md-12 col-lg-6 mt-3">
                <div class="media bg-dark text-light p-2 ">
                  <img class="mr-3" src="uploads/<?php echo $rowAlbum['image']; ?>" width="200px" alt="Generic placeholder image">
                  <div class="media-body text-justify">
                    <h5 class="mt-0"><?php echo $rowAlbum['name']; ?></h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                     <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                     </div>
                  </div>
                </div>
               </div>

              <?php }
               } ?>
             <?php $db->close(); ?>
        </div>

        <div class="row mt-3">
          <?php 
            include 'db.php';
            $query=$db->query("SELECT * FROM shopping_cart");
            $rowCount=$query->num_rows;
            while ($rowAlbum =$query->fetch_assoc()) { 
                if ($rowCount++ > 1) {?>

                   <div class="col-md-4">
                     <div class="card mb-4 shadow-sm bg-dark text-light">
                       <div class="card-header text-center"><?php echo $rowAlbum['name'] ;?></div>
                       <img class="card-img-top px-2 rounded" src="uploads/<?php echo $rowAlbum['image'] ;?>" alt="Card image cap">
                       <div class="card-body">
                         <p class="card-text text-center">$<?php echo $rowAlbum['price'] ;?> U.S Dollar</p>
                         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                         <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                             <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                           </div>
                           <small class="text-muted">9 mins</small>
                         </div>
                       </div>
                     </div>
                   </div>

                <?php } 
                }?>
               <?php $db->close();?>
           </div>
         </div>
       </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>
   
</div>
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/sly_scroll/sly.min.js"></script>
    <script src="dist/sly_scroll/jquery.easing.min.js"></script>
    <script src="dist/sly_scroll/sly_scroll_image.js"></script>
    <script src="dist/slick_scroll/slick.min.js"></script>
    <script>
  $(".variable").slick({ 
        dots: true,
        infinite: false,
        // prevArrow: $('.slick-prev'),
        slidesToShow: 4,
        // variableWidth: true,
        responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 3,
           infinite: true,
           dots: true
         }
       },
       {
         breakpoint: 700,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 2
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }
       // You can unslick at a given breakpoint now by adding:
       // settings: "unslick"
       // instead of a settings object
       ]
  });

  $('.regular').slick({
     dots: true,
    //  prevArrow: $('.slick-prev'),
    //  nextArrow: $('.next'),
     infinite: false,
     speed: 300,
     slidesToShow: 4,
     slidesToScroll: 4,
     responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 3,
           infinite: true,
           dots: true
         }
       },
       {
         breakpoint: 700,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 2
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }
       // You can unslick at a given breakpoint now by adding:
       // settings: "unslick"
       // instead of a settings object
       ]
   });

    $('.carousel').carousel({
      interval:3000,
      keyboard: true,
      pause:'hover',
      wrap:true
    });

    $('#slider4').on('slide.bs.carousel',function(){
      console.log('slide');
    });
    $('#slider4').on('slid.bs.carousel', function(){
      console.log('slid');
    });
  </script>
</body>
</html>