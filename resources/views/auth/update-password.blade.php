<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            <h2>Change Password</h2>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('updatePassword') }}">
                @csrf
                <div class="mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" name="current_password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="new_password" class="form-label">New Password</label>
                    <input type="password" name="new_password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="botn">Update Password</button>
            </form>
        </div>
    </main>
    <footer>
        <ul class="itemsBar">
            <li><a class="itemsBar" href="https://www.instagram.com/huugo_gb/">Instagram</a></li>
            <li><a class="itemsBar" href="https://github.com/HuugoGB">Git Hub</a></li>
            <li><a class="itemsBar" href="https://www.linkedin.com/in/hugo-gonz%C3%A1lez-bustos-0bb406235/">LinkedIn</a></li>
        </ul>
        <p>&copy; 2024 My Erasmus+ Journey || Hugo Gonzalez Bustos</p>
    </footer>

    <!-- Ensure you don't have a global click listener or JavaScript preventing default behavior. -->

</body>

</html>
