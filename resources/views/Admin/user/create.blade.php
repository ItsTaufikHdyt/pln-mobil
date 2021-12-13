<div class="modal fade bs-example-modal-lg" id="createPegawaiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
                <form method="POST" action="{{Route('admin.storePegawai')}}">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create PEGAWI</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>NIP</label>
                        <input name="nip" class="form-control" type="text" placeholder="NIP">
                        @error('nip') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" class="form-control" type="text" placeholder="Nama">
                        @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input name="jabatan" class="form-control" type="text" placeholder="Jabatan">
                        @error('jabatan') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Bagian</label>
                        <input name="bagian" class="form-control" type="text" placeholder="Bagian">
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
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                        @error('role_id') <span class="text-danger">{{ $message }}</span>@enderror
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