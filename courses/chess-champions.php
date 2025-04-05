<?php
$pageTitle = "Chess Champions";
$baseUrl = '../';
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/mobile-nav.php';

// Hero Section
$heroContent = true;
$heroImage = 'chess-champions.jpg';
$heroTitle = "Chess Champions";
$heroSubtitle = "Develop strategic thinking, boost cognitive abilities, and cultivate championship mindset through our world-class chess training program";
$heroBtnText = "Enroll Now";
$heroBtnLink = "../enroll.php";
include '../includes/hero.php';
?>

<!-- Course Details -->
<section class="course-details-section">
    <div class="container">
        <div class="course-details">
            <!-- Main Content -->
            <div class="course-content">
                <h2>About Our Chess Program</h2>
                <p>The Chess Champions program is designed to transform beginners into competitive players while developing essential life skills. Our curriculum combines tactical training, strategic thinking, and psychological preparation to create well-rounded chess players and thinkers.</p> 
                
                <h3>Skills Your Child Will Develop</h3>
                <div class="skills-grid">
                    <div class="skill-card">
                        <i class="fas fa-chess"></i>
                        <h4>Chess Mastery</h4>
                        <p>From basic moves to advanced tournament strategies</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-brain"></i>
                        <h4>Cognitive Skills</h4>
                        <p>Improves memory, concentration and problem-solving</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-chess-king"></i>
                        <h4>Strategic Thinking</h4>
                        <p>Develops planning and foresight abilities</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-trophy"></i>
                        <h4>Competitive Edge</h4>
                        <p>Prepares for tournaments and championships</p>
                    </div>
                </div>
                
                <h3>Program Structure</h3>
                <p>Our progressive 5-level system caters to all skill levels:</p>
                <ol>
                    <li><strong>Pawn Level (Beginner):</strong> Fundamentals, piece movements, basic checkmates</li>
                    <li><strong>Knight Level (Intermediate):</strong> Tactics, openings, endgame principles</li>
                    <li><strong>Bishop Level (Advanced):</strong> Strategic planning, tournament preparation</li>
                    <li><strong>Rook Level (Competitive):</strong> Advanced theory, clock management, psychology</li>
                    <li><strong>Queen Level (Master):</strong> Grandmaster techniques, analysis, mentoring</li>
                </ol>
                
                <h3>Unique Program Features</h3>
                <ul>
                    <li><strong>Personalized Training:</strong> Individualized development plans for each student</li>
                    <li><strong>Interactive Software:</strong> Access to premium chess training platforms</li>
                    <li><strong>Tournament Preparation:</strong> Regular mock tournaments with analysis</li>
                    <li><strong>Grandmaster Workshops:</strong> Monthly sessions with international players</li>
                    <li><strong>Progress Tracking:</strong> Detailed skill assessment reports</li>
                    <li><strong>Chess Psychology:</strong> Building resilience and sportsmanship</li>
                </ul>
                
                <h3>Who Should Join</h3>
                <div class="who-join">
                    <div class="join-card">
                        <h4><i class="fas fa-child"></i> Young Beginners (5-8 yrs)</h4>
                        <p>Perfect starting age to develop fundamental chess skills and cognitive abilities</p>
                    </div>
                    <div class="join-card">
                        <h4><i class="fas fa-user-graduate"></i> School-Age Players (9-13 yrs)</h4>
                        <p>Ideal for developing competitive skills and academic benefits</p>
                    </div>
                    <div class="join-card">
                        <h4><i class="fas fa-chess-knight"></i> Teen Competitors (14-18 yrs)</h4>
                        <p>Serious training for tournament play and scholarship opportunities</p>
                    </div>
                    <div class="join-card">
                        <h4><i class="fas fa-trophy"></i> Adult Enthusiasts</h4>
                        <p>Improve your game and enjoy chess's mental benefits</p>
                    </div>
                </div>
                
                <h3>Learning Resources</h3>
                <div class="resources">
                    <div class="resource-item">
                        <i class="fas fa-book"></i>
                        <span>Digital chess workbooks and puzzles</span>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-video"></i>
                        <span>Video lessons and game analyses</span>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-chess-board"></i>
                        <span>Tournament-quality chess sets</span>
                    </div>
                    <div class="resource-item">
                        <i class="fas fa-laptop"></i>
                        <span>Premium chess software access</span>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="course-sidebar">
                <div class="course-info-card">
                    <h3>Program Overview</h3>
                    <div class="course-info-item">
                        <span>Age Groups:</span>
                        <span>5 years - Adult</span>
                    </div>
                    <div class="course-info-item">
                        <span>Sessions:</span>
                        <span>Twice weekly</span>
                    </div>
                    <div class="course-info-item">
                        <span>Session Length:</span>
                        <span>90-120 minutes</span>
                    </div>
                    <div class="course-info-item">
                        <span>Skill Levels:</span>
                        <span>Beginner to Advanced</span>
                    </div>
                    <div class="course-info-item">
                        <span>Class Size:</span>
                        <span>Max 10 students</span>
                    </div>
                    <div class="course-info-item">
                        <span>Price:</span>
                        <span>₦50,000 (or $35USD) monthly</span>
                    </div>
                    <a href="../enroll.php" class="btn btn-primary" style="width: 100%; margin-top: 20px;">Enroll Now</a>
                </div>
                
                <div class="course-info-card">
                    <h3>Our Coaches</h3>
                    <div class="instructor-info">
                        <div class="instructor-image">
                            <i class="fas fa-chess-queen" style="font-size: 3rem; color: var(--primary-color);"></i>
                        </div>
                        <h4>FIDE-Rated Coaches</h4>
                        <p>Our coaching team includes nationally ranked players and certified instructors with proven track records developing champions.</p>
                    </div>
                </div>
                
                <div class="course-info-card">
                    <h3>Success Stories</h3>
                    <div class="review-item">
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"My daughter won her first tournament after 6 months in the program. Her math grades also improved significantly!"</p>
                        <p class="review-author">- Mrs. Adebayo, Parent</p>
                    </div>
                    <div class="review-item">
                        <div class="review-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"The strategic thinking skills my son developed in chess transferred to better performance in all his school subjects."</p>
                        <p class="review-author">- Mr. Okonkwo, Parent</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Schedule Section -->
        <div class="course-schedule">
            <h2>Upcoming Chess Events</h2>
            
            <div class="schedule-note">
                <p><i class="fas fa-chess-knight"></i> We offer regular tournaments and special events to complement our training program.</p>
            </div>
            
            <ul>
                <li><strong>Next Beginner Class:</strong> First Monday of each month</li>
                <li><strong>Weekly Club Meetings:</strong> Fridays 4-6pm (open play and analysis)</li>
                <li><strong>Monthly Tournaments:</strong> Last Saturday of each month</li>
                <li><strong>Grandmaster Simul:</strong> Quarterly exhibition matches</li>
                <li><strong>Summer Chess Camp:</strong> Intensive 2-week program</li>
            </ul>
        </div>
    </div>
</section>

<?php
// Testimonials
include '../includes/testimonials.php';

// CTA Section
$ctaContent = true;
$ctaTitle = "Ready to develop a champion's mindset through chess?";
$ctaBtnPrimaryText = "Enroll Now";
$ctaBtnPrimaryLink = "../enroll.php";
$ctaBtnSecondaryText = "Contact Us";
$ctaBtnSecondaryLink = "../contact.php";
include '../includes/cta.php';

// Footer
include '../includes/footer.php';
?>
