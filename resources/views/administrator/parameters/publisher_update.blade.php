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
                    <label for="publisher"  >{{ __('Publisher') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('publisher') ? ' is-invalid' : '' }}" name="publisher" value="{{ $publisher['name']  }}" autofocus>

                    @if ($errors->has('publisher'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('publisher') }}</strong>
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