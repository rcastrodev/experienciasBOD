<?php

/**
 * products View Class
 *
 * @author 		MojofyWP
 * @package 	includes/products
 * 
 */

if ( !class_exists( 'WRSL_Products_View' ) ) {
    class WRSL_Products_View
    {
        /**
         * Hook prefix
         *
         * @access private
         * @var string
         */
        private  $_hook_prefix = null ;
        /**
         * Class Constructor
         *
         * @access private
         */
        function __construct()
        {
            // setup variables
            $this->_hook_prefix = wrsl()->plugin_hook() . 'products/view/';
        }
        
        /**
         * Render single box
         *
         * @access public
         */
        public function render_single_box( $args = array() )
        {
            global  $woorousell_fs ;
            $defaults = array(
                'widget_id'             => 'wrsl_products_0',
                'id'                    => 0,
                'widget_bg'             => '',
                'col_bg'                => '#f5f5f5',
                'box_style'             => 'style-1',
                'text_style'            => 'regular',
                'show_media'            => true,
                'show_titles'           => true,
                'show_excerpts'         => true,
                'show_price'            => true,
                'show_badges'           => true,
                'show_ratings'          => true,
                'excerpt_length'        => 200,
                'show_buy_button'       => true,
                'content_align'         => 'text-left',
                'show_header'           => false,
                'show_button_in_img'    => false,
                'price_after_ratings'   => true,
                'excerpt_above_ratings' => false,
            );
            $instance = wp_parse_args( $args, $defaults );
            // always show medua
           
            $instance['show_media'] = true;
            extract( $instance );
            // reset overlay settings
            
            if ( $box_style == 'style-2' || $box_style == 'style-4' || $box_style == 'style-8' ) {
                $text_style = 'overlay';
            } else {
                $text_style = 'regular';
            }
            
            /**
             * Set Individual Column CSS
             */
            $column_class = array();
            $column_class[] = 'wrsl-prosingle-wrapper wrsl-prosingle-' . $box_style . ' wrsl-has-thumbnail';
            $column_class[] = ( $this->check_obj_value( $instance, 'content_align' ) ? 'wrsl-' . esc_attr( $content_align ) : '' );
            $column_class[] = ( $text_style == 'overlay' ? 'wrsl-with-overlay' : 'wrsl-not-overlay' );
            $column_class[] = ( '' != $this->check_obj_value( $instance, 'col_bg' ) && 'dark' == wrsl_is_light_or_dark( $this->check_obj_value( $instance, 'col_bg' ) ) ? 'wrsl-invert' : '' );
            $column_class = apply_filters(
                $this->_hook_prefix . 'render_single_box/column_class',
                $column_class,
                $instance,
                $this
            );
            $column_class = implode( ' ', $column_class );
            
            if ( $show_buy_button && $show_media && ($box_style == 'style-3' || $box_style == 'style-6' || $box_style == 'style-7') && $text_style != 'overlay' ) {
                $instance['show_buy_button'] = false;
                $instance['show_button_in_img'] = true;
            }
            
            if ( $box_style == 'style-3' ) {
                $instance['price_after_ratings'] = false;
            }
            if ( 'overlay' == $this->check_obj_value( $instance, 'text_style' ) ) {
                
                if ( $box_style == 'style-3' || $box_style == 'style-2' || $box_style == 'style-4' ) {
                    $instance['show_ratings'] = true;
                } else {
                    $instance['show_ratings'] = false;
                }
            
            }
            if ( $box_style == 'style-4' ) {
                $instance['$excerpt_above_ratings'] = true;
            }
            ob_start();
            ?>
		<div id="<?php 
            echo  $widget_id ;
            ?>-<?php 
            echo  $id ;
            ?>" class="<?php 
            echo  $column_class ;
            ?>">
			<?php 
            // render sale badge
            if ( $show_badges ) {
                $this->render_sale_badge( $instance );
            }
            // render image
            if ( $show_media ) {
                $this->render_image( $instance );
            }
            // render body
            if ( $show_titles || $show_excerpts || $show_ratings || $show_price || $show_buy_button ) {
                $this->render_product_body( $instance );
            }
            ?>
		</div><!-- .wrsl-prosingle -->
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_single_box',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Render product immage
         *
         * @access public
         */
        
         
        public function render_image( $instance = array() )
        {
            extract( $instance );
            ob_start();
            ?>
		<div class="wrsl-prosingle-thumbnail">
			<?php 
			echo "";
            //woocommerce_template_loop_product_thumbnail();
            global $product;
            //print_r($product);
           
            
            $attachment_ids = $product->get_gallery_image_ids();

            foreach( $attachment_ids as $attachment_id ) 
            {
        
              $print= wp_get_attachment_image($attachment_id, 'full');
              break;
        
            }
            if($print){
                echo $print;
                $attributes = $product->get_attributes();
            
            
            if ( ! $attributes ) {
                
            }else{
        
            $display_result = '';
        
            foreach ( $attributes as $attribute ) {
                $conta++;
        
        
                if ( $attribute->get_variation() ) {
                    continue;
                }
                $name = $attribute->get_name();
                if ( $attribute->is_taxonomy() ) {
        
                    $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
        
                    $cwtax = $terms[0]->taxonomy;
        
                    $cw_object_taxonomy = get_taxonomy($cwtax);
        
                    if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                        $tax_label = $cw_object_taxonomy->labels->singular_name;
                    } elseif ( isset( $cw_object_taxonomy->label ) ) {
                        $tax_label = $cw_object_taxonomy->label;
                        if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                            $tax_label = substr( $tax_label, 8 );
                        }
                    }
                    //$display_result .= $tax_label . ': ';
                    $tax_terms = array();
                    foreach ( $terms as $term ) {
                        $single_term = esc_html( $term->name );
                        array_push( $tax_terms, $single_term );
                    }
                    if($conta==1){
                    $display_result .= '<div class="lugarBold ">'.implode(', ', $tax_terms) .  '</div>';
                    }else{
                        $display_result .='<div class="lugarLight">('. implode(', ', $tax_terms) .  ')</div>';
                    }
        
                } else {
                    //$display_result .= $name . ': ';
                    if($conta==1){
                        $display_result .='<div class="lugarBold ">'. esc_html( implode( ', ', $attribute->get_options() ) ) . '</div>';    
                    }else{
                        $display_result .= '<div class="lugarLight">('.esc_html( implode( ', ', $attribute->get_options() ) ) . ')</div>';
                    }
                    
                }
            }
            
            $size = 'woocommerce_thumbnail';

    $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

            echo "<div class='customify-grid' style='margin: 0;'><div class='customify-col-2' style='margin: 0;padding: 0;'><img style='margin-left: 3px;    width: 35px;    margin-right: 3px;    margin-top: 5px;' src='/wp-content/uploads/2020/01/icono-cubiertos.png'/></div><div class='customify-col-6 lugarBoldTitulo ' style='margin: 0;padding: 0;'>".$product->post->post_title."</div><div class='customify-col-4 imgThumbnail' style='margin: 0;padding: 0;'>".$product->get_image( $image_size )."</div></div>";
            
            echo "<div class='customify-grid' style='margin: 0;'><div class='customify-col-2' style='margin: 0;padding: 0;'><img style='margin-left: 3px;    width: 35px;    margin-right: 3px;    margin-top: 5px;' src='/wp-content/uploads/2020/01/icono-pingubicacion.png'/></div><div class='customify-col-6' style='margin: 0;padding: 0;'>".$display_result."</div><div class='customify-col-4' style='margin: 0;padding: 0;'>".$product->get_price_html()."</div></div>";
            }
            }else{
                woocommerce_template_loop_product_thumbnail();
            }
 
            //print_r($product);
            //exit();

            ?>
			<?php 
            
            if ( $show_button_in_img ) {
                ?>
				<div class="wrsl-prosingle-img-button">
					<?php 
                woocommerce_template_loop_add_to_cart();
                ?>
				</div>
			<?php 
            }
            
            // show call to action
            ?>
		</div>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_image',
                ( !empty($html) ? $html : '' ),
                $instance,
                $show_button_in_img,
                $this
            ) ;
        }
        
        /**
         * Render product body
         *
         * @access public
         */
        public function render_product_body( $instance = array() )
        {
            extract( $instance );
            ob_start();
            ?>
		<div class="wrsl-prosingle-body">
			<div class="wrsl-prosingle-overlay">

				<?php 
            if ( $show_titles ) {
                $this->render_product_title( $instance );
            }
            ?>

				<?php 
            if ( $show_excerpts && $excerpt_above_ratings ) {
                $this->render_product_excerpt( $instance );
            }
            ?>

				<?php 
            
            if ( $price_after_ratings ) {
                if ( $show_ratings ) {
                    $this->render_product_rating( $instance );
                }
                // product rating
                if ( $show_price ) {
                    $this->render_product_price( $instance );
                }
                // product price
            } else {
                if ( $show_price ) {
                    $this->render_product_price( $instance );
                }
                // product price
                if ( $show_ratings ) {
                    $this->render_product_rating( $instance );
                }
                // product rating
            }
            
            ?>

				<?php 
            if ( $show_excerpts && !$excerpt_above_ratings ) {
                $this->render_product_excerpt( $instance );
            }
            ?>

				<?php 
            if ( $show_buy_button ) {
                $this->render_button( $instance );
            }
            // show call to action
            ?>
			</div>
		</div>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_product_body',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Render product title
         *
         * @access public
         */
        public function render_product_title( $instance = array() )
        {
            extract( $instance );
            ob_start();
            ?>
		<h4 class="wrsl-prosingle-heading"><a href="<?php 
            the_permalink();
            ?>"><?php 
            the_title();
            ?></a></h4>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_product_title',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Render product excerpt
         *
         * @access public
         */
        public function render_product_excerpt( $instance = array() )
        {
            extract( $instance );
            ob_start();
            ?>
		<div class="wrsl-prosingle-excerpt">
		<?php 
            
            if ( isset( $excerpt_length ) && '' == $excerpt_length ) {
                the_content();
            } else {
                
                if ( isset( $excerpt_length ) && 0 != $excerpt_length && strlen( get_the_excerpt() ) > $excerpt_length ) {
                    echo  substr( get_the_excerpt(), 0, $excerpt_length ) . '&#8230;' ;
                } else {
                    if ( '' != get_the_excerpt() ) {
                        echo  get_the_excerpt() ;
                    }
                }
            
            }
            
            ?>
		</div>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_product_excerpt',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Render product rating
         *
         * @access public
         */
        public function render_product_rating( $instance = array() )
        {
            extract( $instance );
            ob_start();
            ?>
		<div class="wrsl-prosingle-ratings">
			<?php 
            woocommerce_template_loop_rating();
            ?>
		</div>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_product_rating',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Render product price
         *
         * @access public
         */
        public function render_product_price( $instance = array() )
        {
            extract( $instance );
            ob_start();
            ?>
		<div class="wrsl-prosingle-price">
			<?php 
            woocommerce_template_loop_price();
            ?>
		</div>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_product_price',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Render product button
         *
         * @access public
         */
        public function render_button( $instance = array() )
        {
            extract( $instance );
            ob_start();
            ?>
		<div class="wrsl-prosingle-button">
			<?php 
            woocommerce_template_loop_add_to_cart();
            ?>
		</div>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_button',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Render sale badge
         *
         * @access public
         */
        public function render_sale_badge( $instance = array() )
        {
            extract( $instance );
            ob_start();
            ?>
		<div class="wrsl-prosingle-salesbadge">
			<?php 
            woocommerce_show_product_loop_sale_flash();
            ?>
		</div>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_sale_badge',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Render controller
         *
         * @access public
         */
        public function render_controller( $args = array() )
        {
            $defaults = array(
                'widget_id' => null,
                'type'      => 'center',
                'prev_icon' => 'fa-caret-left',
                'next_icon' => 'fa-caret-right',
            );
            $instance = wp_parse_args( $args, $defaults );
            extract( $instance );
            ob_start();
            ?>
		<div class="wrsl-carousel-controller-<?php 
            echo  $type ;
            ?>">
			<button id="#<?php 
            echo  $widget_id ;
            ?>-prev" class="wrsl-carousel-to-prev"><i class="fa <?php 
            echo  $prev_icon ;
            ?>"></i></button>
			<button id="#<?php 
            echo  $widget_id ;
            ?>-next" class="wrsl-carousel-to-next"><i class="fa <?php 
            echo  $next_icon ;
            ?>"></i></button>
		</div>
		<?php 
            $html = ob_get_clean();
            echo  apply_filters(
                $this->_hook_prefix . 'render_controller',
                ( !empty($html) ? $html : '' ),
                $instance,
                $this
            ) ;
        }
        
        /**
         * Check option with isset() and echo it out if it exists, if it does not exist, return false
         *
         * @access public
         */
        public function check_obj_value(
            $obj = NULL,
            $option = NULL,
            $first_key = NULL,
            $second_key = NULL
        )
        {
            // If there is no object found
            
            if ( $obj == NULL || !isset( $obj[$option] ) ) {
                return false;
            } else {
                $obj_option = $obj[$option];
                
                if ( NULL != $first_key ) {
                    
                    if ( !isset( $obj_option[$first_key] ) ) {
                        return false;
                    } elseif ( '' != $obj_option[$first_key] ) {
                        
                        if ( NULL != $second_key ) {
                            
                            if ( !isset( $obj_option[$first_key][$second_key] ) ) {
                                return false;
                            } elseif ( '' != $obj_option[$first_key][$second_key] ) {
                                return $obj_option[$first_key][$second_key];
                            }
                        
                        } elseif ( '' != $obj_option[$first_key] ) {
                            return $obj_option[$first_key];
                        }
                    
                    }
                
                } else {
                    if ( '' != $obj_option ) {
                        return $obj_option;
                    }
                }
            
            }
            
            // end - $obj
        }
        
        /**
         * Render sample
         *
         * @access public
         */
        public function render_sample()
        {
            ob_start();
            ?>

		<?php 
            $html = ob_get_clean();
            echo  apply_filters( $this->_hook_prefix . 'render_sample', ( !empty($html) ? $html : '' ), $this ) ;
        }
    
    }
    // end - class WRSL_Products_View
}

// end - !class_exists('WRSL_Products_View')