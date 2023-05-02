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
        <a href="/donations/argents/create">
            <img src="/images/faim.jpg" alt="Image 3" class="img-thumbnail">
        </a>
        <h3>{{__('Intervention contre la faim dans le Maroc')}}</h3>
        <p>{{__('Vous pouvez aider à changer les choses dès maintenant en soutenant Vision Mondiale dans son intervention contre la faim dans le Maroc')}}</p>
      </div> <div class="col-md-4">
        <a href="/donations/argents/create">
            <img src="/images/need.jpg" alt="Image 3" class="img-thumbnail">
        </a>
        <h3>{{__('Faire un don là où les besoins sont les plus urgents')}}</h3>
        <p>{{__('Mobilisant le personnel, les ressources et les fournitures de secours où ils sont les plus nécessaires, lorsqu\'ils sont les plus nécessaires.')}}</p>
      </div>
      <div class="col-md-4">
        <a href="{{ route('autres') }}" class="btn btn-primary">{{__('Autres')}}</a>
      </div>
