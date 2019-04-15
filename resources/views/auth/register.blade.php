@extends('frontLayouts.app')

@section('content')
    <section class="probootstrap-section">
            {{--  <div class="wrapper">
                <form action="" id="wizard">
                    <!-- SECTION 1 -->
                    <h2></h2>
                    <section>
                        <div class="inner">
                            <div class="image-holder">
                                <img src="{{ asset('stepper/images/form-wizard-1.jpg') }}" alt="">
                            </div>
                            <div class="form-content" >
                                <div class="form-header">
                                    <h3>Registration</h3>
                                </div>
                                <p>Please fill with your details</p>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <input type="text" placeholder="First Name" class="form-control">
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" placeholder="Last Name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <input type="date" placeholder="Birth Date" class="form-control">
                                    </div>
                                    <div class="form-holder">
                                        <input type="number" placeholder="Age" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                        <div class="checkbox-tick">
                                            <label class="male">
                                                <input type="radio" name="gender" value="male" checked> Male<br>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="female">
                                                <input type="radio" name="gender" value="female"> Female<br>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
    
                    <!-- SECTION 2 -->
                    <h2></h2>
                    <section>
                        <div class="inner">
                            <div class="image-holder">
                                <img src="{{ asset('stepper/images/form-wizard-2.jpg') }}" alt="">
                            </div>
                            <div class="form-content">
                                <div class="form-header">
                                    <h3>Registration</h3>
                                </div>
                                <p>Please fill with additional info</p>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <input type="text" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" placeholder="Phone Number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder w-100">
                                        <input type="text" placeholder="Address" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <input type="text" placeholder="City" class="form-control">
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" placeholder="Zip Code" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
    
                    <!-- SECTION 3 -->
                    <h2></h2>
                    <section>
                        <div class="inner">
                            <div class="image-holder">
                                <img src="{{ asset('stepper/images/form-wizard-3.jpg') }}" alt="">
                            </div>
                            <div class="form-content">
                                <div class="form-header">
                                    <h3>Registration</h3>
                                </div>
                                <p>Supporting Documents</p>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <input type="text" placeholder="Team" class="form-control">
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" placeholder="Lead" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder ">
                                        <input type="text" placeholder="TIN Number" class="form-control">
                                    </div>
                                    <div class="form-holder prc-holder">
                                            <input type="text" style="display:none;" placeholder="PRC Number" class="form-control prc">
                                    </div>
                                </div>                                    
                                <div class="form-row">
                                        <div class="form-holder">
                                                <div class="checkbox-tick">
                                                    <label class="agent">
                                                        <input type="radio" name="type" class="type" value="agent" checked> Agent<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="broker">
                                                        <input type="radio" name="type" class="type" value="broker"> Broker<br>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>  --}}
            @if (Request::is('register'))  
                <style>
                        .probootstrap-section {
                            padding: 0em 0;
                            position: relative;
                            z-index: 2;
                        }
                        .registration-pannel{
                            margin-top: 20px
                        }
                        .image-background{
                            background: url({{ asset('images/agents-and-distributors-524291605.jpg') }});
                        }
                </style>
            @endif
            <div class="container-fluid image-background">
                    <div class="panel panel-default col-sm-6 col-sm-offset-6 registration-pannel">
                            <div class="panel-body">
                                <div class="stepwizard col-sm-offset-3">
                                    <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                        <p>Step 1</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                        <p>Step 2</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                        <p>Step 3</p>
                                    </div>
                                    </div>
                                </div>
                                
                                <form role="form" action="" method="post">
                                    <div class="row setup-content" id="step-1">
                                    <div class="col-xs-12 ">
                                        <div class="col-md-12">
                                        <h3> Basic Information</h3>
                                        <div class="form-group">
                                            <label class="control-label">First Name</label>
                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Last Name</label>
                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Contact Number</label>
                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Contact Numbers">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email Address</label>
                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <textarea required="required" class="form-control" placeholder="Enter your address"></textarea>
                                        </div>
                                        <button class="btn btn-primary nextBtn btn-sm pull-right" type="button">Next</button>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row setup-content" id="step-2">
                                    <div class="col-xs-6 col-md-offset-3">
                                        <div class="col-md-12">
                                        <h3> Step 2</h3>
                                        <div class="form-group">
                                            <label class="control-label">Company Name</label>
                                            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Company Address</label>
                                            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address">
                                        </div>
                                        <button class="btn btn-primary prevBtn btn-sm pull-left" type="button">Previous</button>
                                        <button class="btn btn-primary nextBtn btn-sm pull-right" type="button">Next</button>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row setup-content" id="step-3">
                                    <div class="col-xs-6 col-md-offset-3">
                                        <div class="col-md-12">
                                        <h3> Step 3</h3>
                                        <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                                        <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                                
                                </div>
                    </div>
            </div>

    </section>
@endsection