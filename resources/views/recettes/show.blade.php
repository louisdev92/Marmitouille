{{--<x-layout>--}}

{{--    <h1>{{ $recette['title'] }}</h1>--}}

{{--    @foreach($recette['ingredients'] as $ingredient)--}}
{{--        <p> {{$ingredient}}</p>--}}
{{--    @endforeach--}}

{{--</x-layout>--}}

@extends('components.layout')
@section('title', $recette->titre . ', Marmitouille')
@section('content')
    <div class="container  py-2">

        <!-- Carte recette avec image et contenu -->
        <div class="card shadow-lg border-0 rounded">
            <div class="row g-0">
                <!-- Image fixe comme page d'accueil -->
                <div class="col-md-4">
                    <img src="https://preview.redd.it/five-guys-veggie-sandwich-v0-5t23ygq3yj2b1.jpg?auto=webp&s=ffeab9f66a40177d1863510b085a4f763e1a2bb6"
                         alt="Photo de {{ $recette->titre }}"
                         class="img-fluid rounded-start h-100 object-fit-cover"
                         style="object-fit: cover;">
                </div>

                <!-- Contenu -->
                <div class="col-md-8 bg-light p-4 d-flex flex-column">
                    <!-- En-tête de recette -->
                    <div class="text-center">
                        <h1 class="display-5 fw-bold text-danger">{{ $recette->titre }}</h1>
                        <p class="text-muted fst-italic">Une œuvre d’art gustative (ou pas)...</p>
                    </div>
                    <!-- Auteur -->
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <img src="{{ asset('philou.jpg') }}" alt="Photo de Philou"
                             class="rounded-circle shadow-sm"
                             style="width: 45px; height: 45px; object-fit: cover; border: 2px solid #f5c2c7;">
                        <span class="fw-semibold text-muted">Proposée par <strong>Philou33</strong></span>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <h4 class="text-danger"><i class="bi bi-chat-left-text me-2"></i>Description</h4>
                        <p class="card-text">{!! nl2br(e($recette->description)) !!}</p>
                    </div>

                    <!-- Ingrédients -->
                    <div class="mb-4">
                        <h4 class="text-danger"><i class="bi bi-basket me-2"></i>Ingrédients</h4>
                        <p>(La liste des ingrédients à mélanger avec amour... ou maladresse)</p>
                    </div>

                    <!-- Étapes -->
                    <div class="mb-4">
                        <h4 class="text-danger"><i class="bi bi-list-ol me-2"></i>Étapes de préparation</h4>
                        <p>(Les différentes étapes approximatives pour (tenter de) réussir)</p>
                    </div>

                    <!-- Actions -->
                    <div class="mt-auto d-flex justify-content-between">
                        <a href="{{ route('recettes.index') }}" class="btn btn-secondary btn-sm">
                            <i class="bi bi-arrow-left-circle me-1"></i> Retour aux recettes
                        </a>
                        <a href="{{ route('recettes.edit', $recette) }}" class="btn btn-outline-warning btn-sm">
                            <i class="bi bi-pencil-square me-1"></i> Modifier la recette
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Styles -->
    <style>
        body {
            background-color: #ffe1c8; /* couleur douce type crème, modifiable selon ton style */
        }

        .card {
            border-radius: 1rem;
        }

        h4 {
            border-bottom: 1px dashed #f5c2c7;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .btn-outline-warning:hover {
            background-color: #ffc107;
            color: white;
        }
    </style>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

