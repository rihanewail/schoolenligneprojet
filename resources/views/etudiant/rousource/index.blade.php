{{--

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Resource</title>
</head>
<body>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="resourceForm" action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea><br>

        <label for="specialite">Specialite:</label>
        <input type="text" id="specialite" name="specialite" value="{{ old('specialite') }}" required><br>

        <label for="nbrSingl">NbrSingl:</label>
        <input type="number" id="nbrSingl" name="nbrSingl" value="{{ old('nbrSingl') }}" required><br>

        <label for="file">File:</label>
        <input type="file" id="file" name="ressourc" required><br>

        <button type="submit">Submit</button>
    </form>


</body>
</html>  --}}

@extends('layouts.app2')
@section('content')

<div class="main-container">


    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Form</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            post resources
                        </li>
                    </ol>
                </nav>
            </div>

        </div>

        <form id="resourceForm" action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required><br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea><br>

            <label for="specialite">Specialite:</label>
            <input type="text" id="specialite" name="specialite" value="{{ old('specialite') }}" required><br>

            <label for="nbrSingl">NbrSingl:</label>
            <input type="number" id="nbrSingl" name="nbrSingl" value="{{ old('nbrSingl') }}" required><br>

            <label for="file">File:</label>
            <input type="file" id="file" name="ressourc" required><br>

            <button type="submit">Submit</button>
        </form>

{{--
        <p>specialite</p>
        <select class="form-control" >

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>  --}}


</div>
  @endsection
