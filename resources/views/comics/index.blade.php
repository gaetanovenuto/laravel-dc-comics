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
                <td>${{ $comic->price }}</td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                        Info
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
