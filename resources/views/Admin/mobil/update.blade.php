<div class="modal fade bs-example-modal-lg" id="updateMobilModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('admin.updateMobil',$data->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Update Mobil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label>Nomer Polisi</label>
                        <input name="nopol" class="form-control" type="text" value="{{$data->nopol}}" placeholder="Nomer Polisi">
                        @error('nopol') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Mobil</label>
                        <select class="form-control" name="jenis_mobil">
                            <option value="1" {{$data->jenis_mobil == 1 ? 'selected' : ''}}>Avanza</option>
                            <option value="2" {{$data->jenis_mobil == 2 ? 'selected' : ''}}>Hilux Single Cabin</option>
                            <option value="3" {{$data->jenis_mobil == 3 ? 'selected' : ''}}>Isuzu NKR 55</option>
                            <option value="4" {{$data->jenis_mobil == 4 ? 'selected' : ''}}>Innova</option>
                            <option value="5" {{$data->jenis_mobil == 5 ? 'selected' : ''}}>Hilux Double Cabin</option>
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