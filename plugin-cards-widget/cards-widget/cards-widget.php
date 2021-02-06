<?php
/*
Plugin name: Cards widget
Plugin URI: https://wordpress.org/plugins
Description: Widget que exibe um conteúdo em destaque
Author: Marco Venicio
Version: 1.0
Author URI: https://youtube.com/ricardosanches
*/

// registrar o widget
add_action('widgets_init', function() {
    register_widget('Card');
});

class Card extends WP_Widget {
    //Método construtor de classes
    public function __construct()
    {
        $widget_ops = array(
            'class' => 'card',
            'descrption' => 'exibe um card com imagem'
        );
        //nome e as opções
        parent::__construct('card', 'Card', $widget_ops);
         // adiciona scripts para enviar imagem
         add_action( 'admin_enqueue_scripts', array( $this, 'assets') );
    }

    //método que motra a saida no front-end
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
                        ?>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>
                                <div class="media post_item">
                                <img src="<?php echo esc_url( $instance['image'] ); ?>"width ="80px" alt="post"> 
                                    <div class="media-body">
                                        <a href="<?php echo esc_html($instance['link_url']);?>">
                                            <h3><?php echo esc_html($instance['title']);?></h3>
                                        </a>
                                        <p><?php echo "<p>", getdate()["month"], " ", getdate()["mday"];?></p>
                                    </div>
                                </div>
                            </aside>
                        <?php
        echo $args['after_widget'];
    }
    //método para cadastar no painel admin
    public function form($instance)
    {
        
        $title = '';
        if (!empty($instance['title']))
        {
            $title = $instance['title'];
        }

        $link_url = '';
        if (!empty($instance['link_url']))
        {
            $link_url = $instance['link_url'];
        }

        $image = '';
        if (!empty($instance['image']))
        {
            $image = $instance['image'];
        }

        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'image' ); ?>">
                <?php echo 'Imagem de destaque:'; ?>
            </label>
            <input type="text"
                   class="widefat"
                   id="<?php echo $this->get_field_id( 'image' ); ?>"
                   name="<?php echo $this->get_field_name( 'image' ); ?>"
                   value="<?php echo esc_url( $image ); ?>"
            >
            <button class="button button-primary upload_image_button">Enviar imagem</button>
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>">
                <?php echo 'Título:'; ?>
            </label>
            <input type="text"
                   class="widefat"
                   id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>"
                   value="<?php echo esc_attr( $title ); ?>"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'link_url' ); ?>">
                <?php echo 'Caminho do link:'; ?>
            </label>
            <input type="text"
                   class="widefat"
                   id="<?php echo $this->get_field_id( 'link_url' ); ?>"
                   name="<?php echo $this->get_field_name( 'link_url' ); ?>"
                   value="<?php echo esc_attr( $link_url ); ?>"
            >
        </p>
        <?php

    }
    //método que atualiza o widget
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    public function assets()
    {
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_media();
        wp_enqueue_script(
            'card-media-upload',
            plugin_dir_url(__FILE__) . 'card-media-upload.js',
            array( 'jquery' )
        );
    }
}