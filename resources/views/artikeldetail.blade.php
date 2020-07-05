@extends("layouts.master")

@section("content")
<div class="col-lg-8">

    @foreach($artikel as $a)
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">{{$a->judul}}</h6>
            <small>{{$a->slug}}</small>
            <br>
        </div>

        <div class="card-body">

            <p>{{$a->isi}}</p>

        </div>

        <div class="card-footer">
            @foreach(explode(";",$a->tag) as $a->tag)
                <button class="btn btn-primary btn-sm">{{$a->tag}}</button>
            @endforeach

            <br>
            <br>
            <small>Created At: {{$a->created_at}}</small>
            <br>
            <small>Updated At: {{$a->updated_at}}</small>

            <br>
            <br>
            <a role="button" href="{{route('artikel')}}" class="btn btn-danger">Back to Artikel</a>
        </div>

    </div>
    @endforeach

</div>



@endsection