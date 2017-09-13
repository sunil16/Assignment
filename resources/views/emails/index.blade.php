
@extends('layouts/template')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Name</th>
         <th>Number of subscribers</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
       <tr>
         <td> demo mailing list  </td>
         <td id="data1">  </td>
       
<td><a href="{{action('MailController@index')}}">Send for mail list</a></td>
       </tr>
     </tbody>

 </table>

 <script type="text/javascript">


     </script>

@endsection
