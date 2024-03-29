 @extends('layouts.main')

@section('content')
 @if (Session::has('message'))
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
{{ Session::get('message') }}
</div>
 @endif

<div style="background-color: green;margin-top: -16px;height: 40px;"><h3>Shift Summary</h3></div>


  <table>
    <tr style="background-color: lightblue">
      <th style="padding-left: 20px"><h5>Main Entry /</h5></th>
      <th style="padding-right: 20px"><h4>Shift</h4></th>
 
    </tr>

  </table>

<br>
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add Shift
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Shift</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/shift" method="post">
          	@csrf
         Name:<input type="text" name="shift" >
         <input type="submit" name="Add">


          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>SN</th>
        <th>Shift</th>
        <th>Created on</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
 @php ($no = 1)

       @foreach($shifts as $shift)
      
     <tr><td>{{$no++}}</td><td>{{$shift->shift}}</td><td>{{$shift->created_at}}</td>

             <td>

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$shift->shift}}">
 Edit
</button>

<!-- The Modal -->
<div class="modal" id="{{$shift->shift}}">
  <div class="modal-dialog">
    <div class="modal-content">
 
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" style="color:blue">Edit</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form>
        Edit:<input type="text" name="shift" placeholder="{{$shift->shift}}">
      </form>
            </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 
  <a href="#"><i class="fa fa-trash" style="font-size: 22px;color :red;"></i></a>

</td></tr>

      @endforeach
    </tbody>
  </table>

  <!-- Button to Open the Modal -->

@endsection