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
        <div class="image">
            <img src="{{ asset('images/Photo Hugo.jpg') }}" alt="Perfil photo" class="centred">
        </div>
        <p class="description"> 
            My name is Hugo Gonzalez, and I am an Erasmus student from Mallorca, Spain. During the summer semester of 2025, I had the incredible opportunity to study in Bratislava, immersing myself in a new academic environment and cultural experience.
            As part of the Erasmus program, I was able to engage with international students, explore new perspectives in my field of study, and adapt to a different educational system. Living in Bratislava allowed me to discover the city's rich history, vibrant student life, 
            and diverse cultural influences. It was an enriching experience that not only broadened my academic knowledge but also helped me grow personally, developing independence and intercultural understanding.
            This exchange program has been a key milestone in my journey, shaping both my academic path and my global outlook.
        </p>

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