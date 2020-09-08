@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1>タスク一覧</h1>

            {{-- 投稿一覧 --}}
                @include('tasks.tasks')
        {{-- メッセージ作成ページへのリンク --}}
        {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}


              
            
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection