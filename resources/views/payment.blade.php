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
        <div class="row" style="background-color: #212943; color:white; padding: 10px">
            <div class="col-md-6">
                <h3>MAKE PAYMENT</h3>
                <form enctype="multipart/form-data" action="{{ url('photo') }}" method="post" role="form" style="background-color: #212943; padding: 50px; border: double #f5f8fa">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label><b>Payment</b></label><br>
                        <p>You can make payment using the following bank information</p>
                        <p>Bank Name:Guarantee Trust Bank</p>
                        <p>Account Number:003842345433</p>
                        <p>Account Name: ADMIRALTY UNIVERSITY</p>
                    </div>
                    {{--<button type="submit" class="btn btn-primary" id="addTeller">Add teller</button>--}}
                    <a href="{{ url('/pay') }}" class="btn btn-success">Online Payment</a>
                </form>
            </div>
            <div class="col-md-6" id="tellerForm">
                <h3>UPLOAD TELLER</h3>
                <form enctype="multipart/form-data" action="{{ url('teller') }}" method="post" role="form" style="background-color: #212943; padding: 10px; border: double #f5f8fa">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="form-group">
                            <label>Teller No</label>
                            <input type="text" name="teller_no" id="teller_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Payment Date</label>
                            <input type="date" name="payment_date" id="datepicker" class="date form-control"
                                   datepicker="true" datepicker_format="DD-MM-YYYY" required>
                        </div>
                        <div class="form-group">
                            <label>Depositor's Number</label>
                            <input type="text" name="depositors_no" id="score" class="form-control" required>
                        </div>
                        <label><b>Upload JAMB Result</b></label><br>
                        <input type="file" name="teller" id="phone">
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
        </div>
    </div>
    <script type="text/javascript">

        $('.date').datepicker({

            format: 'yyyy-mm-dd'

        });

    </script>
    {{--<script  type="text/javascript">--}}
        {{--$(document).ready(function(){--}}
            {{--$('#tellerForm').hide();--}}
            {{--$("#addTeller").click(function(){--}}
                {{--$('#tellerForm').show(10);--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
@stop