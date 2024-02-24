<!-- edit user -->
<div class="modal fade edit_model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Categorie</h4>
                <button type="button" class="close cancel-model" data-bs-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <form class="submitForm" action="{{ url('admin/update-categorie',[$categorieData->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label for="pincode">Name<span style="color:red;">*</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name"
                                value="{{ $categorieData->name ?? null }}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-2" style="padding: 0px 0px 0px 0px;">
                        <button type="button" onclick="close()"
                            class="btn btn-secondary px-3 pr-2 mr-1 cancel-model bg-red-cus"
                            data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary px-3 bg-green-cus">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('ajaxform.js')}}"></script>
