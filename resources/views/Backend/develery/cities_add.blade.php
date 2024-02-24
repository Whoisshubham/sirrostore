<!-- edit user -->
<div class="modal fade add_model" tabindex="-1" id="viewblog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add City</h4>
                <button type="button" class="close cancel-model" data-bs-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <form class="submitForm" action="{{ url('admin/store-city') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label for="name">Select Countrie<span style="color:red;">*</span></label>
                        <div class="input-group mb-3">

                            <select name="countries_id" class="custom-select" id="countries_id" required>
                                <option selected>Choose...</option>
                                @foreach ($countrieList as $countrie)
                                    <option value="{{ $countrie->id ?? null }}">{{ $countrie->name ?? null }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="states_id">Select State<span style="color:red;">*</span></label>
                        <div class="input-group mb-3">
                            <select name="states_id" id="states_id" class="custom-select" required>
                                <option selected>Choose...</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="pincode">Pincode<span style="color:red;">*</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="pincode" name="pincode">

                        </div>
                    </div>
                    <div class="row">
                        <label for="name">Name<span style="color:red;">*</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name">

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


<script src="{{ asset('ajaxform.js') }}"></script>
<script>
    function close() {
        $('#modal').modal(toggle);
    }

    $("#countries_id").change(function() {
        var id = $("#countries_id").val();
        var url = "{{ route('get-cities', ':id') }}";
        url = url.replace(':id', id);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: "JSON",
            processData: false,
            contentType: false,
            success: function(data) {
                $('#states_id').html(null);
                if (data.responseCode == "200") {
                    data.responseData.forEach(element => {
                        $('#states_id').append("<option value=" + element.id + ">" + element
                            .name + "</option>");
                    });

                } else {
                    console.log('somthing went wrong');
                }


            }
        });
    });
</script>
