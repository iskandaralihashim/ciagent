<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - CI Agent' : 'CI Agent' ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
            margin-bottom: 40px;
        }
        .page-header h1 {
            font-size: 48px;
            font-weight: bold;
        }
        main {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }
        main h2 {
            color: #495057;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        main h2:first-child {
            margin-top: 0;
        }
        .service-card {
            border-left: 4px solid #667eea;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }
        .service-card h3 {
            color: #667eea;
            font-weight: 600;
        }
        footer {
            background-color: #212529;
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 40px;
        }
        footer p {
            margin: 5px 0;
        }
        .btn-primary {
            background-color: #667eea;
            border-color: #667eea;
        }
        .btn-primary:hover {
            background-color: #764ba2;
            border-color: #764ba2;
        }
        .contact-info-card {
            border-left: 4px solid #667eea;
            padding: 20px;
            margin-bottom: 20px;
        }
        .contact-info-card h5 {
            color: #667eea;
            font-weight: 600;
            margin-bottom: 10px;
        }
        a {
            color: #667eea;
            text-decoration: none;
        }
        a:hover {
            color: #764ba2;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">CI Agent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/services') ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header (optional) -->
    <?php if (isset($show_title) && $show_title): ?>
    <div class="page-header">
        <div class="container">
            <h1><?= isset($title) ? $title : 'Page' ?></h1>
        </div>
    </div>
    <?php endif; ?>

    <!-- Main Content -->
    <div class="container my-5">
        <main>
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container-fluid">
            <p>&copy; 2025 CI Agent. All rights reserved.</p>
            <p>Designed and developed with care.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
