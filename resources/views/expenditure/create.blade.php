<form action="{{ route('continent.store') }}" method="post">
<!-- Modal -->
    @csrf
<div id="create" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Continent</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <div class="col-md-12">
                    <label for="">Name</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" type="text" name="name" placeholder="Continent Name" />
                </div>

                <div class="col-md-12">
                    <label for="">Lat-Lng</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" type="text" name="latlng" placeholder="Lat - Long" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</form>