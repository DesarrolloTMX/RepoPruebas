<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home' />


<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Infinitum Live / Vive Latino 2015</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.maximage.css" rel="stylesheet" type="text/css" /> 
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700' rel='stylesheet' type='text/css'>
	<link href="css/slick.css" rel="stylesheet" type="text/css">
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>  
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.sharrre.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="js/jquery.maximage.min.js"></script>
    <script type="text/javascript" src="js/hoverIntent.js"></script>

	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/js.js"></script>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.src.js"></script>
        <style>
        	.bigImg{
            	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.myBackground.jpg', sizingMethod='scale');
			    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";
            }
        </style>
        <script>
        </script>
	<![endif]-->

</head>

<body>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N6CSTH');</script>
<!-- End Google Tag Manager -->


<div style="display:none">
<cms:editable 
      name='gg_image' 
      label='Portada' 
      desc='Sube la imágen de la portada'
      show_preview='1'
      preview_height='100'
      type='image'
   />
<cms:editable 
      name='matices_image' 
      label='Matices' 
      desc='Sube la imágen de matices'
      show_preview='1'
      preview_height='100'
      type='image'
   />
   
<cms:editable 
      name='snap_image' 
      label='SnapShot' 
      desc='Sube la imágen de snapshot'
      show_preview='1'
      preview_height='100'
      type='image'
   />

<cms:editable 
      name='slide1_image' 
      label='Slide 1' 
      desc='Sube el slide 1'
      show_preview='1'
      preview_height='100'
      type='image'
   />   
   
<cms:repeatable name='Multiple_vines' >
   <cms:editable type='text' name='vines' label='url' />
</cms:repeatable>

<cms:repeatable name='Multiple_citas' >
   <cms:editable type='text' name='cita' label='citas' />
   <cms:editable type='text' name='autor_cita' label='autor_cita' />
</cms:repeatable>

<cms:editable 
      name='slide2_image' 
      label='Slide 2' 
      desc='Sube el slide 2'
      show_preview='1'
      preview_height='100'
      type='image'
   />   
   
<cms:editable 
      name='slide3_image' 
      label='Slide 3' 
      desc='Sube el slide 3'
      show_preview='1'
      preview_height='100'
      type='image'
   />   
   
<cms:repeatable name='Multiple_youtube' >
   <cms:editable type='text' name='youtube' label='url_youtube' />
</cms:repeatable>
  


</div>
	<div  id="boxa"> </div>
<div class="coverWeb" id="exgal" ></div>

   <div class="topMenu">
   			<a class="infinitumLogo"></a>
            <a class="logoPatrocinador"></a>
            <div class="social">
            	<strong>SÍGUENOS</strong>
                <div class="shareAll" title="Infinitum Live">
                    <div class="shareContainer">
                    
						<a class="twitterIcon" href="https://twitter.com/infinitum" target="_blank" title="Twitter">&nbsp;</a> 
                        <a class="facebookIcon" href="https://www.facebook.com/eninfinitum" target="_blank" title="Facebook">&nbsp;</a> 
                        <a class="youtubeIcon" href="http://www.youtube.com/user/telmex" target="_blank" title="Youtube">&nbsp;</a>
                    </div>
                </div>
            	
                <div class="explore-bottom">
                	<a href="javascript:void(0);" class="share" title="Comparte en redes sociales"></a>
                </div>
                
                <em class="feedIcon button" onclick="window.open('http://www.tintup.com/infinitumlive?width=1349')" >FEED</em>
                
                <div class="socialPoint"></div>
                                
            </div>
   </div>
   
   
   <div class="mainMenu">
   		<ul class="latNav">
        	<li class="mconceptuales" data-slide="3">
            	<a><em>Matices</em>
                </a>
                <strong></strong>
                
            </li>
            <li class="mdocumentales" data-slide="9">
            	<a><em>Snapshot</em>
                </a>
            	<strong></strong>
            </li>
			<li class="mvines" data-slide="4">
            	<a><em>Vines Live</em></a>
            	<strong></strong>
            </li>
            <li class="mquickpost" data-slide="6">
            	<a><em>Crónicas</em></a>
            	<strong></strong>
            </li>
            <li class="mvideos" data-slide="2">
            	<a><em>Videos</em></a>
            	<strong></strong>
            </li>
            <li class="mcolaboradores" data-slide="8">
            	<a><em>Colaboradores 
                 #infinitumlive</em> </a>
            	<strong></strong>
            </li>
        </ul>
   </div>
   
   &nbsp;
   
   
      <!--  <div class="downArrow button" data-slide="3"></div>  -->
 
   
<div class="slide bigImg" id="slide1" data-slide="1" data-stellar-background-ratio="0.5" style="background-image:url(<cms:show gg_image />)!important">
<div class="padding_slide3">
	<div class="container clearfix">
    	<div class="grid_12" > 
        	<a class="sectionButton button" data-slide="3">VER MÁS</a>
        </div> 
    </div>
</div>
</div>







