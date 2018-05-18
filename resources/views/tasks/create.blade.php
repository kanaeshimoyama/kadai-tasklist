@extends('layouts.app')

@section('content')

    <h1>タスクの追加ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('deadline', '締め切り:') !!}
        {!! Form::text('deadline') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection