@extends('layouts.app')

@section('content')
    <h1>Platforms</h1>
    @if(count($platform) > 0)
        @foreach($platform as $platform)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="{{$platform->link}}">{{$platform->title}}</a></h3>
                        <small>Description {{$platform->description}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No platforms found</p>
    @endif
@endsection

<script type="text/javascript">
    var path = "{{ url('search') }}";
    $('#search').typeahead({
         minLength: 2,
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

