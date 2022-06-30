@extends('layout.main')
@section('isi')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Inovasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('admin.update', $inovasi->id) }}">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="{{ $inovasi->username }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $inovasi->email }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ $inovasi->password }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Organisasi</label>
                    <input type="text" class="form-control" name="organisasi" id="organisasi" value="{{ $inovasi->organisasi }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $inovasi->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $inovasi->phone }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sosial Media</label>
                    <input type="text" class="form-control" name="sosmed" id="sosmed" value="{{ $inovasi->sosmed }}">
                  </div>
                  <div class="form-group">
                  <label>Kategori</label>
                    <select class="form-control select2" style="width: 100%;" name="kategori">
                         <option selected="selected"> -- Pilih Kategori -- </option>
                         <option>Pendidikan</option>
                         <option> Kesehatan </option>
                         <option> Energi </option>
                         <option> Kelautan </option>
                         <option> Industri </option>
                         <option> Pembangunan </option>
                         <option> Rekayasa </option>
                         <option> Sosial </option>
                         <option> Agribisnis </option>
                         <option> Teknologi </option>
                    </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="file" value="{{ $inovasi->file }}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

@endsection