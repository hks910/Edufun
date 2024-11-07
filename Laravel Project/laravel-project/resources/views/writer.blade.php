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
    
    

    <div class="container mt-4">
        <h5 class="mb-4">Our Writers</h5> <!-- Title of the section -->
    
        @if($writers->isEmpty())
            <p>No writers available.</p>
        @else
            <div class="row"> <!-- Bootstrap row for grid layout -->
                @foreach ($writers as $writer)
                    <div class="col-md-4 mb-4"> <!-- Each writer takes up 4 columns on medium screens -->
                        <div class="text-center"> <!-- Center align the contents -->
                            <a href="{{ route('writerShow', $writer->id) }}" class="text-decoration-none text-dark"> <!-- Link to writer's content -->
                                <img src="{{ asset($writer->image) }}" alt="{{ $writer->writerName }}" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px;"> <!-- Circular image -->
                                <h2 class="h5">{{ $writer->writerName }}</h2> <!-- Writer's name -->
                                <p class="text-muted">{{ $writer->speciality }}</p> <!-- Writer's speciality -->
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    
    
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">
                &copy; EduFun 2024 | Web Programming | Hardi Kusuma | 2602190085
            </p>
        </div>
    </footer>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script> <!-- Include Bootstrap JS -->


</body>
</html>
