<?php get_header() ?>



<?php 

    $args = array(
        "post_type" => array("producto"),
        "posts_per_page" => -1
    );

    $productos = new WP_Query($args);
?>

<div class="productos-container">
    <?php if($productos->have_posts()){ ?>
        <?php while($productos->have_posts()){ $productos->the_post();?>
        <div class="card_product mx-auto d-block">
            <?php the_post_thumbnail("post-thumbnail") ?>
            <div class="caption">
                <div class="desc">
                    <a class="" href="<?php the_permalink();?>">
                        <h2 class="card_titulo"><?php the_title(); ?></h2>
                    </a>
                    <p class="description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
            </div>
        </div>
        
        <?php } ?>
    <?php } else { ?>
        <!-- <div class="productos-container"> -->
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto1.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a class="" href="#">
                                <h2 class="card_titulo">Producto 1</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto10.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a class="" href="#">
                                <h2 class="card_titulo">Producto 2</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto3.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a href="#">
                                <h2 class="card_titulo">Producto 3</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto4.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a class="" href="#">
                                <h2 class="card_titulo">Producto 4</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto5.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a href="#">
                                <h2 class="card_titulo">Producto 5</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto6.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a class="" href="#">
                                <h2 class="card_titulo">Producto 6</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto7.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a href="#">
                                <h2 class="card_titulo">Producto 7</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto8.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a class="" href="#">
                                <h2 class="card_titulo">Producto 8</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto9.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a href="#">
                                <h2 class="card_titulo">Producto 9</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto10.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a href="#">
                                <h2 class="card_titulo">Producto 10</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto11.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a href="#">
                                <h2 class="card_titulo">Producto 11</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto12.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a href="#">
                                <h2 class="card_titulo">Producto 12</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto13.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a class="" href="#">
                                <h2 class="card_titulo">Producto 13</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_product">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/producto14.jpg" alt="producto 1">
                    </figure>
                    <div class="caption">
                        <div class="desc">
                            <a href="#">
                                <h2 class="card_titulo">Producto 14</h2>
                            </a>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
            <!-- </div> -->

            <?php } ?>
</div>



<?php get_footer() ?>