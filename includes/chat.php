<html lang="en">
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
.floating-container {
  position: fixed;
  bottom: 70px;
  left: 30px;
  z-index: 100;
}

.floating-button {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #ffc107;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 24px;
  cursor: pointer;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  transition: transform 0.3s ease, background 0.3s ease;
}

.floating-button:hover {
  transform: scale(1.1);
}

.floating-button.active {
  background: #00aeef;
  transform: rotate(180deg);
}

.floating-button.active i:before {
  content: "\f00d";
}

.element-container {
  position: absolute;
  bottom: 80px;
  left: 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 15px;
  opacity: 0;
  visibility: hidden;
  transform: translateY(20px);
  transition: all 0.3s ease;
}

.element-container.show {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.float-element {
  width: 50px;
  height: 50px;
  background: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #333;
  text-decoration: none;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.float-element:hover {
  transform: scale(1.1);
}

.float-element i {
  font-size: 30px;
}

.fa-whatsapp {
  color: #25D366;
}

.fa-telegram {
  color: #0088cc;
}
.fa-envelope {
  color: #ffc107;
}
  </style>

  <div class="floating-container">
    <div class="floating-button">
      <i class="fas fa-comments"></i>
    </div>
    <div class="element-container">
      <a href="https://wa.me/message/E7MFJ63WOK7FF1" target="_blank" class="float-element">
        <i class="fab fa-whatsapp"></i>
      </a>
      <!--<a href="<?php echo $telegram; ?>" target="_blank" class="float-element">-->
      <!--  <i class="fab fa-telegram"></i>-->
      <!--</a>-->
      <a href="mailto:info@curiouslabacademy.com" target="_blank" class="float-element">
        <i class="fas fa-envelope"></i>
      </a>
    </div>
  </div>
  <script>
      document.addEventListener('DOMContentLoaded', () => {
  const floatingButton = document.querySelector('.floating-button');
  const elementContainer = document.querySelector('.element-container');

  floatingButton.addEventListener('click', () => {
    floatingButton.classList.toggle('active');
    elementContainer.classList.toggle('show');
  });

  // Close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.floating-container')) {
      floatingButton.classList.remove('active');
      elementContainer.classList.remove('show');
    }
  });
});
  </script>
