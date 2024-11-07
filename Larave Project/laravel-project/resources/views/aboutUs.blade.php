{{-- resources/views/home.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file if needed -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> <!-- Include Bootstrap CSS -->
    
</head>

<body class = "bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="background-color: #e3f2fd;">
        <div class="container"> 
            <a class="navbar-brand" href="#">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="{{ route('courses.category', $category->id) }}">{{ $category->categoryName }}</a></li>
                            @endforeach
                        </ul>               
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('writer') }}">Writer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('popular') }}">Popular</a>
                    </li>
                </ul>
            </div>
        </div> <!-- End of container -->
    </nav>

    <div class="container mt-5" style="max-width: 70%;">
        <h1 class="text-center mb-4">About Us</h1>
        <div class="text-center">
            <p >
                EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.
            </p>
            <p>
                Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna.
        
                EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.
            </p>
        </div>
    </div>
    
    
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script> <!-- Include Bootstrap JS -->

    

</body>

<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p class="mb-0">
            &copy; EduFun 2024 | Web Programming | Hardi Kusuma | 2602190085
        </p>
    </div>
</footer>
</html>
