@extends('partials.app')
@section('content')
    <div class="panel-body">
        <div class="row" style="background-color: #212943; color:white; padding: 50px">
            <div class="col-sm-6" style="margin-left: 200px">
                <h3>PASSPORT PHOTOGRAPH</h3>
                <form enctype="multipart/form-data" action="{{ url('photo') }}" method="post" role="form" style="background-color: #212943; padding: 50px; border: double #f5f8fa">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label><b>Upload Photo</b></label><br>
                        <input type="file" name="photo" id="phone" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Photo</button>
                </form>
            </div>
            @if($photo)
                <div class="col-md-2">
                    <h5>Profile Photo</h5>
                    <img src="{{ asset('uploads')}}/{{ $photo->photo }}" alt="profile photo" />
                </div>
            @endif
        </div>
    </div>
@stop