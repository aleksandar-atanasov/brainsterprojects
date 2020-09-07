<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="title">
          @if (isset($category))
             Пријави се за  {{$category->name}}
          @else
              Избери категорија и пријави се
          @endif
      </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('store.user')}}" method="POST" id="storeUser" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="email">Емаил адреса</label>
                <input type="email"
                        id="email"
                        class="form-control"
                        name="email"
                        value="{{old('email')}}"
                        placeholder="Вашата емаил адреса">
                    <label id="email-error" class="error" for="email"></label>
                    <input type="hidden" name="category" value="{{$category->id ?? ''}}">
                </div>
                @isset($categories)
                  <div class="form-group">
                      <label for="category">Категории</label>
                      <select name="category[]" id="category" class="form-control" multiple data-trigger>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                  </div>
                @endisset
                <button type="submit" class="button mainButton float-right">Пријави се</button>
          </form>
        </div>
      </div>
    </div>
</div>