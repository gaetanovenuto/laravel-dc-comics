@extends('layouts.app')

@section('page-title', 'Home')
<div class="container">
    <h1 class="text-center">
        Crea il tuo COMIC
    </h1>

    <div class="mb-4">
        <a href="{{ route('comics.index') }}" class="btn btn-primary w-100">
            Torna alla home
        </a>
    </div>

    @if($errors->any())
        <div class="alert alert-danger my-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" maxlength="512" required value="{{ old('title') }}">
        </div>
    
        <div>
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il link alla thumb" maxlength="1024"  value="{{ old('thumb') }}">
        </div>
    
        <div>
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="Inserisci il prezzo" value="{{ old('price') }}">
        </div>
    
        <div>
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie a cui appartiene" maxlength="64" required value="{{ old('series') }}">
        </div>
    
        <div>
            <label for="sale_date" class="form-label">Data di rilascio</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di rilascio" value="{{ old('sale_date') }}">
        </div>
    
        <div>
            <label for="type" class="form-label">Genere</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il genere" maxlength="64" value="{{ old('type') }}">
        </div>
    
        <div>
            <label for="artists" class="form-label">Disegnatori (separa con una virgola)</label>
            <input type="text" class="form-control" id="artists" name="artists" placeholder="Inserisci i disegnatori" required value="{{ old('artists') }}">
        </div>
        
        <div>
            <label for="writers" class="form-label">Scrittori (separa con una virgola)</label>
            <input type="text" class="form-control" id="writers" name="writers" placeholder="Inserisci gli scrittori" required value="{{ old('writers') }}">
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" rows="4" required>{{ old('description') }}</textarea>
        </div>
    
    
        <button type="submit" class="btn btn-success my-3 w-100">
            Crea
        </button>
       
    </form>
</div>

