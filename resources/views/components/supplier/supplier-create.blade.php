<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Supplier</h5>
                   
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                                                       
                            
                            <div class="col-12 p-1">
                                <label class="form-label">Supplier Name *</label>
                                <input type="text" class="form-control" id="supplierName">

                                <label class="form-label">Supplier Address *</label>
                                <input type="text" class="form-control" id="supplierAddress">

                                <label class="form-label">Supplier Email *</label>
                                <input type="email" class="form-control" id="supplierEmail">

                                <label class="form-label">Supplier Mobile *</label>
                                <input type="text" class="form-control" id="supplierMobile">

                                
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="Save()" id="save-btn" class="btn bg-gradient-success" >Save</button>
                </div>
            </div>
    </div>
</div>


<script>

    async function Save() {

        try {
            let supplierName = document.getElementById('supplierName').value;
            let supplierAddress = document.getElementById('supplierAddress').value;
            let supplierEmail = document.getElementById('supplierEmail').value;
            let supplierMobile = document.getElementById('supplierMobile').value;
           
            document.getElementById('modal-close').click();
            showLoader();
            let res = await axios.post("/create-supplier",{name:supplierName,address:supplierAddress,email:supplierEmail,phone:supplierMobile},HeaderToken())
            hideLoader();

            if(res.data['status']==="success"){
                successToast(res.data['message']);
                document.getElementById("save-form").reset();
                await getList();
            }
            else{
                errorToast(res.data['message'])
            }

        }catch (e) {
            unauthorized(e.response.status)
        }

    }

</script>


{{-- <select id="categorySelect" name="category_id"></select> --}}

<script>
    // Fetch categories and populate the dropdown
    fetch('/create-producttype')
        .then(response => response.json())
        .then(data => {
            const categorySelect = document.getElementById('categorySelect');

            for (const id in data.categories) {
                const option = document.createElement('option');
                option.value = id;
                option.text = data.categories[id];
                categorySelect.add(option);
            }
        });

        fetch('/create-producttype', {
    headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    }
})
</script>

