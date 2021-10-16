<?php 
    // template name: Home
?>
<?php get_header();?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="s-hero">
        <div class="container">
            <div class="text" data-aos="fade-right">
                <h3><?php the_field('subtitulo_section_hero') ?></h3>
                <h1><?php the_field('titulo_section_hero') ?></h1>
                <a href="" class="btn-primary"><?php the_field('texto_do_botao_abra_sua_conta_digital') ?></a>
                <ul>
                <?php if( have_rows('cadastrar_itens_da_section_hero') ): while ( have_rows('cadastrar_itens_da_section_hero') ) : the_row(); ?>
                <li>
                    <div class="icon"><img src="<?php the_sub_field('icone_item')?>" alt=""></div>
                    <span><?php the_sub_field('texto_item') ?></span>
                </li>
                <!-- Sub-campos do repetidor :  /-->

                <?php endwhile; else : endif;?>
                </ul>
            </div>
            <div class="area-image">
                <h2 data-aos="fade-left"><?php the_field('texto_do_banco_100_digital') ?></h2>
                <div class="image" data-aos="zoom-in">
                    <img src="<?php echo get_template_directory_uri() ?>/img/card-neon-frnt.png" class="card-front" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/card-neon-back.png" class="card-back" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/circle-cards-neon.svg" class="circle" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="s-card-neon">
        <div class="container">
            <div class="left-area">
                <div class="ilustra-mockup">
                    <img src="<?php echo get_template_directory_uri() ?>/img/circle-mockup.svg" class="circle" alt="" data-aos="fade-left">
                    <img src="<?php echo get_template_directory_uri() ?>/img/mockup.svg" class="mockup" alt="" data-aos="flip-left">
                </div>
                <div class="text" data-aos="fade-up">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-neon.svg" alt="">
                    </div>
                    <div class="info-txt">
                        <h3><?php the_field('baixe_o_nosso_app')?></h3>
                        <p><?php the_field('descricao_baixe_o_app')?></p>
                        <ul>
                            <li><a href="<?php the_field('url_app_store') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/apple-store.svg" alt=""></a></li>
                            <li><a href="<?php the_field('url_google_play_copiar') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/google-play.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-area">
                <div class="main-text"  data-aos="fade-left">
                    <h2><?php the_field('titulo_section_app_neon')?></h2>
                    <ul>
                        <?php if( have_rows('cadastrar_beneficios') ): while ( have_rows('cadastrar_beneficios') ) : the_row(); ?>
                            <li>
                                <div class="info">
                                    <img src="<?php the_sub_field('icone_beneficio')?>" class="icon" alt="">
                                    <div class="txt">
                                        <h3><?php the_sub_field('titulo_beneficio')?></h3>
                                        <p><?php the_sub_field('descricao_beneficio')?></p>
                                    </div>
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="">
                            </li>
                        <?php endwhile; else : endif;?>
                    </ul>
                    <a href="" class="btn"><?php the_field('testo_botao_conheca_outros_produtos')?></a>
                </div>
                <div class="box-card"  data-aos="fade-left">
                    <div class="text">
                        <h2><?php the_field('titulo_pj')?></h2>
                        <h3><?php the_field('subtitulo_pj')?></h3>
                        <p><?php the_field('descricao_pj')?></p>
                        <div class="btns">
                            <a href="<?php the_field('link_botao_mei')?>" class="btn-primary"><?php the_field('texto_botao_mei')?></a>
                            <a href="<?php the_field('link_botao_me')?>" class="btn-primary"><?php the_field('texto_botao_me')?></a>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/img/card-front-pj.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="s-depoimentos">
        <div class="container">
            <div class="top"  data-aos="fade-right">
                <h2><span><?php the_field('titulo_principal_depoimentos')?></span><?php the_field('titulo_secundario_depoimentos')?></h2>
                <div class="swiper-pagination"></div>
            </div>
            <div class="slide-depoimentos"  data-aos="fade-up">
                <div class="swiper-wrapper">
                    <?php if( have_rows('cadastrar_depoimentos') ): while ( have_rows('cadastrar_depoimentos') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="card-depoimento">
                                <div class="user">
                                    <strong><?php the_sub_field('usuario_depoimentos')?></strong>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/icon-twiiter.svg" alt="">
                                </div>
                                <p>
                                    <?php the_sub_field('texto_depoimentos')?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; else : endif;?>
                </div>
            </div>
        </div>
    </section>
    <section class="s-conta-digital">
        <div class="container">
            <div class="text"  data-aos="fade-right">
                <h2><span><?php the_field('titulo_conta_digital')?></span><?php the_field('subtitulo_conta_digital')?></h2>
                <ul>
                    <?php if( have_rows('cadastrar_itens_conta_digital') ): while ( have_rows('cadastrar_itens_conta_digital') ) : the_row(); ?>
                        <li>
                            <div class="icon">
                                <img src="<?php the_sub_field('icone_item')?>" alt="">
                            </div>
                            <div class="info">
                                <h4><?php the_sub_field('titulo_item_conta_digital')?></h4>
                                <p><?php the_sub_field('descricao_item_conta_digital')?></p>
                            </div>
                        </li>
                    <?php endwhile; else : endif;?>
                </ul>
                <a href="" class="btn-primary"><?php the_field('texto_botao_conta_digital')?></a>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() ?>/img/mockup-01.svg" class="mockup-01" alt=""  data-aos="fade-up">
                <img src="<?php echo get_template_directory_uri() ?>/img/mockup-02.png" class="mockup-02" alt=""  data-aos="fade-down">
                <img src="<?php echo get_template_directory_uri() ?>/img/circle-conta-digital.svg" class="circle" alt=""  data-aos="zoom-in">
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; ?>    
<?php get_footer();?>