@extends('task.layout')

@section('title', 'List of Tasks')

@section('main')
	<div class="task-list">
		@foreach($tasks as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $task->title }}</h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/examen/laravel-test-version/public/task/{{ $task->id }}" class="card-footer-item">Show task ></a>
				<a href="{{ route('delete',['id'=>$task->id]) }}">Supprimer la tache</a>
			</div>
		</div>
		@endforeach
	</div>
@endsection