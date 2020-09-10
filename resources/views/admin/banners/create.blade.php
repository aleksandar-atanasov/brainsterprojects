@include('inc._successes')
@include('inc._errors')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">chrome_reader_mode</i>
              </div>
            </div>
            <div class="card-body">
                <h6 class="card-title">Додај нов банер</h6>
                <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Наслов" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="desc" class="form-control" placeholder="Опис">
                            {{old('description')}}
                        </textarea>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="link" id="link" class="form-control" placeholder="Линк" value="{{old('link')}}">
                    </div>
                    <button type="submit" class="mainButton float-right">Додади</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header card-header-icon card-header-default">
              <div class="card-icon">
                <i class="material-icons">view_list</i>
              </div>
            </div>
            <div class="card-body">
                <h6 class="card-title">Банери</h6>
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Наслов</th>
                            <th>Линк</th>
                            <th>Креиран</th>
                            <th>Акција</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>{{$banner->title}}</td>
                                <td>{{$banner->link}}</td>
                                <td>{{$banner->created_at}}</td>
                                <td style="display: flex">
                                    <a href="{{route('banner.edit',$banner->id)}}"
                                        class="btn btn-fab btn-round mainButton">
                                            <i class="material-icons">edit</i>
                                    </a> &nbsp;
                                    <form action="{{route('banner.delete', $banner->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-fab btn-round btn-danger">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$banners->links()}}
            </div>
        </div>
    </div>
</div>
