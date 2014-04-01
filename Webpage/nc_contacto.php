<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Nexocargo</title>


    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/headers/header1.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="favicon.ico">        
    <!-- CSS Implementing Plugins -->    
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">          
    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/page_contact.css">
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48827849-1', 'nexocargo.com');
  ga('send', 'pageview');

</script>  
</head> 

<body>
<!--=== Top ===-->    
<div class="top">
    <div class="container">         
        <ul class="loginbar pull-right">
            <li>
                <i class="fa fa-globe"></i>
                <a>Idiomas</a>
                <ul class="lenguages">
                    <li class="active">
                        <a href="#">Español <i class="fa fa-check"></i></a> 
                    </li>
                    <li><a href="#">Inglés </a></li>
                    
                </ul>
            </li>
            <li class="devider"></li>   
            <li><a href="ayuda.html">Ayuda</a></li> 
            <li class="devider"></li>
            <li><a href="saladeprensa.html">Sala de prensa</a></li> 
               
        </ul>
    </div>      
</div><!--/top-->
<!--=== End Top ===-->    

<!--=== Header ===-->    
<div class="header">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img id="logo-header" src="assets/img/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="index.html">
                            Inicio
                        </a>
                    </li>
                    <li class="">
                        <a href="nexocargo.html">Nexocargo</a> 
                          
                    </li>
                   

                    
                    
                    
                    
                    <li class="">
                        <a href="http://blog.nexocargo.com">
                            Blog
                        </a>
                    </li>
                    </li>
                    <li class="active">
                        <a href="contacto.php">
                            Contacto
                        </a>
                    </li>
                    
                     
            </div><!-- /navbar-collapse -->
        </div>    
    </div>    
