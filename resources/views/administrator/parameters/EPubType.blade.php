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
                <input id="name" type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="format"  >{{ __('Format') }}</label>
                <input id="format" type="text" class="form-control{{ $errors->has('format') ? ' is-invalid' : '' }}" name="format" value="{{ old('format') }}" autofocus>

                @if ($errors->has('format'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('format') }}</strong>
                                    </span>
                @endif
            </div>






            <div class="form-group">

                <button class="btn btn-primary">Create </button>
            </div>
        </form>
        </div>

            @if($epubTypes != '[]')
        <table class="table table-bordered table-condensed">
            <thead>
            <tr>
                <th>Name</th>
                <th>Format</th>
                <th style="width:200px;">Action</th>
            </tr>

            </thead>
            <tbody>
            @foreach($epubTypes as $type)
                <tr>
                    <td>{{$type->name}}</td>
                    <td>{{$type->format}}</td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{ url('epubType/'.Crypt::encrypt($type->id))  }}">Update</a>
                        <a class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this?')" href="{{ url('remove_epubType/'.Crypt::encrypt($type->id)) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

                @else
                <div class="alert alert-danger">No type found</div>
                @endif
    </div>

@endsection