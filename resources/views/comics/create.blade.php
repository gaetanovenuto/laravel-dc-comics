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
    
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" maxlength="512" required>
        </div>
    
        <div>
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il link alla thumb" maxlength="1024">
        </div>
    
        <div>
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
        </div>
    
        <div>
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie a cui appartiene" maxlength="64" required>
        </div>
    
        <div>
            <label for="sale_date" class="form-label">Data di rilascio</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di rilascio">
        </div>
    
        <div>
            <label for="type" class="form-label">Genere</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il genere" maxlength="64">
        </div>
    
        <div>
            <label for="artists" class="form-label">Disegnatori (separa con una virgola)</label>
            <input type="text" class="form-control" id="artists" name="artists" placeholder="Inserisci i disegnatori" required>
        </div>
        
        <div>
            <label for="writers" class="form-label">Scrittori (separa con una virgola)</label>
            <input type="text" class="form-control" id="writers" name="writers" placeholder="Inserisci gli scrittori" required>
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" rows="4" required></textarea>
        </div>
    
    
        <button type="submit" class="btn btn-success my-3 w-100">
            Crea
        </button>
       
    </form>
</div>

