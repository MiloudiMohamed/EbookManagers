@extends('layouts.app')
@section('content')
    <form class="form-horizontal" action="{{ route('updateBook',['id'=>$bookInfo['id']]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="organisation">Organisation:</label>
            <div class="col-sm-10">
                <select class="form-control" id="organisation" name="organisation">
                    @foreach($organisations as $org)
                        <option value="{{$org->id}}" @if($bookInfo['organisation_id'] == $org->id) selected="true" @endif>{{$org->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title"  value="{{ $bookInfo['title'] }}"/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="creator">Creator</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="creator" name="creator"  value="{{ $bookInfo['creator'] }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="record_reference">Record Reference</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="record_reference" name="record_reference"    value="{{ $bookInfo['record_reference'] }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="doi">DOI</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="doi" name="doi"   value="{{ $bookInfo['doi'] }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="isbn">Isbn</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" name="isbn"    value="{{ $bookInfo['isbn'] }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="language">Language</label>
            <div class="col-sm-10">
                <select class="form-control" name="language" id="language" style="width: auto;">
                    <option value=""></option>
                    @foreach($languages as $code => $language)
                        <option value="{{$code}}" @if($code == $bookInfo['language']) selected="true" @endif>{{$language}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="epubtype">EPubtype</label>
            <div class="col-sm-10">
                <select class="form-control" name="epubtype" id="epubtype" style="width: auto;">
                    @foreach($epubtypes as $type)
                        <option value="{{$type->id}}" @if($type->id == $bookInfo['epubtype_id']) selected="true"  @endif>{{$type->name}}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="resource">Resource</label>
            <div class="col-sm-10">
                <input class="form-control" name="resource" id="resource" readonly="readonly" value="{{ $bookInfo['resource'] }}"/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" rows="5">{{ $bookInfo['description'] }}</textarea>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
@endsection