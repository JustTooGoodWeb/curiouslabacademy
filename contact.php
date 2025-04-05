<?php
$pageTitle = "Contact Us";
$baseUrl = './';
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/mobile-nav.php';

// Hero Section
$heroContent = true;
$heroImage = 'support-team.jpg';
$heroTitle = "Have Questions? We're Here to Help!";
$heroSubtitle = "Reach out to us for inquiries about our live classes, courses, and schedules.";
$heroBtnText = "Send Us a Message";
$heroBtnLink = "#contact-form";
include 'includes/hero.php';
?>

<!-- Contact Info Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-info">
            <!-- Contact Details -->
            <div class="contact-details">
                <h2>Get in Touch</h2>
                
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email</h3>
                        <p>info@curiouslabacademy.com</p>
                        <p>support@curiouslabacademy.com</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Phone</h3>
                        <p>+234 815 301 0297 (Nigeria)</p>
                        <p>+1 (555) 123-4567 (International)</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Location</h3>
                        <p>123 Learning Street, Knowledge District</p>
                        <p>Lagos, Nigeria</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h3>Office Hours</h3>
                        <p>Monday – Friday: 9:00 AM – 6:00 PM (WAT)</p>
                        <p>Saturday: 10:00 AM – 4:00 PM (WAT)</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form" id="contact-form">
                <h2>Send Us a Message</h2>
                <form action="process-contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject" class="form-control" required>
                            <option value="">Select a subject</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Course Information">Course Information</option>
                            <option value="Technical Support">Technical Support</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="faq-section">
            <h2>Frequently Asked Questions</h2>
            
            <div class="faq-item active">
                <div class="faq-question">
                    <span>How do I join a live session?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>After enrolling in a course, you'll receive a welcome email with a unique link to join your scheduled live classes. Simply click the link at your class time to join the virtual classroom. No special software is needed - just a modern web browser.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What subjects do you offer?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We offer a variety of subjects including:
                    <ul>
                        <li>Science Explorers (Ages 8-12)</li>
                        <li>Math Wizards (Ages 7-11)</li>
                        <li>Abacus Mental Math (Ages 6-14)</li>
                        <li>Chess Champions (Ages 7-15)</li>
                        <li>Yoruba, Igbo, and Hausa Languages (Ages 5-18)</li>
                    </ul>
                    New courses are added regularly based on student interest.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can I book a trial class?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes! We offer free trial classes for all our courses. Contact us to schedule a trial session for your child. Trials are 30 minutes long and give you a chance to experience our teaching style before committing to a full course.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What technology do I need?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>You'll need:
                    <ul>
                        <li>A computer, tablet, or smartphone</li>
                        <li>Stable internet connection</li>
                        <li>Webcam (recommended but not required)</li>
                        <li>Microphone (built-in or external)</li>
                        <li>Modern web browser (Chrome, Firefox, Safari, Edge)</li>
                    </ul>
                    Some courses may have additional material requirements which will be communicated in advance.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What is your cancellation policy?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>You may cancel your enrollment up to 48 hours before the first class for a full refund. After that, cancellations made before the second class will receive a 50% refund. No refunds are given after the second class has occurred. We offer make-up sessions for missed classes when possible.</p>
                </div>
            </div>
        </div>
        
        <!-- Social Media Section -->
        <div class="social-section">
            <h2>Follow Us on Social Media</h2>
            <div class="social-links">
                <!-- Website -->
                <div class="social-card">
                    <i class="fas fa-globe"></i>
                    <h3>Website</h3>
                    <p><a href="https://www.curiouslabacademy.com" target="_blank">www.curiouslabacademy.com</a></p>
                    <p>Visit our official website for the latest updates and course information.</p>
                </div>
                
                <!-- Facebook -->
                <div class="social-card">
                    <i class="fab fa-facebook-f"></i>
                    <h3>Facebook</h3>
                    <p><a href="https://facebook.com/CuriousLabAcademy" target="_blank">@CuriousLabAcademy</a></p>
                    <p>Join our community for live Q&A sessions and educational content.</p>
                </div>
                
                <!-- Instagram -->
                <div class="social-card">
                    <i class="fab fa-instagram"></i>
                    <h3>Instagram</h3>
                    <p><a href="https://instagram.com/CuriousLabAcademy" target="_blank">@CuriousLabAcademy</a></p>
                    <p>See photos from our classes and student projects.</p>
                </div>
                
                <!-- YouTube -->
                <div class="social-card">
                    <i class="fab fa-youtube"></i>
                    <h3>YouTube</h3>
                    <p><a href="https://youtube.com/CuriousLabAcademy" target="_blank">CuriousLab Academy</a></p>
                    <p>Watch educational videos and class previews.</p>
                </div>
                
                <!-- Twitter -->
                <div class="social-card">
                    <i class="fab fa-twitter"></i>
                    <h3>Twitter</h3>
                    <p><a href="https://twitter.com/CuriousLabEdu" target="_blank">@CuriousLabEdu</a></p>
                    <p>Get quick updates and educational tips.</p>
                </div>
                
                <!-- LinkedIn -->
                <div class="social-card">
                    <i class="fab fa-linkedin-in"></i>
                    <h3>LinkedIn</h3>
                    <p><a href="https://linkedin.com/company/curiouslabacademy" target="_blank">CuriousLab Academy</a></p>
                    <p>Connect with our team and see career opportunities.</p>
                </div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="map-section">
            <h2>Our Location</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.585130909044!2d3.379295415231214!3d6.453326325824028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae67880c1%3A0xdc9e87a367c3d9cb!2sLagos!5e0!3m2!1sen!2sng!4v1623345678901!5m2!1sen!2sng" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<?php
// CTA Section
$ctaContent = true;
$ctaTitle = "We'd love to hear from you! Reach out today and let's make learning fun together.";
$ctaBtnPrimaryText = "Sign Up Now";
$ctaBtnPrimaryLink = "enroll.php";
$ctaBtnSecondaryText = "Contact Us";
$ctaBtnSecondaryLink = "contact.php";
include 'includes/cta.php';

// Footer
include 'includes/footer.php';
?>