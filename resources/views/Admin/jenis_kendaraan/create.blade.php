<div class="modal fade bs-example-modal-lg" id="createJenisModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
                <form method="POST" action="{{Route('admin.storeJenis')}}">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create Jenis</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Jenis Kendaraan</label>
                        <input name="nama" class="form-control" type="text" placeholder="Jenis Kendaraan">
                        @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
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