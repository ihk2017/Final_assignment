<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                           
                <div class="align-items-center col">
                    <h4>Company List</h4>
                </div>
                <div class="align-items-center col">
                    <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end btn m-0 bg-gradient-primary">Create</button>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table table-success table-striped  table-sm" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th>
                    <th>Company Name</th>
                    <th>organizationtype_id</th>    
                    <th>User ID</th>     
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="tableList" class="height:10px;">

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script>

getList();


async function getList() {

    try {
        showLoader();
        let res=await axios.get("/list-company",HeaderToken());
        hideLoader();

        let tableList=$("#tableList");
        let tableData=$("#tableData");

        tableData.DataTable().destroy();
        tableList.empty();

        res.data['rows'].forEach(function (item,index) {
            let row=`<tr >
                    <td class="bg-dark;" >${index+1}</td>
                    <td>${item['name']}</td>
                    <td>${item['organizationtype_id']}</td>
                   
                   
            
                    <td>${item['user_id']}</td>
         
         
                   
                    
                    
                    <td>
                        <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success bg-dark">Edit</button>
                        <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                 </tr>`
                 
            tableList.append(row)
            
        })

        $('.editBtn').on('click', async function () {
            let id= $(this).data('id');
            await FillUpUpdateForm(id)
            $("#update-modal").modal('show');
        })

        $('.deleteBtn').on('click',function () {
            let id= $(this).data('id');
            $("#delete-modal").modal('show');
            $("#deleteID").val(id);
        })

        new DataTable('#tableData',{
            order:[[0,'desc']],
            lengthMenu:[15,20,50,100]
        });


    }catch (e) {
        unauthorized(e.response.status)
    }

}


</script>

