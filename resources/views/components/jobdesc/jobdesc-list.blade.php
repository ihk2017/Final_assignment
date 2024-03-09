<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>List of Published Job</h4>
                </div>
                <div class="align-items-center col">
                    <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end btn m-0 bg-gradient-primary">Create</button>
                </div>
            </div>
            <hr class="bg-secondary"/>
            <div class="table-responsive">
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th>
                    
                   
                    <th>Tob Type</th>
                    <th>Company Name</th>
                    <th>Job Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="tableList">

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>

<script>

getList();

async function getList() {

   try {
       showLoader();
       let res=await axios.get("/list-jobdesc",HeaderToken());
       hideLoader();

       let tableList=$("#tableList");
       let tableData=$("#tableData");

       tableData.DataTable().destroy();
       tableList.empty();

       res.data['rows'].forEach(function (item,index) {
           let row=`<tr>
                    <td>${index+1}</td>
                    
                    <td>${item['jobtype']['name']}</td>
                    <td>${item['company']['name']}</td>
                    <td>${item['title']}</td>
                   
                    <td>
                        <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                        <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                 </tr>`
           tableList.append(row)
       })

     // `id`, `user_id`, `title`, `company_id`, `jobtype_id`, `job_location`, `vacant_qty`, `required_edication`, `min_experiences_yr`, `salary_range`, `benefits`, `age_limit`, `additional_requirement`, `responsibilities`, `employement_status`, `last_date`, `no_off_applicant`, `created_at`, `updated_at`

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
           lengthMenu:[10,20,50,100]
       });

   }catch (e) {
       unauthorized(e.response.status)
   }

}


</script>

