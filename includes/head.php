<!DOCTYPE html>
<html lang="en" data-theme="light" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($pageTitle); ?> | CuriousLab Academy | Interactive Live Classes for Kids</title>
    <meta name="title" content="<?php echo htmlspecialchars($pageTitle); ?> | Interactive Live Classes for Kids">
    <meta name="description" content="Founded by Mercy Ogheneovo Avwenagbiku, CuriousLab Academy offers live, interactive online classes in Science, Math & Languages for children. Small-group sessions with expert educators, flexible scheduling, and engaging learning methods.">
    <meta name="keywords" content="online classes for kids, live science classes, interactive math tutoring, language learning for children, virtual education, online learning platform, kids education, STEM classes">
    <meta name="author" content="Mercy Ogheneovo Avwenagbiku">
    <meta name="developer" content="Ogheneochuko Godstime Avwenagbiku">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $baseUrl; ?>about">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?> | Interactive Live Classes for Kids">
    <meta property="og:description" content="Founded by Mercy Ogheneovo Avwenagbiku - Engaging live online classes in Science, Math & Languages for children aged 6-16. Small groups, expert teachers, and fun learning experiences.">
    <meta property="og:image" content="<?php echo $baseUrl; ?>assets/images/curiouslab-classroom-preview.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $baseUrl; ?>about">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?> | Interactive Live Classes for Kids">
    <meta property="twitter:description" content="Founded by Mercy Ogheneovo Avwenagbiku - Live, interactive online classes that make learning Science, Math & Languages fun for children. Try a free session today!">
    <meta property="twitter:image" content="<?php echo $baseUrl; ?>assets/images/curiouslab-classroom-preview.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $baseUrl; ?>about">
    
    <!-- Favicons -->
    <link rel="icon" href="<?php echo $baseUrl; ?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $baseUrl; ?>assets/images/favicon.svg" type="image/svg+xml">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "CuriousLab Academy",
      "url": "<?php echo $baseUrl; ?>",
      "description": "Interactive live online classes for children in Science, Mathematics, and Languages",
      "foundingDate": "2023",
      "founder": {
        "@type": "Person",
        "name": "Mercy Ogheneovo Avwenagbiku"
      },
      "employee": {
        "@type": "Person",
        "name": "Ogheneochuko Godstime Avwenagbiku",
        "jobTitle": "Lead Developer"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Online Courses",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "Science Courses",
            "itemListElement": {
              "@type": "Course",
              "name": "Interactive Science Classes",
              "description": "Live, engaging science lessons for children"
            }
          },
          {
            "@type": "OfferCatalog",
            "name": "Mathematics Courses",
            "itemListElement": {
              "@type": "Course",
              "name": "Math Tutoring",
              "description": "Fun math sessions with expert instructors"
            }
          },
          {
            "@type": "OfferCatalog",
            "name": "Language Courses",
            "itemListElement": {
              "@type": "Course",
              "name": "Language Learning",
              "description": "Interactive language classes for young learners"
            }
          }
        ]
      }
    }
    </script>
    
    <!-- Fonts and Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/style.css">
</head>