@extends("layouts.master")

@section("content")
<div class="col-lg-12">

    <a role="button" href="{{route('artikelcreate')}}" title="Create Artikel" class="btn btn-primary">
        <span class="fa fa-plus"></span>
    </a>
    <br>
    <br>

    <table class="table table-hover table-striped table-sm">
        <thead class="thead-dark">
            <tr>
                <th>Judul</th>
                <th>Artikel</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikel as $a)
            <tr>
                <td>{{$a->judul}}</td>
                <td>{{$a->isi}}</td>
                <td>
                    <a class="btn btn-default btn-sm" title="Detail Artikel" href="/artikel/{{$a->id}}">
                        <span class="fa fa-eye"></span>
                        <!-- Detail -->
                    </a>
                    <a class="btn btn-default btn-sm" title="Edit Artikel" href="/artikel/{{$a->id}}/edit">
                        <span class="fa fa-edit"></span>
                        <!-- Edit -->
                    </a>
                    <a class="btn btn-default btn-sm" title="Delete Artikel" href="/artikel/{{$a->id}}/delete">
                        <span class="fa fa-trash"></span>
                        <!-- Delete -->
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection

@push("scripts")
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush