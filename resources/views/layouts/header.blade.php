<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mon Site</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
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
          <li class="nav-item">
            <a class="nav-link" href="{{route('temoignages.index')}}">{{__("Témoignages")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">{{__("A propos de nous")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">{{__("Contact")}}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  