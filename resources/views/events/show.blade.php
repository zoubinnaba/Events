@extends('layouts.app')

@section('content')
	<h1>{{ $event->title }}</h1>

	<p>{{ $event->description }}</p>

	<a href="{{ route('events.edit', $event)}}" class="btn btn-primary">Modifier</a>

	<a href="{{ route('events.destroy', $event) }}" data-method="DELETE" data-confirm="Etes-vous sur ?" class="btn btn-danger">Supprimer</a>
	<hr>
	<p><a href="{{ route('home') }}" class="btn btn-primary">Tous les evenements</a></p>
@stop