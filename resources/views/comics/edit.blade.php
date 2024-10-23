@extends('layouts.app')

@section('page-title', 'Modifica '.$comic->title)

<div class="container">
    <h1 class="my-4">
        Modifica {{ $comic->title }}
    </h1>
    
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div>
            <label for="title" class="form-label">Titolo</label>
            <input
            type="text"
            class="form-control"
            id="title"
            name="title"
            placeholder="Inserisci il titolo"
            maxlength="512"
            value="{{ $comic->title }}"
            required>
        </div>
    
        <div>
            <label for="thumb" class="form-label">Thumb</label>
            <input
            type="text"
            class="form-control"
            id="thumb"
            name="thumb"
            placeholder="Inserisci il link alla thumb"
            value="{{ $comic->thumb }}"
            maxlength="1024">
        </div>
    
        <div>
            <label for="price" class="form-label">Prezzo</label>
            <input
            type="number"
            class="form-control"
            id="price"
            name="price"
            placeholder="Inserisci il prezzo"
            value="{{ $comic->price }}">
        </div>
    
        <div>
            <label for="series" class="form-label">Serie</label>
            <input
            type="text"
            class="form-control"
            id="series"
            name="series"
            placeholder="Inserisci la serie a cui appartiene"
            maxlength="64"
            value="{{ $comic->series }}"
            required>
        </div>
    
        <div>
            <label for="sale_date" class="form-label">Data di rilascio</label>
            <input
            type="date"
            class="form-control"
            id="sale_date"
            name="sale_date"
            placeholder="Inserisci la data di rilascio"
            value="{{ $comic->sale_date }}">
        </div>
    
        <div>
            <label for="type" class="form-label">Genere</label>
            <input
            type="text"
            class="form-control"
            id="type"
            name="type"
            placeholder="Inserisci il genere"
            maxlength="64"
            value="{{ $comic->type }}">
        </div>
    
        <div>
            <label for="artists" class="form-label">Disegnatori (separa con una virgola)</label>
            <input
            type="text"
            class="form-control"
            id="artists"
            name="artists"
            placeholder="Inserisci i disegnatori"
            value="{{ implode(', ', json_decode($comic->artists)) }}">
        </div>
        
        <div>
            <label for="writers" class="form-label">Scrittori (separa con una virgola)</label>
            <input
            type="text"
            class="form-control"
            id="writers"
            name="writers"
            placeholder="Inserisci gli scrittori"
            value="{{ implode(', ', json_decode($comic->writers)) }}">
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea
            class="form-control"
            id="description"
            name="description"
            placeholder="Inserisci la descrizione"
            rows="4"
            required>{{ $comic->description }}</textarea>
        </div>
    
    
        <button type="submit" class="btn btn-success my-3 w-100">
            Modifica
        </button>

        <a href="{{ route('comics.index') }}" class="btn btn-primary w-100">
            Torna alla home
        </a>

        <a href="{{ route('comics.show', ['comic'=>$comic->id]) }}" class="btn btn-warning w-100 my-3">
            Annulla
        </a>
    
    </form>
</div>

