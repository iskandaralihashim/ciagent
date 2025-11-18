<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<p class="lead mb-5">We offer a comprehensive range of services designed to meet your business needs:</p>

<div class="row g-4">
    <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0">
            <div class="card-body">
                <h5 class="card-title">Web Development</h5>
                <p class="card-text">
                    Custom web applications built with modern technologies. 
                    We create responsive, scalable, and maintainable solutions tailored to your requirements.
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0">
            <div class="card-body">
                <h5 class="card-title">Mobile App Development</h5>
                <p class="card-text">
                    Native and cross-platform mobile applications for iOS and Android. 
                    We deliver user-friendly apps that engage your audience.
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0">
            <div class="card-body">
                <h5 class="card-title">Consulting & Strategy</h5>
                <p class="card-text">
                    Expert guidance on technology strategy, digital transformation, and business optimization. 
                    We help you navigate complex challenges and seize opportunities.
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0">
            <div class="card-body">
                <h5 class="card-title">Cloud Solutions</h5>
                <p class="card-text">
                    Scalable cloud infrastructure and services including AWS, Google Cloud, and Azure. 
                    We ensure your systems are reliable, secure, and cost-effective.
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0">
            <div class="card-body">
                <h5 class="card-title">Data Analytics</h5>
                <p class="card-text">
                    Transform your data into actionable insights. We provide analytics solutions 
                    that help you understand your business better and make informed decisions.
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-4">
        <div class="card service-card h-100 border-0">
            <div class="card-body">
                <h5 class="card-title">Support & Maintenance</h5>
                <p class="card-text">
                    Ongoing support and maintenance for your applications. We ensure your systems 
                    run smoothly with proactive monitoring and timely updates.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
