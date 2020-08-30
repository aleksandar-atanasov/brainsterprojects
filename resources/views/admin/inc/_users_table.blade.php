<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">person</i>
              </div>
            </div>
            <div class="card-body">
                <h6 class="card-title">Регистрирани корисници</h6>
                <table class="table">
                    <thead>
                        <tr class="text-muted">
                            <th>#</th>
                            <th>Емаил</th>
                            <th>Категории</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach ($user->categories as $category)
                                    {{$category->name}}<br>
                                @endforeach
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>