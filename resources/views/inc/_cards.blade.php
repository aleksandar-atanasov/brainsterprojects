<div class="container cards-container">
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4 cards-column">
            <a href="{{route('show.category',$category->label)}}">
                    <div class="card h-100">
                        <div class="card-image">
                            <img src="{{ asset('storage/'. $category->image)}}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$category->name}}</h5>
                            <p class="card-text">{{$category->description}}</p>
                        </div>
                        <div class="card-footer text-small text-muted text-center">
                           {{$category->numLectures()}} лекции
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>