<?php
$pageTitle = "Enrollment Successful";
$baseUrl = './';
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/mobile-nav.php';
?>

<section class="success-section">
    <div class="container">
        <div class="success-container text-center">
            <i class="fas fa-check-circle success-icon"></i>
            <h1>Enrollment Successful!</h1>
            <p class="lead">Thank you for enrolling in CuriousLab Academy.</p>
            
            <?php if (isset($_GET['reference'])): ?>
                <div class="alert alert-success">
                    <p>Your payment reference: <strong><?= htmlspecialchars($_GET['reference']) ?></strong></p>
                    <p>We've sent a confirmation email with further details.</p>
                </div>
            <?php else: ?>
                <p>We'll contact you shortly with further instructions.</p>
            <?php endif; ?>
            
            <a href="courses/" class="btn btn-primary mt-4">View Our Courses</a>
        </div>
    </div>
</section>

<?php
include 'includes/cta.php';
include 'includes/footer.php';
?>