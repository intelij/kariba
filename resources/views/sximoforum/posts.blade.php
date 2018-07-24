@extends('layouts.app')

@section('content')
<div class="page-content row">


  <div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
  <div class="sbox-title"> <h4> <i class="fa fa-table"></i> All Forum :  {{ $row->Title }}  : {{ $row->Name }} </h4>
    <div class="sbox-tools" >
       <a href="{{ url('sximoforum/addpost/'.$row->CategoryID)}}" onclick="SximoModal(this.href,'Create New Post'); return false;" class="btn btn-white"><i class="icon-pencil"></i> Create New Post </a>
       <a href="{{ url('sximoforum')}}" class="btn btn-white"><i class="icon-bubble-left"></i> Back to Forum </a>
    </div>
  </div>
    <div class="sbox-content">
    
      <p> {!! $row->Note !!} </p>
     

      <div style="min-height:300px;" class="table-responsive">
      <table class="table table-striped " >
        <thead>
          <tr>
            <th width="120"> Posted </th>
            <th> Posts </th>
            <th width="50"> View </th>
            <th width="30"> Reply </th>
            <th width="150"> Started </th>
          </tr>
        </thead>    
        <tbody> 
        @foreach($posts as $post) 
          <tr>
            <td>{{ date('M j, Y',strtotime($post->Posted)) }}</td>
            <td onclick="window.location.href='{{ url('sximoforum/post/'.$post->PostID) }}'" style="cursor:pointer">
              <h4><a href="{{ url('sximoforum/post/'.$post->PostID) }}"> {{ $post->Title }} </a> </h4>
              <p>
                {{ strip_tags(substr($post->Content,0,255)) }} ... More
              </p> 
             
            </td>
            <td>{{ $post->Hint}}</td>
            <td>{{ $post->Reply}}</td>
            <td class="text-center">
              <?php if( file_exists( './uploads/users/'.$post->avatar) && $post->avatar !='') { ?>
              <img src="{{ URL::to('uploads/users').'/'.$post->avatar }} " border="0" width="40" class="img-circle" />
              <?php  } else { ?> 
              <img alt="" src="http://www.gravatar.com/avatar/{{ md5($post->email) }}" width="40" class="img-circle" />
              <?php } ?> 
              <br />

              {{ $post->Starter}}
            </td>

          </tr>

        @endforeach
        </tbody>
      </table>
      <hr />
            <div class="text-center">
               {!! $pagination->render() !!}
            </div>   
      </div>
  </div>
  </div>
</div>


    </div>
  </div>
</div>
@stop      
