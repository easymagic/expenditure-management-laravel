<form action="{{ route('continent.update',[$item->id]) }}" method="post">
    <!-- Modal -->
    @csrf
    @method('PUT')
    <div id="edit{{ $item->id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Continent</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12">
                        <label for="">Name</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" value="{{ $item->name }}" type="text" name="name" placeholder="Continent Name" />
                    </div>

                    <div class="col-md-12">
                        <label for="">Lat-Lng</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="latlng" placeholder="Lat - Long" value="{{ $item->latlng }}" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</form>