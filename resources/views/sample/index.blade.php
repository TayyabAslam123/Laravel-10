@extends('sample.layout')
@section('content')
<div class="container-fluid p-5 bg-success text-center">
    <h1>Home Page</h1>
</div>

<div class="jumbotron m-3">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
</div>
@endsection


@push('scripts')

<script>
    alert('hello');
    alert('world');
</script>

@endpush
