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
        <h1><a href="{{ url('/profile') }}">{{ auth()->user()->nom }} {{ auth()->user()->prenom }}</h1></a>
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
      <p>Bienvenu, Delegue!</p>
    </div>
    <div class="main-body">
  <h1>Annonces!</h1>

  @foreach ($announcements as $announcement)
    <div class="ann">
      <div class="ann_details">
        <div class="img">
          <i class="fa fa-bell"></i>
        </div>
        <div class="text">
          <h2>{{ $announcement->Contenu }}</h2>
          <span>{{ $announcement->created_at->diffForHumans() }}</span>
        </div>
      </div>
      <div class="ann_maker">
        <h4>{{ $announcement->user->name }}</h4>
        <span>{{ $announcement->created_at->format('M d, Y H:i') }}</span>
      </div>
    </div>
  @endforeach

</div>
  </div>
  </section>
</div>

</body>
</html></span>