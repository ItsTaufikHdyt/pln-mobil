<div class="modal fade bs-example-modal-lg" id="createMobilModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
                <form method="POST" action="{{Route('admin.storeMobil')}}">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create Mobil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Nomer Polisi</label>
                        <input name="nopol" class="form-control" type="text" placeholder="Nomer Polisi">
                        @error('nopol') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Mobil</label>
                        <select class="form-control" name="jenis_mobil">
                            <option value="1">Avanza</option>
                            <option value="2">Hilux Single Cabin</option>
                            <option value="3">Isuzu NKR 55</option>
                            <option value="4">Innova</option>
                            <option value="5">Hilux Double Cabin</option>
                        </select>
                        @error('jenis_mobil') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Unit</label>
                        <select class="form-control" name="unit_id">
                            @foreach ($unit as $data)    
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                        </select>
                        @error('unit_id') <span class="text-danger">{{ $message }}</span>@enderror
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