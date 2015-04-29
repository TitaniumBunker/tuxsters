MAIN
@extends('main')

{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('submissionURL', 'SubmissionURL:') !!}
			{!! Form::text('submissionURL') !!}
		</li>
		<li>
			{!! Form::label('competition_id', 'Competition_id:') !!}
			{!! Form::text('competition_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}

@section('content')
<div class="container">
SUBMISSION FORM
</div>
@endsection
