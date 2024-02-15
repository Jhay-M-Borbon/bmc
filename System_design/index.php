<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital System</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>

<body>
   <!-- Header with Icon -->
   <header class="bg-primary text-white text-center py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <!-- Add your Font Awesome icon here -->
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="col-11">
                    <!-- Hospital System title -->
                    <h1 style="text-center">Hospital System</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar and Main Content -->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            
            <div class="list-group list-group-flush">
                <!-- Add your dynamic content for sidebar links here -->
                <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action">Patient Management</a>
                <a href="#" class="list-group-item list-group-item-action">Appointment Scheduler</a>
                <!-- Add more links as needed -->
            </div>
        </div>

        <!-- Main Content -->
        <div id="page-content-wrapper" class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Patient Management</h2>
                            <p class="card-text">Manage patient information and records.</p>
                            <a href="#" class="btn btn-primary">Go to Patient Management</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Appointment Scheduler</h2>
                            <p class="card-text">Schedule and manage appointments with doctors.</p>
                            <a href="#" class="btn btn-primary">Go to Appointment Scheduler</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include("include/footer.php") ?>