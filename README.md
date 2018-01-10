# Wordpress Boilerplate

## Introducción
Esta es una plantilla básica, que tiene como objetivo ayudar a la gente que comienza recién a crear plantillas para Wordpress. Incorpora algunas de las últimas tecnologías implementadas por el equipo de Wordpress y también otras que le entregarán a los desarrolladores una base mínima para crear exitosamente un Theme.

###Uso de Paginación
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