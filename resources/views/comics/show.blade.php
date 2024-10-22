@extends('layouts.app')

@section('page-title', $comics->title)

<div class="container">
    <h1 class="text-center">
        {{ $comics->title }}
    </h1>
    
    <div class="mb-4">
        <a href="{{ route('comics.index') }}" class="btn btn-success w-100">
            Torna alla home
        </a>
    </div>
    
    <div class="card">
        <div class="card-body">
            <ul>            
                <li>
                    Prezzo: {{ $comics->price }}
                </li>
                <li>
                    Serie: {{ $comics->series }}
                </li>
                <li>
                    Data di rilascio: {{ $comics->sale_date }}
                </li>
                <li>
                    Genere: {{ $comics->type }}
                </li>
                <li>
                    Disegnatori: {{ implode(', ', json_decode($comics->artists)) }}
                </li>
                <li>
                    Scrittori: {{ implode(', ', json_decode($comics->writers)) }}
                </li>
            </ul>
            <p>
                {{ $comics->description }}
            </p>
            <img class="rounded" src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
        </div>
    </div>
</div>
