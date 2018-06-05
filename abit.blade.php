@extends("layout") @section("content")
<div class="row">
    @foreach($key as $univ)
    <div class="col m6 row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-image">
                    <img src="{{$univ->src}}">
                    <h6 class="card-title black-text">{{$univ->name}}</h6>
                </div>
                <div class="card-content">
                    <p>{{$univ->description}}</p>
                </div>
                <div class="card-action">
                    <a href="/post/{{$univ->id}}">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
