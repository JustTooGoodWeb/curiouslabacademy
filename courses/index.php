<?php
$pageTitle = "Courses We Offer";
$baseUrl = '../';
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/mobile-nav.php';

// Hero Section
$heroContent = true;
$heroImage = 'courses.jpg';
$heroTitle = "Courses We Offer";
$heroSubtitle = "We offer a range of courses from science to math, abacus, chess, etc";
$heroBtnText = "Enroll Now";
$heroBtnLink = "../enroll.php";
include '../includes/hero.php';
include '../includes/courses.php';
// Testimonials
include '../includes/testimonials.php';

// CTA Section
$ctaContent = true;
$ctaTitle = "Ready to ignite your child's passion for learning?";
$ctaBtnPrimaryText = "Enroll Now";
$ctaBtnPrimaryLink = "../enroll.php";
$ctaBtnSecondaryText = "Contact Us";
$ctaBtnSecondaryLink = "../contact.php";
include '../includes/cta.php';

// Footer
include '../includes/footer.php';
?>