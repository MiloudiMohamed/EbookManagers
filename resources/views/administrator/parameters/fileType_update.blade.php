@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-6">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            <form method="POST">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name"  >{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $fileType['name'] }}" autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>


                <div class="form-group">

                    <button class="btn btn-primary">Create </button>
                </div>
            </form>
        </div>


    </div>

@endsection