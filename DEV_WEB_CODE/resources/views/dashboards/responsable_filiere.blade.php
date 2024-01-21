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
          <h1><a href= "{{ url('/profile') }}">Respo Filiere</h1></a>
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
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Demandes</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fa fa-bullhorn"></i>
            <span class="nav-item" onclick="toggleDiv('annonces')">Cree Annonce</span>
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
      <p>Bienvenu, Responsable Filiere!</p>
    </div>
     <!-- ----------------------------------Anonces---------------------------------- -->
<div id="annonces" class="annonces" style="display: none;">
  <form action="#" method="">
<label for="message">Votre Annonce :</label>
    <textarea id="message" name="message" placeholder="Entrez votre annonce..." rows="4"></textarea>
    <label for="typeRencontre">Type de rencontre :</label>
    <div class="type-rencontre">
        <input type="radio" id="rencontre" name="type" value="rencontre">
        <label for="rencontre">Rencontre</label>

        <input type="radio" id="pfe" name="type" value="pfe">
        <label for="pfe">PFE</label>
    </div>

    <button type="submit">Envoyer</button>
</form>
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
      <h1>Annonces!</h1>
    <div class="ann">
      <div class="ann_details">
        <div class="img">
          <i class="fa fa-bell"></i>
        </div>
        <div class="text">
          <h2>Exam Annulé</h2>
          <span>Mr.Kounaidi a annule l'exam de Soft Skills S5</span>
        </div>
      </div>
      <div class="ann_maker">
        <h4>Mr.Kounaidi</h4>
        <span>Il ya 23 heures</span>
      </div>
    </div>
    
    <div class="ann">
      <div class="ann_details">
        <div class="img">
          <i class="fa fa-book"></i>
        </div>
        <div class="text">
          <h2>Mini projet dev web</h2>
          <span>Ait Kbir a ajouté un nouveau projet DEV WEB</span>
        </div>
      </div>
      <div class="ann_maker">
        <h4>Mr.Ait Kbir</h4>
        <span>Il ya 5 jours</span>
      </div>
    </div>
    </div>
  </div>
  </section>
</div>
<script src="{{asset ('js/dashboards/annonces.js')}}"></script>

</body>
</html></span>
