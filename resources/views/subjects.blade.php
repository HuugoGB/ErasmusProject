<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Erasmus Website</title>
    <style>
        .subjects {
            margin-top: 30px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
        }
    </style>
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
        <div class="subjects">
            <div class="container">
                <h2>Web Development and Design</h2>
                <p>Goal is to introduce students into the basic theoretical and practical problems of design and
                    implementation of the websites. We use these principles during the term for making simple web
                    applications.
                </p>

            </div>
            <div class="container">
                <h2>Diploma Project II</h2>
                <p>To acquire the methods and procedures for dealing with relatively large-scale projects. Demonstrate
                    the ability to independently and creatively solve complex tasks decomposed into simple problems, to
                    study the issue to the preparation of diploma thesis and its defence.
                </p>
            </div>
            <div class="container">
                <h2>Virtual and Augmented Reality</h2>
                <p>The aim is to inform the students about the techniques of creation and presentation of virtual
                    environments in virtual reality and with the techniques of object presentation in augmented reality.
                </p>
            </div>
            <div class="container">
                <h2>Phisical layer of Information</h2>
                <p>Introduction to the basic problems of the user interface design. Lectures are presenting the
                    principles and methods of interface proposal and testing, including examples of good and bad design.
                    Practices are oriented to the user interface testing and to own design proposal by given methods of
                    work.
                    The problem of human-technology interaction is extended to the explanation of basic features of
                    ubiquitous electronic devices and their technical limitations, to get right and secure use of them.
                    Keywords: Human-Computer Interaction (HCI), Usability Engineering, User eXperience (UX), User
                    Interfaces, World Usability Day, Bad Design</p>
            </div>
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