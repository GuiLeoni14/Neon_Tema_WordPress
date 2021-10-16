<?php 
    // template name: Pagina nao encontrada
?>
<?php get_header();?>
<section class="s-page-not-found">
    <div class="container">
        <h1>Ops... Página não encontrada...</h1>
        <p>Clique no botão abaixo para voltar para a home!</p>
        <a href="<?php echo get_home_url(); ?>" class='btn btn-primary' >Voltar para a home</a>
    </div>
</section>
<?php get_footer();?>