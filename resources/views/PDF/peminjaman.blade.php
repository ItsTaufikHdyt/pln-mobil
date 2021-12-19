<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            position: relative;
        }
    </style>
    <title>Penggunaan Kendaraan Dinas</title>
</head>

<body>
    <center>
        <h3>FORMULIR PERMOHONAN PENGGUNAAN KENDARAAN DINAS POOL/UMUM</h3>
    </center>
    <p>Sehubung dengan keperluan @if ($peminjaman->keperluan_id == 2)
        <strike>Dinas</strike> / Non DInas
        @elseif ($peminjaman->keperluan_id == 1)
        Dinas / <strike>Non Dinas</strike>.
        @endif
        Dengan ini kami sampaikan permohonan pemakaian kendaraan dinas sebagai berikut :
    </p>
    <br>
    <table>
        <tbody>
            <tr>
                <td>Nama Pemohon</td>
                <td>:</td>
                <td>
                    {{$peminjaman->nama}}
                </td>
            </tr>
            <tr>
                <td>Bagian</td>
                <td>:</td>
                <td>
                    <div>
                        <input type="radio" name=class="custom-control-input" {{$peminjaman->bagian == 1 ? 'checked' : ''}}>
                        <label for="customRadio4">REN</label>
                    </div>
                    <div>
                        <input type="radio" name=class="custom-control-input" {{$peminjaman->bagian == 2 ? 'checked' : ''}}>
                        <label for="customRadio5">JAR</label>
                    </div>
                    <div>
                        <input type="radio" name=class="custom-control-input" {{$peminjaman->bagian == 3 ? 'checked' : ''}}>
                        <label for="customRadio4">TEL</label>
                    </div>
                    <div>
                        <input type="radio" name=class="custom-control-input" {{$peminjaman->bagian == 4 ? 'checked' : ''}}>
                        <label for="customRadio5">SAR</label>
                    </div>
                    <div>
                        <input type="radio" name=class="custom-control-input" {{$peminjaman->bagian == 5 ? 'checked' : ''}}>
                        <label for="customRadio5">KUM</label>
                    </div>
                    <div>
                        <input type="radio" name=class="custom-control-input" {{$peminjaman->bagian == 6 ? 'checked' : ''}}>
                        <label for="customRadio5">K3L</label>
                    </div>
                    <div>
                        <input type="radio" name=class="custom-control-input" {{$peminjaman->bagian == 7 ? 'checked' : ''}}>
                        <label for="customRadio5">DAN</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Jumlah Penumpang</td>
                <td>:</td>
                <td>
                    {{$peminjaman->jumlah_penumpang}}
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Berangkat
                </td>
                <td>:</td>
                <td>
                    {{$peminjaman->tgl_berangkat}}
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Kembali
                </td>
                <td>:</td>
                <td>
                    {{$peminjaman->tgl_kembali}}
                </td>
            </tr>
            <tr>
                <td>
                    Lokasi/Tujuan
                </td>
                <td>:</td>
                <td>
                    {{$peminjaman->tujuan}}
                </td>
            </tr>
            <tr>
                <td>
                    Keperluan
                </td>
                <td>:</td>
                <td>
                    {{$peminjaman->keperluan}}
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Mobil
                </td>
                <td>:</td>
                <td>{{$peminjaman->jenis_kendaraan->nama}}</td>
            </tr>
            <tr>
                <td>No.Pol/Driver</td>
                <td>:</td>
                <td>{{$peminjaman->mobil->nopol ?? '-'}} / {{$peminjaman->supir->nama ?? '-'}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>