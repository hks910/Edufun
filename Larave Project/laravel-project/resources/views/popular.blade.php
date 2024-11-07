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

    <div class="container">
        <h1>Article List</h1>
        @if($articles->isEmpty())
            <p>No articles available.</p>
        @else
            <ul class="list-unstyled">
                @foreach ($articles as $article)
                    <li class="d-flex mb-2 p-3 border-bottom">
                        <div class="col-md-3 d-flex justify-content-center mb-3"> <!-- Left column for the image with col-md-3 -->
                            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="img-fluid" style="max-width: 80%; height: auto;"> <!-- Full-width image while maintaining aspect ratio -->
                        </div>
                        <div class="col-md-9 d-flex flex-column"> <!-- Right column for the details -->
                            <!-- Article Title -->
                            <h2 class="h5">{{ $article->title }}</h2>
    
                            <!-- Date and Writer name -->
                            <p class="text-muted small mb-2">
                                {{ $article->created_at->format('Y-m-d') }} | {{ $article->writer->writerName }}
                            </p>
    
                            <!-- Short overview -->
                            <p class="mb-4">
                                {{ Str::limit($article->content, 100) }}
                            </p>
    
                            <!-- Read More button at the bottom right -->
                            <div class="mt-auto text-end"> <!-- Align the button to the right -->
                                <a href="{{ route('specificArticle', $article->id) }}" class="btn btn-dark btn-sm">Read more</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    
        <!-- Pagination Links -->
        <div class="pagination">
            {{ $articles->links('vendor.pagination.bootstrap-5') }}
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
