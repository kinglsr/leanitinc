@extends('layouts.master')

@section('content')
<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1" >
                <div class="row"><div class="container">
                    <div class="col-md-3 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="{{ asset('img/logo.jpg') }}">
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown" class="section-title" style="color:black">LEANIT INC</h3>
                        <h4 data-animation="animated bounceInUp" style="color:black">“Lean IT is the extension of lean manufacturing and lean services principles to the development and management of information technology (IT) products and services. Its central concern, applied in the context of IT, is the elimination of waste, where waste is work that adds no value to a product or service” </h4>             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Veterans</h3>
                        <h4 data-animation="animated bounceInUp">Company </h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="{{ asset('img/logo.jpg') }}">
                    </div>
                </div></div>
            </div>    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>




<div class="container marketing">
<h1 class="section-title wow fadeInUp"><span>About US</span></h1>
        <div class="row">
            <div class="col-md-12 col-sm-12" >
              <div class="p-3 mb-2 bg-primary text-white">
               <p>
               <br>
               <br>
                Lean IT Inc is a software engeneering and IT consulting firm, based in Richmond, VA.  It is our goal to provide knowledge based business process models/ High quality eBusiness/ Data warehousing/ Business Intelligence and B2B services to our clients; to help them build their Enterprise Applications, Legacy Applications, Partners and eBusiness portals. We offer a unified approach to Business, Data and Software modeling focused on delivering clear business results that reflect the current and future business goals and objectives.
                <br>
                <br>
                </p>
                </div>
            </div>
        </div>
      <div class="staff-section section-div" id="staff-section">
        <h1 class="section-title wow fadeInUp"><span>Staff Augmentation</span></h1>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="p-3 mb-2 bg-warning text-white">
                <p>
                <br> <br> <br>
                Lean IT consultants are available to supplement your in-house staff for long-term or short-term projects. Whether you need a junior developer to assist your team in a special project or a senior business analyst to get the work off on the right track, Our consultants are a flexible and cost-effective alternative to hiring additional permanent staff. Consultants are available for Business Process Analysis, Software Engineering and Project Management Consulting engagements on a fixed price or hourly basis and can work at on-site or off-site locations
                <br> <br> <br>
                </p>
                </div>
                <div >
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <img src="{{ asset('img/women.jpg') }}"></img>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <i class="icon-trophy font-green-haze theme-font"></i>
                    </div>
                    <div class="card-title">
                        <h2> Certificates </h2>
                    </div>
                    <div class="card-desc">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <i class="icon-basket font-purple-wisteria theme-font"></i>
                    </div>
                    <div class="card-title">
                        <h2> Join For Free </h2>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="training-section section-div" id="training-section">
        <h1 class="section-title wow fadeInUp">Training</h1>
        <div class="row">          
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/bsa.JPG') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Business System Analyst</h2>
            <p>(BSA/BA) Get the latest training in Rational Unified Process (RUP), Business and system modeling using UML 2.0, Business and systems requirements management and documentation. (RUP, UML, UP, OO, MDA, ER) </p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('bsa') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/qa.JPG') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Quality Assurance</h2>
            <p>Get the latest training </p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('qa') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/aws.JPG') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>AWS</h2>
            <p>Get the latest training </p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('aws') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          </div>      

        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/devops.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Devops</h2>
            <p>Devops is the new automation concept.</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('devops') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->>
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/sql.JPG') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>SQl .Net</h2>
            <p>Learn to design and create dynamic web based portals and applications with Microsoft's .Net. Program and code applications and software with C# (C-sharp).</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('sql') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div>
      </div><!-- /.row -->



      <!-- START THE FEATURETTES -->

      <!-- <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2MGEyZjIwNzE4IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTYwYTJmMjA3MTgiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEyNSIgeT0iMjYxLjEiPjUwMHg1MDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
        </div>
      </div> -->


      <!-- <hr class="featurette-divider"> -->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <!-- <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2016 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
 -->
    <div class="contact-section section-div" id="contact-section">
      <div class="row">
          <h1 class="section-title wow fadeInUp">Contact Us</h1>
          <div class="col-md-7">
              <div class="c-contact">
                  <div class="c-content-title-1">
                      <div class="c-line-left bg-dark"></div>
                      <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                  </div>
                  <form action="#">
                      <div class="form-group">
                          <input type="text" placeholder="Your Name" class="form-control input-md"> </div>
                      <div class="form-group">
                          <input type="text" placeholder="Your Email" class="form-control input-md"> </div>
                      <div class="form-group">
                          <input type="text" placeholder="Contact Phone" class="form-control input-md"> </div>
                      <div class="form-group">
                          <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-md"></textarea>
                      </div>
                      <button type="submit" class="btn red-mint btn-outline sbold uppercase btn-lg">Submit</button>
                  </form>
              </div>
          </div>
          <div class="col-md-5">
            <div class="c-content-contact-1 c-opt-1">
              <div class="row" data-auto-height=".c-height">
                  <div class="col-lg-12 col-md-12">
                      <div class="c-body">
                          <div class="c-section">
                              <h3>Contact Details</h3>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Address</div>
                              <address>
                                8501 Mayland Drive, Suite 104
                                Richmond, VA 23290
                              </address>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Contacts</div>
                              <p>
                                  <strong>Phone: </strong> 804-592-2993 
                                  <br>804-592-2994
                                  <br>
                                  <strong>FAX: </strong> 866-331-1812</p>
                                  <strong>Email: </strong><a href="mailto:training@leanitinc.com">training@leanitinc.com:</a>.<br>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Social</div>
                              <br>
                              <ul class="c-content-iconlist-1 ">
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-twitter"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-linkedin"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="gmapbg" class="c-content-contact-1-gmap" style="height: 615px;"></div>
            </div>
          </div>
      </div>
    </div>


@endsection
@section('page-scripts')

@endsection