<?php
$pageTitle = "Enroll";
$baseUrl = './';
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/mobile-nav.php';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize data
    $course = htmlspecialchars($_POST['course']);
    $student_name = htmlspecialchars($_POST['student_name']);
    $student_age = intval($_POST['student_age']);
    $student_grade = htmlspecialchars($_POST['student_grade']);
    $student_interests = htmlspecialchars($_POST['student_interests']);
    $parent_name = htmlspecialchars($_POST['parent_name']);
    $parent_email = filter_var($_POST['parent_email'], FILTER_SANITIZE_EMAIL);
    $parent_phone = htmlspecialchars($_POST['parent_phone']);
    $parent_country = htmlspecialchars($_POST['parent_country']);
    $parent_relationship = htmlspecialchars($_POST['parent_relationship']);
    $payment_method = htmlspecialchars($_POST['payment_method']);
    $payment_reference = isset($_POST['payment_reference']) ? htmlspecialchars($_POST['payment_reference']) : '';
    
    // Validate required fields
    $errors = [];
    if (empty($course)) $errors[] = "Please select a course";
    if (empty($student_name)) $errors[] = "Student name is required";
    if ($student_age < 5 || $student_age > 18) $errors[] = "Please enter a valid age between 5 and 18";
    if (empty($parent_email) || !filter_var($parent_email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required";
    if (empty($payment_method)) $errors[] = "Payment method is required";
    if ($payment_method === 'card' && empty($payment_reference)) $errors[] = "Payment verification failed";

    if (empty($errors)) {
        // Send confirmation email
        $to = "info@curiouslabacademy.com";
        $subject = "New Enrollment: $student_name for $course";
        
        $message = "
        <h2>New Student Enrollment</h2>
        <p><strong>Course:</strong> $course</p>
        <p><strong>Student Name:</strong> $student_name</p>
        <p><strong>Age:</strong> $student_age</p>
        <p><strong>Grade:</strong> $student_grade</p>
        <p><strong>Parent Name:</strong> $parent_name</p>
        <p><strong>Email:</strong> $parent_email</p>
        <p><strong>Phone:</strong> $parent_phone</p>
        <p><strong>Payment Method:</strong> $payment_method</p>
        ";
        
        if ($payment_method === 'card') {
            $message .= "<p><strong>Payment Reference:</strong> $payment_reference</p>";
        }
        
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $headers .= "From: $parent_email\r\n";
        
        if (mail($to, $subject, $message, $headers)) {
            // Also send confirmation to parent
            $parent_subject = "Enrollment Confirmation - CuriousLab Academy";
            $parent_message = "Dear $parent_name,\n\nThank you for enrolling $student_name in our $course program.";
            
            if ($payment_method === 'card') {
                $parent_message .= "\n\nPayment Status: Completed (Reference: $payment_reference)";
            } else {
                $parent_message .= "\n\nPayment Instructions:\n";
                $parent_message .= "Please make payment via $payment_method and send proof to payments@curiouslabacademy.com";
            }
            
            mail($parent_email, $parent_subject, $parent_message);
            
            // Redirect to success page
            header("Location: enrollment-success.php?reference=" . urlencode($payment_reference));
            exit();
        } else {
            $errors[] = "Failed to send enrollment details. Please try again.";
        }
    }
}
?>

<!-- Enroll Content -->
<section class="enroll-section">
    <div class="container">
        <div class="enroll-container">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <h4>Please fix the following errors:</h4>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <h1>Enroll in CuriousLab Academy</h1>
            <p class="enroll-intro">Follow these simple steps to enroll your child in our exciting learning programs. Complete the form below to secure your child's spot in their chosen course.</p>
            
            <div class="enroll-steps">
                <form id="enrollmentForm" class="enroll-form" method="POST">
                    <!-- Step 1 -->
                    <div class="enroll-step">
                        <div class="enroll-step-number">1</div>
                        <div class="enroll-step-content">
                            <h3>Choose Your Course</h3>
                            <p>Select from our range of courses including Science Explorers, Math Wizards, Abacus Mental Math, Chess Champions, and Language courses (Yoruba, Igbo, Hausa). Each course is designed for specific age groups and skill levels.</p>
                            <div class="course-options">
                                <select class="form-control" name="course" id="course-select" required>
                                    <option value="">Select a Course</option>
                                    <option value="Science Explorers" data-price="150000" <?php echo (isset($course) && $course === 'science-explorers') ? 'selected' : ''; ?>>Science Explorers - ₦150,000</option>
                                    <option value="Math Wizards" data-price="80000" <?php echo (isset($course) && $course === 'math-wizards') ? 'selected' : ''; ?>>Math Wizards - ₦80,000</option>
                                    <option value="english" data-price="80000" <?php echo (isset($course) && $course === 'english') ? 'selected' : ''; ?>>English Express - ₦80,000</option>
                                    <option value="abacus-math" data-price="50000" <?php echo (isset($course) && $course === 'abacus-math') ? 'selected' : ''; ?>>Abacus Mental Math - ₦50,000</option>
                                    <option value="chess-champions" data-price="50000" <?php echo (isset($course) && $course === 'chess-champions') ? 'selected' : ''; ?>>Chess Champions - ₦50,000</option>
                                    <option value="native-languages" data-price="75000" <?php echo (isset($course) && $course === 'native-languages') ? 'selected' : ''; ?>>Native Languages - ₦75,000</option>
                                </select>
                                <div id="course-description" class="mt-3">
                                    <p class="text-muted">Select a course to see detailed description</p>
                                </div>
                                <div id="course-price-display" class="mt-2 font-weight-bold" style="display: none;">
                                    Course Fee: <span id="price-amount">₦0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="enroll-step">
                        <div class="enroll-step-number">2</div>
                        <div class="enroll-step-content">
                            <h3>Student Information</h3>
                            <p>Tell us about your child who will be participating in the program.</p>
                            <div class="form-group">
                                <label for="student-name">Student Full Name</label>
                                <input type="text" id="student-name" name="student_name" class="form-control" placeholder="Full Name" value="<?php echo isset($student_name) ? htmlspecialchars($student_name) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="student-age">Student Age</label>
                                <input type="number" id="student-age" name="student_age" class="form-control" min="5" max="18" placeholder="10" value="<?php echo isset($student_age) ? htmlspecialchars($student_age) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="student-grade">Current Grade Level</label>
                                <input type="text" id="student-grade" name="student_grade" class="form-control" placeholder="5th Grade" value="<?php echo isset($student_grade) ? htmlspecialchars($student_grade) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="student-interests">Student Interests (Optional)</label>
                                <textarea id="student-interests" name="student_interests" class="form-control" rows="3" placeholder="Fun things about yourself"><?php echo isset($student_interests) ? htmlspecialchars($student_interests) : ''; ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="enroll-step">
                        <div class="enroll-step-number">3</div>
                        <div class="enroll-step-content">
                            <h3>Parent/Guardian Information</h3>
                            <p>Provide your contact details so we can communicate important class information.</p>
                            <div class="form-group">
                                <label for="parent-name">Parent/Guardian Full Name</label>
                                <input type="text" id="parent-name" name="parent_name" class="form-control" placeholder="Full Name" value="<?php echo isset($parent_name) ? htmlspecialchars($parent_name) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="parent-email">Email Address</label>
                                <input type="email" id="parent-email" name="parent_email" class="form-control" placeholder="Email Address" value="<?php echo isset($parent_email) ? htmlspecialchars($parent_email) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="parent-phone">Phone Number</label>
                                <input type="tel" id="parent-phone" name="parent_phone" class="form-control" placeholder="Phone Number" value="<?php echo isset($parent_phone) ? htmlspecialchars($parent_phone) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="parent-country">Country of Residence</label>
                                <input type="text" id="parent-country" name="parent_country" class="form-control" placeholder="Country" value="<?php echo isset($parent_country) ? htmlspecialchars($parent_country) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="parent-relationship">Relationship to Student</label>
                                <input type="text" id="parent-relationship" name="parent_relationship" class="form-control" placeholder="Father, mother, etc." value="<?php echo isset($parent_relationship) ? htmlspecialchars($parent_relationship) : ''; ?>" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="enroll-step">
                        <div class="enroll-step-number">4</div>
                        <div class="enroll-step-content">
                            <h3>Payment Information</h3>
                            <p>Complete your enrollment by making payment securely through our payment gateway.</p>
                            <div class="payment-options">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="card-payment" value="card" <?php echo (!isset($payment_method) || (isset($payment_method) && $payment_method === 'card')) ? 'checked' : ''; ?> required>
                                    <label class="form-check-label" for="card-payment">
                                        Credit/Debit Card (Paystack)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="transfer-payment" value="transfer" <?php echo (isset($payment_method) && $payment_method === 'transfer') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="transfer-payment">
                                        Bank Transfer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="ussd-payment" value="ussd" <?php echo (isset($payment_method) && $payment_method === 'ussd') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="ussd-payment">
                                        USSD Payment
                                    </label>
                                </div>
                            </div>
                            <div class="card-payment-details" id="card-details" style="<?php echo (!isset($payment_method) || (isset($payment_method) && $payment_method === 'card')) ? '' : 'display: none;'; ?>">
                                <div class="alert alert-info">
                                    <p>You will be redirected to Paystack's secure payment page to complete your payment after submitting this form.</p>
                                    <p id="payment-amount-display">Amount to pay: <span id="payment-amount">₦0</span></p>
                                </div>
                            </div>
                            <div class="transfer-payment-details" id="transfer-details" style="<?php echo (isset($payment_method) && $payment_method === 'transfer') ? '' : 'display: none;'; ?>">
                                <p>Please make transfer to:</p>
                                <p><strong>Bank Name:</strong> Zenith Bank</p>
                                <p><strong>Account Name:</strong> CuriousLab Academy</p>
                                <p><strong>Account Number:</strong> 1012345678</p>
                                <p id="transfer-amount">Amount to transfer: <span id="transfer-amount-value">₦0</span></p>
                                <p>After payment, please send proof of payment to payments@curiouslabacademy.com</p>
                            </div>
                            <div class="ussd-payment-details" id="ussd-details" style="<?php echo (isset($payment_method) && $payment_method === 'ussd') ? '' : 'display: none;'; ?>">
                                <p>Dial *966*Amount*1012345678# on your mobile phone</p>
                                <p id="ussd-example">Example: For ₦0, dial *966*0*1012345678#</p>
                                <p>After payment, please send proof of payment to payments@curiouslabacademy.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms-agree" name="terms_agree" required>
                            <label class="form-check-label" for="terms-agree">
                                I agree to the <a href="privacy-policy.php" target="_blank">Terms of Service</a> and <a href="privacy-policy.php" target="_blank">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newsletter-subscribe" name="newsletter_subscribe" checked>
                            <label class="form-check-label" for="newsletter-subscribe">
                                Subscribe to our newsletter for updates and educational tips
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Complete Enrollment</button>
                    
                    <div class="enroll-note">
                        <p><i class="fas fa-lock"></i> Your information is secure and will only be used for enrollment purposes.</p>
                        <p>You'll receive a confirmation email with class details within 24 hours of enrollment.</p>
                    </div>
                    
                    <input type="hidden" name="payment_reference" id="payment-reference" value="">
                    <input type="hidden" name="course_price" id="course-price" value="0">
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Course descriptions
    const courseDescriptions = {
        'science-explorers': 'Hands-on science experiments and discovery for young scientists. Suitable for ages 8-14. Weekly sessions for 3 months.',
        'math-wizards': 'Interactive math learning to boost problem-solving skills. For students ages 7-15. 12-week program with certified instructors.',
        'english': 'Improve English language skills through immersive learning. For all ages. Focus on reading, writing, and communication.',
        'abacus-math': 'Develop mental calculation skills using the ancient abacus method. Best for ages 6-12. Includes certification upon completion.',
        'chess-champions': 'Learn chess strategies from masters. Improve critical thinking. For ages 5-18. Weekly tournaments included.',
        'native-languages': 'Learn Yoruba, Igbo, or Hausa from native speakers. Cultural immersion included. For all ages and skill levels.'
    };
    
    // Show/hide payment details based on selection
    document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
        radio.addEventListener('change', function() {
            document.getElementById('card-details').style.display = 'none';
            document.getElementById('transfer-details').style.display = 'none';
            document.getElementById('ussd-details').style.display = 'none';
            
            if (this.value === 'card') {
                document.getElementById('card-details').style.display = 'block';
            } else if (this.value === 'transfer') {
                document.getElementById('transfer-details').style.display = 'block';
            } else if (this.value === 'ussd') {
                document.getElementById('ussd-details').style.display = 'block';
            }
        });
    });
    
    // Handle course selection change
    const courseSelect = document.getElementById('course-select');
    courseSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const price = selectedOption.dataset.price || '0';
        const courseValue = selectedOption.value;
        
        // Update price displays
        document.getElementById('price-amount').textContent = '₦' + parseInt(price).toLocaleString();
        document.getElementById('payment-amount').textContent = '₦' + parseInt(price).toLocaleString();
        document.getElementById('transfer-amount-value').textContent = '₦' + parseInt(price).toLocaleString();
        document.getElementById('ussd-example').textContent = `Example: For ₦${parseInt(price).toLocaleString()}, dial *966*${price}*1012345678#`;
        
        // Show price display
        document.getElementById('course-price-display').style.display = 'block';
        
        // Update course description
        const descriptionDiv = document.getElementById('course-description');
        if (courseValue && courseDescriptions[courseValue]) {
            descriptionDiv.innerHTML = `<p>${courseDescriptions[courseValue]}</p>`;
        } else {
            descriptionDiv.innerHTML = '<p class="text-muted">Select a course to see detailed description</p>';
        }
        
        // Update hidden field with course price
        document.getElementById('course-price').value = price;
    });
    
    // Trigger change event if a course is already selected
    if (courseSelect.value) {
        courseSelect.dispatchEvent(new Event('change'));
    }
    
    // Handle form submission
    const form = document.getElementById('enrollmentForm');
    form.addEventListener('submit', function(e) {
        const paymentMethod = document.querySelector('input[name="payment_method"]:checked');
        
        if (paymentMethod && paymentMethod.value === 'card') {
            e.preventDefault();
            processCardPayment();
        }
        // For other methods, form submits normally
    });
    
    function processCardPayment() {
        // Validate form first
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }
        
        const email = document.getElementById('parent-email').value;
        const amount = document.getElementById('course-price').value * 100; // Convert to kobo
        const name = document.getElementById('parent-name').value;
        const studentName = document.getElementById('student-name').value;
        const course = document.querySelector('select[name="course"]').value;
        
        if (amount <= 0) {
            alert('Please select a valid course');
            return;
        }
        
        let handler = PaystackPop.setup({
            key: 'pk_live_bf7ae53c01416fae89d7092268e6117296bbbe7a',
            email: email,
            amount: amount,
            currency: 'NGN',
            ref: 'CLA-' + Math.floor(Math.random() * 1000000000 + 1),
            firstname: name.split(' ')[0],
            lastname: name.split(' ').slice(1).join(' '),
            metadata: {
                custom_fields: [
                    {
                        display_name: "Student Name",
                        variable_name: "student_name",
                        value: studentName
                    },
                    {
                        display_name: "Course",
                        variable_name: "course",
                        value: course
                    }
                ]
            },
            callback: function(response) {
                document.getElementById('payment-reference').value = response.reference;
                form.submit();
            },
            onClose: function() {
                alert('Payment window closed. If you already paid, your enrollment will be processed.');
            }
        });
        
        handler.openIframe();
    }
});
</script>

<?php
// CTA Section
$ctaContent = true;
$ctaTitle = "Have questions about enrollment? Our team is happy to help!";
$ctaBtnPrimaryText = "Contact Us";
$ctaBtnPrimaryLink = "contact.php";
$ctaBtnSecondaryText = "View Courses";
$ctaBtnSecondaryLink = "courses/";
include 'includes/cta.php';

// Footer
include 'includes/footer.php';
?>