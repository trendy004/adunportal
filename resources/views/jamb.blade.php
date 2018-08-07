@extends('partials.app')
@section('content')
    <div class="panel-body">
        @if(Session::has('success'))
            <div class="alert alert-success">
                <p>{{Session::get('success')}}</p>
            </div>
        @endif
        @if(Session::has('warning'))
            <div class="alert alert-warning">
                <p>{{Session::get('warning')}}</p>
            </div>
        @endif
        <div class="row"  style="background-color: #212943; color:white; padding: 10px">
            <div class="col-sm-4">
                <h3>INPUT JAMB RESULT</h3>
                <form enctype="multipart/form-data" action="{{ url('jamb') }}" method="post" role="form"
                      style="background-color: #212943; padding: 10px; border: double #f5f8fa">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Subject</label>
                        <select name="subject_id" class="form-control" required>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->olevel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Scores</label>
                        <input type="text" name="score" id="score" tabindex="1" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button type="submit" class="form-control btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form enctype="multipart/form-data" action="{{ url('jambResult') }}" method="post" role="form" style="background-color: #212943; padding: 10px; border: double #f5f8fa">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label><b>Upload JAMB Result</b></label><br>
                        <input type="file" name="jamb_result" id="phone">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button type="submit" class="form-control btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @if(count($results) > 0)
                <div class="col-sm-7">
                    <h3>SUBMITTED RESULT</h3>
                    <div style="background-color: #212943; padding: 50px; border: double #f5f8fa">
                        <table class="table table-striped">
                            <thead>
                                <th>S/N</th>
                                <th>Subject</th>
                                <th>Score</th>
                                {{--<th>Actions</th>--}}
                            </thead>
                            <tbody>
                                @foreach($results as $key => $result)
                                <tr>
                                    <td>
                                        <div class="checkbox-custom">{{ $key + 1}}</div>
                                    </td>
                                    <td>{{ $result->olevel }}</td>
                                    <td>{{ $result->score }}</td>
                                    {{--<td>--}}
                                        {{--<div role="group"class="btn-group btn-group-sm">--}}
                                            {{--<a href="" type="button"--}}
                                               {{--class="btn btn-outline btn-success"><i class="ti-pencil"></i></a>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td>Total:</td>
                                    <td>{{ $total }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
        <div class="row" style="background-color: #ced4da; padding-left: 50px;">
            </div>
    </div>
@stop