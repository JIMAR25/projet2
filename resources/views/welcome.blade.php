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
    @include('layouts.header')

  <div class="container">
    <h1 class="text-center mt-5 mb-3">Bienvenue sur notre site d'aide et de donations</h1>
    <p class="text-center">Nous sommes une association à but non lucratif qui vise à aider les personnes dans le besoin en leur offrant des services, des fournitures, des vêtements et de la nourriture. Nous offrons également des programmes de volontariat pour les personnes qui souhaitent aider les autres.</p>

    <!-- Section des offres d'aide -->
    <div class="row mt-5">
      <div class="col-md-6">
        <h2 class="mb-3">Offres d'aide</h2>
        <p>Voici les différentes offres d'aide que nous proposons:</p>
        <ul>
          <li>Services de nourriture et d'alimentation</li>
          <li>Fournitures</li>
          <li>Vêtements</li>
          <li>Fournitures scolaires</li>
        </ul>
      </div>
      
      <!-- Section des demandes d'aide -->
      <div class="col-md-6">
        <h2 class="mb-3">Demandes d'aide</h2>
        <p>Si vous êtes une personne dans le besoin, nous pouvons vous offrir les services suivants:</p>
        <ul>
          <li>Programmes de volontariat généraux</li>
          <li>Programmes de volontariat professionnels (médecine, éducation, etc.)</li>
        </ul>
      </div>
    </div>
    
    <!-- Section des cas d'urgence -->
    <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="mb-3">Cas d'urgence</h2>
        <p>Nous avons également une section de dons en ligne pour les cas spéciaux et urgents. Si vous souhaitez faire un don pour aider les personnes dans le besoin, veuillez cliquer sur le bouton ci-dessous.</p>
        <a href="#" class="btn btn-primary">Faire un don</a>
      </div>
    </div>
    
    <!-- Section des témoignages et réussites -->
    <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="mb-3">Témoignages et réussites</h2>
        <p>Nous sommes fiers de partager les histoires de réussite de nos bénéficiaires et de nos volontaires. Consultez notre page de témoignages pour découvrir comment notre association a changé la vie de nombreuses personnes dans le besoin.</p>
        <a href="#" class="btn btn-secondary">Témoignages</a>
      </div>
    </div>
    
    <!-- Section "À propos de nous" -->
    <div class="col-md-6">
        <h2>A propos de nous</h2>
        <p>Nous sommes une association à but non lucratif qui vise à aider les personnes dans le besoin. Notre mission est de rassembler des personnes qui souhaitent offrir leur temps, leur argent ou leurs compétences pour soutenir les plus démunis.</p>
        <p>Nous travaillons avec des bénévoles passionnés qui ont pour objectif de faire une différence dans la vie des gens. Nous croyons en l'importance de la solidarité et nous sommes convaincus que chacun peut contribuer à sa manière à améliorer la vie de ceux qui nous entourent.</p>
        <a href="#" class="btn btn-primary">En savoir plus</a>
      </div>
    
