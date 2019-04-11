@extends('backend.index')
@section('content')
        <!-- page content -->
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Boardered table <small>Bordered table subtitle</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <a href="/admin/produk/create">
          <button class="btn btn-primary" style="padding: 5px 20px;">Add</button>
        </a>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" class="col" style="text-align: center;">ID</th>
            <th scope="col" class="col" style="text-align: center;">Merek</th>
            <th scope="col" class="col" style="text-align: center;">Harga</th>
            <th scope="col" class="col" style="text-align: center;">Stok</th>
            <th scope="col" class="col" style="text-align: center;">Created At</th>
            <th scope="col" class="col" style="text-align: center;">Updated At</th>
          </tr>
        </thead>
        <tbody>
          @foreach($vals as $val)
          <tr>
            <th scope="row" style="text-align: center;">{{$val['id']}}</th>
            <td style="text-align: center;">{{$val['merek']}}</td>
            <td style="text-align: center;">{{$val['harga']}}</td>
            <td style="text-align: center;">{{$val['jumlah']}}</td>
            <td  style="text-align: center;">{{$val['created_at']->format('d, D M Y')}}</td>
            <td  style="text-align: center;">--</td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        <!-- /page content -->
@endsection