</div><!--/header-->
<!--=== End Header ===-->        

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Contacto</h1>
        
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!-- Google Map -->
<iframe width="1800" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=&amp;aq=0&amp;oq=zaragoza&amp;sll=41.649058,-0.889549&amp;sspn=0.14315,0.338173&amp;ie=UTF8&amp;t=k&amp;ll=41.647519,-0.882683&amp;spn=0.089791,0.514984&amp;z=12&amp;output=embed"></iframe><br /><!---/map-->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row margin-bottom-30">
		<div class="col-md-9 mb-margin-bottom-30">
            <div class="headline"><h2>Formulario de contacto</h2></div>
            <p>Para contactar con nosotros rellene el formulario de contacto o envíe un mail a <a href="mailto:corporative@nexocargo.com" class="">corporative@nexocargo.com</a>.</p>
			 <div class="panel panel-blue margin-bottom-40">
                
                <div class="panel-body">                                                      
                    <form id="contact" class="contact_form margin-bottom-40" role="form" action="./backend/sendForm.php" method="post">
                      <?php if (isset($_GET['status'])){
                           if (strcmp($_GET['status'],"sent")==0){
                             echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>��</button>Formulario enviado correctamente.</div>";
                           } else {
                             echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>��</button>Error al enviar el formulario.</div>";
                           }
                      }
                      ?>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input name="nombre" class="form-control" type="text" required id="nombre" placeholder="Nombre" />
                        </div>
                        <div class="form-group">
                            <label for="primerApellido">Primer apellido:</label>
                            <input name="primerApellido" class="form-control" type="text" id="primerApellido" placeholder="primerApellido" />
                        </div>
                        <div class="form-group">
                            <label for="segundoApellido">Segundo apellido:</label>
                            <input name="segundoApellido" class="form-control" type="text" id="segungoApellido" placeholder="Segundo Apellido" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="tu@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="empresa">Sitio Web:</label>
                            <input name="empresa" class="form-control" type="text" id="empresa" placeholder="Empresa" />
                        </div>
                        
                        <!--Textarea-->
                        <div class="form-group">
                            <h4>Mensaje:</h4>
                            <br>
                            <textarea name="mensaje" class="form-control" cols="40" rows="6" required id="mensaje"></textarea>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input id="acepto" type="checkbox" name="acepto" value="acepto" required> Acepto los <a href="politicadeprivacidaddedatos.html">términos y condiciones</a>  
                            </label>
                        </div>
                        <button type="submit" class="btn-u btn-u-blue">Enviar</button>
                    </form>
                </div>
            </div>

        </div><!--/col-md-9-->
        
		<div class="col-md-3">

            <!-- Social Icons -->
            <div class="magazine-sb-social margin-bottom-30">
                <div class="headline headline-md"><h2>Síguenos en:</h2></div>
                <ul class="social-icons social-icons-color">
                    <!--<li><a class="social_rss" data-original-title="Feed" href="#"></a></li>
                    <li><a class="social_facebook" data-original-title="Facebook" href="#"></a></li>-->
                    <li><a class="social_twitter" data-original-title="Twitter" href="https://twitter.com/nexocargo" target="_blank"></a></li>
                    
                    <!--<li><a class="social_googleplus" data-original-title="Goole Plus" href="#"></a></li>
                    <li><a class="social_pintrest" data-original-title="Pinterest" href="#"></a></li>-->
                    <li><a href="http://www.flickr.com/photos/nexocargo/" target="_blank" data-original-title="Flickr" class="social_flickr"></a></li>
                    <!--<li><a class="social_xing" data-original-title="Xing" href="#"></a></li>-->
                    <li><a class="social_linkedin" data-original-title="Linkedin" href="#" target="_blank"></a></li>
                    <li><a class="social_vimeo" data-original-title="Vimeo" href="https://vimeo.com/nexocargo" target="_blank"></a></li>
                    <!--
                    <li><a class="social_dropbox" data-original-title="Dropbox" href="#"></a></li>
                    <li><a class="social_picasa" data-original-title="Picasa" href="#"></a></li>
                    <li><a class="social_spotify" data-original-title="Spotify" href="#"></a></li>
                    <li><a class="social_jolicloud" data-original-title="Jolicloud" href="#"></a></li>
                    <li><a class="social_wordpress" data-original-title="Wordpress" href="#"></a></li>
                    <li><a class="social_github" data-original-title="Github" href="#"></a></li>-->
                    
                </ul>
                <div class="clearfix"></div>                
            </div>
            <!-- End Social Icons -->
        	<!-- Contacts -->
            <div class="headline"><h2>Datos de contacto:</h2></div>
            <ul class="list-unstyled who margin-bottom-30">
                <li><a href="#"><i class="fa fa-home"></i><b>CEEI Aragón</b></a>
                <br/ ><a href="#">Calle María de Luna, 11</a>
                <br/ ><a href="">Ed. principal, Espacio Talentum,</a>
                <br/ ><a href="#">50018 Zaragoza, España</a></li>
                <li><a href="mailto:nexocargo@nexocargo.com" class=""><i class="fa fa-envelope"></i>nexocargo@nexocargo.com</a></li>
                <li><a href="#"><i class="fa fa-phone"></i>(+34) 976 733 500</a></li>
                <li><a href="index.html"><i class="fa fa-globe"></i>http://www.nexocargo.com</a></li>
            </ul>

            
        	<!-- Business Hours -->
            <div class="headline"><h2>Horario de oficina:</h2></div>
            <ul class="list-unstyled margin-bottom-30">
                <li><strong>De lunes a jueves:</strong> de 8,00h a 15,00h</li>
                <li><strong>Viernes</strong> de 10,00h a 13,00h</li>
                <li><strong>Sábados y domingos:</strong> Cerrado</li>
                
            </ul>
            <!-- End Business Hours -->

            <!-- Business Hours -->
            <div class="headline"><h2>Horario de atención:</h2></div>
            <ul class="list-unstyled margin-bottom-30">
                <li><strong>De lunes a domingo:</strong> 24 horas</li>
                
            </ul>
            <!-- End Business Hours -->

            

            
        </div><!--/col-md-3-->
    </div><!--/row-->        

    
