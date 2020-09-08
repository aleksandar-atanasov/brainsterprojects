@include('inc._successes')
@include('inc._errors')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">school</i>
              </div>
            </div>
            <div class="card-body">
                <h6 class="card-title">Додај нова лекција</h6>
            <form action="{{route('lecture.store')}}" method="POST" enctype="multipart/form-data">
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
                        <select class="form-control" name="category_id">
                            <option selected disabled hidden>Избери категорија</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
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
                <h6 class="card-title">Лекции</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Наслов</th>
                            <th>Категорија</th>
                            <th>Креирана</th>
                            <th>Акција</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lectures as $lecture)
                            <tr>
                                <td>{{$lecture->title}}</td>
                                <td>{{$lecture->category->name}}</td>
                                <td>{{$lecture->created_at}}</td>
                                <td style="display: flex">
                                    <a href="{{route('lecture.edit',$lecture->id)}}"
                                        class="btn btn-fab btn-round mainButton">
                                            <i class="material-icons">edit</i>
                                    </a> &nbsp;
                                <form action="{{route('lecture.delete', $lecture->id)}}" method="POST">
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
                {{$lectures->links()}}
            </div>
        </div>
    </div>
</div>
