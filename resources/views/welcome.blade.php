<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bienvenue sur notre site d'aide et de donations</title>
  <!-- Link vers les styles CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="main">
      @include('layouts.header')
      <div class="hero-image">
        <div class="titles">

      </div>
      <div class="sidebar">
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </div>
  </div>
  <footer>
        <section class="footer">
            <div class="footer-top">
              <div class="hfoot">
                <h4>Comment vos dons sont utilisés</h4>
                <p>
                  Vos dons financent des millions de consultations,d'interventions <br> chirurgicales, de traitements et
                   de vaccinations chaque année.
                </p>
              </div>
                <div class="pource">
                  <span>50%</span>
                  <p>Votre nombre ici</p>
                </div>
                <div class="pource">
                  <span>75%</span>
                  <p>Votre nombre ici</p>
                </div>
                <div class="pource">
                  <span>100%</span>
                  <p>Votre nombre ici</p>
                </div>
            </div>
            <hr>
            <div class="box-container">
                <div class="box2">
                    <span class="flaticon-solidarity"></span>
                    <h2 class="navbar-brand">ShareHope</h2>
                </div>
                <div class="box2">
                    <h3>{{__('Liens Rapides')}}</h3>
                    <a href="#" class="a1">{{__('Accueil')}}</a>
                    <a href="#">{{__('Doantions')}}</a>
                    <a href="#">{{__('Benevolats')}}</a>
                    <a href="#">{{__('Evenements')}}</a>
                    <a href="#">{{__('À propos de nous')}}</a>
                    <a href="#">{{__('Services')}}</a>
                </div>
                <div class="box2">
                    <h3>{{__('Liens Supplémentaires')}}</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> {{__('Poser des questions')}}</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>{{__('fjbdsjhvsbdskvjbs')}}</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>{{__('fergnekrgnvfkvj')}}</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> {{__('4urfbui43fwkeb4f')}}</a>
                </div>
                <div class="box2">
                    <h3>{{__('Infos de contact')}}</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+212 546372891</a>
                    <a href="#"> <i class="fas fa-phone"></i> +212 546738292 </a>
                    <a href="#"> <i class="fas fa-envelope"></i>sharehope@gmail.com</a>
                    <a href="#"> <i class="fas fa-map"></i>av Tetouan N 20 Tetouan Maroc</a>
                </div>
                <div class="box2">
                    <h3>{{__('Suivez-nous')}}</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>
            <div class="credit">© 2023<span> ShareHope </span> | {{__('Tous les droits sont réservés!')}} </div>
        </section>
        </footer>
</body>


        
<style>
.main {
  position: relative;
  width: 100%;
  height: 100%;
}
.hero-image {
  background-image: url('/pics/back2.jpeg');
  background-size: cover;
  background-position: center;
  height: 520px; 
  position: relative;
}

.titles {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
}

.titles h1 {
  font-size: 5em;
  margin: 0;
  padding: 0;
}

.titles h2 {
  font-size: 3em;
  margin: 0;
  padding: 0;
}

.titles h3 {
  font-size: 2em;
  margin: 0;
  padding: 0;
}

.sidebar {
  position: fixed;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  width: 80px;
  background-color: white;
  color: black;
  text-align: center;
}

.sidebar ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.sidebar li {
  margin: 10px 0;
}

.sidebar a {
  color: black;
  text-decoration: none;
  display: block;
  padding: 5px;
}

.sidebar a:hover {
  background-color: white;
  color: black;
}
footer {
  background-color:#696969;
  padding: 50px;
  color:white;
}

.box-container {
  display: flex;
  
  gap:120px;
}

.box2 {
  width: 25%;
  padding: 10px;
  margin-bottom: 30px;
}

.box2 h3 {
  font-size: 1.2em;
  margin-bottom: 15px;
  color:#B22222;
}

.box2 a {
  display: block;
  margin-bottom: 5px;
  text-decoration: none;
  color:#DCDCDC;
}

.box2 a:hover {
  color:white;
}

