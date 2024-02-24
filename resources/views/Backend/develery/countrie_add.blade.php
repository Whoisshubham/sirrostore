<!-- edit user -->
<div class="modal fade add_model" tabindex="-1" id="viewblog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Countrie</h4>
                <button type="button" class="close cancel-model" data-bs-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <form class="submitForm" action="{{ url('admin/store-countrie') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <label for="name">Name<span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="name" name="name">

                    </div>


                    <div class="d-flex justify-content-end" style="padding: 0px 0px 0 0px;">
                        <button type="button" onclick="close()" class="btn btn-secondary px-3 mr-1 cancel-model bg-red-cus"
                            data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary px-3 bg-green-cus">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function close {
        $('#modal').modal(toggle)
    }
</script>
<script src="{{asset('ajaxform.js')}}"></script>
