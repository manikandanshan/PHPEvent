<?php
include 'connection.php';


$sql = "SELECT headers FROM advisoriesheader";
		
$result = mysqli_query($link,$sql);
if(!$result)
{
    echo mysqli_error($link);
    exit();
}

while($rows = mysqli_fetch_array($result))
{

    $category_list[]= array('category' => $rows['headers']);
}

$val= count($category_list);

		for($i=0; $i<$val; $i++)
		{

		$header=$category_list[$i]['category'];
		//Read item information from database
		$sql = "SELECT s_no, name, image_path, advisories_header,
				designation, description FROM advisoriesitems
				WHERE advisories_header='$header'";
		
		$result = mysqli_query($link,$sql);
		if(!$result)
		{
			echo mysqli_error($link);
			exit();
		}

		while($rows = mysqli_fetch_array($result))
			{
		//Loop through each row on array and store the data to $item_list[]
		$item_list[$i][] =  array('s_no' => $rows['s_no'],
								'name' => $rows['name'],
								'images_path' => $rows['image_path'],                         
								'item_header' => $rows['advisories_header'],
								'designation' => $rows['designation'],
								'description' => $rows['description']
								);
	
			}
		
	}
	
				for ($i = 0; $i <$val; $i++) 
					{
					$data = array();
						if($item_list[$i]!=null)	{
				 
							foreach($item_list[$i] as $key => $value):
								$data[$key] = $value;
				
							//	echo "image path :".$value['images_path'];
                          
							//	echo "name  : ".$value['name']; 
                           
							//	echo "designation  : ".$value['designation']; 
                           
							//	echo "description  : ".$value['description'];
					
							
							endforeach; 
						}
			
					}	
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
   <title>GITS :: Contacts</title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" id="color-switcher-link">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


<div id="box_wrapper">


    <section id="topline" class="light_section table_section">
         <div class="container">
            <div class="row">
                <div class="col-sm-3">
                   <a href="index.html" class="navbar-brand"><img src="images/logo.jpg" alt=""> </a>
                    
                </div>
                <div class="col-sm-9 text-right">
                  <span>
                        <i class="fa fa-envelope-o"></i> <a href="mailto:info@guruits.com">info@guruits.com</a>
                    </span>
                    <span>
                        <i class="fa fa-phone"></i> +91 (44) 226-80-627
                    </span>
                   
                </div>
                
            </div>
        </div>
    </section>


    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <span id="toggle_mobile_menu"></span>
                        <span id="toggle_search"></span>
                        <div class="widget widget_search">
                            <form role="search" method="get" id="searchform" class="searchform form-inline" action="/">
                                <div class="form-group">
                                    <label class="screen-reader-text" for="search">Search for:</label>
                                    <input type="text" value="" name="search" id="search" class="form-control" placeholder="Search...">
                                </div>
                                <button type="submit" id="searchsubmit" class="theme_button">Search</button>
                            </form>
                        </div>
                        <nav id="mainmenu_wrapper">
                            <ul id="mainmenu" class="nav sf-menu">
                                 <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="products.html">Products</a>
                                </li>
                                
                                <li class="active">
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>  
                        </nav>
                    </div>
                
                </div>
            </div>
        </div>
    </header>
    <section id="breadcrumbs" class="light_section with_bottom_border">
        <div class="container">
       
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="rt-icon-home2"></i></a>
                        </li>
                        <li class="active"><h1>Contact <span class="highlight">Us</span></h1></li>
                    </ol>
                </div>
                
            </div>
        </div>
    </section>






<section id="content" class="grey_section">
    <div class="container">
        <div class="row">
            <br/><br/>
			
			 <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="<?php echo $value['images_path'];?>" alt="" />
                                    </a>
                                   
                                </div>

            <div class="widget col-sm-6  to_animate animated fadeInLeftBig" data-animation="fadeInLeftBig" data-delay="250">
                
                    <p>
                      <small><?php echo $value['name'] ; ?></small><span class="text-primary"> Dr. K. Ravichandran,</span>
                    </p>
                    <p  <small><?php echo $value['designation'] ; ?></small>
                    </p>
                   
                   
              
            </div>
                    

            <div class="widget widget_contact col-sm-6  to_animate animated fadeInRightBig" data-animation="fadeInRightBig" data-delay="300">
                <h3><?php echo $value['description'] ; ?></h3>
                
                

            </div>
        </div>
    </div>
</section>

 


    <section id="copyright" class="light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                   <p>&copy; Copyright 2015 - <strong> GURU Information Technology Services Pvt Ltd.</strong></p>
                </div>
                               
            </div>
        </div>
    </section>
 

</div><!-- eof #box_wrapper -->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


        <!-- libraries -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>

        <!-- superfish menu  -->
        <script src="js/jquery.hoverIntent.js"></script>
        <script src="js/superfish.js"></script>
        
        <!-- page scrolling -->
        <script src="js/jquery.easing.1.3.js"></script>
        <script src='js/jquery.nicescroll.min.js'></script>
        <script src="js/jquery.ui.totop.js"></script>
        <script src="js/jquery.localscroll-min.js"></script>
        <script src="js/jquery.scrollTo-min.js"></script>
        <script src='js/jquery.parallax-1.1.3.js'></script>



        <!-- custom scripts -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Map Scripts -->

      

    </body>
</html>