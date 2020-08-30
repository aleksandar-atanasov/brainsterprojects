<x-master>

    @include('inc._navbar')
    <div class="container-fluid main-container">
        @include('inc._successes')
        @include('inc._errors')
        @include('inc._heading')
        @include('inc._lectures')
    </div>

    @include('inc._modal')
</x-master>