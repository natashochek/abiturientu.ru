@extends("layout") @section("content")

<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s6"><a href="#test1">Дизайн</a></li>
            <li class="tab col s6"><a class="active" href="#test2">Фото</a></li>
        </ul>
    </div>
    <div id="test1" class="col s12">
        <div class="row">
            @foreach($design as $elem)
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-image">
                        <img src="{{$elem->src}}">
                        <span class="card-title">{{$elem->title}}</span>
                    </div>
                    <div class="card-content">
                        <p>{{$elem->description}}</p>
                    </div>
                    <div class="card-action">
                        <h6><i class="material-icons tiny">timer</i> {{$elem->deadline}}</h6>
                    </div>

                    <div class="card-action">
                        <a href="{{$elem->url}}">Подробнее на официальном сайте</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div id="test2" class="col s12">
        <div class="row">
            @foreach($photo as $elem)
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-image">
                        <img src="{{$elem->src}}">
                        <span class="card-title">{{$elem->title}}</span>
                    </div>
                    <div class="card-content">
                        <p>{{$elem->description}}</p>
                    </div>
                    <div class="card-action">
                        <h6><i class="material-icons tiny">timer</i> {{$elem->deadline}}</h6>
                    </div>

                    <div class="card-action">
                        <a href="{{$elem->url}}">Подробнее на официальном сайте</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
