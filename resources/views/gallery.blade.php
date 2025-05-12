<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <title>Erasmus Website</title>
</head>
<body>
    <header>
        <div class="navigationBar">
            <a href="#" class="logo"><i class="ri-store-3-fill"></i><span>Erasmus+</span></a>
            <ul class="itemsBar">
                <li><a href="{{ route('index') }}" class="active">Home</a></li>
                <li><a href="{{ route('about-country') }}">Slovakia</a></li>
                <li><a href="{{ route('about-university') }}">Pan-European University</a></li>
                <li><a href="{{ route('subjects') }}">Subjects</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
            </ul>
        </div>
    </header>
    <main>
        <!-- Gallery Section -->
    <div class="container my-5">
        <h2 class="text-center">My Erasmus+ Memories</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_1.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_1.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_2.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_2.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_3.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_3.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_4.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_4.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_5.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_5.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_6.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_6.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_7.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_7.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_8.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_8.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_9.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_9.jpg') }}')">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/photo_10.jpg') }}" class="img-fluid img-thumbnail gallery-item" onclick="openLightbox('{{ asset('/images/photo_10.jpg') }}')">
            </div>
        </div>
        

        </div>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox">
        <span class="close" onclick="closeLightbox()">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

    </main>
    <footer>
        <ul class="itemsBar">
            <li> <a class="itemsBar" href="https://www.instagram.com/huugo_gb/">Instagram</a>
            </li>
            <li> <a class="itemsBar" href="https://github.com/HuugoGB">Git Hub</a>
            </li>
            <li> <a class="itemsBar"
                    href="https://www.linkedin.com/in/hugo-gonz%C3%A1lez-bustos-0bb406235/">LinkedIn</a>
            </li>
        </ul>
        <p>&copy; 2024 My Erasmus+ Journey || Hugo Gonzalez Bustos</p>

    </footer>
</body>
</html>