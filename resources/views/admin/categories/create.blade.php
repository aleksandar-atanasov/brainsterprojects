@include('inc._successes')
@include('inc._errors')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">category</i>
              </div>
            </div>
            <div class="card-body">
                <h6 class="card-title">Додај нова категорија</h6>
            <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Име">
                    </div>
                    <div class="form-group">
                        <input type="text" name="label" id="label" placeholder="Внеси етикета на категорија со латинични букви" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="desc" class="form-control" placeholder="Опис"></textarea>
                    </div>
                    <div class="form-group form-file-upload mb-4">
                        <label for="image" class="btn btn-fab btn-round mainButton" title="Додади слика">
                            <i class="material-icons">attach_file</i>
                        </label>
                        <input type="file" name="image" id="image" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        <img id="output" src="/img/image-icon.png"
                                         width="50"
                                         height="50"
                                         class="rounded-circle pull-right">
                    </div>
                    <button type="submit" class="mainButton pull-right">Додади</button>
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
                <h6 class="card-title">Категории</h6>
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Име</th>
                            <th>Слика</th>
                            <th>Измени</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>
                                    <div class="img-container">
                                    <img src="{{asset('storage/'.$category->image)}}"
                                        alt="category-image"
                                        style="width: 50px; height:50px;"
                                        class="rounded-circle">
                                    </div>
                                </td>
                                <td>
                                    <a href="{{route('category.edit',$category->label)}}"
                                        class="btn btn-fab btn-round mainButton">
                                            <i class="material-icons">edit</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
        </div>
    </div>
</div>