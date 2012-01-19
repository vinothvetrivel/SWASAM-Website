<?php ?>
<!DOCTYPE HTML >
<html>
	<head>
    <title>SWASAM CHARITABLE TRUST</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="generic.css" />
    <link rel="stylesheet" href="nav.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" ></script>
    <script type="text/javascript" src="nav.js"></script>
    <script>
		$(document).ready(function()
		{
			checkHash();
			$('.NavCenter').noteNav('center');
			$('#Home').noteNav('left');
			$('#Contact').noteNav('Right');
			$('.NavigationButtons').click(function()
			{
				window.location.hash=$(this).attr('name');
				checkHash();
			});
		});
		function checkHash()
		{
			
			switch(window.location.hash.toLowerCase())
			{
				case '#home':
				default:
				window.location.hash='#home';
				$('#ContentFrame').attr('src','home.php');
				break;
				case '#activities':$('#ContentFrame').attr('src','activities.php');
				break;
				case '#contactus':$('#ContentFrame').attr('src','ContactUs.php');
				break;
				case '#events':$('#ContentFrame').attr('src','events.php');
				break;
				case '#vregistration':$('#ContentFrame').attr('src','RegChoice.php');
				break;
				
			}
		}
	</script>
    <style>
	#Navigation>button
	{
		background-color:transparent;
		border:hidden;
		position:absolute;
		top:-12px;
	}
	#Navigation>#Contact
	{
		
		right:0px;
	}
	#Navigation>#VRegistration
	{
		right:105px;
	}
	#Navigation>#Events
	{
		right:210px;
	}
	#Navigation>#Activities
	{
		right:315px;
	}
	</style>
	</head>
	<body>
    	<div id="Navigation">
        	<button id="Home" name="#home" class="NavigationButtons" title="Home">Home</button>
            <button id="Activities" name="#activities"  title="Activities" class="NavigationButtons NavCenter">Activities</button>
            <button id="Events" name="#Events" title="Events" class="NavigationButtons NavCenter">Events</button>
            <button id="VRegistration" name="#Vregistration" title="Volunteer Registration" class="NavigationButtons NavCenter NoteNav" >Registration</button>
            <button id="Contact" name="#ContactUs" title="Contact Us" class="NavigationButtons">Contact Us</button>
        </div>
        <div id="TheNotebook">
       		<div id="InsideNotebook">
            	<div id="Header"><img src="images/header.png" ></div>
                <div id="Content">
					<iframe src="" id="ContentFrame" allowtransparency="true" frameborder="0" scrolling="auto" height="590" width="700"></iframe>
            	</div>
           </div>
           <div id="Footer">
                &#169; SWASAM CHARITABLE TRUST</div>
            </div>                
        </div>

    </body>
</html>