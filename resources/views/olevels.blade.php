@extends('partials.app')
@section('content')
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
    <div class="panel-body">
        <div class="row"  style="background-color: #212943; color:white; padding: 10px">
            <div class="col-sm-4">
                <h3>APPLICATION FORM || O'LEVEL RESULT</h3>
                <form enctype="multipart/form-data" action="{{ url('examType') }}" method="post" role="form"
                      style="background-color: #212943; padding: 10px; border: double #f5f8fa">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Type of O'Level </label>
                        <select name="exam_type" class="form-control" required>
                            <option value="" disabled>Choose Exam Type</option>
                            <option value="WACE">WACE</option>
                            <option value="NECO">NECO</option>
                            <option value="GCE WACE">GCE WACE</option>
                            <option value="GCE NECO">GCE NECO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Year</label>
                        <select id="resultYear" name="exam_year" class="form-control">
                            <option value="" disabled>Choose Exam Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button type="submit" class="form-control btn btn-primary">Save Score</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form enctype="multipart/form-data" action="{{ url('olevels') }}" method="post" role="form"
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
                        <label>Grade</label>
                        <select name="grade_id" class="form-control" required>
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->grade }}</option>
                            @endforeach
                        </select>
                    </div></br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button type="submit" class="form-control btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form enctype="multipart/form-data" action="{{ url('first_result') }}" method="post" role="form"
                             style="background-color: #212943; padding: 10px; border: double #f5f8fa">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label><b>Upload O'Level Result</b></label><br>
                        <input type="file" name="first_result" id="phone">
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

            <div class="col-sm-7">
                @if(!empty ($firstSitting))
                    <h3>FIRST SITTING RESULT</h3>
                    <table>
                        <tr>
                            <td>Examination Name:</td>
                            <td>{{ $firstSitting->exam_type }}</td>
                        </tr>
                        <tr>
                            <td>Examination Year: </td>
                            <td>{{ $firstSitting->exam_year }}</td>
                        </tr>
                    </table>
                @endif
                    @if(count($results) > 0)
                <div style="background-color: #212943; padding: 10px; border: double #f5f8fa">
                    <table class="table table-striped">
                        <thead>
                        <th>S/N</th>
                        <th>Subject</th>
                        <th>Grade</th>
                        {{--<th>Actions</th>--}}
                        </thead>
                        <tbody>
                        @foreach($results as $key => $result)
                            <tr>
                                <td>
                                    <div class="checkbox-custom">{{ $key + 1}}</div>
                                </td>
                                <td>{{ $result->olevel }}</td>
                                <td>{{ $result->grade }}</td>
                                {{--<td>--}}
                                {{--<div role="group"class="btn-group btn-group-sm">--}}
                                {{--<a href="" type="button"--}}
                                {{--class="btn btn-outline btn-success"><i class="ti-pencil"></i></a>--}}
                                {{--</div>--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
    <script>
        var min = 2000,
                max = min + 18,
                select = document.getElementById('resultYear');
        for (var i = min; i<=max; i++){
            var opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = i;
            select.appendChild(opt);
        }
    </script>
@stop