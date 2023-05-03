<h1>Faire un don de vêtements</h1>

<form action="{{ route('vetements.storeDon') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label for="nom">Nom complet:</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>

    <div class="form-group">
        <label for="adresse">Adresse:</label>
        <input type="text" class="form-control" id="adresse" name="adresse" required>
    </div>

    <div class="form-group">
        <label for="ville">Ville:</label>
        <input type="text" class="form-control" id="ville" name="ville" required>
    </div>

    <div class="form-group">
        <label for="code_postal">Code postal:</label>
        <input type="text" class="form-control" id="code_postal" name="code_postal" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="telephone">Téléphone:</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" required>
    </div>

    <div class="form-group">
        <label for="methode">Méthode de donation:</label>
        <select class="form-control" id="methode" name="methode" required>
            <option value="virement">Par virement</option>
            <option value="lui-meme">Occupez vous de la livraison</option>
            <option value="organisation">Nous nous occupons!</option>
        </select>
        <div class="form-group">
            <label for="type">Type de donation:</label>
            <select class="form-control" id="type" name="type">
                <option value="argent">Don d'argent</option>
                <option value="vetements">Don de vêtements</option>
                <option value="meubles">Don de meubles</option>
                <option value="fourniturescolaire">Don de fourniture scolaire</option>
                <option value="alimentation">Don d'alimentation</option>
                <option value="autre">Autres</option>                
            </select>
        </div>
        
    </div>

    <button type="submit" class="btn btn-primary">Faire un don</button>
</form>
