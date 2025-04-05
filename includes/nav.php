<nav class="navbar">
    <div class="container">
        <a href="<?php echo $baseUrl; ?>" class="logo">
            <img src="<?php echo $baseUrl; ?>assets/images/logo-light.svg" alt="CuriousLab Academy Logo" class="logo-light">
            <img src="<?php echo $baseUrl; ?>assets/images/logo-dark.svg" alt="CuriousLab Academy Logo" class="logo-dark">
        </a>
        
        <div class="nav-links">
            <ul>
                <li><a href="<?php echo $baseUrl; ?>">Home</a></li>
                <li><a href="<?php echo $baseUrl; ?>courses/">Courses</a></li>
                <li><a href="<?php echo $baseUrl; ?>about">About</a></li>
                <li><a href="<?php echo $baseUrl; ?>blog">Blog</a></li>
                <li><a href="<?php echo $baseUrl; ?>contact">Contact</a></li>
            </ul>
        </div>
        
        <div class="nav-actions">
            <button class="theme-toggle" aria-label="Toggle theme">
                <span class="toggle-icon">
                    <i class="fas fa-sun"></i>
                    <i class="fas fa-moon"></i>
                </span>
            </button>
            <a href="<?php echo $baseUrl; ?>enroll" class="btn enroll-btn">Enroll Now</a>
            <button class="hamburger" aria-label="Menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </div>
</nav>