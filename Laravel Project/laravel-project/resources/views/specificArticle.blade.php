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
    
    

    <div class="container">
        <h1>Article</h1>
    
        <div class="container mt-4"> <!-- Main container for the article details -->
            <h1 class="mb-4">{{ $article->title }}</h1> <!-- Article title with bottom margin -->
    
            <div class="row"> <!-- Row for the layout -->
                <div class="col-12 text-center"> <!-- Full-width column for the image, centered -->
                    <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="img-fluid mb-2" style="max-width: 70%;"> <!-- Centered image with specified max width -->
                </div>
                <div class="col-12 d-flex justify-content-between align-items-center"> <!-- Flex container for date and writer -->
                    <p class="text-muted mb-0">Published on: {{ $article->created_at->format('Y-m-d') }}</p> <!-- Date with no bottom margin -->
                    <p class="text-muted mb-0">Written by: {{ $article->writer->writerName }}</p> <!-- Writer name with no bottom margin -->
                </div>
                <div class="col-12 mt-3"> <!-- Column for the article content -->
                    <p>{{ $article->content }}</p> <!-- Article content -->
                </div>
            </div>
        </div>
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
