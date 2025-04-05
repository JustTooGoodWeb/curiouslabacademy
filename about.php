<?php
$pageTitle = "About Us";
$baseUrl = './';
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/mobile-nav.php';

// Hero Section
$heroContent = true;
$heroImage = 'live-class.jpg';
$heroTitle = "Bringing Learning to Life with Interactive Live Classes!";
$heroSubtitle = "CuriousLabAcademy offers engaging live sessions in Science, Math, and Languages, making learning fun, interactive, and accessible from anywhere in the world.";
$heroBtnText = "Join a Live Class Today";
$heroBtnLink = "enroll.php";
include 'includes/hero.php';
?>

<!-- Who We Are Section -->
<section class="about">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Who We Are</h2>
                <p>CuriousLabAcademy is an innovative online learning platform that offers interactive, instructor-led live classes for children worldwide. Our mission is to make Science, Mathematics, and Languages engaging and accessible through fun, structured, and expert-led lessons.</p>
            </div>
            <div class="about-image">
                <img src="assets/images/virtual-class.jpg" alt="Students interacting with teacher in virtual class">
            </div>
        </div>
    </div>
</section>

<!-- How Our Live Classes Work -->
<section class="process">
    <div class="container">
        <h2>How Our Live Classes Work</h2>
        <div class="process-steps">
            <!-- Step 1 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>1. Explore Courses</h3>
                <p>Browse our diverse course offerings and select the perfect program for your child's interests and age group.</p>
                <ul>
                    <li>Detailed course descriptions</li>
                    <li>Age-appropriate learning paths</li>
                    <li>Free trial class available</li>
                </ul>
            </div>
            
            <!-- Step 2 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>2. Schedule Classes</h3>
                <p>Live classes that are tailored to fit your family's schedule across different time zones.</p>
                <ul>
                    <li>Flexible scheduling options</li>
                    <li>Small class sizes (max 8 students)</li>
                    <li>30-120 minute sessions</li>
                </ul>
            </div>
            
            <!-- Step 3 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <h3>3. Join Live Session</h3>
                <p>Access our interactive virtual classroom with just one click - no complicated software required.</p>
                <ul>
                    <li>Real-time video and audio</li>
                    <li>Interactive whiteboard</li>
                    <li>Screen sharing capabilities</li>
                </ul>
            </div>
            
            <!-- Step 4 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>4. Engage & Learn</h3>
                <p>Participate in dynamic lessons with hands-on activities, games, and collaborative projects.</p>
                <ul>
                    <li>Live Q&A with instructors</li>
                    <li>Breakout rooms for group work</li>
                    <li>Instant feedback and support</li>
                </ul>
            </div>
            
            <!-- Step 5 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <h3>5. Practice & Progress</h3>
                <p>Reinforce learning with fun homework assignments and track your child's progress over time.</p>
                <ul>
                    <li>Interactive practice exercises</li>
                    <li>Progress reports</li>
                    <li>Certificate of completion</li>
                </ul>
            </div>
            
            <!-- Step 6 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h3>6. Celebrate Success</h3>
                <p>Watch your child gain confidence and skills while developing a lifelong love for learning.</p>
                <ul>
                    <li>Showcase projects</li>
                    <li>Performance celebrations</li>
                    <li>Continued learning paths</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="mission-vision-section">
    <div class="container">
        <div class="mission-vision">
            <!-- Mission -->
            <div class="mission-card">
                <h2>Our Mission</h2>
                <p>To inspire a love for learning by offering live, interactive classes that encourage curiosity, critical thinking, and academic excellence.</p>
            </div>
            
            <!-- Vision -->
            <div class="vision-card">
                <h2>Our Vision</h2>
                <p>To build a global learning community where children feel empowered to explore, learn, and excel in a dynamic virtual environment.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="container">
        <h2>Why Choose CuriousLabAcademy?</h2>
        <div class="why-choose">
            <!-- Reason 1 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Live Interactive Lessons</h3>
                <p>Real-time classes with expert instructors who engage students through dynamic teaching methods.</p>
            </div>
            
            <!-- Reason 2 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Expert Educators</h3>
                <p>Passionate and qualified teachers with specialized training in online education for children.</p>
            </div>
            
            <!-- Reason 3 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Flexible Scheduling</h3>
                <p>Convenient class times to fit your child's routine, with options for different time zones.</p>
            </div>
            
            <!-- Reason 4 -->
            <div class="process-step">
                <div class="process-icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <h3>Fun & Engaging Learning</h3>
                <p>Interactive activities, quizzes, and live participation make lessons exciting and memorable.</p>
            </div>
        </div>
    </div>
</section>

<?php
// Testimonials
include 'includes/testimonials.php';

// CTA Section
$ctaContent = true;
$ctaTitle = "Join our next live class and experience learning like never before!";
$ctaBtnPrimaryText = "Sign Up for a Live Class";
$ctaBtnPrimaryLink = "enroll.php";
$ctaBtnSecondaryText = "Contact Us";
$ctaBtnSecondaryLink = "contact.php";
include 'includes/cta.php';

// Footer
include 'includes/footer.php';
?>