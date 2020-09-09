<div class="container">
    <div class="row">
        <div class="col-md-8 lecture-wrapper" style="padding-left: 0">
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
                <p class="text-info text-center">Сеуште не постојат лекции за оваа категорија!</p>
                </div>
            </div>
            @endforelse
        </div>
        <div class="col-md-4 banner-wrapper" style="padding-right: 0">
            @forelse ($banners as $banner)
            <div class="media banner">
                <div class="media-body">
                  <h5 class="mt-0">{{$banner->title}}</h5>
                  <p class="text-muted">{{$banner->description}}</p>
                    <a href="{{$banner->link}}" class="banner-action">
                        <span>Дознај повеќе</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @empty
            <div class="media banner">
                <div class="media-body">
                <p class="text-center text-info">Сеуште нема активни банери!</p>
            </div>
            </div>
            @endforelse

        </div>
    </div>
</div>