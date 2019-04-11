@extends('backend.index')
@section('content')
<!-- page content -->
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>CREATED FORM <small>form elements</small></h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br />
      <form class="form-horizontal form-label-left" method="POST" action="/admin/produk">
        {{ csrf_field() }} 

        <input name="id" type="hidden" value="" placeholder="">

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Merek</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input name="merek" type="text" class="form-control" value="" placeholder="Merek">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input name="jumlah" type="text" class="form-control" value="" placeholder="Jumlah">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga (IDR)</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input name="harga" type="text" class="form-control" value="" placeholder="Harga">
          </div>
        </div>



        <div class="form-group">
          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection