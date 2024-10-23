@extends('layouts.app')

@section('page-title', 'Home')


<h1 class="text-center">
    DC Comics Home
</h1>



<div class="container">

    <div class="mb-4">
        <a href="{{ route('comics.create') }}" class="btn btn-success w-100">
            Aggiungi un comic
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>€{{ $comic->price }}</td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                        Info
                    </a>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">
                        Modifica
                    </a>
                    <form
                        onsubmit="return confirm('Are you sure you want to delete {{ $comic->title }}?');"
                        action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                        method="POST"
                        class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Elimina
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
