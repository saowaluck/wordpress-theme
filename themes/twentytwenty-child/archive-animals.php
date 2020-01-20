<?php
    get_header();
    main();
    get_footer();
?>


<?php function render_card(){ ?>
<div class="col-sm-6 col-md-4">
    <div class="card mt-3">
        <div class="card-body text-center">
            <p class="d-flex justify-content-center"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url() ?>" alt="card image"></p>
            <a class="text-decoration-none" href="<?php echo get_permalink()?>" ><h4 class="card-title"><?php echo get_the_title() ?></h4></a>
        </div>
    </div>
</div>
<?php } ?>

<?php function main(){ ?>
<div class="container mt-5 mb-5">
    <h5 class="text-center">ANIMALS</h5>
    <div class="row">
    <?php
        while( have_posts() ):
            the_post();
            render_card();
        endwhile;
    ?>
    </div>
</div>
<?php } ?>