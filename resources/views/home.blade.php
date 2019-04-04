@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3 col-md-2 sidebar">
                                <nav class="navbar bg-dark navbar-dark">
                                    <ul class="navbar-nav">
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">Home</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">Home-2</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">Home-3</a>
                                      </li>
                                    </ul>
                                  </nav>
                            </div>
                            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                                    <div class="card">
                                            <div class="card-header">Admin Dashboard</div>

                                            <div class="card-body">
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif

                                                <table class="table" id="table">
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>Information</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                        @foreach ($products as $item)
                                                            <tr>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->price}}</td>
                                                                <td>{{$item->information}}</td>
                                                                <td><input type="button" class="btn btn-danger" onclick=" document.location.href = '/edit/{{$item->name}}'" value="Edit"></td>
                                                            <td><input type="button" class="btn btn-primary" onclick=" document.location.href = '/delete/{{$item->name}}'" value="Delete"></td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                    <input type="button" class="btn btn-primary" onclick=" document.location.href = '{{route('add') }}'" value="Add">
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>

@endsection
{{-- @push('scripts')
<script type="text/javascript">
    $(document).ready( function () {
    $('.table').DataTable();
} );
</script>
@endpush --}}
@push('scripts')
<script>
$(function() {
    $('#table').DataTable();
});
</script>
@endpush
