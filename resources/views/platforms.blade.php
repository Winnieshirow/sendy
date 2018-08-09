@include('layouts.app')
<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">SimpleWeb</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
      </nav>
 <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h1>PLATFORMS FOR COMMUNICATION</h1>
                    </div>
                        <div class="panel-body">
                            <div class="form-group">
                            <input type="text" class="form-controller" id="search" placeholder="Search platforms" name="search"></input>
                            </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Platform Name</th>
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

