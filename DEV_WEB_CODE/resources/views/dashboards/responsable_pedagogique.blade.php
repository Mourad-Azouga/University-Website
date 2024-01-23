<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Dashboard Responsable du service pedagogique</title>
      <link rel="stylesheet" href="{{asset ('css/dashboards/etudiant.css')}}" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-x2V8QV1NqN4aaI7qJ9emqAjFpdqjI2fs/Cy8Fk8ZiXTv2SZCmzEtlBbPTtGXdlrN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <link rel="icon" href="./images/fsttt.png">
<!-- Add this inside your <head> section -->


    </head>
    <body>
      <div class="container">
        <nav>
          <div class="navbar">
            <div class="logo">
            <h1><a href="{{ url('/profile') }}">{{ auth()->user()->nom }} {{ auth()->user()->prenom }}</h1></a>
            </div>
            <ul>
              <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="nav-item" onclick="untoggleall()">Dashboard</span>
              </a>
              </li>
              <li><a href="#">
                <i class="fa fa-calendar"></i>
                <span class="nav-item" onclick="toggleDiv('emploi')">Emploi Du Temps</span>
              </a>
              </li>
              <li><a href="#">
                <i class="fa fa-user"></i>
                <span class="nav-item">Professeur responsable</span>
              </a>
              </li>
              <li><a href="#">
                <i class="fa fa-users"></i>
                <span class="nav-item">Inscrire une nouvelle classe d’étudiants</span>
              </a>
              </li>
    
              <li><a href="#">
                <i class="fa fa-receipt"></i>
                <span class="nav-item">Ajouter le contenu d’une filière</span>
              </a>
              </li>
              <li><a href="#">
                <i class="fa fa-receipt"></i>

                <span class="nav-item">modifier le contenu d’une filière</span>
              </a>
              </li>
              <li><a href="{{ url('/') }}" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
              </a>
              </li>
            </ul>
          </div>
        </nav>
    
        <section class="main">
          <div class="main-top">
            <p>Bienvenu,Responsable du service pedagogique </p>
          </div>
          <!-- --------------------------Emploi-du-temps--------------------------- -->
    <div id = "emploi" style="display: none">
<form action="{{ route('responsable-pedagogique.make-reservation') }}" method="post">
    @csrf

    <label for="ID_salle">Local :</label>
    <select name="ID_salle" id="ID_salle" required>
        <option value="" selected disabled hidden>Choisir Local</option>
        @foreach ($salles as $salle)
            <option value="{{ $salle->ID_salle }}">{{ $salle->Nom_salle }}</option>
        @endforeach
    </select>

    <label for="ID_prof">Nom de prof :</label>
    <select name="ID_prof" id="ID_prof" required>
        <option value="" selected disabled hidden>Choisir Professeur</option>
        @foreach ($professeurs as $professeur)
            <option value="{{ $professeur->id_utilisateur }}">{{ $professeur->nom }}{{ $professeur->prenom }}</option>
        @endforeach
    </select><br>

    <label for="ID_module">Module :</label>
    <select name="ID_module" id="ID_module" required>
        <option value="" selected disabled hidden>Choisir Module</option>
        @foreach ($modules as $module)
            <option value="{{ $module->id_module }}">{{ $module->nom }}</option>
        @endforeach
    </select>

    <label for="Crenaux">Choisir Heure :</label>
    <select name="Crenaux" id="Crenaux" required>
        <option value="" selected disabled hidden>Choisir Heure</option>
        <option value="9:00">9h-10h45</option>
        <option value="11:00">11h-12h45</option>
        <option value="13:00">13h-14h45</option>
        <option value="15:00">15h-16h45</option>
        <option value="17:00">17h-18h45</option>
    </select>

    <label for="Jours">Choisir Jour :</label>
    <select name="Jours" id="Jours" required>
        <option value="" selected disabled hidden>Choisir Jour</option>
        <option value="Lundi">Lundi</option>
        <option value="Mardi">Mardi</option>
        <option value="Mercredi">Mercredi</option>
        <option value="Jeudi">Jeudi</option>
        <option value="Vendredi">Vendredi</option>
        <option value="Samedi">Samedi</option>
    </select>
    <label for ="raison">Raison :</label>
    <input id = "raison" name = "raison" required type = "text" placeholder = "Entrer raison"> 
    <button type="submit">ajouter</button><br>
</form>


  <!----------------------------------------------------CALENDER---------------------------------------------------->

</div><!-- hadi dial class emploi mat2adihachi>
    <!-------------------------------------------------------- -->
          <div class="main-body">
            <h1>Contenu des filières</h1>
          
          </div>
    
          <div class="ann">
            <div class="ann_details">
              <div class="img">
                <i class="fa fa-book"></i>
              </div>
              <div class="text">
                <h2>LST : Analytique des données</h2>
                <table border="1">
                    <tr>
                        <td>Semestre 5</td>
                        <td>• Mathématiques pour la science des données<br>
                            • Structures des données avancées et théorie des graphes<br>
                            • Fondamentaux des bases de données<br>
                            • Algorithmique avancée et programmation<br>
                            • Développement WEB<br>
                            • Développement personnel et intelligence émotionnelle (Soft skills)
                        </td>
                    </tr>
                    <tr>
                        <td>Semestre 6</td>
                        <td>• Analyse et fouille de données<br>
                            • Systèmes et réseaux<br>
                            • Ingénierie des données<br>
                            • PFE
                        </td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
          
          <div class="ann">
            <div class="ann_details">
              <div class="img">
                <i class="fa fa-book"></i>
              </div>
              <div class="text">
                <h2>LST : Ingénierie de développement d’applications informatiques</h2>
                <table border="1">
                    <tr>
                        <td>Semestre 5</td>
                        <td>• Modélisations avancée et Méthodes de génie logiciel<br>
                            • Développement Web<br>
                            • Base de données Structurées et non Structurées<br>
                            • Programmation Orientée Objet en C++/Java<br>
                            • Systèmes et réseaux informatiques<br>
                            • Développement de soft skills
                        </td>
                    </tr>
                    <tr>
                        <td>Semestre 6</td>
                        <td>• Innover, Entreprendre et s’initier à la Gestion d'une Entreprise avec un ERP<br>
                            • Initiation en développement mobile et Edge Computing<br>
                            • Développement web avancé Back end (Python)<br>
                            • PFE
                        </td>
                    </tr>
                </table>
              </div>
            </div> 
          </div>

          <div class="ann">
            <div class="ann_details">
              <div class="img">
                <i class="fa fa-book"></i>
              </div>
              <div class="text">
                <h2>LST: Génie Electrique Option: GénieElectrique & Système Industriel</h2>
                <table border="1">
                    <tr>
                        <td>Semestre 5</td>
                        <td>• Traitement de signal & Télécommunication<br>
                            • Actionneurs industriels<br>
                            • Électronique et systèmes<br>
                            • Automatismes<br>
                            • Électronique de puissance<br>
                            • Gestion de maintenance et sûreté de fonctionnement
                        </td>
                    </tr>
                    <tr>
                        <td>Semestre 6</td>
                        <td>• Management du projet<br>
                            • Microcontrôleur microprocesseur<br>
                            • Réseaux et base de données<br>
                            • PFE
                        </td>
                    </tr>
                </table>
              </div>
            </div> 
          </div>
    
          
    
          

          </div>
        </div>
        </section>
      </div>
      <script src="{{asset ('js/dashboards/annonces.js')}}"></script>

    </body>
    </html></span>