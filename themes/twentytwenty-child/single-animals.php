<?php
    get_header();
    main();
    get_footer();
?>


<?php function render_card(){ ?>
<div class="col-sm-12">
    <div class="card mt-3 mb-3">
        <div class="card-body text-center">
            <p class="d-flex justify-content-center">
                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url() ?>" alt="card image">
            </p>
            <h4 class="card-title"><?php echo get_the_title() ?></h4>
            <p class="card-text"><?php echo get_the_content() ?></p>
            <span class="text-success float-right">[ <?php echo get_field('species') ?> ]</span>
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