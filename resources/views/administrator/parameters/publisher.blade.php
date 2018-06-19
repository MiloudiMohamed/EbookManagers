@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-6">
            <form>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1"/>
                </div>

                <div class="form-group">

                    <button class="btn btn-primary">Create </button>
                </div>
            </form>
        </div>
    </div>

@endsection