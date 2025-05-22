@extends('components.layout')
@section('title', 'Modifier une recette, Marmitouille')
@section('content')
    <div class="container py-2">

        <form method="POST" action="{{ route('recettes.update', $recette) }}" class="bg-light p-4 rounded shadow-sm mx-auto" style="max-width: 600px;">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <h1 class="mb-4 text-center text-danger fw-bold">Modifier la recette</h1>
                <label for="titre" class="form-label fw-semibold">Titre</label>
                <input
                    type="text"
                    id="titre"
                    name="titre"
                    class="form-control"
                    value="{{ old('titre', $recette->titre) }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="description" class="form-label fw-semibold">Description</label>
                <textarea
                    id="description"
                    name="description"
                    class="form-control"
                    rows="6"
                    required
                >{{ old('description', $recette->description) }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('recettes.index') }}" class="btn btn-secondary px-4 py-2">Annuler</a>
                <button type="submit" class="btn btn-primary px-4 py-2" style="background-color: #d94f4f; border:none;">
                    Mettre à jour
                </button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <a href="{{ url('/') }}" class="btn btn-outline-danger px-4 py-2">
                ← Retour à l'accueil
            </a>
        </div>
    </div>

    <style>
        body {
            background-color: #ffe1c8; /* couleur douce type crème, modifiable selon ton style */
        }
        .btn-primary:hover {
            background-color: #b83e3e !important;
        }
    </style>
@endsection
