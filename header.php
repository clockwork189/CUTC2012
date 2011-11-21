<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>CUTC 2012</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/main.css" /> 
        <script type="text/JavaScript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/textualizer.js"></script> 
        <script type="text/javascript" src="js/jquery.pageslide.min.js"></script>       
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>   
        <script type="text/javascript" src="js/jquery.slider.min.js"></script> 
        <script type="text/javascript" src="js/textualizer.min.js"></script> 
        <script type="text/javascript">
            $(function() {
                $("#3").lavaLamp({
                    speed: 100,
                    click: function(event, menuItem) {
                        return false;
                    }
                });
          var list = ['TECHNOLOGY', 'DESIGN', 'ENTREPRENEURSHIP', 'GAMING', 'ENVIRONMENT', 'YOU!'];  // list of blurbs
          var txt = $('#keywords');  // The container in which to render the list

          var options = {
            duration: 1000,          // Time (ms) each blurb will remain on screen
            rearrangeDuration: 500, // Time (ms) a character takes to reach its position
            effect: 'random'         // Animation effect the characters use to appear
          }

          txt.textualizer(list, options); // textualize it!
          txt.textualizer('start'); // start

            });
        </script>
    </head>
    <body>
	    <div id="header">
	        <?php require("navbar.php"); ?>
        </div>

