<!doctype html>
<html class="no-js" lang="en">
    
    @extends('layout.master')
    @section('content')
<!-- register.html  03:24:53 GMT -->

<body>

    <!--header area start-->
    <!--Offcanvas menu area start-->
   
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index-2.html">home</a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

	<section class="account">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2>Register now</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur similique deleniti pariatur enim cumque eum</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    {{-- <form action="#">
                                        <div class="single-acc-field">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" placeholder="Enter Your Name">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" placeholder="Enter your Email">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" placeholder="At least 6 Charecter">
                                        </div>
                                        <div class="single-acc-field boxes">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox">I'm not a robot</label>
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit">Register now</button>
                                        </div>
                                        <a href="login.html">Already account? Login</a>
                                    </form> --}}
                                    {!! Form::open(['url' => '/register', 'method' => 'post', 'class'=> 'single-acc-field boxes']) !!}

                                    <div class="single-acc-field">
                                        

                                   {!! Form::label('name', 'Name*');!!}
                                   {!! Form::text('name', '', ['id'=>'name', 'placeholder'=>'Enter your Full Name']);!!}
                                    </div>

                                    <div class="single-acc-field">
                                   {!! Form::label('email', 'Email*');!!}
                                   {!! Form::text('email', '', ['id'=>'email', 'placeholder'=>'Enter your Email']);!!}
                                    </div>

                                    <div class="single-acc-field">
                                   {!! Form::label('password', 'Password*');!!}
                                   {!! Form::password('password', ['id'=>'password','placeholder'=>'Enter your Password']);!!}
                                    </div>

                                    <div class="single-acc-field boxes">
                                   {!! Form::checkbox('checkbox','',false,['id'=>'checkbox']);!!}
                                   
                                   
                                   {!! Form::label('checkbox', 'I am not a Robot');!!}
                                    </div>
                                    
                                    <div class="single-acc-field">

                                  {!! Form::button('Register!'); !!}
                                    </div>

                              
                                    {!! link_to('login', $title = 'Already have an account!', $parameters = [], $attributes = []);!!}
                                  
                                  

                                   



                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!--footer area start-->
@endsection