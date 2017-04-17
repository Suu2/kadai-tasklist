@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>id = {{ $task->id }} のタスクの詳細ページ</h1>
    
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-6 col-sm-offset-2 col-sm-6 col-xs-12">

            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <td>{{ $task->id }}</td>
                </tr>
                <tr>
                    <th>タスク</th>
                    <td>{{ $task->content }}</td>
                </tr>
                <tr>
                    <th>ステータス</th>
                    <td>{{ $task->status }}</td>
                </tr>
            </table>
        
                    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
                    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        
    {!! Form::close() !!}
        </div>
    </div>
    </div>

@endsection