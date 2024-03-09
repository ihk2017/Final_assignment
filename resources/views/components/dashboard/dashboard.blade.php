

@extends('layout.sidenav-layout')
@section('content')
<div class="container">
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        
        <div class="row">
          <div class="col-md-8 bg-dark text-success"><h1 class="text-danger">{{ $user->firstName }}</h1> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
          <div class="col-6 col-md-4 bg-success ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
      
        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row">
          <div class="col-6 col-md-4 bg-primary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
          <div class="col-6 col-md-4 bg-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
          <div class="col-6 col-md-4 bg-danger">.col-6 .col-md-4</div>
        </div>
      
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row">
          <div class="col-6">.col-6</div>
          <div class="col-6">.col-6</div>
        </div>
      </div>
</div>

<script>

    getProfile();
    async function getProfile(){
        try{
            showLoader();
            let res=await axios.get("/user-profile",HeaderToken());
            hideLoader();
            document.getElementById('email').value=res.data['email'];
            document.getElementById('firstName').value=res.data['firstName']
            document.getElementById('lastName').value=res.data['lastName']
            document.getElementById('mobile').value=res.data['mobile']

        }catch (e) {
           unauthorized(e.response.status)
        }
    }


    async function onUpdate(){
        let PostBody={
            "firstName":document.getElementById('firstName').value,
            "lastName":document.getElementById('lastName').value,
            "mobile":document.getElementById('mobile').value,
        }
        showLoader();
        let res=await axios.post("/user-update",PostBody,HeaderToken());
        hideLoader();
        if(res.data['status']==="success"){
            successToast(res.data['message'])
            await getProfile();
        }
        else {
            successToast(res.data['message'])
        }


    }


</script>
@endsection