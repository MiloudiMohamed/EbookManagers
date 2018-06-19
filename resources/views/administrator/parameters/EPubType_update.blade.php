@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session::has('result'))
            <div class="alert alert-success">{{Session::get('result')}}</div>
        @endif

        <div class="col-md-6">
            <form method="POST">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name"  >{{ __('Name') }}</label>
                    <input id="name" type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{  $epubType['name'] }}" autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="format"  >{{ __('Format') }}</label>
                    <input id="format" type="text" class="form-control{{ $errors->has('format') ? ' is-invalid' : '' }}" name="format" value="{{ $epubType['format'] }}" autofocus>

                    @if ($errors->has('format'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('format') }}</strong>
                                    </span>
                    @endif
                </div>






                <div class="form-group">

                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>


    </div>

@endsection