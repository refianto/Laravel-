@extends('frontend.index')
@section('content')
<section class="blog_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin: auto;">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>  
                            <td class="col-9">Date</td>
                            <td class="col-3">Reward</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vals as $val)
                        <tr>
                            <td>{{$val->created_at->format('d, D M Y')}}</td>
                            <td>{{$val->reward}}</td>
                        </tr>
                        @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection