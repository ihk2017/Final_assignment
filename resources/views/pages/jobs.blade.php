@extends('layout.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container-fluid ">
    <div class="row bg-secondary text-light">
<div class="col-md-2 p-2 text-center"><img class="nav-logo  mx-2"  src="{{asset('images/logo.png')}}" alt="logo"/></div>
<div class="col-md-10  text-center">
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="side-bar-item ">
                                <span class="side-bar-item-caption ">
                                    <h6 class="text-dark">Home</h6> </span>
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/about')}}" class="side-bar-item ">
                                <span class="side-bar-item-caption "><h6 
                                    class="text-dark">About Us</h6> </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/jobs')}}" class="side-bar-item ">
                                <span class="side-bar-item-caption "><h6 
                                    class="text-dark">JObs</h6> </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/blogs')}}" class="side-bar-item ">
                                <span class="side-bar-item-caption "><h6 
                                    class="text-dark">Blogs</h6> </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/contact')}}" class="side-bar-item ">
                                <span class="side-bar-item-caption "><h6 
                                    class="text-dark">Contact Us</h6> </span>
                            </a>
                        </li>
                   </ul>
                    
                </div>
                <a href="{{url("/userLogin")}}" class="btn  bg-gradient-primary ">SignIn</a> 
                <a href="{{url("/userRegistration")}}" class="btn  bg-gradient-primary ">Signup</a> 
               
            </div>
        </nav>
</div>
</div>
<div class="container text-center homebanner mt-2">
    <h4>Jobs</h4>
    <img class="nav-logo  mx-2 "  src="{{asset('images/banner.png')}}" alt="logo"/>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-8">
            <h5 >All published Jobs</h5>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            <hr> 
            <div class="container ">
                <div class="row">
                    <div class="col text-center">
                        job1
                    </div>
                    <div class="col text-center">
                        job2
                    </div>
                    <div class="col text-center">
                        job3
                    </div>
                    <div class="col text-center">
                        job4
                    </div>
                    <div class="col text-center">
                        job5
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col text-center">
                        job1
                    </div>
                    <div class="col text-center">
                        job2
                    </div>
                    <div class="col text-center">
                        job3
                    </div>
                    <div class="col text-center">
                        job4
                    </div>
                    <div class="col text-center">
                        job5
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col text-center">
                        job1
                    </div>
                    <div class="col text-center">
                        job2
                    </div>
                    <div class="col text-center">
                        job3
                    </div>
                    <div class="col text-center">
                        job4
                    </div>
                    <div class="col text-center">
                        job5
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h5>Recent Posted Jobs</h5>
            <hr>
            <div class="container ">
                <div class="row">
                    <div class="col text-center">
                        job1
                    </div>
                    <div class="col text-center">
                        job2
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   

    
   
    
</div>

<div class="container">
   <h1 class="tp">TOP Companies</h1>
   <hr>
   
    <div class="container ">
        <div class="row">
            <div class="col text-center">
                job1
            </div>
            <div class="col text-center">
                job2
            </div>
            <div class="col text-center">
                job3
            </div>
            <div class="col text-center">
                job4
            </div>
            <div class="col text-center">
                job5
            </div>
        </div>
    </div>

    <div class="container-fluid myfooter bg-secondary">
        <div class="row">
            <div class="col-md-1 mt-2 text-center"><img class="nav-logo  mx-2"  src="{{asset('images/logo.png')}}" alt="logo"/></div>
            
            <div class="col-md-3 mt-3  "> 
                <h5 class="footer-nav ">Navigations</h5> 
                <ul>
                    <li> <a class="nav-link active text-light" aria-current="page" href="#"><i class="bi bi-people"></i>Home</a></li>
                    <li> <a class="nav-link active text-light" aria-current="page" href="#">About Us</a></li>
                    <li> <a class="nav-link active text-light" aria-current="page" href="#">Jobs</a></li>
                    <li> <a class="nav-link active text-light" aria-current="page" href="#">Blogs</a></li>
                    <li> <a class="nav-link active text-light" aria-current="page" href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 mt-3 bg-light "> 
                <h5 class="footer-nav text-dark">Tools & Social Media</h5>
                <div class="row sm mt-2">
                    <div class="col-2 "><img class="nav-logo  mx-2 "  src="{{asset('images/facebook.svg')}}" alt="facebook"/></div>
                    <div class="col-9 mt-2 text-dark">Facebook</div>
                </div>
                <div class="row sm mt-2 ">
                    <div class="col-2 "><img class="nav-logo  mx-2 "  src="{{asset('images/twitter.svg')}}" alt="twitter"/></div>
                    <div class="col-9 mt-2 text-dark">Twitter</div>
                </div>
                <div class="row sm mt-2 ">
                    <div class="col-2 "><img class="nav-logo  mx-2 "  src="{{asset('images/instagram.svg')}}" alt="instagram"/></div>
                    <div class="col-9 mt-2 text-dark">Instagram</div>
                </div>
                <div class="row sm mt-2 ">
                    <div class="col-2 "><img class="nav-logo  mx-2 "  src="{{asset('images/youtube.svg')}}" alt="youtube"/></div>
                    <div class="col-9 mt-2 text-dark">Youtube</div>
                </div>
               
            </div>
            <div class="col-md-5">
                <h5 class="footer-nav mt-3">Partners</h5> 
                <div class="row">
                    <div class="col-6 h-100">
                        <div class="card">
                            <div class="card-body pimg">
                                <img class="nav-logo  mx-2 "  src="{{asset('images/mysoft.png')}}" alt="mysoft"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 h-100">
                        <div class="card">
                            <div class="card-body pimg">
                                <img class="nav-logo  mx-2 "  src="{{asset('images/labaid.jpg')}}" alt="labaid"/>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-6 h-100">
                        <div class="card">
                            <div class="card-body pimg">
                                <img class="nav-logo  mx-2 "  src="{{asset('images/bbc.png')}}" alt="bbc"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 h-100">
                        <div class="card">
                            <div class="card-body pimg">
                                <img class="nav-logo  mx-2 "  src="{{asset('images/cnn.png')}}" alt="cnn"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-center">
        <p class="text-light">All Rights Reserved @ ihk</p>
    </div>
</div>



@endsection
