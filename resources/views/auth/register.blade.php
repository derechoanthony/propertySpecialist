@extends('frontLayouts.app')

@section('content')
    <section class="probootstrap-section">
            @if (Request::is('register'))  
                <style>
                        
                        .image-background{
                            background: url({{ asset('images/9bfd9dc6eca9acdacf1df52ac540fad6.jpg') }});
                        }
                        .registration-pannel{
                            margin-top:20px;
                        }
                </style>
            @endif
            <div class="container-fluid image-background">
                    <div class="panel panel-default col-sm-4 col-sm-offset-8 registration-pannel">
                        <div class="panel-body">
                                    <div class="stepwizard col-sm-offset-3">
                                        <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step">
                                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
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
                                                <label class="control-label">Age</label>
                                                <input maxlength="2" type="number" required="required" class="form-control" placeholder="Enter Age">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Birth Date</label>
                                                <input maxlength="100" type="date" required="required" class="form-control" placeholder="Enter BirthDate">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Contact Number</label>
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Contact Numbers">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Email Address</label>
                                                <input maxlength="100" type="email" required="required" class="form-control" placeholder="Enter Email Address">
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
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                            <h3> Supporting Documents </h3>
                                            <div class="form-group">
                                                <label class="control-label">TIN</label>
                                                <input maxlength="30" type="text" required="required" class="form-control" placeholder="Enter Company Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">TEAM</label>
                                                <input maxlength="50" type="text" required="required" class="form-control" placeholder="Enter Company Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">LEAD</label>
                                                <input maxlength="50" type="text" required="required" class="form-control" placeholder="Enter Company Name">
                                            </div>
                                            <div class="form-group">                                                
                                                <label class="radio-inline"><input type="radio" name="type" checked value="1">Option 1</label>
                                                <label class="radio-inline"><input type="radio" name="type" value="2">Option 2</label>
                                            </div>
                                            <button class="btn btn-primary prevBtn btn-sm pull-left" type="button">Previous</button>
                                            <button class="btn btn-primary nextBtn btn-sm pull-right" type="button">Next</button>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row setup-content" id="step-3">
                                        <div class="col-sm-12">
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