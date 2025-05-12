


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
        <div class="container">
            <h2>Your Profile</h2>
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Created at:</strong> {{ $user->created_at }}</p>
            <p><strong>Updated at:</strong> {{ $user->updated_at }}</p>
        </div>
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
