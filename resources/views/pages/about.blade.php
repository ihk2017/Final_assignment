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
    <h4>About Us</h4>
    <img class="nav-logo  mx-2 "  src="{{asset('images/banner.png')}}" alt="logo"/>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-8">
            <h5 >Company's History</h5>
            <hr>
            <h6>Whether you own a small startup or an international company</h6>
            <p>having a company profile is a must. However, what you consider interesting could be an utter snooze-fest for the reader, making you miss the chance to market your brand successfully.
        
                If you want to ensure that you’ve got all the correct information to entice your reader, you need to turn the traditional business profile on its head and consider what your audience wants to know about your company.
        
                To help you do that, we’ve outlined the most critical steps you need to follow to create a captivating company profile, as well as why it’s crucial that you get it right.
        
        
                A company profile is a document (print or digital) or a dedicated section on your website that introduces your brand, team and products to the world. It summarizes who you are and what you do, providing an opportunity to establish an even stronger connection with existing clients and win over new ones, as well as attract potential investors to your company or brand. It can also appeal to working professionals and entice them to join your team.
        
                In terms of length, company profiles vary. It’s generally best, however, to keep it concise and impactful. As researchers from the Technical University of Denmark have found, our collective attention span seems to be getting narrower due to the staggering amount of information that’s presented to us daily.
            </p> 
            <h6>Why do you need a company profile?</h6>
                <P>Think back to when you first started your business. It must have been an exciting time, right? That’s the sort of emotion you want to evoke in your reader, too: that you’re passionate about what you do, have something unique to offer, and are taking planned-out steps to keep getting better, all the while honoring your brand’s values and mission.
        
                    This unique side of your company is what makes your brand relatable to your readers, which then contributes to establishing a sense of trust between you and your audience, be that a prospective customer, employee or investor. This is vital if you want to keep growing your brand, which, given that you’re here, you most certainly do.
                </P>
            <h6>What to include in a company profile</h6>
            <P>To create an impactful company profile, make sure that you tick off the following sections in your writing:
            </P>
            <h6>Your story</h6>. 
                <P>This is how, why and when your organization began; what drove you to do what you’re doing.
                    Your mission. That is: what your overall goal is, what sort of world you envision and how you’re going to contribute to its creation.
                    Information about your products or services. Briefly explain what it is that you offer and what makes it one of a kind.
                    Any awards or recognition you’ve received. This is important in establishing yourself as an expert in your field, worthy of both investors’ and clients’ trust.
                    Information about your workforce. Share some insights into your overall workforce demographics and introduce top-level executives.
                </P>
        </div>
        <div class="col-md-4">
            <h5>Recent Posted Jobs</h5>
            <hr>
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
