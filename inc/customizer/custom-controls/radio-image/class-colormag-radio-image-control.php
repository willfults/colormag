<?php

/**
 * Extend WP_Customize_Control for radio image section.
 *
 * Class ColorMag_Radio_Image_Control
 *
 * @since 1.3.6
 */
class ColorMag_Radio_Image_Control extends WP_Customize_Control {

	public function render_content() {

		if ( empty( $this->choices ) ) {
			return;
		}

		$name = '_customize-radio-' . $this->id;
		?>
		<style>
			#colormag-img-container .colormag-radio-img-img {
				border: 3px solid #DEDEDE;
				margin: 0 5px 5px 0;
				cursor: pointer;
				border-radius: 3px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
			}

			#colormag-img-container .colormag-radio-img-selected {
				border: 3px solid #AAA;
				border-radius: 3px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
			}

			input[type=checkbox]:before {
				content: '';
				margin: -3px 0 0 -4px;
			}
		</style>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<ul class="controls" id='colormag-img-container'>
			<?php
			foreach ( $this->choices as $value => $label ) :
				$class = ( $this->value() == $value ) ? 'colormag-radio-img-selected colormag-radio-img-img' : 'colormag-radio-img-img';
				?>
				<li style="display: inline;">
					<label style="margin-left: 0">
						<input <?php $this->link(); ?>style='display:none' type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php
						$this->link();
						checked( $this->value(), $value );
						?> />
						<img src='<?php echo esc_html( $label ); ?>' class='<?php echo $class; ?>' />
					</label>
				</li>
			<?php
			endforeach;
			?>
		</ul>
		<script type="text/javascript">

			jQuery( document ).ready( function ( $ ) {
				$( '.controls#colormag-img-container li img' ).click( function () {
					$( '.controls#colormag-img-container li' ).each( function () {
						$( this ).find( 'img' ).removeClass( 'colormag-radio-img-selected' );
					} );
					$( this ).addClass( 'colormag-radio-img-selected' );
				} );
			} );

		</script>
		<?php
	}

}