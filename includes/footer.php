<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col footer-about">
                <a href="<?php echo $baseUrl; ?>" class="footer-logo">
                    <img src="<?php echo $baseUrl; ?>assets/images/logo-light.svg" alt="CuriousLab Academy Logo" class="logo-light">
                    <img src="<?php echo $baseUrl; ?>assets/images/logo-dark.svg" alt="CuriousLab Academy Logo" class="logo-dark">
                </a>
                <p>CuriousLab Academy is dedicated to making learning an exciting adventure for children through interactive and engaging educational programs.</p>
            </div>
            
            <div class="footer-col footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="<?php echo $baseUrl; ?>about">About Us</a></li>
                    <li><a href="<?php echo $baseUrl; ?>courses/science-explorers">Courses</a></li>
                    <li><a href="<?php echo $baseUrl; ?>blog">Blog</a></li>
                    <li><a href="<?php echo $baseUrl; ?>contact">Contact</a></li>
                    <li><a href="<?php echo $baseUrl; ?>privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>
            
            <div class="footer-col footer-social">
                <h3>Connect With Us</h3>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="footer-contact">
                    <p><i class="fas fa-envelope"></i> info@curiouslabacademy.com</p>
                    <p><i class="fas fa-phone"></i> +234 815-301-0297</p>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> CuriousLab Academy. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php include 'chat';
?>
<script src="<?php echo $baseUrl; ?>assets/js/script.js"></script>
</body>
</html>