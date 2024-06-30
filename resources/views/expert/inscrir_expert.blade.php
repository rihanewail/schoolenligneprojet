{{--  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expert Certification Form</title>
  <link rel="stylesheet" href="css/styles3.css">
</head>
<body>
  <div class="container">
    <h2>Expert Certification Form</h2>
    <form action="submit.php" method="post">
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>
      <div class="form-group">
        <label for="nom">prenom :</label>
        <input type="text" id="prenom" name="prenom" required>
      </div>
      <div class="form-group">
        <label for="domaine">Domaine :</label>
        <select id="domaine" name="domaine" required>
          <option value="">Sélectionner le domaine</option>
          <option value="Informatique">Informatique</option>
          <option value="Ingénierie">Ingénierie</option>
          <option value="Médecine">Médecine</option>
          <option value="Finance">Finance</option>
        </select>
      </div>

      <div class="form-group">
        <label for="certificat">Certificat :</label>
        <textarea id="certificat" name="certificat" rows="4" required></textarea>
      </div>

      <button type="submit">Soumettre</button>
    </form>
  </div>
</body>
</html>  --}}


@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande dInscription</title>
</head>
<body>
    <form action="{{ route('demandinscreption.store') }}" method="POST">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="lien">Lien:</label>
        <input type="text" id="lien" name="lien" required><br><br>



        <strong>specialty:</strong>
        <select  id="specialite"  name="specialite" required>
            <option value="enseignant">enseignant</option>
            <option value="Expert">Expert</option>
        </select>
















        <label for="matricule">Matricule:</label>
        <input type="text" id="matricule" name="matricule" required><br><br>

        <label for="tel">Tel:</label>
        <input type="text" id="tel" name="tel" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
@endsection
