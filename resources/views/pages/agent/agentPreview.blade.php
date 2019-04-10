<table>
    <tr>
        <td width="25%">
            <div class="col-sm-10">
                <img class="form-control" name="imgpreview" src="{{ asset('/storage/public/imageUpload/'.$data->image.'') }}" height="200" alt="Image preview...">
            </div>
        </td>
        <td>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" autocomplete="off" value="{{ $data->fname }}"  placeholder="Enter first name">
                    </div>            
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" autocomplete="off" value="{{ $data->lname }}"  placeholder="Enter last name">
                    </div>            
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type="number" class="form-control" id="contact" name="contact" aria-describedby="contactHelp" autocomplete="off" value="{{ $data->contact }}" placeholder="Enter contact number">
                        <small id="contactHelp" class="form-text text-muted">Mobile/Phone number</small>
                    </div>            
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off"  id="name" value="{{ $data->email }}" placeholder="Enter email">
                    </div>            
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{ url('/agent') }}">
                        <input type="button" value="Back" class="btn btn-primary">
                    </a>
                </div>
            </div>
            </div>
        </td>
    </tr>
</table>