<div class="slide bigImg" id="slide3" data-slide="3" style="background-image:url(<cms:show matices_image />)!important">
	<div class="padding_slide3">
		<div class="container clearfix">
			<div  class="grid_12">
				<p>Matices</p>
                
	                <div id="galeriaUno" class="sectionButton">Ver fotogalería</div>

			</div>
		</div>
	</div>
</div>









<div class="slide bigImg" id="slide9" data-slide="9" style="background-image:url(<cms:show snap_image />)!important">
	<div class="padding_slide3">
		<div class="container clearfix">
			<div  class="grid_12">
				<p>SnapShot</p>
                <!-- <a class="activeGallery2 sectionButton">Ver fotogalería</a>  -->
	                <div id="galeriaDos" class="sectionButton">Ver fotogalería</div>
			</div>
		</div>
	</div>
</div>




<div id="slide15" data-stellar-background-ratio="0.5" data-slide="15" class="slideInfo facesBack5" style="background-position: 0px -118px;">
	<div class="container clearfix">
		<div  class="grid_12">
		</div>
		<div class="clear"></div>
        

				<div class="carruselSingle">
					 <cms:show_repeatable 'Multiple_citas' startcount='0' >
                       <div class="contenidoCarrusel">
                        <p><strong class="comillaDerecha"></strong><cms:show cita /><strong class="comillaIzquierda"></strong></p>
                        <span  class="electricBlueText"><cms:show autor_cita /></span>
                       </div>
                      
                     </cms:show_repeatable> 
				</div>

       
	</div>
</div>



<div class="slide bigImg" id="slide5" data-slide="5" style="background-image:url(<cms:show slide1_image />)!important">
	<div class="effect_2 padding_slide5">
		<div class="container clearfix">
			<div  class="grid_12">
				<!--<p>Phasellus dignissim convallis</p>-->
			</div>
		</div>
	</div>
</div>




<div class="slideInfo facesBack3" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		<div  class="grid_12">
		</div>
		<div class="clear"></div>
                
		<div class="carrusel">
		   <cms:show_repeatable 'Multiple_vines' startcount='0' >
                       <div class="contenidoCarrusel">
                            <iframe width="300" height="300" class="vine-embed" src="<cms:show vines />" frameborder="0"></iframe>
                       </div>
           </cms:show_repeatable>
	   </div>
                              
	</div>
</div>











<div class="slide bigImg" id="slide7" data-slide="7" style="background-image:url(<cms:show slide2_image />)!important">
	<div class="padding_slide3">
		<div class="container clearfix">
			<div  class="grid_12">
				<!--<p>Phasellus dignissim convallis</p>-->
			</div>
		</div>
	</div>
</div>










<div class="slideInfo facesBack2" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
    	
		<div id="content" class="grid_12">
		</div>
        <div class="clear"></div>



				<div id="carruselNotas" >    </div>


		<div class="clear"></div>
	
	</div>
</div>









<div class="slide bigImg" id="slide10" data-slide="10" style="background-image:url(<cms:show slide3_image />)!important">
	<div class="effect_2 padding_slide5">
		<div class="container clearfix">
			<div id="content" class="grid_12">
				<!--<p>Phasellus dignissim convallis</p>-->
			</div>
		</div>
	</div>
</div>












<div class="slideInfo facesBack4 " id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		<div  class="grid_12">
		</div>
		<div class="clear"></div>
               
				<div class="carrusel">
					 <cms:show_repeatable 'Multiple_youtube' startcount='0' >
                       <div class="contenidoCarrusel">
                            <iframe width="260" height="146" src="<cms:show youtube />" frameborder="0" allowfullscreen></iframe>
                       </div>
                   </cms:show_repeatable>

                </div>
        
	</div>
</div>




<!--
<div class="slide bigImg" id="slide11" data-slide="11" >
	<div class="padding_slide3">
		<div class="container clearfix">
			<div id="content" class="grid_12">
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</div>








<div class="slide bigImg" id="slide12" data-slide="12">
	<div class="effect_2 padding_slide7">
		<div class="container clearfix">
			<div id="content" class="grid_12">
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</div>








<div class="slide bigImg" id="slide13" data-slide="13">
	<div class="effect_2 padding_slide7">
		<div class="container clearfix">
			<div id="content" class="grid_12">
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</div>


-->













<div class="slideInfo facesBack" id="slide8" data-slide="8" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		<div id="content" class="grid_12">
		</div>
		<div class="clear"></div>
        
        
				<div id="colaboradores">    </div>


		<div class="clear"></div>
	</div>
	
    <div id="map_block">
    </div>
</div>





<div id="footer">
	<div class="container clearfix">
		<div class="copyright">TODOS LOS DERECHOS RESERVADOS &copy; 2015 | <a href="javascript:void(0);">Política de privacidad</a></div>
		<div id="back_top"><a class="button" title="" data-slide="1"></a></div>
	</div>
</div>


</body>
</html>
<?php COUCH::invoke(); ?>