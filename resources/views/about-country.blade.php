<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
        
        <h2>Must See</h2>
        <div class="container">
            <h3>OLD TOWN (STARÉ MESTO)</h3>
            <div class="content">
                <img src="{{ asset('images/old_town.jpg') }}" alt="Old Town of Bratislava">
                <p>Like other European cities, Bratislava owns a beautiful historic center that carries the city's soul. It’s where you can see almost all the must-see attractions.</p>
            </div>
        </div>
        <div class="container">
            <h3>MICHAEL’S GATE AND TOWER</h3>
            <div class="content">
                <img src="{{ asset('images/michaels_gate.jpg') }}" alt="Michael’s Gate and Tower">
                <p>In the photo, you can also see the medieval Michael's gate and above the Michael’s Tower, which offers a panoramic view over the city.</p>
            </div>
        </div>
        <div class="container">
            <h3>MAIN SQUARE (HLAVNÉ NÁMESTIE)</h3>
            <div class="content">
                <img src="{{ asset('images/main_square.jpg') }}" alt="Main Square in Bratislava">
                <p>Located in the old town, the main square is the epicenter of the town packed with tourists all the time.</p>
            </div>
        </div>
        <div class="container">
            <h3>THE ROLAND FOUNTAIN AT NIGHT (MAXIMILIAN FOUNTAIN)</h3>
            <div class="content">
                <img src="{{ asset('images/roland_fountain.jpg') }}" alt="Roland Fountain at Night">
                <p>The symbol of Bratislava that you can spot on a hill from afar before entering the city.</p>
            </div>
        </div>
        <div class="container">
            <h3>BRATISLAVA CASTLE (BRATISLAVSKÝ HRAD)</h3>
            <div class="content">
                <img src="{{ asset('images/bratislava_castle.jpg') }}" alt="Bratislava Castle">
                <p>The symbol of Bratislava that you can spot on a hill from afar before entering the city.</p>
            </div>
        </div>
        <div class="container">
            <h3>MAN AT WORK (ČUMIL)</h3>
            <div class="content">
                <img src="{{ asset('images/man_cumil.jpg') }}" alt="Man at Work statue (Čumil)">
                <p>Čumil is a Slovakian word that translates to the watcher.</p>
            </div>
        </div>
        <div class="container">
            <h3>BLUE CHURCH (MODRÝ KOSTOLÍK)</h3>
            <div class="content">
                <img src="{{ asset('images/blue_church.jpg') }}" alt="Blue Church in Bratislava">
                <p>Not far from the city center you can see the Blue Church and as the name suggests, it is blue.</p>
            </div>
        </div>
        
        <h2>Amazing Food</h2>
        <div class="container">
            <h3>CESNAKOVÁ POLIEVKA</h3>
            <div class="content">
                <img src="{{ asset('images/garlic_soup.jpg') }}" alt="Garlic soup">
                <p>Garlic soup is usually served in bread instead of a bowl.</p>
            </div>
        </div>
        <div class="container">
            <h3>ZEMIAKOVÉ PLACKY</h3>
            <div class="content">
                <img src="{{ asset('images/potato_dumplings_sheep.jpg') }}" alt="Potato dumplings with sheep">
                <p>Potato dumplings with sheep’s cheese often topped with sour cream and crispy bacon pieces.</p>
            </div>
        </div>
        <div class="container">
            <h3>ZEMIAKOVÉ KNEDLIKY S ÚDENÝMMÄSOM</h3>
            <div class="content">
                <img src="{{ asset('images/potato_dumpling_meat.jpg') }}" alt="Potato dumplings with smoked meat">
                <p>Potato dumplings with smoked meat served with stewed sauerkraut, sourcream, and fried onions</p>
            </div>
        </div>
        <div class="container">
            <h3>BRYNDZOVÉ PIROHY</h3>
            <div class="content">
                <img src="{{ asset('images/dumpling.jpg') }}" alt="Dumplings withsheep’s cheese">
                <p>Doughy, pierogi-style dumplings withsheep’s cheese.</p>
            </div>
        </div>
        
    </main>
    <footer>
        <ul class="itemsBar">
            <li> <a class="itemsBar" href="https://www.instagram.com/huugo_gb/">Instagram</a> </li>
            <li> <a class="itemsBar" href="https://github.com/HuugoGB">Git Hub</a> </li>
            <li> <a class="itemsBar" href="https://www.linkedin.com/in/hugo-gonz%C3%A1lez-bustos-0bb406235/">LinkedIn</a> </li>
        </ul>
        <p>&copy; 2024 My Erasmus+ Journey || Hugo Gonzalez Bustos</p>
    </footer>
</body>

</html>
