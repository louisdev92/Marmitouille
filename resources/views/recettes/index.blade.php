{{--<x-layout>--}}
{{--    <h1>Mes Recettes</h1>--}}

{{--    @foreach($recettes as $key => $recette)--}}

{{--    <p>--}}
{{--        <a href="{{route('recettes.show', $key)}}">{{ $recette['title'] }} </a>--}}
{{--    </p>--}}

{{--    @endforeach--}}

{{--</x-layout>--}}

@extends('components.layout')
@section('title', 'Bienvenue sur Marmitouille')
@section('content')
    <div class="container py-4">

        <!-- Recettes -->
        @forelse($recettes as $recette)
            <div class="card mb-4 border-0 shadow recipe-card overflow-hidden">
                <div class="row g-0">
                    <!-- Image -->
                    <div class="col-md-3">
                        <img src="https://preview.redd.it/five-guys-veggie-sandwich-v0-5t23ygq3yj2b1.jpg?auto=webp&s=ffeab9f66a40177d1863510b085a4f763e1a2bb6"
                             alt="Photo de {{ $recette->titre }}"
                             class="img-fluid h-100 object-fit-cover"
                             style="object-fit: cover; height: 100%;">
                    </div>

                    <!-- Contenu -->
                    <div class="col-md-9 bg-light d-flex flex-column justify-content-between p-4 position-relative">
                        <!-- Titre -->
                        <a href="{{ route('recettes.show', $recette) }}" class="text-decoration-none mb-2">
                            <h3 class="fw-bold text-danger mb-2" style="font-size: 1.4rem;">
                                <i class="bi bi-fire me-1"></i> {{ $recette->titre }}
                            </h3>
                        </a>

                        <!-- Description -->
                        <p class="text-muted small mb-3">{{ $recette->description }}</p>

                        <!-- Auteur -->
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <img src="{{ asset('philou.jpg') }}" alt="Philou"
                                 class="rounded-circle shadow-sm"
                                 style="width: 35px; height: 35px; object-fit: cover; border: 2px solid #f5c2c7;">
                            <span class="fw-semibold text-muted">Par <strong>Philou33</strong></span>
                        </div>

                        <!-- Actions -->
                        <div class="d-flex justify-content-end gap-2 mt-auto">
                            <a href="{{ route('recettes.show', $recette) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-eye me-1"></i> Voir
                            </a>
                            <a href="{{ route('recettes.edit', $recette) }}" class="btn btn-outline-warning btn-sm">
                                <i class="bi bi-pencil me-1"></i> Modifier
                            </a>
                            <form action="{{ route('recettes.destroy', $recette) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette recette ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash me-1"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-warning text-center fs-6">
                Aucune recette enregistrée pour le moment.<br>Ouf, la planète n’est pas encore perdue...
            </div>
        @endforelse
    </div>

    <!-- Bouton ajouter flottant transformable -->
    <div class="floating-add-container" aria-label="Ajouter une recette">
        <a href="{{ route('recettes.create') }}" class="floating-add-btn plus-btn" aria-hidden="false" tabindex="0"> + </a>
        <a href="{{ route('recettes.create') }}" class="floating-add-btn text-btn" aria-hidden="true" tabindex="-1"> + Ajouter une recette </a>
    </div>

    <!-- Footer -->
    <footer class="py-3 bg-dark text-light text-center" style="font-size: 0.85rem;">
        <p class="mb-0">&copy; 2025 Marmitouille by CuisineNet</p>
    </footer>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #ffe1c8;
        }

        .recipe-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .recipe-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .card-title:hover {
            color: #bb2d3b;
            text-decoration: underline;
        }

        .floating-add-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1050;
        }

        /* Styles communs pour les 2 boutons */
        .floating-add-btn {
            background-color: #ff7f50;
            color: white;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            user-select: none;
            cursor: pointer;
            transition: opacity 0.3s ease;
            white-space: nowrap;
            padding: 0 15px;
            font-size: 1rem;
            overflow: hidden;
        }

        /* Bouton + (carré rond, carré) */
        .plus-btn {
            width: 50px;
            font-size: 1rem;
            padding: 0;
        }

        /* Bouton texte (initialement caché) */
        .text-btn {
            position: absolute;
            right: 0;
            bottom: 0;
            opacity: 0;
            pointer-events: none;
            width: auto;
        }

        /* Au hover/focus sur container : cacher +, afficher texte */
        .floating-add-container:hover .plus-btn,
        .floating-add-container:focus-within .plus-btn {
            opacity: 0;
            pointer-events: none;
        }

        .floating-add-container:hover .text-btn,
        .floating-add-container:focus-within .text-btn {
            opacity: 1;
            pointer-events: auto;
        }

    </style>
@endsection


