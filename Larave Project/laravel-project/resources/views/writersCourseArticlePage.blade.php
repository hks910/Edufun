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

    
        <div class="row mb-4 align-items-center"> <!-- Bootstrap row for writer details -->
            <div class="col-md-2 text-center"> <!-- Column for the writer's image -->
                <img src="{{ asset($writer->image) }}" alt="{{ $writer->writerName }}" class="img-fluid rounded-circle" style="width: 150px; height: 150px;"> <!-- Circular image -->
            </div>
            <div class="col-md-10"> <!-- Column for writer's name and speciality -->
                <h2>{{ $writer->writerName }}</h2>
                <p class="text-muted">Speciality: {{ $writer->speciality }}</p>
            </div>
        </div>
    
        <h5>Courses</h5>
        @if($writer->courses->isEmpty())
            <p>No courses available.</p>
        @else
            <ul class="list-unstyled">
                @foreach ($writer->courses as $course)
                    <li class="d-flex mb-2 p-3 border-bottom">
                        <div class="col-md-3 d-flex justify-content-center mb-3"> <!-- Left column for the image -->
                            <img src="{{ asset($course->image) }}" alt="{{ $course->name }}" class="img-fluid" style="max-width: 80%; height: auto;"> <!-- Full-width image while maintaining aspect ratio -->
                        </div>
                        <div class="col-md-9 d-flex flex-column"> <!-- Right column for the details -->
                            <h2 class="h5">{{ $course->name }}</h2>
                            <p class="text-muted small mb-2">
                                {{ $course->created_at->format('Y-m-d') }} | {{ $course->writer->writerName }}
                            </p>
                            <p class="mb-4">
                                {{ Str::limit($course->detail, 50) }}
                            </p>
                            <div class="mt-auto text-end"> <!-- Align the button to the right -->
                                <a href="{{ route('spesificCourse', $course->id) }}" class="btn btn-dark btn-sm">See more</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    
        <h5>Articles</h5>
        @if($writer->articles->isEmpty())
            <p>No articles available.</p>
        @else
            <ul class="list-unstyled">
                @foreach ($writer->articles as $article)
                    <li class="d-flex mb-2 p-3 border-bottom">
                        <div class="col-md-3 d-flex justify-content-center mb-3"> <!-- Left column for the image -->
                            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="img-fluid" style="max-width: 80%; height: auto;"> <!-- Full-width image while maintaining aspect ratio -->
                        </div>
                        <div class="col-md-9 d-flex flex-column"> <!-- Right column for the details -->
                            <h2 class="h5">{{ $article->title }}</h2>
                            <p class="text-muted small mb-2">
                                {{ $article->created_at->format('Y-m-d') }} | {{ $article->writer->writerName }}
                            </p>
                            <p class="mb-4">
                                {{ Str::limit($article->content, 100) }}
                            </p>
                            <div class="mt-auto text-end"> <!-- Align the button to the right -->
                                <a href="{{ route('specificArticle', $article->id) }}" class="btn btn-dark btn-sm">Read more</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">
                &copy; EduFun 2024 | Web Programming | Hardi Kusuma | 2602190085
            </p>
        </div>
    </footer>
    
    
</body>


