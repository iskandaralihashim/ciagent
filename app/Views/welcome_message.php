<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">Welcome to CI Agent</h2>
<p class="lead">
    This is your home page. CodeIgniter 4 is a powerful and flexible framework designed to make web development faster and easier.
</p>

<h2 class="mt-5 mb-4">Get Started</h2>
<p class="lead mb-3">
    Start building your application by exploring the different sections:
</p>
<ul class="list-group list-group-flush mb-4">
    <li class="list-group-item"><a href="<?= base_url('/about') ?>">Learn more about us</a></li>
    <li class="list-group-item"><a href="<?= base_url('/services') ?>">Discover our services</a></li>
    <li class="list-group-item"><a href="<?= base_url('/contact') ?>">Get in touch with our team</a></li>
</ul>

<h2 class="mt-5 mb-4">Key Features</h2>
<ul class="list-group list-group-flush">
    <li class="list-group-item">Lightweight and fast framework</li>
    <li class="list-group-item">Built with security in mind</li>
    <li class="list-group-item">Great documentation and community support</li>
    <li class="list-group-item">MVC architecture for organized code</li>
    <li class="list-group-item">Built-in security features</li>
    <li class="list-group-item">RESTful API support</li>
</ul>

<?= $this->endSection() ?>
