<div class="container">
    <div class="row">
        <div class="col-md-8" style="padding-left: 0">
            @forelse ($category->lectures as $lecture)
                <div class="media lectures">
                    <div class="media-body">
                    <h5 class="mt-0"><span class="lectureId">#{{$lecture->id}}</span> {{$lecture->title}} <span class="lectureDate float-right">{{$lecture->created_at->toFormattedDateString()}}</span></h5>
                       <p class="text-muted">{{$lecture->description}}</p>
                    </div>
                </div>
            @empty
            <div class="media lectures">
                <div class="media-body">
                <h5 class="mt-0">Сеуште не постојат лекции за оваа категорија</h5>
                </div>
            </div>
            @endforelse
        </div>
        <div class="col-md-4" style="padding-right: 0">
            <div class="media banner">
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                 <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
            </div>
        </div>
    </div>
</div>