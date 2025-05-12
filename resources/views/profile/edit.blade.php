<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Edit Profile</title>
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
        <h2>Edit Your Profile</h2>
        <p>Manage your profile settings below:</p>

        <div class="options">
            <a href="{{ route('profile.show') }}" class="botn">View Profile Content</a>
            <a href="{{ route('auth.update-password') }}" class="botn">Change Password</a>
            <a href="{{ route('store') }}" class="botn">Create User</a>
        </div>
        


    </main>

    <footer class="text-center mt-5">
        <ul class="itemsBar">
            <li><a href="https://www.instagram.com/huugo_gb/">Instagram</a></li>
            <li><a href="https://github.com/HuugoGB">GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/hugo-gonz%C3%A1lez-bustos-0bb406235/">LinkedIn</a></li>
        </ul>
        <p>&copy; 2024 My Erasmus+ Journey || Hugo Gonzalez Bustos</p>
    </footer>
</body>

</html>