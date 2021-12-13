<div class="modal fade bs-example-modal-lg" id="updatePegawaiModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('admin.updatePegawai',$data->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Update Pegawai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label>NIP</label>
                        <input name="nip" class="form-control" type="text" value="{{$data->nip}}" placeholder="NIP">
                        @error('nip') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" class="form-control" type="text" value="{{$data->nama}}" placeholder="Nama">
                        @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input name="jabatan" class="form-control" type="text" value="{{$data->jabatan}}" placeholder="Jabatan">
                        @error('jabatan') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Bagian</label>
                        <input name="bagian" class="form-control" type="text" value="{{$data->bagian}}" placeholder="Bagian">
                        @error('bagian') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Atasan</label>
                        <select class="form-control" name="atasan">
                            @foreach ($atasan as $data)    
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                        </select>
                        @error('atasan') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control" name="role_id">
                            <option value="1" {{$data->role_id == 1 ? 'selected' : ''}}>Admin</option>
                            <option value="2" {{$data->role_id == 2 ? 'selected' : ''}}>User</option>
                        </select>
                        @error('role_id') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" class="form-control" type="password" value="{{$data->password}}" placeholder="Password">
                        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>