<?php ?>
<!DOCTYPE HTML>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<link rel="stylesheet" href="../lib/dot-luv/jquery-ui-1.8.9.custom.css">
<script >
$(document).ready(function()
{
	$('#VRegisterButton').click(function()
	{
		$('#VRegisterDialog').dialog('open');
	});
	$('#VRegisterDialog').dialog(
	{
		width:600,
		height:600,
		show:'slide',
		hide:'slide',
		autoOpen:false,
		title:'Volunteer Registration',
		modal:true,
		buttons:
		{
			'Cancel':function(){$(this).dialog('close');}
		}
	});
});
</script>
<script>
	$(document).ready(function()
	{
		$('#Footer').css(
		{
			width:$('#Container').width(),
		});
		$('.MenuButtons').button();
		QuoteSlideShow();
		setInterval(QuoteSlideShow,20*1000);
		$('#QuoteImg').bind('load',function()
		{
			$(this).fadeIn();
		});
	});
	function QuoteSlideShow()
	{
		var ImgList=['Budha.jpg','Gandhi.png','Thirukural.jpg','vivekananda.jpg'],
		path='../images/quotes/',Img=$('#QuoteImg'),Quote=$('#Quotes'),Aratio;
		Img.fadeOut();
		Img.attr('src',path+ImgList[ Math.floor( Math.random()*ImgList.length ) ] );
		/*Aratio=Img.width()/Img.height();
		Img.width(Quote.width()-50);
		Img.height(Img.width()/Aratio);
		*/
	}
</script>
<script> 
			var ImageList= new Array();
			var timerobj;
			var countdown=5,time=countdown;
			$(document).ready(function()
			{
				var Username='swasam2serve',AlbumId='5506840652948989041',AuthKey='Gv1sRgCKSy77Pyrcy5nQE'
				JsonUrl='http://picasaweb.google.com/data/feed/base/user/'+Username+'/albumid/'+AlbumId+'?alt=json&kind=photo&callback=?&hl=en_GB';
				JsonUrl=JsonUrl+'&authkey='+AuthKey
				$.getJSON(JsonUrl,function(data)
				{
					$.each(data.feed.entry,function(index)
							{
								ImageList.push(data.feed.entry[index].content.src);
							});
					loadImage();
					timerobj=setInterval('coundownTime();',1000);
				});
				$('#RandomButton').click(loadImage);
			});
			function coundownTime()
			{
				time--;
				if(time==0)
				{
					time=countdown;
					 loadImage();
				}
				$('#Timer').text(time);
			}
			function loadImage()
			{
				var randomnumber=Math.floor(Math.random()*ImageList.length);
				var imgurl=ImageList[randomnumber];
				$('#DisplayImage').attr('src',imgurl);
			}
		</script> 
<style>
@font-face {
	font-family: swasam_font;
	src: url('swasam.otf');
}
@font-face {
	font-family: swasam_font2;
	src: url('HARLOWSI.TTF');
}
body
	{
		background-image:url(../images/newbg.jpg);
		background-attachment:fixed;
	}
.ContainerDiv
{
	position:relative;
	opacity:1;
	text-align:center;
	border-radius:35px;
	 -moz-border-radius:35px;
}
#Container {
	background-color: #000;
	border-width:thin;
	border-style:solid;
	overflow: visible;
	height:1500px;
	width:800px;
	margin:0 auto;
	opacity: 0.8;
	border-radius: 55px;
	 -moz-border-radius:55px;
	text-align:center;
}
#Header
{
	background-color:#B479FB;
	width:805px;
	color:#000;
	border-radius:50px;
	 -moz-border-radius:50px;
	 bottom:1px;
	 right:2px;
}
#Menu
{
	width:inherit;
	text-align:center;
	height:50px;
	width:600px;
	left:100px;
}
.MenuButtons
{
	font-size:12px;
	position:relative;
	top:10px;
}
#Photo
{
	 background-color:#ff9966;
	 width:250px;
	 height:1100px;
	 bottom:55px;
	 right:5px;
}
#SwasamLogo
{
	height:180px;
}
#Logo
{
	bottom:	25px; 
	left:50px;
}
#Quotes
{
	/*background-color:#006;*/
	 width:450px;
	 height:250px;
	 color:#FFF;
	 padding: 5px;
	 margin: 5px;
	 left:75px;
	 
}
#QuoteImg
{
	border:thick #999 groove;
	max-width:565px;	
	border-radius: 5px;
	 -moz-border-radius:5px;
}
#Video
{
	 background-color:#36F;
	 width:220px;
	 height:220px;
	 
}
#Footer
{
	 background-color:#B479FB;
	 height:80px;
	 margin:0 auto;
	 position:relative;
	 width:810px;
	 bottom:80px;
	 right:2px;
}
#DisplayImage
{
position:relative;
border-radius: 5px;
	 -moz-border-radius:5px;
}
</style>
<title>Swasam Charitable Trust</title>
</head>
<body>
	<div id="Container" >
        <div id="Row1">
                <div id="Header" class='ContainerDiv'>
                    <label style="font-family:swasam_font;font-size:82px;">Swasam Charitable Trust</label><br>
                    <label style="
                    font-family:'swasam_font2', cursive;
                    font-size:30px; 
                    text-align:right;
                    position:relative;
                    left:200px;
                    bottom:20px;
                    ">Begining of a new vision..</label>
                 </div>
                <div id="Menu" class='ContainerDiv'>
                <button class='MenuButtons'>Home</button>
                <button class='MenuButtons'>Activities</button>
                <button class='MenuButtons'>Events</button>
                <button id='VRegisterButton' class='MenuButtons'>Volunteer Registration</button>
                <button class='MenuButtons'>Contact Us</button>
                </div>
        </div>
        <div id="Row2">
        <table>
           <tr>
           <td><span id="Logo" class='ContainerDiv'><img id="SwasamLogo" src="../images/swasam_logo.png"></span></td>
			<td><div id="Quotes" class='ContainerDiv'>
            <img src="" id="QuoteImg">
            </div></td>
           </tr>
         </table>
        </div>
        <div id="Row3">
        <table>
        	<tr>
            	<!--<td><div id="Video" class='ContainerDiv'>VIDEO</div></td>-->
				<td><div id="Photo" class='ContainerDiv'><b>PHOTO GALLERY</b> 
				 <img src='' id="DisplayImage" width="200px" height="204px"></div></td>
			</tr>
         </table>
        </div>
    </div>
    <div id="Footer" class='ContainerDiv'><b>&#169; SWASAM CHARITABLE TRUST</b></div>
    <div id="VRegisterDialog">
    <iframe src="Vregistration.php" frameborder="1" height="475"  width="500"></iframe>
     </div>
</body>
</html>