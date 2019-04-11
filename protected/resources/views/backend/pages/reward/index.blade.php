@extends('backend.index')
@section('content')
        <!-- page content -->
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Boardered table <small>Bordered table subtitle</small></h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="col-md-1" style="text-align: center;">ID</th>
            <th scope="col" style="text-align: center;">User</th>
            <th scope="col" class="col-md-2" style="text-align: center;">Reward</th>
            <th scope="col" class="col-md-2" style="text-align: center;">Created At</th>
          </tr>
        </thead>
        <tbody>
          @foreach($vals as $val)
          <tr>
            <th scope="row" style="text-align: center;">{{$val['id']}}</th>
            <td style="text-align: center;">{{$val['name']}}</td>
            <td style="text-align: center;">{{$val['reward']}} Poin</td>
            <td style="text-align: center;">{{$val['created_at']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        <!-- /page content -->
@endsection