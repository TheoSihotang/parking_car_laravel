<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Car Parking Data</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>
    <body style="background: lightgray">
        <div class="container mt-5">
            <h1>Data Mobil</h1>
            <a href="{{ route('parking.create') }}" class="btn btn-primary">Create</a>
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No telp</th>
                        <th scope="col">Jenis Mobil</th>
                        <th scope="col">Plat</th>
                        <th scope="col">Waktu Masuk</th>
                        <th scope="col">Waktu Keluar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->pemilik }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->jenis_mobil }}</td>
                        <td>{{ $item->nopol }}</td>
                        <td>{{ $item->tanggal_masuk }}</td>
                        <td>{{ $item->tanggal_keluar }}</td>
                        <td>
                            <a href="{{ route('parking.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            {{-- <a href="{{ route('parking.delete', $item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>
    </html>

</x-app-layout>
