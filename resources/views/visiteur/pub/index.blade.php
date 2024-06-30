<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande Pub</title>
</head>
<body>
    <form action="{{ route('demandepub.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="tel">Tel:</label>
        <input type="text" id="tel" name="tel" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

       
        <label for="speciality">Speciality:</label>
        <input type="text" id="speciality" name="speciality" required><br><br>

        <label for="redaction">Redaction:</label>
        <input type="text" id="redaction" name="redaction" required><br><br>
{{--  
<div>
<label>File upload</label>
<input type="file" name="image" class="file-upload-default">
{{--  <div class="input-group col-xs-12">
<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
<span class="input-group-append">
<button class="file-upload-browse btn btn-primary" type="button">Upload</button>  --}}
    </div>  --}}
    
        <button type="submit">Submit</button>
    </form>
</body>
</html>

</div>