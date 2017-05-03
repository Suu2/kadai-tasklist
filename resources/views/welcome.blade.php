@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">
            <aside class="col-md-4">
                {!! Form::open(['route' => 'tasks.store']) !!}
                    <form class="form-inline">
                        <div class="form-group">
                            {!! Form::label('toukou', '投稿 ') !!}
                            {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'row' => '5']) !!}
                        </div>
                        <div class="from-group">
                            {!! Form::label('status', 'status ') !!}
                            {!! Form::text('status', old('status'), ['class' => 'form-control']) !!}
                        </div>
                    </form>
                    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </aside>
            <div class="col-xs-8">
                @if (count($tasks) > 0)
                    @include('tasks.tasks', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklists</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection