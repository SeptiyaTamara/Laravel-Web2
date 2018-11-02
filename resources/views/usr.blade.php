@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah User </h1>
            <hr>
            <form action="{{ route('user.store') }}" method="post">
			//untuk token agar tidak bisa dibuat oleh orang lain
                {{ csrf_field() }} 
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
					<label for="nama">Email:</label>
                    <input type="text" class="form-control" id="usr" name="email">
					<label for="nama">Username:</label>
                    <input type="text" class="form-control" id="usr" name="username">
					<label for="nama">Password:</label>
                    <input type="text" class="form-control" id="usr" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection