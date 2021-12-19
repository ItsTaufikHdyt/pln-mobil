<div class="modal fade bs-example-modal-lg" id="showPeminjamanModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Show Peminjaman</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <tr>
                                    <td>Keperluan </td>
                                    <td>:</td>
                                    <td>
                                        @if ($data->keperluan_id == 1)
                                        <span class="badge badge-primary">Dinas</span>
                                        @elseif ($data->keperluan_id == 2)
                                        <span class="badge badge-warning">Non Dinas</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>
                                        {{$data->nama}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bagian</td>
                                    <td>:</td>
                                    <td>
                                        @if ($data->bagian == 1)
                                        <span class="badge badge-primary">REN</span>
                                        @elseif ($data->bagian == 2)
                                        <span class="badge badge-primary">JAR</span>
                                        @elseif ($data->bagian == 3)
                                        <span class="badge badge-primary">TEL</span>
                                        @elseif ($data->bagian == 4)
                                        <span class="badge badge-primary">SAR</span>
                                        @elseif ($data->bagian == 5)
                                        <span class="badge badge-primary">KUM</span>
                                        @elseif ($data->bagian == 6)
                                        <span class="badge badge-primary">K3L</span>
                                        @elseif ($data->bagian == 7)
                                        <span class="badge badge-primary">DAN</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Penumpang</td>
                                    <td>:</td>
                                    <td>
                                        {{$data->jumlah_penumpang}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tanggal Berangkat
                                    </td>
                                    <td>:</td>
                                    <td>
                                        {{$data->tgl_berangkat}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tanggal Kembali
                                    </td>
                                    <td>:</td>
                                    <td>
                                        {{$data->tgl_kembali}}
                                    </td>
                                </tr>
                            </td>
                            <td>
                                <tr>
                                    <td>
                                        Lokasi/Tujuan
                                    </td>
                                    <td>:</td>
                                    <td>
                                        {{$data->tujuan}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Keperluan
                                    </td>
                                    <td>:</td>
                                    <td>
                                        {{$data->keperluan}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jenis Mobil
                                    </td>
                                    <td>:</td>
                                    <td>{{$data->jenis_kendaraan->nama}}</td>
                                </tr>
                                <tr>
                                    <td>No.Pol/Driver</td>
                                    <td>:</td>
                                    <td>{{$data->mobil->nopol ?? '-'}} / {{$data->supir->nama ?? '-'}}</td>
                                </tr>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                @if ($data->status == 2 || $data->status == 3)
                <a class="btn btn-danger" target="_blank" href="{{route('user.printPeminjaman',$data->id)}}">Print</a>
                @endif
            </div>
        </div>
    </div>
</div>