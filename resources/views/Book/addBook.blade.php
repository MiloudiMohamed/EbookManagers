@extends('layouts.app')
@section('content')
    <form class="form-horizontal" action="{{ route('addBook') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Organisation:</label>
            <div class="col-sm-10">
             <select class="form-control">
                 @foreach($organisations as $org)
                     <option value="{{$org->id}}">{{$org->name}}</option>
                 @endforeach
             </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="creator">Creator</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="creator" name="creator" placeholder="Creator">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="record_reference">Record Reference</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="record_reference" name="record_reference" placeholder="Record Reference">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="record_reference">Record Reference</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="record_reference" name="record_reference" placeholder="Record Reference">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="doi">DOI</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="doi" name="doi" placeholder="DOI">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="isbn">Isbn</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="language">Language</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="language" name="language" placeholder="Language">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="epubtype">EPubtype</label>
            <div class="col-sm-10">
               <select class="form-control" name="epubtype" id="epubtype" style="width: auto;">
                    @foreach($epubtypes as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach

               </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="resource">Resource</label>
            <div class="col-sm-10">
                <input class="form-control" name="resource" id="resource" readonly="readonly"/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
@endsection