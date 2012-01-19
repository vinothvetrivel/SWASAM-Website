<html>
<head>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" ></script>
<!--<script>
 var ImageList=new Array();
 var timerobj;

		$(document).ready(function()
		{
			var picasaDetails={
				Username:'swasam2serve',
				AlbumId:'5506840652948989041',
				AuthKey:'Gv1sRgCKSy77Pyrcy5nQE',
				JsonUrl:'http://picasaweb.google.com/data/feed/base/user/'
				};
				picasaDetails.JsonUrl+=picasaDetails.Username+'/albumid/'+picasaDetails.AlbumId+'?alt=json&kind=photo&callback=?&hl=en_GB'+'&authkey='+picasaDetails.AuthKey;
				$.getJSON(picasaDetails.JsonUrl,function(data)
				{
					$.each(data.feed.entry,function(index)
							{
								ImageList.push(data.feed.entry[index].content.src);
							});
					loadImage();
					timerobj=setInterval(loadImage,5000);
				});
		});
		
			function loadImage()
			{
				var randomnumber=Math.floor(Math.random()*ImageList.length);
				var imgurl=ImageList[randomnumber];
				$('#GalleryImage').attr('src',imgurl).css('visibility','visible');
			}
 </script>-->
	<style>
	@font-face 
	{
		font-family: swasam_font;
		src: url('Because I say so.ttf');
	}
	body
	{
		overflow:hidden;
		font -family:"swasam_font";
	}
	
	#GalleryImage	
	{
		position:relative;
		left:450px; 
		top:-700px;
		
	}
	.paragraph>p
		{
			position:relative;
			width:420px;
			text-align: justify; 
			text-justify: newspaper;
			font -family:"swasam_font";
		}
	.paragraph>hr
		{
			position:relative;
			width:420px;
			left:-130px;
			text-align: justify; 
			text-justify: newspaper;
		}
	.paragraph>ul
		{
			position:relative;
			width:380px;
			text-align: justify; 
			text-justify: newspaper;
		}
	.paragraph>#vision
		{
			top:-25px;
		}
	.paragraph>#visioncontent
		{
			top:-100px;
		}
	.paragraph>#mission
		{
			top:-120px;
		}
	.paragraph>#missioncontent
		{
			top:-180px;
		}
	.paragraph>#hr1
		{
			top:-55px;
			
		}
	.paragraph>#hr2
		{
			top:-150px;
		}
	#quicklinks
		{
			position:relative;
			top:-700px;
			left:450px;
			width:250px;
		}
	.line
		{
			width:420px;
			height:2px;
			background-color:#000000;
		}
	.contentQuotes
		{
			font-size:20px;
			font-weight:bold;
			font-style:italic;
		}
	.contenttitle
		{
			font -family:"Times New Roman";
			font-size:30px;
			font-style:italic;
			font-weight:bold;
			color:#754C78;
			
		}
	 
	</style>
</head>
<body>
<!--This is Home page Content-->
<div class="paragraph">
<p><b>SWASAM </b>is a registered trust striving to bring the gift of education reachable forthose who find if far away from them. It has been formed in April 2010 by Group of friends to servethe society.</p>
<p class="contenttitle" id="vision">Our Vision<br><hr id="hr1" class="line"/></p><br>
<p id="visioncontent">The world is existing with two classes,</p>
<p class="contentQuotes" id="visioncontent">"One who is in need and other who is ready tofeed."</b><br></p>
<p id="visioncontent">Swasam acts to bridge the gap between these classes and make the life happy and balanced.</p>
<p class="contenttitle" id="mission">Our Mission<br><hr id="hr2"class= "line"/></p><br>
<p>
	<ul class="paragraph" id="missioncontent">
		<li class="paragraph">To award scholorships, Prizes, Fellowship and other payments for the study expenses of the poor.</li>
		<li class="paragraph">To distribute food, Medicines, Clothing to students, Destitute, Old aged, Orphans, Physically challenged persons, Mentally challenged students and Organisations which are running schools,Orphanages etc.</li>
		<li class="paragraph">To create awarness of general hygiene and to conduct health camps.</li>
	</ul>
</p>
</div>
   <!-- <span id="ImgSpan"><img src="" id="GalleryImage" /></span>-->
   <!--Photo Gallery-->
<embed id="GalleryImage"
		type="application/x-shockwave-flash" 
		src="https://picasaweb.google.com/s/c/bin/slideshow.swf" 
		width="288" 
		height="236" 
		flashvars="host=picasaweb.google.com&hl=en_GB&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2Fswasam2serve%2Falbumid%2F5617317625104221809%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCLuVg52j9Lb_NA%26hl%3Den_GB" 
		pluginspage="http://www.macromedia.com/go/getflashplayer">
</embed>
	<!--Quick links-->
<div id="quicklinks" class="paragraph">
	<p class="contenttitle">Quick Links</p>
		<ul id="list">
			<li><a href="Doc\SWASAM_Brochure.pdf">Brochure</a></li><br>
			<li><a href="Doc\Swasam-Form.pdf">Memebership Form</a></li><br>
			<li><a href="Doc\Swasam-Annual Form.pdf">Lifetime Memebership Form</a></li><br>
			<li><a href="#">Scholarship Form</a></li>
		</ul>
	</p>
</div>
  </body>
</html>