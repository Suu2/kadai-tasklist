@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-6 col-sm-offset-2 col-sm-6 col-xs-12">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    {!! Form::submit('タスク追加', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection