<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Create Job</h6>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-6 p-1">
                                <label class="form-label">Compay Name*</label>
                                <input type="text" class="form-control my-border" id="companyID">
                            </div>
                            <div class="col-6 p-1">
                                <label class="form-label">Job Type *</label>
                                <input type="text" class="form-control my-border" id="jobtypeID">
                            </div>
                            <div class="col-12 p-1">
                                <label class="form-label">Job Title *</label>
                                <input type="text" class="form-control my-border" id="jobTitle">
                            </div>

                            <div class="col-4 p-1">
                                <label class="form-label">job location *</label>
                                <input type="text" class="form-control my-border" id="jobLocation">
                            </div>

                            <div class="col-4 p-1">
                                <label class="form-label">No of Vacant *</label>
                                <input type="text" class="form-control my-border" id="vacantQty">
                            </div>

                            <div class="col-4 p-1">
                                <label class="form-label">Age Limit *</label>
                                <input type="text" class="form-control my-border" id="ageLimit">
                            </div>

                            <div class="col-3 p-1">
                                <label class="form-label">Req Edication *</label>
                                <input type="text" class="form-control my-border" id="requiredEdication">
                            </div>

                            <div class="col-5 p-1">
                                <label class="form-label">Minimum Experiences(yr) *</label>
                                <input type="text" class="form-control my-border" id="minExperiencesYr">
                            </div>

                            <div class="col-4 p-1">
                                <label class="form-label">Emp status *</label>
                                <input type="text" class="form-control my-border" id="employementStatus">
                            </div>

                            <div class="col-12 p-1">
                                <label class="form-label">Responsibilities *</label>
                                <textarea id="responsibilitieS" class="form-control" rows="6" >     
                                </textarea>

                            </div><div class="col-12 p-1">
                                <label class="form-label">Additional Requirement *</label>
                                <textarea id="additionalRequirement" class="form-control" rows="6" >     
                                </textarea>
                            </div>



                            <div class="col-12 p-1">
                                <label class="form-label">Benefits *</label>
                                <textarea id="benefitS" class="form-control" rows="6" >     
                                </textarea>
                            </div>

                           

                            <div class="col-6 p-1">
                                <label class="form-label">Salary range *</label>
                                <input type="text" class="form-control my-border" id="salaryRange">
                            </div>

                            <div class="col-6 p-1">
                                <label class="form-label">Last Date *</label>
                                <input type="date" class="form-control my-border" id="lastDate">
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
            let companyID               = document.getElementById('companyID').value;
            let jobtypeID               = document.getElementById('jobtypeID').value;
            let jobTitle                = document.getElementById('jobTitle').value;
            let jobLocation             = document.getElementById('jobLocation').value;
            let vacantQty               = document.getElementById('vacantQty').value;
            let ageLimit                = document.getElementById('ageLimit').value;
            let requiredEdication       = document.getElementById('requiredEdication').value;
            let minExperiencesYr        = document.getElementById('minExperiencesYr').value;
            let employementStatus       = document.getElementById('employementStatus').value;
            let responsibilitieS        = document.getElementById('responsibilitieS').value;
            let additionalRequirement   = document.getElementById('additionalRequirement').value;
            let benefitS                = document.getElementById('benefitS').value;
            let salaryRange             = document.getElementById('salaryRange').value;
            let lastDate                = document.getElementById('lastDate').value;

            document.getElementById('modal-close').click();
            showLoader();
            let res = await axios.post("/create-jobdesc",{company_id:companyID,jobtype_id:jobtypeID,title:jobTitle,job_location:jobLocation,vacant_qty:vacantQty,required_edication:requiredEdication,min_experiences_yr:minExperiencesYr,salary_range:salaryRange,benefits:benefitS,age_limit:ageLimit,additional_requirement:additionalRequirement,responsibilities:responsibilitieS,employement_status:employementStatus,last_date:lastDate},HeaderToken())
            hideLoader();

            // `id`, `user_id`, `title`, `company_id`, `jobtype_id`, `job_location`, `vacant_qty`, `required_edication`, `min_experiences_yr`, `salary_range`, `benefits`, `age_limit`, `additional_requirement`, `responsibilities`, `employement_status`, `last_date`, `no_off_applicant`, `created_at`, `updated_at`




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
