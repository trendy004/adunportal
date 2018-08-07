@extends('beautymail::templates.widgets')

@section('content')

    @include('beautymail::templates.widgets.articleStart')

    <h4 class="secondary"><strong>Welcome!</strong></h4>
    <p>This is to confirm successful registration</p>
    <p>Here are your Login in credentials</p>
    <table>
        <tr>
            <td>Username:</td>
            <td>{{ $username }}</td>
        <tr>
            <td>Password:</td>
            <td>{{ $passwordcode }}</td>
        </tr>
        </tr>
    </table>
    <a href="http://127.0.0.1:8000/jamb">Click here to go back to the school website</a>
    <p> Best of Luck </p>
    <p>Admiralty University<p>
    @include('beautymail::templates.widgets.articleEnd')

@stop