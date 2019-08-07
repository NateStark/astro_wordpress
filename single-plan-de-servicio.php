<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php optimize_mikado_get_title(); ?>
<?php get_template_part('slider'); ?>
<style type="text/css">

#gform_submit_button_4{
	background: #212529;
    width: 50%;
    padding: 10px;
    color: white;
    border: none;
    margin: auto;
    display: table;
    font-size: 18px;
}
#faq{
	width: 100%;
}
.imagen_principal{
	margin-bottom: 20px;
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="banner" style="background: #6dab3c; padding:50px; color: white;">
 <h2 style="text-align: center; font-weight: bold; font-family: 'Bai Jamjuree' !important;" > Descubre más acerca del Plan <?php echo types_render_field("nombre-del-paquete-de-servicio")?> </h2>
</div>
	<div class="mkdf-container">
		<?php do_action('optimize_mikado_after_container_open'); ?>
		<div class="mkdf-container-inner">

			<div class="row">
	<div class="col-md-6">

		  <!-- Imagen Principal -->
				  <section id="principal">
		<div class="imagen_principal">
				 <?php echo types_render_field( "imagen-del-plan-de-servicio")?>
			</div>
			</section>
				 <!-- Imagen Principal  -->

<h2 style="text-align: center; font-weight: bold;">Preguntas Frecuentes</h2>
<br>
<!-- Pregunta 1 -->
<section id="faq">
<button class="accordion">¿Para quien se recomienda este plan? </button>
<div class="panel">
  <p><?php echo types_render_field( "pregunta-frecuente-1")?></p>
</div>
</section>
<!-- Pregunta 1 -->

<!-- Pregunta 2 -->
<section id="faq">
<button class="accordion">¿Cómo se si este plan es para mí? </button>
<div class="panel">
    <p><?php echo types_render_field( "pregunta-frecuente-2")?></p>
</div>
</section>
<!-- Pregunta 2 -->

<!-- Pregunta 3 -->
<section id="faq">
<button class="accordion">¿Cuáles servicios están incluidos? </button>
<div class="panel">
    <p><?php echo types_render_field( "pregunta-frecuente-3")?></p>
</div>
</section>
<!-- Pregunta 3 -->

<!-- Pregunta 4 -->
<section id="faq">
<button class="accordion">¿Cuando debería incluir este plan dentro de mi estrategia? </button>
<div class="panel">
    <p><?php echo types_render_field( "pregunta-frecuente-4")?></p>
</div>
</section>
<!-- Pregunta 4 -->


	</div>

	<div class="col-md-6">
		<!-- Formulario de solicitud del servicio -->
			<div class="formulario-servicio" style="background:#576574; color:white; padding:30px; border-radius: 30px; ">
				<h3 style="text-align: center; font-weight: bold;font-family: 'Bai Jamjuree' !important;">¿Te interesa este servicio? Escríbenos </h3>
			<?php gravity_form( 4, false, false, false, '', false ); ?>
			</div>
		<!-- Formulario de solicitud del servicio -->

		
			</div>
			<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  font-family: "Bai Jamjuree" !important;
}
.accordion_plan{
  color: #f8f9fa;
    border: none;
    text-align: center;
    font-size: 25px;
    font-weight: 500;
    transition: 0.4s;
    margin-bottom: 30px;
    background: #6dab3c;
    padding: 20px;
    border-radius: 25px;
    width: 100%;
     font-family: "Bai Jamjuree" !important;
}

.pdf_plan {
  color: #f8f9fa;
    border: none;
    text-align: center;
    font-size: 25px;
    font-weight: 500;
    transition: 0.4s;
    margin-bottom: 30px;
    background: #6dab3c;
    padding: 20px;
    border-radius: 25px;
    width: 100%;
    margin: auto;
    display: table;
     font-family: "Bai Jamjuree" !important;
}
.pdf_plan:hover {  
   background-color: #4d762c; 
  text-decoration: none;
  color: white;
}
.active, .accordion:hover {  
  background-color: #ccc; 
}
.active, .accordion_plan:hover {  
  background-color: #4d762c; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
body .gform_wrapper div.gform_body ul.gform_fields li.gfield.gfield_html{
	width: 100% !important;
}
li#field_4_14{
	margin-top:-25px !important;
}
</style>
</head>
<body>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
var acc = document.getElementsByClassName("accordion_plan");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() { 
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

</script>
</div>
<div class="seccion-boton-regreso row" style="text-align: center; margin-top: 80px;">
	<div class="col-md-3">
	</div>
	<div class="boton_regreso col-md-6">
		<a href="dev.webtus.net/paquetes-de-servicio" style="background: #82b842;padding: 30px;border-radius: 50px;color: white;"> <i class="fas fa-undo-alt"></i> Regresar al listado de paquetes</a>
	</div>
	<div class="col-md-3">
	</div>

		<?php do_action('optimize_mikado_before_container_close'); ?>
	</div>
	
			<p> Cambios de prueba</p>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>

