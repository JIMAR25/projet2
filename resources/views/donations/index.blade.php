@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row">
    <h1>{{__('Donations')}}</h1>
    <p>
        {{__('Un petit geste peut faire une grande différence. Chaque don compte,
        peu importe la taille ou la forme. Ensemble, nous pouvons changer des vies et faire du monde un endroit meilleur')}}.
    </p>
    <div class="col-md-4">
        <h2>{{__('Argent')}}</h2>
        <a href="/donations/argents/index">
            <img src="/images/argent.jpg" alt="Image 3" class="img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <h2>{{__('Vêtements')}}</h2>
        <a href="/donations/vetements/create">
        <img src="/images/vetements.jpg" alt="Image 3" class="img-thumbnail">
        </a>
    </div>
    <div class="col-md-4">
        <h2>{{__('Alimentations')}}</h2>
        <a href="/donations/alimentations/create">
          <img src="/images/alimentation.jpg" alt="Image 3" class="img-thumbnail">
        </a>
      </div>
    <div class="col-md-4">
        <h2>{{__('Meubles')}}</h2>
        <a href="/donations/meubles/create">
        <img src="/images/meubles.jpg" alt="Image 1" class="img-thumbnail">
        </a>
    </div>
    <div class="col-md-4">
        <h2>{{__('Fourniture scolaires')}}</h2>
        <a href="/donations/scolaires/create">
        <img src="/images/fourniturescolaire.jpg" alt="Image 2" class="img-thumbnail">
        </a>
    </div>

      <div class="col-md-4">
        <h2>{{__('Si vous avez quelque chose d\'autre pour rendre quelqu\'un heureux, ne vous inquiétez pas, cliquez ici !')}}</h2>
        <a href="{{ route('autres') }}" class="btn btn-primary">{{__('Autres')}}</a>
      </div>
</div>
  