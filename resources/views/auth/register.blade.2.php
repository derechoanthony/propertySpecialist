@extends('frontLayouts.app')

@section('content')
<section class="probootstrap-section">
    
   

    <form id="regForm" action="">

<h1>Register:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Account Registration
    <div class="row">
        <h4 class="info-text"> Lets start with the basic information (with validation)</h4>
        <div class="col-sm-5">
            <div class="form-group">
                    <div>
                            <img id='img-upload' class="img-thumbnail" src="{{ asset('images/default-avatar.png') }}"/>
                    </div>
                        
                
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp">
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            <label>First Name <small>(required)</small></label>
            <input name="firstname" type="text" class="form-control" placeholder="Andrew...">
            </div>
            <div class="form-group">
            <label>Last Name <small>(required)</small></label>
            <input name="lastname" type="text" class="form-control" placeholder="Smith...">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label>Email <small>(required)</small></label>
                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>TIN <small>(required)</small></label>
                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label>Contact <small>(required)</small></label>
                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>BirtDate <small>(required)</small></label>
                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label>Lead <small>(required)</small></label>
                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Team <small>(required)</small></label>
                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
            </div>
        </div>
        <div class="col-sm-11">
            <div class="form-group">
                <label>Address <small>(required)</small></label>
                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
            </div>
        </div>
    </div>
  <p><input placeholder="First name..." oninput="this.className = ''"></p>
  <p><input placeholder="Last name..." oninput="this.className = ''"></p>
</div>

<div class="tab">Contact Info:
  <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
</div>


<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>


</section>
@endsection