@if ($errors->any())
<div class="row">
    <div class="col-md-12">

    @foreach ($errors->getMessages() as $key => $messages)
        <div class="alert alert-dismissible fade show {{ $key == 'warning' ? 'alert-warning' : 'alert-danger' }}" role="alert" style="margin-top: -5em">

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