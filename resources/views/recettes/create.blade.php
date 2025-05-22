@extends('components.layout')
@section('title', 'Ajouter une recette, Marmitouille')
@section('content')
    <div class="container py-2">

        <form method="POST" action="{{ route('recettes.store') }}" class="bg-light p-4 rounded shadow-sm mx-auto" style="max-width: 600px;">
            @csrf

            <div class="mb-4">
                <h1 class="mb-4 text-center text-danger fw-bold">Ajouter une recette</h1>
                <label for="titre" class="form-label fw-semibold">Titre</label>
                <input
                    type="text"
                    id="titre"
                    name="titre"
                    class="form-control"
                    placeholder="Titre de la recette"
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
                    placeholder="Décris ta recette avec amour ou humour..."
                    required
                ></textarea>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success px-4 py-2 shadow-sm" style="background-color: #ff7f50; border:none;">
                    Enregistrer
                </button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('recettes.index') }}" class="btn btn-outline-secondary px-4 py-2">
                ← Retour à la liste
            </a>
        </div>
    </div>

    <style>
        body {
            background-color: #ffe1c8; /* couleur douce type crème, modifiable selon ton style */
        }

        .btn-success:hover {
            background-color: #e96b3f !important;
        }
    </style>
@endsection
