@include('layouts.app')
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">Platforms</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
          </ul>
        </div>
    </nav>
 <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>Platforms </h3>
                    </div>
                        <div class="panel-body">
                            <div class="form-group">
                            <input type="text" class="form-controller" id="search" name="search"></input>
                            </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @if(count($platform) > 0)
                                                @foreach($platform as $platform)
                                                <tr>
                                                            <td><a href="{{$platform->link}}">{{$platform->title}}</a> </td>
                                                            <td>{{$platform->description}}</td>
                                                <tr>
                                                @endforeach
                                            @else
                                                <p>No platforms found</p>
                                            @endif
    
                                    </tbody>
                                </table>
                         </div>
                 </div>
            </div>
        </div>

        <script type="text/javascript">
        $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : '{{URL::to('search')}}',
        data:{'search':$value},
        success:function(data){
            $('tbody').html(data);
        } }); })
        </script>

        <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>

