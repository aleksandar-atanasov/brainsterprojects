@if (session()->has('success'))
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: -5.5em">
                <strong>{{session()->get('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif