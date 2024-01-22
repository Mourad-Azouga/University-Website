<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FSTT</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <!-- Font Awesome Cdn Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>
    <body>
        <header class="header">
            <div class="header_logo">
                <img class ="header_logo" src="./images/fsttlogo.png" alt="">
            </div>
            <div class="menu_list">
                <a href="#" onclick="toggleDiv('content3')">Formation</a>
                <a href="#" onclick="toggleDiv('content2')">Departement</a>
            </div>
            <div class="header_profile">
                <div class="profile">
                    <a href="{{ url('/login') }}">Login</a>
                </div>
            </div>
    </header>
    
    <!-- Main Body Section -->
    <div class="main_body">
        <div class="container">
            <section id="content3" class="hide" style="display: none;">
                <h>Formation Initiale </h>
        <div class="flex-container">
            <div>DEUST</div>
            <div>LST</div>
            <div>MST</div>
            <div>DI</div>
        </div>
    <p>
    La FST de Tanger a pour mission de dispenser l’enseignement supérieur en formation initiale et en formation continue et de mener tous les travaux de recherche dans les champs disciplinaires relevant notamment des Sciences et Techniques et des sciences de l’ingénieur.
    </p>
    <p> Dans le cadre de  la réforme pédagogique, la FST de Tanger a adopté l’architecture du système  LMD : Licence / Master / Doctorat. Elle prépare et délivre les diplômes:</p>
    <p>
        <span>DEUST</span> Diplôme d’Etudes Universitaire en Sciences et Technique <br> <br>
        <span>LST</span> Licence sciences et Techniques <br> <br>
        <span>MST</span> Master  Sciences et Techniques <br> <br>
        <span>DI</span> Diplôme d’Ingénieurs d’État<br> <br>
        Doctorat en Sciences et Techniques
        En parallèle à ces diplômes la FST est également habilitée à délivrer :
        DUT : Diplôme Universitaire de Technologie
    </p>
    <h>Formation Continue </h>
        <div class="flex-container">
            <div>D.C.E.S.S</div>
            <div>D.C.A</div>
        </div>
    <p>
        <span>D.C.E.S.S</span> Diplôme du Cycle d’Approfondissement (DCA): (Bac+3) : S’adresse aux techniciens spécialisés d’entreprises et aux titulaires d’un DEUG, d’un DUT, d’un BTS ou d’un diplôme reconnu équivalent (Bac+2). Cette formation permet aux sortants de s’intégrer rapidement dans le monde professionnel ou de s’adapter à de nouvelles fonctions au sein de l’entreprise.Le DCA se prépare en une année. <br><br>
        <span>D.C.A</span> Diplôme du Cycle des Etudes Supérieures Spécialisées (DCESS) : (Bac+5) : S’adresse aux diplômés de (Bac+3) en situation d’activité ou non. Le dispositif mis en place a pour objectif   la création des conditions d’insertion, d’une réinsertion ou une adaptation à de nouvelles fonctions dans l’entreprise. Ce diplôme se prépare en quatre semestres (2 années).
    </p>
    </section>
    <section id="content2" class="hide" style="display: none;">
        <div class="titre">
            <h1>Departement</h1>
        </div>
        <div class="grid">
            <div class="card">
                <h2>GÉNIE INFORMATIQUE</h2>
                <p>Chef : Pr.BOUHORMA MOHAMMED <br>Email : mbouhorma@uae.ac.ma</p>
            </div>
            <div class="card">
                <h2>GÉNIE CHIMIQUE</h2>
                <p>Chef : Pr.CHOUAIBI NOUR EDDINE <br>Email : n.chouaibi@uae.ac.ma</p>
            </div>
            <div class="card">
                <h2>SCIENCES DE LA TERRE</h2>
                <p>Chef : Pr.ABDELHAMID ROSSI<br>
                    Email : arossi@uae.ac.ma</p>
            </div>
            <div class="card">
                <h2>GÉNIE MÉCANIQUE</h2>
                <p>Chef : Pr.EL FELSOUFI ZOUBIR <br>
                    Email : zelfelsoufi@uae.ac.ma</p>
            </div>
            <div class="card">
                <h2>SCIENCES DE LA VIE</h2>
                <p>Chef : Pr. BENNANI MECHITA MOHCINE <br>
                    Email : mbennani@uae.ac.ma</p>
            </div>
            <div class="card">
                <h2>GÉNIE ELECTRIQUE</h2>
                <p>Chef : Pr.AZMANI MONIR <br>
                    Email : m.azmani@uae.ac.ma</p>
            </div>
            <div class="card">
                <h2>TEC</h2>
                <p>Chef : Pr.OUCHEN MOHAMED<br> Email : mouchen@uae.ac.ma</p>
            </div>
            <div class="card">
                <h2>PHYSIQUE</h2>
                <p>Chef : Pr.EL METOUI MUSTAPHA<br> Email : melmetoui@uae.ac.ma
                </p>
            </div>
            <div class="card">
                <h2>MATHÉMATIQUES
                </h2>
                <p>Chef : Pr.BEL HADJ HASSAN <br>
                    Email : hbelhadj@uae.ac.ma</p>
            </div>
        </div>
    </section>
            <div id="content"></div>
                <div class="cover">
                    <img src="./images/fstt.jpg" alt="">
                </div>
                <div class="main_details">
                    <div class="c_title">
                    <h2>Faculte Des sciences et techniques</h2>
                </div>
            </div>
            <div class="description">
            <h5>Description</h5>
            <div class="des_para">
            <p>Créée en 1995, la FST de Tanger est un des dix huit établissements de l’Université Abdelmalek Essaâdi. Elle regroupe actuellement une trentaine de programmes d'études repartis sur quatre cycles offerts par neuf départements : Sciences de la Vie, Sciences de la Terre, Génie Chimique, Physique, Mathématiques, Génie Informatique, Génie Electrique et Génie Mécanique et de Langues.</p>
            </div>
            </div>
        </div>
        
        <!-- Sidebar Reviews Section Actualite -->
        <div class="sidebar">
            <div class="row">
                <h2>Actualites</h2>
                <a href="#" >See all</a>
            </div>

            @foreach($homePageAnnouncements as $announcement)
    <div class="review">
        <div class="details">
            <div class="logo">
                <img src="./images/fsttt.png" alt="">
            </div>
            <div class="title">
                <h2>{{ $announcement->titre}}</h2>
                <span></span>
            </div>
        </div>
        <div class="review_post">
            <p>{{ $announcement->Contenu }}</p>
        </div>
    </div>
@endforeach
        </div>
    </div>
    <script src="{{ asset('js/home.js')}}"></script>
    </body>
</html>

    