.credit {
  margin-top: 50px;
  text-align: center;
  font-size: 0.8em;
  color: #999;
}

.credit span {
  font-weight: bold;
  color: #333;
}

.flaticon-solidarity {
  background-image: url('pics/solidarite.png');
  background-size: contain;
  width: 4em;
  height: 4em;
  margin-top:50px;
  display: inline-block;
  vertical-align: middle;

}
.box2 h2{
  color:white;
  margin-top:-16.5px;
margin-left:50px;
  font-family:"Comic Sans MS";
}

.footer-top {
  display: flex;
  align-items: center;
  justify-content: space-around;
  margin-bottom: 30px;
}

.footer-top p {
  margin: 0;
}

.footer-top span {
  font-size: 24px;
  font-weight: 700;
  margin-left: 10px;
}

.footer-top hr {
  height: 1px;
  width: 100%;
  margin: 0;
  border: none;
  background-color: #d1d1d1;
}
.hfoot h4{
  font-family:Lucida Console;
  font-family:2rem;
}
.pource span{
  font-size:4.5rem;
  font-weight:bold;
}
</style>

  <!-- <div class="container"> -->
    <!-- <h1 class="text-center mt-5 mb-3">Bienvenue sur notre site d'aide et de donations</h1>
    <p class="text-center">Nous sommes une association à but non lucratif qui vise à aider les personnes dans le besoin en leur offrant des services, des fournitures, des vêtements et de la nourriture. Nous offrons également des programmes de volontariat pour les personnes qui souhaitent aider les autres.</p> -->

    <!-- Section des offres d'aide -->
    <!-- <div class="row mt-5">
      <div class="col-md-6">
        <h2 class="mb-3">Offres d'aide</h2>
        <p>Voici les différentes offres d'aide que nous proposons:</p>
        <ul>
          <li>Services de nourriture et d'alimentation</li>
          <li>Fournitures</li>
          <li>Vêtements</li>
          <li>Fournitures scolaires</li>
        </ul>
      </div> -->
      
      <!-- Section des demandes d'aide -->
      <!-- <div class="col-md-6">
        <h2 class="mb-3">Demandes d'aide</h2>
        <p>Si vous êtes une personne dans le besoin, nous pouvons vous offrir les services suivants:</p>
        <ul>
          <li>Programmes de volontariat généraux</li>
          <li>Programmes de volontariat professionnels (médecine, éducation, etc.)</li>
        </ul>
      </div>
    </div> -->
    
    <!-- Section des cas d'urgence -->
    <!-- <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="mb-3">Cas d'urgence</h2>
        <p>Nous avons également une section de dons en ligne pour les cas spéciaux et urgents. Si vous souhaitez faire un don pour aider les personnes dans le besoin, veuillez cliquer sur le bouton ci-dessous.</p>
        <a href="#" class="btn btn-primary">Faire un don</a>
      </div>
    </div> -->
    
    <!-- Section des témoignages et réussites -->
    <!-- <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="mb-3">Témoignages et réussites</h2>
        <p>Nous sommes fiers de partager les histoires de réussite de nos bénéficiaires et de nos volontaires. Consultez notre page de témoignages pour découvrir comment notre association a changé la vie de nombreuses personnes dans le besoin.</p>
        <a href="#" class="btn btn-secondary">Témoignages</a>
      </div>
    </div> -->
    
    <!-- Section "À propos de nous" -->
    <!-- <div class="col-md-6">
        <h2>A propos de nous</h2>
        <p>Nous sommes une association à but non lucratif qui vise à aider les personnes dans le besoin. Notre mission est de rassembler des personnes qui souhaitent offrir leur temps, leur argent ou leurs compétences pour soutenir les plus démunis.</p>
        <p>Nous travaillons avec des bénévoles passionnés qui ont pour objectif de faire une différence dans la vie des gens. Nous croyons en l'importance de la solidarité et nous sommes convaincus que chacun peut contribuer à sa manière à améliorer la vie de ceux qui nous entourent.</p>
        <a href="#" class="btn btn-primary">En savoir plus</a>
      </div> -->
    
