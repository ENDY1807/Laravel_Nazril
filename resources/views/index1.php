<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endy Belajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar bg-light bg-gradient fixed-top top-1 left-0 right-0 z-50">
        <div class="container-fluid">
            <a class="navbar-brand text-black" href="#home">Home</a>
            <a class="navbar-brand text-black" href="#Artikel">Artikel</a>
            <a class="navbar-brand text-black" href="#Profile">Profile</a>
            <a class="navbar-brand text-black" href="#Portofolio">Portofolio</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button type="button" class="btn btn-success">Submit</button>
            </form>
        </div>
    </nav>
    <section id="Artikel" class="py-5 d-flex padding-4 gap-4 flex-wrap justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body" onclick="window.location.href='https://www.detik.com/'">
                <h5 class="card-title"><i class="fa-solid fa-newspaper"></i> Detik.com</h5>
                <p class="card-text">Berita tentang apa saja yang terjadi di negara indonesia</p>
                <a href="https://www.detik.com" class="btn btn-primary" target="_blank">https://www.detik.com</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body" onclick="window.location.href='https://www.kompas.com/'">
                <h5 class="card-title"><i class="fa-solid fa-newspaper"></i> Kompas.com</h5>
                <p class="card-text">Berita tentang apa saja yang terjadi di negara indonesia</p>
                <a href="https://www.kompas.com" class="btn btn-primary" target="_blank">https://www.kompas.com</a>
            </div> 
         </div>
         <div class="card" style="width: 18rem;">
            <div class="card-body" onclick="window.location.href='https://www.liputan6.com/'">
                <h5 class="card-title"><i class="fa-solid fa-newspaper"></i> Liputan6.com</h5>
                <p class="card-text">Berita tentang apa saja yang terjadi di negara indonesia</p>
                <a href="https://www.liputan6.com" class="btn btn-primary" target="_blank">https://www.liputan6.com</a>
            </div>
         </div>
    </section>
    <section id="Profile">
        <div class="bg-gradient-to-t from-gray-500 to-white-600 min-h-screen flex items-center justify-center">
            <div class="border rounded p-8 rounded-lg shadow-lg bg-white padding-4 m-6 cursor-pointer width-1/2 flex items-center justify-center gap-4">
                <img src="profile.jpg" class="rounded float-start h-2 w-30" alt="...">
                <div class="card">
                    <h3 class="text-2xl font-bold mb-4">Profile</h3>
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
    </section>
    <section id="Portofolio">
        <div class="bg-gradient-to-t from-gray-500 to-white-600 min-h-screen flex items-center justify-center">
            <div class="border p-8 rounded-lg shadow-lg bg-white padding-4 m-6 cursor-pointer" onclick="window.location.href='https://endymahavira.page.gd'">
                <h3>Kunjungi Portofolio Saya Melalui LInk Di bawah ini</h3>
                <p><a href="https://endymahavira.page.gd" class="hover:text-blue-500">https://endymahavira.page.gd</a></p>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>