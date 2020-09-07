<x-master>
    <x-slot name="adminCss">
        @include('admin.styles.admin_style')
    </x-slot>
    @include('admin.inc._sidebar')

    <div class="main-panel">
        <!-- Navbar -->
        @include('admin.inc._navbar')
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            @include('inc._errors')
            <a href="{{route('banner.index')}}" class="btn btn-round btn-fab mainButton">
                <i class="material-icons">arrow_back</i>
            </a>
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                          <div class="card-icon">
                            <i class="material-icons">chrome_reader_mode</i>
                          </div>
                        </div>
                        <div class="card-body">
                        <h6 class="card-title">Измени го банерот со наслов {{$banner->title}}</h6>
                            <form action="{{route('banner.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Наслов" value="{{$banner->title}}">
                                </div>
                                <div class="form-group">
                                    <textarea name="description" id="desc" class="form-control" placeholder="Опис">
                                        {{$banner->description}}
                                    </textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="link" id="link" class="form-control" placeholder="Линк" value="{{$banner->link}}">
                                </div>
                                <button type="submit" class="mainButton float-right">Зачувај</button>
                            </form>
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </div>
    <x-slot name="adminScripts">
        @include('admin.scripts.admin_scripts')
    </x-slot>
</x-master>
