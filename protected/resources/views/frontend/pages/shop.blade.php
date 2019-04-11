@extends('frontend.index')
@section('content')
<section class="blog_area section_gap">
    <div class="container">
        <div class="row">
        @if(Session::get('mess') != null)
            <div class="alert alert-danger z-alert col-md-10 mx-auto">
                <strong>Warning !!</strong> Jumlah is emtry..
            </div>
            <style type="text/css">
                .z-alert{
                    /*margin: auto;*/
                    z-index: 1;
                    position: absolute;
                    margin: -55px;
                }

                .border-red{
                    border:solid #CB4335 1px;
                    /*background: #FADBD8;*/
                }
            </style>
        @endif
        {{Session::forget('mess')}}
            <div class="col-lg-8" style="margin: auto;">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>  
                            <td class="col">Merek</td>
                            <td class="col">Harga</td>
                            <td class="col">Stok</td>
                            <td class="col">Jumlah</td>
                        </tr>
                    </thead>
                    <form method="POST" action="/">
                    {{ csrf_field() }}
                    <tbody>
                        @foreach($vals as $val)
                        <tr>
                            <td>{{$val->merek}}</td>
                            <td>{{$val->harga}}</td><input type="text" name="harga[]" value="{{$val->harga}}" hidden>
                            <td>{{$val->jumlah}}</td>
                            <td><input class="form-control col border-red" type="text" name="jumlah[]"></2d>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="" value="Submit"></td>
                        </tr>
                    </tbody>
                    </form>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection