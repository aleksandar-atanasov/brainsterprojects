@if ($errors->any())
<div class="row error">
    <div class="col-md-12">

    @foreach ($errors->getMessages() as $key => $messages)
        <div class="alert alert-dismissible fade show {{ $key == 'warning' ? 'alert-warning' : 'alert-danger' }}" role="alert">

            @foreach ($messages as $msgs)
                <strong>{{$msgs}}</strong>
            @endforeach

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach

    </div>
</div>
@endif