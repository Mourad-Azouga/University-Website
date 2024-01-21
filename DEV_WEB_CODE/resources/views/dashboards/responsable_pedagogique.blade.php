<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Dashboard Responsable du service pedagogique</title>
      <link rel="stylesheet" href="{{asset ('css/dashboards/etudiant.css')}}" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-x2V8QV1NqN4aaI7qJ9emqAjFpdqjI2fs/Cy8Fk8ZiXTv2SZCmzEtlBbPTtGXdlrN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
<div id="emploi" style="display: none;">
      <label>Local :</label>
      <input type="text" id="nameInput" placeholder="Enter Local">
      <label>Nom de prof :</label>
  <input type="text" id="nameInput" placeholder="Enter nom de prof"><br>
  <label>Module :</label>
  <input type="text" id="nameInput" placeholder="Enter nom de Module">
  <select name="">
      <option value="" selected disabled hidden>Choisir Heure</option>
      <option value="9h-10h45">9h-10h45</option>
      <option value="11h-12h45">11h-12h45</option>
      <option value="13h-14h45r">13h-14h45</option>
      <option value="15h-16h45">15h-16h45</option>
      <option value="17h-15h45">17h-18h45</option>
  </select>
  <select name="">
    <option value="" selected disabled hidden>Choisir jour</option>
      <option value="Lundi ">Lundi </option>
      <option value="Mardi">Mardi</option>
      <option value="Mercredi">Mercredi</option>
      <option value="Jeudi">Jeudi</option>
      <option value="Vendredi">Vendredi</option>
      <option value="Samedi">Samedi</option>
  </select>
  
  <button>ajouter</button><br>
  <table class="calendar" id="infoTable">
      
      <tr>
          <th>Heure</th>
          <th>Lundi</th>
          <th>Mardi</th>
          <th>Mercredi</th>
          <th>Jeudi</th>
          <th>Vendredi</th>
          <th>Samedi</th>
      </tr>
      <tr>
          <td class="day">
              <div class="module">9h-10h45</div>
          <td class="day">
              <div class="module">salle E15</div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          
      </tr>
      
      <tr>
          <td class="day">
              <div class="module">11h-12h45</div>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          
      </tr>
      <tr>
        <td class="day">
              <div class="module">13h-14h45</div>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          
      </tr>
      <tr>
          <td class="day">
              <div class="module">15h-16h45</div>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          <td class="day">
              <div class="module"></div>
              <div class="module"></div>
          </td>
          
      </tr>
      <tr>
      <td class="day">
          <div class="module">17h-15h45</div>
      <td class="day">
          <div class="module"></div>
          <div class="module"></div>
      </td>
      <td class="day">
          <div class="module"></div>
          <div class="module"></div>
      </td>
      <td class="day">
          <div class="module"></div>
          <div class="module"></div>
      </td>
      <td class="day">
          <div class="module"></div>
          <div class="module"></div>
      </td>
      <td class="day">
          <div class="module"></div>
          <div class="module"></div>
      </td>
      <td class="day">
          <div class="module"></div>
          <div class="module"></div>
      </td>
      
  </tr>
  </table></div>
    <!-- ----------------------------------------------------- -->
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