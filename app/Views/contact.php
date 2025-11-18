<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-7">
        <h2 class="mb-4">Get In Touch</h2>
        <p class="lead mb-4">We'd love to hear from you. Please fill out the form below and we'll get back to you as soon as possible.</p>
        
        <form method="POST" action="<?= base_url('/contact/submit') ?>" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">Please provide a valid name.</div>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Please provide a valid email.</div>
            </div>
            
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>
            
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
                <div class="invalid-feedback">Please provide a subject.</div>
            </div>
            
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                <div class="invalid-feedback">Please provide a message.</div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
        </form>
    </div>
    
    <div class="col-lg-5">
        <h2 class="mb-4">Contact Information</h2>
        
        <div class="contact-info-card bg-light">
            <h5>Address</h5>
            <p>
                123 Business Street<br>
                City, State 12345<br>
                Country
            </p>
        </div>
        
        <div class="contact-info-card bg-light">
            <h5>Phone</h5>
            <p>
                <a href="tel:+1234567890">+1 (234) 567-890</a>
            </p>
        </div>
        
        <div class="contact-info-card bg-light">
            <h5>Email</h5>
            <p>
                <a href="mailto:info@example.com">info@example.com</a>
            </p>
        </div>
        
        <div class="contact-info-card bg-light">
            <h5>Business Hours</h5>
            <p>
                Monday - Friday: 9:00 AM - 6:00 PM<br>
                Saturday: 10:00 AM - 4:00 PM<br>
                Sunday: Closed
            </p>
        </div>
        
        <div class="contact-info-card bg-light">
            <h5>Follow Us</h5>
            <p>
                <a href="#" class="me-3">Facebook</a>
                <a href="#" class="me-3">Twitter</a>
                <a href="#" class="me-3">LinkedIn</a>
                <a href="#">Instagram</a>
            </p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
