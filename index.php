<?php
$pageTitle = "Home";
$baseUrl = './';
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/mobile-nav.php';

// Hero Section Variables
$heroContent = true;
$heroImage = 'hero-bg.jpg';
$heroTitle = "Making Learning Fun & Interactive for Kids!";
$heroSubtitle = "CuriousLab Academy offers engaging educational programs that spark curiosity and foster a love for learning.";
$heroBtnText = "Get Started";
$heroBtnLink = "enroll.php";
include 'includes/hero.php';
?>

<!-- About Section -->
<section class="about">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Why CuriousLab Academy?</h2>
                <p>At CuriousLab Academy, we believe learning should be an exciting adventure. Our innovative approach combines interactive lessons, hands-on activities, and engaging content to spark curiosity in young minds.</p>
                <p>Our experienced educators create a nurturing environment where children can explore, experiment, and develop a lifelong love for learning.</p>
                <a href="about.php" class="btn btn-primary">Learn More</a>
            </div>
            <div class="about-image">
                <img src="assets/images/teacher-kids.jpg" alt="Teacher interacting with children">
            </div>
        </div>
    </div>
</section>


<?php
//Courses Section
include 'includes/courses.php';

// Testimonials
include 'includes/testimonials.php';

// CTA Section
$ctaContent = true;
$ctaTitle = "Ready to Make Learning Fun for Your Child?";
$ctaBtnPrimaryText = "Sign Up Now";
$ctaBtnPrimaryLink = "enroll.php";
$ctaBtnSecondaryText = "Contact Us";
$ctaBtnSecondaryLink = "contact.php";
include 'includes/cta.php';

// Footer
include 'includes/footer.php';
?>