<?php global $theme_options; ?>
<div class="wrap">
	<h2><?php _e( 'Opciones de Paginación', 'dl-page-navigation' ); ?></h2>
	<!-- Plugin Options Form -->
	<form method="post" action="options.php" enctype="multipart/form-data" novalidate>
		<?php
		settings_fields( DLP_ST );
		$options = get_option( DLP_ST );
		?>
		<h2 class="nav-tab-wrapper pag-tabs">
			<a href="#general-options" class="nav-tab general-options nav-tab-active"><?php _e( 'Opciones Generales', DLP ); ?></a>
			<a href="#posts-per-page-taxonomies-option" class="nav-tab posts-per-page-taxonomies-option"><?php _e( 'Opciones de Taxonomías para Artículos', DLP ); ?></a>
		</h2>
		<div class="pag-tabs-content">
			<!-- Plugin Text Options -->
			<div class="general-options">
				<?php if (!$theme_options['bootstrap']['version_3'] && !$theme_options['bootstrap']['version_4']) { ?>
				<div class="pag-settings-field">
					<div class="pag-settings-label">
						<label><?php _e( 'Texto a Primera Página:', DLP ); ?></label>
					</div>
					<div class="pag-settings-input">
						<input type="text" class="regular-text" name="<?php echo DLP_ST; ?>[first_text]" value="<?php echo esc_attr( $options['first_text'] ); ?>" />
					</div>
				</div>
				<div class="pag-settings-field">
					<div class="pag-settings-label">
						<label><?php _e( 'Texto a Última Página:', DLP ); ?></label>
					</div>
					<div class="pag-settings-input">
						<input type="text" class="regular-text" name="<?php echo DLP_ST; ?>[last_text]" value="<?php echo esc_attr( $options['last_text'] ); ?>" />
					</div>
				</div>
				<?php } ?>
				<div class="pag-settings-field">
					<div class="pag-settings-label">
						<label><?php _e( 'Texto a Página Previa:', DLP ); ?></label>
					</div>
					<div class="pag-settings-input">
						<input type="text" class="regular-text" name="<?php echo DLP_ST; ?>[prev_text]" value="<?php echo esc_attr( $options['prev_text'] ); ?>" />
					</div>
				</div>
				<div class="pag-settings-field">
					<div class="pag-settings-label">
						<label><?php _e( 'Texto a Página Siguiente:', DLP ); ?></label>
					</div>
					<div class="pag-settings-input">
						<input type="text" class="regular-text" name="<?php echo DLP_ST; ?>[next_text]" value="<?php echo esc_attr( $options['next_text'] ); ?>" />
					</div>
				</div>
				<?php
				/**
				 * Set default style for pagination option
				 *
				 * @author cdominguez
				 * @since  1.0
				 */
				$DLP_style = isset( $options['style'] ) ? $options['style'] : 'default';
				?>
				<?php if (!$theme_options['bootstrap']['version_3'] && !$theme_options['bootstrap']['version_4']) { ?>
				<div class="pag-settings-field">
					<div class="pag-settings-label">
						<label><?php _e( 'Elige un estilo:', DLP ); ?></label>
					</div>
					<div class="pag-settings-input">
						<select name="<?php echo DLP_ST; ?>[style]">
							<option value="default" <?php selected( $DLP_style, 'default' ); ?>><?php _e( 'Default', DLP ); ?></option>
							<option value="circle" <?php selected( $DLP_style, 'circle' ); ?>><?php _e( 'Circle', DLP ); ?></option>
							<option value="square" <?php selected( $DLP_style, 'square' ); ?>><?php _e( 'Square', DLP ); ?></option>
							<option value="diamond-square" <?php selected( $DLP_style, 'diamond-square' ); ?>><?php _e( 'Diamond Square', DLP ); ?></option>
						</select>
					</div>
				</div>
				<?php } ?>
				<div class="pag-settings-field">
					<div class="pag-settings-label">
						<label><?php _e( 'Alineación de la Navegación:', DLP ); ?></label>
					</div>
					<div class="pag-settings-input">
						<select name="<?php echo DLP_ST; ?>[align]">
							<option value="left" <?php selected( $options['align'], 'left' ); ?>><?php _e( 'Izquierda', DLP ); ?></option>
							<option value="center" <?php selected( $options['align'], 'center' ); ?>><?php _e( 'Centro', DLP ); ?></option>
							<option value="right" <?php selected( $options['align'], 'right' ); ?>><?php _e( 'Derecha', DLP ); ?></option>
						</select>
					</div>
				</div>
			</div>
			<!-- Plugin Posts Per Page Taxonomies Options -->
			<div class="posts-per-page-taxonomies-option">
				<p class="description"><?php _e( 'Fill posts per page for taxonomies your want paging, if field empty we will get default value in "Blog pages show at most"', DLP ); ?></p>
				<p class="description">
					<strong><?php _e( 'Note: All fields of this tab just apply value is number', DLP ); ?></strong></p>
				<br>
				<?php $taxonomies = self::get_all_taxonomies();
				if ( ! empty ( $taxonomies ) ) {
					foreach ( $taxonomies as $name => $tax ) {
						$value = isset ( $options[$name] ) ? $options[$name] : '';
						?>
						<div class="pag-settings-field">
							<div class="pag-settings-label">
								<label><?php echo $tax->labels->name; ?></label>
							</div>
							<div class="pag-settings-input">
								<input type="text" class="regular-text" name="<?php echo DLP_ST; ?>[<?php echo $name; ?>]" value="<?php echo esc_attr( $value ); ?>" />
							</div>
						</div>
					<?php }
				}
				?>
			</div>
		</div>
		<p class="submit">
			<?php submit_button( __( 'Save', DLP ), 'primary', 'submit', false ); ?>
		</p>
	</form>
</div>