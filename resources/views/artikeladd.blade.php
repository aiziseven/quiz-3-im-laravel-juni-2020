@extends("layouts.master")

@section("content")
<div class="col-lg-8">

    <form method="POST" action="/artikel">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Create Artikel</h6>
            </div>

            <div class="card-body">

                @csrf()
                <div class="form-group">
                    <input type="text" class="form-control" name="aJudul" placeholder="Judul" required maxlength="150">
                </div>

                <div class="form-group">
                    <textarea maxlength="255" class="form-control" name="aIsi" placeholder="Isi" required></textarea>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="aTag" placeholder="Tag (pisahkan dengan titik koma. Contoh: laravel;database;belajar)" required>
                </div>


            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a role="button" href="{{route('artikel')}}" class="btn btn-danger">Cancel</a>
            </div>

        </div>
    </form>

</div>



@endsection