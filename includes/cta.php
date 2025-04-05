<?php if(isset($ctaContent)): ?>
<section class="cta">
    <div class="container">
        <h2><?php echo $ctaTitle; ?></h2>
        <div class="cta-btns">
            <?php if(isset($ctaBtnPrimaryText) && isset($ctaBtnPrimaryLink)): ?>
                <a href="<?php echo $ctaBtnPrimaryLink; ?>" class="btn btn-primary"><?php echo $ctaBtnPrimaryText; ?></a>
            <?php endif; ?>
            <?php if(isset($ctaBtnSecondaryText) && isset($ctaBtnSecondaryLink)): ?>
                <a href="<?php echo $ctaBtnSecondaryLink; ?>" class="btn btn-secondary"><?php echo $ctaBtnSecondaryText; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>