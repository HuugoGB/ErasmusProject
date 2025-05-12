<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Pan-European University</title>
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
        <h2>About Pan-European University</h2>
        <div class="container">
            <h3>Introduction</h3>
            <p>Pan-European University is a private educational institution in Slovakia offering a variety of undergraduate, postgraduate, and doctoral programs across five faculties.</p>
        </div>
        <div class="container">
            <h3>Faculties</h3>
            <ul>
                <li>Faculty of Law</li>
                <li>Faculty of Media</li>
                <li>Faculty of Economics and Business</li>
                <li>Faculty of Informatics</li>
                <li>Faculty of Psychology</li>
            </ul>
        </div>
        <div class="container">
            <h3>Academic Programs</h3>
            <p>The university provides Bachelor’s, Master’s, and Doctoral programs, integrating modern teaching methods with international academic standards.</p>
        </div>
        <div class="container">
            <h3>Campus and Facilities</h3>
            <p>Located in Bratislava, the university offers state-of-the-art facilities, libraries, and research centers to enhance student learning experiences.</p>
        </div>
        <div class="container">
            <h3>International Collaborations</h3>
            <p>Pan-European University is actively involved in Erasmus+ programs and maintains partnerships with various international institutions.</p>
        </div>
    </main>
    
    <footer>
        <ul class="itemsBar">
            <li><a href="https://www.instagram.com/huugo_gb/">Instagram</a></li>
            <li><a href="https://github.com/HuugoGB">GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/hugo-gonz%C3%A1lez-bustos-0bb406235/">LinkedIn</a></li>
        </ul>
        <p>&copy; 2024 My Erasmus+ Journey || Hugo Gonzalez Bustos</p>
    </footer>
</body>

</html>