</div><!--/container-->		
<!--=== End Content Part ===-->

<!--=== Footer ===-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 md-margin-bottom-40">
                <!-- About -->
                <div class="headline"><h2>Nexocargo</h2></div>  
                <p class="margin-bottom-25 md-margin-bottom-40">Inteligencia y tecnología al servicio de la logística y la carga aérea.</p> 
                </br>
                <div class="headline"><h2>Miembro del programa:</h2></div>
                <p align="center"><img src="assets/img/pie/talentum.png" width="220px"></p>

                <!-- Monthly Newsletter -->
                <!--<div class="headline"><h2>Newsletter</h2></div> 
                <p>Subscribase a nuestro newsletter y permanezca informado de nuestras últimas noticias e hitos. </p>
                <form class="footer-subsribe">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="introduzca aquí su e-mail">                            
                        <span class="input-group-btn">
                            <button class="btn-u" type="button">Subscribirse</button>
                        </span>
                    </div><!-- /input-group -->                    
                <!--</form> -->                 
            </div><!--/col-md-4-->  
            
            <div class="col-md-4 md-margin-bottom-40">
                <!--<div class="posts">-->
                    <div class="headline"><h2>Con el apoyo de:</h2></div>
                    <p align="center"><img src="assets/img/pie/logo_telefonica.png" width="210px"></p></br>
                    
                    <div class="headline"><h4>Otros apoyos:</h4></div>
                    <p align="center"><img src="assets/img/pie/logo_CEEI.png" width="150px"></p>
                    <!--<dl class="dl-horizontal">
                        <dt><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="assets/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="assets/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                </div>-->
            </div><!--/col-md-4-->

            <div class="col-md-4">
                <!-- Monthly Newsletter -->
                <div class="headline"><h2>Contacta con nosotros</h2></div>  
                <address class="md-margin-bottom-40">
                    <b>CEEI Aragón</b> <br/>
                    Calle María de Luna, 11,  <br/>
                    Ed. principal, Espacio Talentum, <br />
                    50018 Zaragoza, Spain <br />
                    <br/>
                    Teléfono: (+34) 976 733 500 <br />
                    E-mail: <a href="mailto:nexocargo@nexocargo.com" class="">nexocargo@nexocargo.com</a>
                </address>

                <!-- Stay Connected -->
                <div class="headline"><h2>Social media </h2></div>  
                <ul class="social-icons">
                    <!--<li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                    <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>-->
                    <li><a href="https://twitter.com/nexocargo" target="_blank" data-original-title="Twitter" class="social_twitter"></a></li>
                    <li><a href="http://www.flickr.com/photos/nexocargo/" target="_blank" data-original-title="Flickr" class="social_flickr"></a></li>
                    <!--<li><a href="#" target="_blank" data-original-title="Xing" class="social_xing"></a></li>-->
                    <li><a href="http://www.linkedin.com/company/nexocargo" target="_blank" data-original-title="Linkedin" class="social_linkedin"></a></li>
                    <li><a href="https://vimeo.com/nexocargo" target="_blank" data-original-title="Vimeo" class="social_vimeo"></a></li>
                </ul>
            </div><!--/col-md-4-->
        </div><!--/row-->   
    </div><!--/container--> 
</div><!--/footer-->    
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-10">                     
                <p class="copyright-space">
                    2014 &copy; Nexocargo. Todos los derechos reservados. 
                    <a href="avisolegal.html">Aviso legal</a> | <a href="politicadeprivacidaddedatos.html">Política de privacidad de datos</a>
                </p>
            </div>
            <div class="col-md-2">  
                <p align="right"><img src="assets/img/pie/logo_pie.png" width="120px"</p>
            </div>
        </div><!--/row-->
    </div><!--/container--> 
</div><!--/copyright--> 
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->           
<script async src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script async src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/hover-dropdown.min.js"></script> 
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/contact.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();                
        Contact.initMap();        
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->

</body>
</html> 