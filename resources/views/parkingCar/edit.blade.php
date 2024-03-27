<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container mt-t">
    <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            <h2 class="card-title">Form Edit Data Mobil</h2>
        </div>
        <div class="card-body">
            {{-- @dd($data->id) --}}


            <form method="post" action="{{ route('parking.update') }}" class="needs-validation" novalidate>
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Nama"
                            value="{{ $data->pemilik }}">
                    </div>

                    <div class="col-md-12">
                        <label for="nama" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp"
                            placeholder="No Telepon" value="{{ $data->no_telp }}">
                        <div class="invalid-feedback">
                            No Telepon harus diisi
                        </div>

                        <div class="col-md-12">
                            <label for="jenis_mobil" class="form-label">Jenis Mobil</label>
                            <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil"
                                placeholder="Jenis Mobil" value="{{ $data->jenis_mobil }}">
                        </div>
                        <div class="col-md-12">
                            <label for="plat" class="form-label">Plat</label>
                            <input type="text" class="form-control" id="nopol" name="nopol"
                                placeholder="No Polisi" value="{{ $data->nopol }}">
                            <div class="invalid-feedback">
                                No Polisi harus diisi
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="waktu-keluar" class="form-label">Tanggal Keluar</label>
                            <input type="date" class="form-control" id="status" name="tanggal_keluar" value="{{ $data->tanggal_keluar }}">
                        </div>
                        <div class="mt-5 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary ">Submit</button>

                            <a href="{{ route('parking.index') }}" class="btn btn-primary ms-3">Kembali</a>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
