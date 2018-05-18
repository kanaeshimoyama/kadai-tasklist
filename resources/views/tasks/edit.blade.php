@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('deadline', '締め切り:') !!}
        {!! Form::text('deadline') !!}

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク内容:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection