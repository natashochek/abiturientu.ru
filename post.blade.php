@extends('layout') @section('content')
<h4>{{$post->name}}</h4>
@endsection @section('parallax')
<div class="parallax-container">
    <div class="parallax"><img src="{{$post->parallax}}"></div>
</div>
@endsection @section('content2')
<ul class="collapsible">
    @foreach($res2 as $fac)
    <li>
        <div class="collapsible-header">{{$fac->name}}</div>
        <div class="collapsible-body"><span>{{$fac->list}}</span></div>
    </li>
    @endforeach
</ul>
<div class="divider"></div>
<h4>Комментарии</h4>
<div class="row">
    <div class="col s12">
        <ul class="collection">
            @foreach($post->comments as $comment)
            <li class="collection-item">
                <strong>{{$comment->created_at->diffForHumans()}}. Пользователь {{$comment->nickname}} оставил комментарий:</strong>
                <article>{{$comment->comment}}</article>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="divider"></div>
<div class="row">
    <form action="/comment/{{$post->id}}" method="post">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <input id="nickname" type="text" class="validate" name="nickname">
                <label for="nickname">Nickname</label>
            </div>
            <div class="input-field col s12">
                <textarea id="comment" class="materialize-textarea" name="comment"></textarea>
                <label for="comment">Comment</label>
            </div>
            <button class="waves-effect waves-light btn light-green center-align">Отправить</button>
        </div>
    </form>
</div>
@endsection
