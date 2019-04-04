@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="Name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    @if(empty($product))
                                    <input id="name" type="name" name="name" required>
                                    @else
                                    <input id="name" type="name" name="name" value="{{$product->name}}" required>
                                    @endif
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    @if(empty($product))
                                    <input id="price" type="price" name="price" required>
                                    @else
                                    <input id="price" type="price" name="price" value="{{$product->price}}" required>
                                    @endif
                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="information" class="col-md-4 col-form-label text-md-right">{{ __('Information') }}</label>

                                    <div class="col-md-6">
                                        @if(empty($product))
                                    <input id="information" type="information" name="information" required>
                                    @else
                                    <input id="information" type="information" name="information" value="{{$product->information}}" required>
                                    @endif
                                    </div>
                                </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                            @if(empty($product))
                                        {{ __('Add product') }}
                                        @else
                                        {{ __('Update product') }}
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
