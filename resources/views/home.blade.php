@extends('layouts.app')

@section('content')
@include('inc.messages')
<div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        @if(Auth::guard('jobseeker')->check())
          <h1>Let's start your career with the JobKart Team, {{Auth::guard('jobseeker')->user()->name}}</h1>
          <p> Where The Best Candidates Meet The Best Employers!
            The complete solution for employers and candidates
          </p>
          <a href="/jobseeker" class="btn btn-large">Browse Jobs</a> </div>
        @elseif(Auth::guard('jobprovider')->check()){
          <h1>Find the best employees with the JobKart Team, {{Auth::guard('jobprovider')->user()->name}}</h1>
          <p> Where The Best Candidates Meet The Best Employers!
            The complete solution for employers and candidates
          </p>
          <a href="/postjobs" class="btn btn-large">Post a new job</a> </div>
        }
        @else{
          <h1>Let's start your career with the JobKart Team</h1>
          <p> Where The Best Candidates Meet The Best Employers!
            The complete solution for employers and candidates
          </p>
          <a href="/logincustom" class="btn btn-large">Login</a> </div>
        }
        @endif
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>We've got what you need!</h3>
      <p>Different types of technical jobs are made available in one mouse click!</p>
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-strategy"></span>
        <div class="services-content">
          <h5>IT Security </h5>
          <p>Secure different companies with your programming skills!</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>Database Management</h5>
          <p>Show-off your management software skills and create amazing database for companies</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-tools"></span>
        <div class="services-content">
          <h5>Web design and development</h5>
          <p>Create Amazing Websites using HTML,PHP,CSS & Bootstrap</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-genius"></span>
        <div class="services-content">
          <h5>Data Analytics</h5>
          <p>Turn Big Data into Intelligent & Actionable Insights</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
        <div class="services-content">
          <h5>Android Development</h5>
          <p>Eliminate Downtime & Maximize Benefits of Critical Applications</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-trophy"></span>
        <div class="services-content">
          <h5>Network Engineering</h5>
          <p>Optimize Performance & Availabilty,Quickly Remediate Issues.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- services section --> 
<!-- work section -->
<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="https://www.microsoft.com/en-in" class="work-box"> <img src="/images/work-1.jpg"  height="300"alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>MICROSOFT</h5>
             </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="https://www.ivp.in/" class="work-box"> <img src="images/work-2.jpg"  height="300" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>INDUS VALLEY PARTNERS</h5>
           
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="https://www.morganstanley.com/
" class="work-box"> <img src="images/work-3.jpg" height="300" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>MORGAN STANLEY</h5>
            </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-4.jpg" class="work-box"> <img src="images/work-4.jpg" height="300" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>NUMERA</h5>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="https://www.jpmorgan.com/
" class="work-box"> <img src="images/work-5.jpg"  height="300"alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>JP MORGAN</h5>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="https://www.google.co.in/" class="work-box"> <img src="images/work-6.jpg"  height="300" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>GOOGLE</h5>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="https://www.qualys.com/" class="work-box"> <img src="images/work-7.jpg"  height="300"alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>QUALYS SECURITY`</h5>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="https://www.cognizant.com/
" class="work-box"> <img src="images/work-8.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>COGIZENT TECNOLOGY SOLUTIONS</h5>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- work section --> 
<!-- our team section -->
<section id="teams" class="section teams">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>SAI SIRISHA</h4>
            <h5 class="role">Creative Head</h5>
        </div>
          <ul class="social-icons clearfix">
            <li><a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a></li>
            <li><a href="https://twitter.com/login?lang=en"><span class="fa fa-twitter"></span></a></li>
            <li><a href="https://in.linkedin.com/"><span class="fa fa-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>GAYATRI SHINDE</h4>
            <h5 class="role">Managing Director</h5>
            </div>
          <ul class="social-icons clearfix">
           <li><a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a></li>
            <li><a href="https://twitter.com/login?lang=en"><span class="fa fa-twitter"></span></a></li>
            <li><a href="https://in.linkedin.com/"><span class="fa fa-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-3.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>VIGNESH K SUBRAMANIAN</h4>
            <h5 class="role">Technical head</h5>
            </div>
          <ul class="social-icons clearfix">
           <li><a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a></li>
            <li><a href="https://twitter.com/login?lang=en"><span class="fa fa-twitter"></span></a></li>
            <li><a href="https://in.linkedin.com/"><span class="fa fa-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>RAHUL SOSHTE</h4>
            <h5 class="role">Marketing head</h5>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a></li>
            <li><a href="https://twitter.com/login?lang=en"><span class="fa fa-twitter"></span></a></li>
            <li><a href="https://in.linkedin.com/"><span class="fa fa-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our team section --> 
<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Awesome place to find the best jobs!Thank you JobKart" </h1>
                <p>Priyanka Saswati,Student</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Made our recruitment procedure easier" </h1>
                <p>Sundar Pichai,CEO,Google.</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Helped us connect to the best candidates in various fields" </h1>
                <p>Bill Gates,Microsoft</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Thank you JobKart!! Achieved my dream career" </h1>
                <p>Rahul Soshte, HunterLabs</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section --> 

<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
        <h5>Shoot An Email</h5>
        <p>We are happy to talk to you!</p>
        @include('inc.errors')
        <div id="message"></div>
        {!! Form::open(['url'=>'/message']) !!}
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="message" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Project Details..."></textarea>
          {{ Form::submit('Send Your Query',['class' => "submitBnt"]) }}
          <div id="simple-msg"></div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 

<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-6">
          <h5>Our Office Location</h5>
          <p>4th Floor,Sant Buildings,near Fertilizer Township <br>
            1800 1234 5678 / 86989175<br>
            support@jobskart.com</p>
          <p>Copyright © 2017 JobsKart Inc. All Rights Reserved. Made with <i class="fa fa-heart pulse"></i> in VESIT </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Services We Offer</h5>
          <p>
          <ul>
            <li><a href="/jobseeker">Browse jobs</a></li>
            <li><a href="/postjobs">Post a new job</a></li>
         </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Share with Love</h5>
          <ul class="footer-share">
            <li><a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a></li>
            <li><a href="https://twitter.com/login?lang=en"><span class="fa fa-twitter"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top --> 
  
</footer>
<!-- Footer section -->

@endsection