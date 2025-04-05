<?php if(isset($heroContent)): ?>
<section class="hero" style="background-image: url('<?php echo $baseUrl; ?>assets/images/<?php echo $heroImage; ?>')">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1><?php echo $heroTitle; ?></h1>
            <?php if(isset($heroSubtitle)): ?>
                <p><?php echo $heroSubtitle; ?></p>
            <?php endif; ?>
            <?php if(isset($heroBtnText) && isset($heroBtnLink)): ?>
                <a href="<?php echo $heroBtnLink; ?>" class="btn btn-primary"><?php echo $heroBtnText; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>