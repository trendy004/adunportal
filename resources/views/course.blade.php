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
            <div class="col-md-5">
                <h3>CHOOSE COURSE OF STUDY</h3>
                <form enctype="multipart/form-data" action="{{ url('course') }}" method="post" role="form"
                      style="background-color: #212943; padding: 10px; border: double #f5f8fa">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Faculty</label>
                        <select id="faculty_id" name="faculty_id" class="form-control" required>
                            @foreach($faculties as $faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->faculty }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <select id="course_id" name="course_id" class="form-control" required>
                            @foreach($courselists as $course)
                                <option value="{{ $course->id }}">{{ $course->course }}</option>
                            @endforeach
                        </select>
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
            @if(!empty($courses))
                <div class="col-md-7">
                    <h3>CHOOSEN COURSES</h3>
                    <div style="background-color: #212943; padding: 10px; border: double #f5f8fa">
                        <table class="table table-striped">
                            <thead>
                            <th>S/N</th>
                            <th>Faculty</th>
                            <th>Course</th>
                            {{--<th>Actions</th>--}}
                            </thead>
                            <tbody>
                            @foreach($courses as $key => $course)
                                <tr>
                                    <td>
                                        <div class="checkbox-custom">{{ $key + 1}}</div>
                                    </td>
                                    <td>{{ $course->faculty }}</td>
                                    <td>{{ $course->course }}</td>
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
                </div>
            @endif
        </div>
        <div class="row" style="background-color: #ced4da; padding-left: 50px;">
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#faculty_id").change(function(event) {
                var id = $(this).val();
                $.ajax({
                    url: '/select_course_ajax',
                    method: "POST",
                    data: {faculty_id : id, _token: '{{ csrf_token() }}'},
                    success: function(res){
                        $("#course_id").html('');

                        $("#course_id").html(res.options);
                    }
                });
            });
        });
        $( ".target" ).change(function() {
            alert( "Handler for .change() called." );
        });
    </script>
@stop