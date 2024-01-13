<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Delegue</title>
  <link rel="stylesheet" href="{{ asset('css/dashboards/etudiant.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="./images/mourad.png" alt="">
          <h1><a href= "{{ url('/profile') }}">AZOUGA Mourad</h1></a>
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
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Demandes</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fa fa-bullhorn"></i>
            <span class="nav-item">Signaler Incident</span>
          </a>
          </li>

          <!--<li><a href="#">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Setting</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Help</span>
          </a>
          </li>-->
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
        <p>Bienvenu, Etudiant!</p>
      </div>
      <div class="main-body">
        <h1>Annonces!</h1>
      
      <!--<div class="search_bar">
        <input type="search" placeholder="Search job here...">
        <select name="" id="">
          <option>Category</option>
          <option>Web Design</option>
          <option>App Design</option>
          <option>App Development</option>
        </select>
        <select class="filter">
          <option>Filter</option>
        </select>
      </div>

      <div class="tags_bar">
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>Programming</span>
        </div>
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>Design</span>
        </div>
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>PHP</span>
        </div>
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>JavaScript</span>
        </div>
      </div>-->

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fa fa-bell"></i>
          </div>
          <div class="text">
            <h2>Exam Annulé</h2>
            <span>Mr.Kounaidi a annule l'exam de Soft Skills S5</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>Mr.Kounaidi</h4>
          <span>Il ya 23 heures</span>
        </div>
      </div>
      
      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fa fa-book"></i>
          </div>
          <div class="text">
            <h2>Mini projet dev web</h2>
            <span>Ait Kbir a ajouté un nouveau projet DEV WEB</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>Mr.Ait Kbir</h4>
          <span>Il ya 5 jours</span>
        </div>
      </div>
      </div>
    </div>
    </section>
  </div>

</body>
</html></span>