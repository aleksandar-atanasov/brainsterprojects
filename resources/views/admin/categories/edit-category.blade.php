<div class="main-panel">
    <!-- Navbar -->
    @include('admin.inc._navbar')
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
        @include('inc._errors')
        <a href="{{route('category.index')}}" class="btn btn-round btn-fab mainButton">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                      <div class="card-icon">
                        <i class="material-icons">category</i>
                      </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Измени категорија {{$category->name}}</h6>
                    <form action="{{route('category.update', $category->label)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <textarea name="description" id="desc" class="form-control" rows="1">
                                    {{$category->description}}
                                </textarea>
                            </div>
                            <div class="form-group form-file-upload mb-4">
                            <img src="{{asset('storage/'. $category->image)}}" style="width: 70px; height:70px" class="rounded-circle">
                                <label for="image" class="btn btn-fab btn-round mainButton float-right" title="Додади слика">
                                    <i class="material-icons">attach_file</i>
                                </label>
                                <input type="file" name="image" id="image">
                            </div>
                            <button type="submit" class="mainButton float-right">
                                Зачувај
                            </button>
                        </form>
                    </div>
                </div>
            </div>
      </div>
    </div>
</div>