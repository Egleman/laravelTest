
@extends('layouts.layout')
@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">
                    <div class="card-img card-img_max" style="background-image: url({{ $post->img ?? asset('img/default.png') }})">
                    </div>
                    <div class="card-descr" style="margin-bottom: 10px">Описание: {{ $post->descr }}</div>
                    <div class="card-author">Автор: {{ $post->name }}</div>
                    <div class="card-date">Пост создан: {{ $post->created_at->diffForHumans() }}</div>
                    <div class="card-btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                        <a href="{{ route('post.edit', ['id' => $post->post_id]) }}" class="btn btn-outline-success">редактировать</a>
                        <form action="{{ route('post.destroy', ['id' => $post->post_id]) }}" method="POST" onsubmit="if (confirm('точно удалить?')) {return true} else {return false}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="Удалить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

