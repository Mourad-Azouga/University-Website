<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Delegue</title><!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Dashboard Delegue</title>
    <link rel="stylesheet" href="{{asset ('css/dashboards/etudiant.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  </head>
  <body>
    <div class="container">
      <nav>
        <div class="navbar">
          <div class="logo">
            <img src="" alt="">
            <h1><a href= "{{ url('/profile') }}">Ait Lkbir</h1></a>
          </div>
          <ul>
            <li><a href="#">
              <i class="fas fa-user"></i>
              <span class="nav-item">Dashboard</span>
            </a>
            </li>
            <li><a href="#">
                <i class="fa fa-calendar"></i>
                <span class="nav-item">Emploidutemps</span>
              </a>
            </li>
            <li><a href="#">
              <i class="fas fa-tasks"></i>
              <span class="nav-item">Demandes</span>
            </a>
            </li>
            <li><a href="#">
              <i class="fa fa-bullhorn"></i>
              <span class="nav-item">ajoute annonce</span>
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
        <p>Bienvenu, Proffesseur!!</p>
      </div>
      <div class="main-body">
        <h1>Annonces!</h1>
        <div class="row">
                <p>Vous enseignez <span>4</span> classes.</p>
    
              </div>


              <div class="job_card">
                <div class="job_details">
                  <div class="text">
                    <h2>LST : analytique des données</h2>
                    <span>GÉNIE INFORMATIQUE</span>
                  </div>
                </div>
                <div class="job_salary">
                  <h4>80 étudiants</h4>
                  <span>Technologies Web</span>
                </div>
              </div>
              
              <div class="job_card">
                <div class="job_details">
                  <div class="text">
                    <h2>LST : Ingénierie de Développement d’Applications Informatiques</h2>
                    <span>GÉNIE INFORMATIQUE</span>
                  </div>
                </div>
                <div class=job_salary>
                  <h4>95 étudiants</h4>
                  <span>Technologies Web</span>
                </div>
              </div>
        
              <div class="job_card">
                <div class="job_details">
                  <div class="text">
                    <h2> LST :Génie Electrique Option: Génie Electrique & Système Industriel</h2>
                    <span>GÉNIE ELECTRIQUE</span>
                  </div>
                </div>
                <div class="job_salary">
                  <h4>45 étudiants</h4>
                  <span>programmation avancée</span>
                </div>
              </div>
        
              <div class="job_card">
                <div class="job_details">
                  <div class="text">
                    <h2>MST : Intelligence Artificielle et Sciences de Données</h2>
                    <span>GÉNIE INFORMATIQUE</span>
                  </div>
                </div>
                <div class="job_salary">
                  <h4>40 étudiants</h4>
                  <span>machine learning</span>
                </div>
              </div>
        </section>
      </div>
  
  </body>
  </html></span>
  