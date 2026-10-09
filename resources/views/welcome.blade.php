<?php
require_once resource_path('config/connect.php');
$sql = "SELECT * FROM artikel";
$result = mysqli_query($connect, $sql);
$artikel = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="Header">
            <h1 class="text-center">My Profile</h1>
        </div>
        <div class="Navbar">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Portofolio
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-end">
                        <a class="nav-link" href="{{ route('admin') }}">
                            Login
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="Content mt-5">
            <div class="d-flex flex-row align-items-center justify-content-center gap-4">
                @foreach ($artikel as $data)
                    <div class="card mb-3">
                        <img src="{{ asset('storage/images/' . $data['Image']) }}" alt="{{ $data['Judul'] }}" class="card-img-top bg-dark" style="width: 50%%; height: auto; max-height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ $data['Link'] }}" class="text-decoration-none">{{ $data['Judul'] }}</a></h5>
                            <p class="card-text">{{ $data['Isi'] }}</p>
                            <p class="card-text">
                                <small class="text-body-secondary">{{ $data['Tanggal'] }}</small>
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <?php
                            foreach ($artikel as $data) {
                        ?>      
                        <li class="list-group-item"><?php echo $data['Judul'] ?></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Profile">
            <div class="d-flex flex-row align-items-center justify-content-center">
                <div class="card p-2 m-5 rounded-4">
                    <img src="{{ asset('storage/images/profile.jpg') }}" style="width: 200px; height: auto; border-radius: 10px;" alt="Profile">
                </div>
                <div class="card p-4">
                    <h3 class="text-2xl font-bold mb-4">
                        Profile
                    </h3>
                    <ul class="text-lg font-medium">
                        <li>Nama: Muhammad Nazril Putra Natrabu</li>
                        <li>Usia: 17 tahun</li>
                        <li>Tempat Tanggal Lahir: 24 Juli 2009</li>
                        <li>Alamat: Rancaekek</li>
                        <li>Email: endymahavira@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Footer">
            <!-- Iki Footer -->
        </div>
    </div>
</body>

</html>