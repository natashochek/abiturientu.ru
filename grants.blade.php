@extends("layout") @section("content")
<div class="row" style="margin-top: 30px">
    <nav>
        <div class="nav-wrapper light-green">
            <form>
                <div class="input-field">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>
</div>
<div id="grants_info">
    @foreach($grant as $grant)
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <h5 class="black-text">{{$grant->title}}</h5>
                    <p>{{$grant->description}}</p>
                </div>
                <div class="card-action">
                    <h6><i class="material-icons tiny">timer</i> {{$grant->deadline}}</h6>
                </div>
                <div class="card-action">
                    <a href="{{$grant->url}}">Подробнее на официальном сайте</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection @section('script')
<script>
    
    var createSearchValues = function(title, description, deadline, url) {
            var div = document.createElement("div");
            div.innerHTML = '<div class="col s12 m12"><div class="card"><div class="card-content"><h5 class="black-text">' + title + '</h5><p>' + description + '</p></div><div class="card-action"><h6><i class="material-icons tiny">timer</i> '+ deadline +'</h6></div><div class="card-action"><a href="'+ url +'">Подробнее на официальном сайте</a></div></div> </div>';
        
            document.getElementById("grants_info").appendChild(div);
        }
    $('#search').on('input', function() {
        document.getElementById("grants_info").innerHTML = " ";
        
        $.ajax({
            url:'http://127.0.0.1:8000/search',
            data:{
                value:$('#search').val()
            },
            success:function(search){
                 document.getElementById("grants_info").innerHTML = " ";
                
                for (i = 0; i < search.length; i++) {
                        createSearchValues(search[i].title, search[i].description, search[i].deadline,search[i].url);
                    }
            }
        })
        

    });

</script>
@endsection
