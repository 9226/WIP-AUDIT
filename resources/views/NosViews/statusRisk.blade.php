{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('libelle', 'Libelle:') !!}
			{!! Form::text('libelle') !!}
		</li>
		<li>
			{!! Form::label('valeur', 'Valeur:') !!}
			{!! Form::text('valeur') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}