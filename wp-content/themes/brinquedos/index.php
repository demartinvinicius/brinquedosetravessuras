<?php get_header(); ?>




<body>

<!-- opens wrapper div -->
<div id="wrapper">

	<!-- opens logo div -->
	<div id="logo">
		<a href="<?php echo home_url(); ?>"></a>
	</div>
	<!-- closes logo div -->
	
	<!-- opens menu div -->
	<div id="menu">
		
		<div id="menu1"><a href="http://www.brinquedosetravessuras.com.br/?page_id=899"><p>Quem Somos</p></a></div>
		<?php
			$argumentos = array(
				'parent' => 0,
				'number' => 5,
				'hide_empty' => 0,
				'orderby' => 'slug' );
			$categorias = get_categories($argumentos);
			$cont = 2;
			foreach ($categorias as $categ) {
				echo '<div id="menu'.$cont.'"><a href="'.get_category_link	($categ->cat_ID).'"><p>'.$categ->name.'</p></a></div>';
				$cont = $cont + 1;
			}
		?>
		
		
	</div>
	<!-- closes menu div -->
	
	<!-- opens slider div -->
	<!-- <div id="slider"> -->
	<!-- <h1>Colocar um slider</h1> -->
	<!-- <p>Jquery???</p> -->
	<!-- </div> -->
	<!-- closes slider div -->
	
	
	<!-- opens conteudo div -->
	<div id="conteudo">
	<div id="posts">
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				if ( (! is_singular()) && ( ! is_front_page() )) {
					echo '<a href="';
					the_permalink();
					echo '"><h1>';
					the_title();
					echo '</h1></a>';
				}
				else {
					echo '<h1>';
					the_title();
					echo '</h1>';
				}
				
				if ( is_singular() || is_front_page() ) {
					the_content();
					$myposid = get_the_ID();
				}
				else {
					the_excerpt();
					$myposid = get_the_ID();
				}
			}
		}
		else {
			echo('Desculpe mas não há nada a mostrar!');
		}
		?>		
		
	</div>
	<!-- closes posts div -->
	
	<div id="barralateral">
		<ul class="menulateral" name="menulateral">

		
		<?php
			/* Processa o menu lateral de forma dinâmica */
			if ( is_page() ) { // É uma página fixa ?
				/* Vamos verificar se a página atual tem filhas */
				$my_wp_query = new WP_Query();
				$filhas = $my_wp_query->query(array('post_type' => 'page', 'post_parent' => $page_id));
				
				
				if( count($filhas)>0 ) {  
						foreach ($filhas as $filhax) {
							echo '<a href="'.get_permalink($filhax->ID).'" title="'.$filhax->post_title.'"><li>'.substr($filhax->post_title,0,20).'</li></a>';
						}
				}
				
				/* Vamos verificar se a página atual tem uma mãe*/
				$mother = get_post_ancestors( $page_id );
				if ( count($mother) > 0 ) {
					$titulomae = get_post($mother[0])->post_title;
					echo '<a href="'.get_permalink($mother[0]).'" title="'.$titulomae.'"><li>'.substr($titulomae,0,20).'</li></a>';
				}
					
					
			}
			else {
				// Vamos verificar se há categorias filhas.
				$argcat = array("hide_empty" => 1,
								"parent" => intval((get_the_category($myposid)[0]->cat_ID)));
				$catfilhas = get_categories ($argcat);
				if ( count($catfilhas)>0 ) {
					foreach ($catfilhas as $catfilhax) {
						echo '<a href="'.get_category_link($catfilhax->cat_ID).'" title="'.$catfilhax->cat_name.'"><li>'.substr($catfilhax->cat_name,0,20).'</li></a>';
					}
				}
				
			}
		?>
			
		
		
		
		</ul>
	</div>
	</div>
	<!-- opens rodape div -->
	<div id="rodape">
	</div>
	<!-- closes rodape div -->
	

</div>


</body>

</html>
