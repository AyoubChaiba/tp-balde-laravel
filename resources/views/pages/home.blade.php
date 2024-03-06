@extends('layout.master')
@section('title')
    home
@endsection

@section('main')
    <div class="container mt-5">
        <h1 class="my-5">List des Groupes</h1>
        <ul>
            @foreach ($groupes as $groupe)
                <x-groupes :id="$groupe['id']" :nomGroupe="$groupe['nomGroupe']" :membres="$groupe['membres']" />
            @endforeach
        </ul>
    </div>
@endsection
