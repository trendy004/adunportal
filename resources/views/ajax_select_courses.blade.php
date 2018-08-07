<option>--- Select A Description ---</option>

@if(!empty($courses))

    @foreach($courses as $key => $value)

        <option value="{{ $value }}:{{ $key }}">{{ $key }}</option>

    @endforeach

@endif