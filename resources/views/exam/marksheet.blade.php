<!DOCTYPE html>
<html>
<head>
	<title>Student Detail</title>

 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   


  

  <!-- Custom fonts for this template-->
  <link href="{{asset('css/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('css/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="{{asset('css/css/sb-admin.css')}}" rel="stylesheet">


</head>
<body>
<div class="container"><div class="jumbotron" style="margin-left: 10%;border-bottom: 1px solid black; margin-right: 10%;">
	

	<div style="text-align: center; background-color: black"><h3 style="color: white">Student Detail</h3></div><br>


	<table style="width: 100%;">
        <tr><th>Subject</th><th>Full Mark</th><th>Pass Mark</th><th>Obtaine Mark</th></tr>
        @foreach($marks as $mar)
        @if($mar->exam_id==$exam)
        

     	<tr><td>{{$mar->subject_id}}{{$mar->subject}}</td><td>{{$mar->FM}}</td><td>{{$mar->PM}}</td><td>{{$mar->obtained_mark}}</td></tr>

     	@endif

        @endforeach


@php($var=0)
		<tr><th>Total</th><td><?php  foreach ($marks as $ma) {
              $var=$var+$ma->FM;
		}echo $var;   ?>@php($var=0)
			
		</td>

       <td></td>
       <td>
       	@php($var=0)
       	<?php  foreach ($marks as $ma) {
       		if($mar->exam_id==$exam){
              $var=$var+$ma->obtained_mark;
              }
		}echo $var;   ?>
       </td>
@php($var=0)

	</tr></table>
 </div>
</body>
</html>