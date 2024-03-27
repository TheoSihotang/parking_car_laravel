<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="card-title">Form Create Data Mobil</h2>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('parking.store') }}" class="needs-validation" novalidate>
                @csrf
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Nama" required>
                        <div class="invalid-feedback">
                            Nama harus diisi
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="nama" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telepon" required>
                        <div class="invalid-feedback">
                            Nomor Telepon harus diisi
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="jenis_mobil" class="form-label">Jenis Mobil</label>
                        <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" placeholder="Jenis Mobil">
                    </div>
                    <div class="col-md-3">
                        <label for="plat" class="form-label">Plat</label>
                        <input type="text" class="form-control" id="nopol" name="nopol" placeholder="No Polisi" required>
                        <div class="invalid-feedback">
                            Nomor Plat harus diisi
                        </div>
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

