@extends('frontLayouts.app')

@section('content')
    <section class="probootstrap-section">
            <div class="wrapper">
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
            </div>

    </section>
@endsection