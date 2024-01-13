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
              <h1><a href= "{{ url('/profile') }}">SERVICE PEDAGOGIQUE</h1></a>
            </div>
            <ul>
              <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="nav-item">Dashboard</span>
              </a>
              </li>
              <li><a href="#">
                <i class="fa fa-calendar"></i>
                <span class="nav-item">Emploi du temps</span>
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
          <div class="main-body">
            <h1>Contenu des filières</h1>
          
          </div>
    
          <div class="job_card">
            <div class="job_details">
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
          
          <div class="job_card">
            <div class="job_details">
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

          <div class="job_card">
            <div class="job_details">
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
    
    </body>
    </html></span>