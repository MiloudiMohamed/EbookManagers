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
                            <input id="name" type="text" class="form-control{{ $errors->has('publisher') ? ' is-invalid' : '' }}" name="publisher" value="{{ old('publisher') }}" autofocus>

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

            @if($publishers != '[]')
        <table class="table table-bordered table-condensed">
            <thead>
            <tr>
                <th>Publisher</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($publishers as $publisher)
                <tr>
                    <td>{{$publisher->name}}</td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{ url('publisher/'.Crypt::encrypt($publisher->id)) }}">Update</a>
                        <a  class="btn btn-danger btn-xs" href="{{ url('remove_publisher/'.Crypt::encrypt($publisher->id)) }}" onclick="return confirm('Are you sure to delete this?')" >Remove</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
                @endif
    </div>

@endsection