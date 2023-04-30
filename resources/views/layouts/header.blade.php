<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="logo">
            <span class="flaticon-solidarity"></span>
            <h1 class="navbar-brand">ShareHope</h1>
        </div>
        <div class="navbar" id="navbarNav">
        <div class="row">
          <ul class="navbar1">
            <li class="nav-item">
              <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/volontariat">Volontariat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cas-d-urgences">Cas d'urgences</a>
            </li>
          </ul>

            <div class="row2">
            <select name="langue" id="langue">
              <option value="fr">Fr</option>
              <option value="en">Ang</option>
              <option value="ar">Ar</option>
            </select>
            </div>
          <hr class="separer">

          <ul class="navbar2">
            <li class="nav-item">
              <a class="nav-link" href="{{route('temoignages.index')}}">{{__("Témoignages")}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/evenements">Evenements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">{{__("A propos de nous")}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="donate" href="/donations">Donate</a>
            </li>
          </ul>
        </div>
</div>
</div>
</nav>
<ul class="navbar-nav fixed-bottom">
  <li class="nav-item">
    <a class="nav-link" href="{{route('contact')}}">{{__("Contact")}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/login">{{__("login")}}</a>
  </li>
</ul>

  <style>

.flaticon-solidarity {
  background-image: url('pics/solidarite.png');
  background-size: contain;
  width: 4em;
  height: 4em;
  display: inline-block;
  vertical-align: middle;
  margin-left:80px;
}
.logo h1{
  color:gray;
  margin-top:-16.5px;
  margin-left:55px;
  font-family:"Comic Sans MS";
}
/* Style pour la première ligne */
.navbar1 {
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-left:200px;
  list-style:none;

}

/* Style pour la deuxième ligne */
.navbar2 {
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-left:200px;
  list-style:none;

}
.navbar2 li a{
  text-decoration:none;
  font-size:20px;
  color:gray;
}
.navbar1 li a{
  text-decoration:none;
  font-size:20px;
  color:gray;
}
.separer{
  width:80%;
  margin-left:200px;
  margin-top:-10px;
  margin-bottom:25px;
}
.row{
  margin-top:-135px;
  padding:20px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  top:-60px;
  padding-top:40px;

}
.logo span{
  margin-top:18px;
}
.navbar2 li #donate {
  background-color: red;
  color: white;
  border-radius: 5px;
  padding: 10px 20px;
}
.row2 {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-left: 20px;

}
/* Style pour les boutons Contact et Login */
.navbar-nav.fixed-bottom {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding: 10px;
}

.navbar-nav.fixed-bottom li {
  margin-left: 10px;
}

.navbar-nav.fixed-bottom a {
  display: inline-block;
  background-color:gray;
  color: #fff;
  padding: 10px 35px;
  border-radius: 5px;
  text-decoration: none;
  transition: all 0.3s ease;
  margin-top:-10px;

}

.navbar-nav.fixed-bottom a:hover {
  background-color: #0056b3;
}

@media (max-width: 767px) {
  .navbar-nav.fixed-bottom {
    justify-content: center;
  }
}
ul {
  list-style-type: none;
}

  </style>
  