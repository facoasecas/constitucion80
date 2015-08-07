<section id="redes">
<div class="container">
<div class="row">

	<div class="col-sm-12">
	<h3>Te invitamos a seguirnos en <a href="#" class="twitter">Twitter</a></h3>
	<h5>Hace 34 minutos publicamos:</h5>
	<p><a href="#">Gobierno NM posterga "para 2016" el  compromiso de cambiar el cuestionado reglamento de "consulta indígena" de proyectos inversión.</a></p>
	</div><!--.col-->
	
	<div class="col-md-6 col-sm-12"><h4>TAMBIÉN PUEDES SEGUIRNOS EN</h4></div><!--.col-->
	
	<div class="col-md-3 col-sm-6"><h4><a href="#" class="facebook"><i class="fa fa-facebook-square"></i> FACEBOOK</a></h4></div><!--.col-->
	
	<div class="col-md-3 col-sm-6"><h4><a href="#" class="youtube"><i class="fa fa-youtube-square"></i> YOUTUBE</a></h4></div><!--.col-->
	
	<div class="clearfix visible-xs-block visible-sm-block visible-md-block visible-lg-block"></div><!--.clearfix-->

</div><!--.row-->
</div><!--.container-->
</section><!--#redes-->

<section id="metricas">
<div class="container">
<div class="row">

	<div class="col-sm-6 col-md-3">
	<h3>TEMAS</h3>
	<ul>
	<li><a href="archivo-tematica.php">PODER Y POLÍTICA</a></li>
	<li><a href="archivo-tematica.php">CIUDAD Y TERRITORIO</a></li>
	<li><a href="archivo-tematica.php">TRABAJO Y PREVISIÓN SOCIAL</a></li>
	<li><a href="archivo-tematica.php">DERECHOS CIVILES</a></li>
	<li><a href="archivo-tematica.php">SALUD</a></li>
	<li><a href="archivo-tematica.php">EDUCACIÓN</a></li>
	<li><a href="archivo-tematica.php">CULTURA</a></li>
	<li><a href="archivo-tematica.php">RECURSOS Y MEDIO AMBIENTE</a></li>
	</ul>
	</div>

	<div class="col-sm-6 col-md-3">
	<h3>ACTUALIDAD</h3>
	<ul>
	<li><a href="noticia.php">Aenean lacinia arcu eleifend velit convallis pretium</a> por Nombre Apellido</li>
	<li><a href="noticia.php">Morbi vel risus et elit efficitur volutpat vitae quis tortor</a> por Nombre Apellido</li>
	<li><a href="noticia.php">Sed mattis augue in enim fringilla tincidunt</a> por Nombre Apellido</li>
	<li><a href="noticia.php">Nam sit amet massa eu enim posuere placerat</a> por Nombre Apellido</li>
	<li><a href="noticia.php">Pellentesque volutpat purus et augue bibendum, eu vehicula felis porta</a> por Nombre Apellido</li>
	<li><a href="archivo-noticia.php">VER ARCHIVO</a></li>
	</ul>
	</div>

	<div class="col-sm-6 col-md-3">
	<h3>OPINIÓN</h3>
	<ul>
	<li><a href="articulo.php">Cras hendrerit lorem et dolor venenatis cursus</a> por Nombre Apellido</li>
	<li><a href="articulo.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a> por Nombre Apellido</li>
	<li><a href="articulo.php">Proin sollicitudin urna at turpis gravida rhoncus</a> por Nombre Apellido</li>
	<li><a href="articulo.php">In malesuada quam id scelerisque imperdiet</a> por Nombre Apellido</li>
	<li><a href="articulo.php">Fusce scelerisque diam semper feugiat gravida</a> por Nombre Apellido</li>
	<li><a href="archivo-articulo.php">VER ARCHIVO</a></li>
	</ul>
	</div>

	<div class="col-sm-6 col-md-3">
	<h3>HISTORIA</h3>
	<ul>
	<li><a href="historia.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean massa nunc</a> por Nombre Apellido</li>
	<li><a href="historia.php">Nulla euismod, nunc sed condimentum cursus, augue purus malesuada volutpat</a> por Nombre Apellido</li>
	<li><a href="historia.php">Aliquam ut nisl est. Maecenas cursus ipsum id erat tristique, in cras amet</a> por Nombre Apellido</li>
	<li><a href="archivo-historia.php">VER ARCHIVO</a></li>
	</ul>
	</div>

	<div class="clearfix visible-xs-block visible-sm-block visible-md-block visible-lg-block"></div>

</div><!--.row-->
</div><!--.container-->
</section><!--#metricas-->



<footer>
<div class="container">
<div class="row">

	<div class="col-sm-12">
	<p>Este obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">licencia de Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional</a>.</p>
	</div>

	<div class="col-sm-6">
	<address><?echo $title;?><br />
	Dato de dirección<br />
	</address>
	</div>

	<div class="col-sm-3">Apoyado por…</div>

	<div class="col-sm-3">Apoyado por…</div>

	<div class="clearfix visible-xs-block visible-sm-block visible-md-block visible-lg-block"></div>


</div><!--row-->
</div><!--container-->
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>    
<script src="js/jquery.easing.min.js"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
</script>


</body>
</html>