@extends('task.layout')

@section('title', 'Votre tache a ete supprimé')

@section('main')
	<div>
        <p>La tache a ete supprimé avec succes</p>
        <button><a href="{{ route('index') }}">Retouner a la page d'accueil</a></button>
	</div>
@endsection