# Wordpress Boilerplate

## Introducción
Esta es una plantilla básica, que tiene como objetivo ayudar a la gente que comienza recién a crear plantillas para Wordpress. Incorpora algunas de las últimas tecnologías implementadas por el equipo de Wordpress y también otras que le entregarán a los desarrolladores una base mínima para crear exitosamente un Theme.

### Uso de Paginación
En la versión 1.1 se ha agregado la posibilidad de agregar paginación, para esos casos donde se desea mostrar más de los 10 posts que muestra por defecto Wordpress.

Para utilizar la paginación debemos llamar a la función `the_pagination()`. Y en el caso de utilizar la paginación en un Custom Post Type, deberemos entregar como parámetro el resultado de la búsqueda, así como se especifica en el siguiente código.

~~~html
<?php
	$arg = array(
		'post_type'		 => 'custom_post_name',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
		
		<!-- Aquí agregar contenido a mostrar por el loop -->
	
	<?php } 
?>

<?php the_pagination( $get_arg ); ?>


~~~

Además es importante que dentro de los parámetros de búsqueda sea incorporado el key `paged` junto con el valor `$paged`, para que nuestra paginación pueda funcionar correctamente.

### Uso de Flickity
En la versión 1.3.0 se ha reemplazado Flexslider por [Flickity](https://github.com/metafizzy/flickity/), un versátil plugin de Javascript que contiene menos errores que el anterior, se encuentra más actualizado y además con más opciones de visualización. No depende de jQuery, por ende podremos trabajar en el Front-End con Vanilla JS (Javascript plano), sin tener que depender de otras librerías.

Para obtener información de cómo implementar Flickity, por favor revisar la [documentación](https://flickity.metafizzy.co) correspondiente.


