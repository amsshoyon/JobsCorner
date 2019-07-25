<div class="ftco-section bg-light">
    <div class="container">
        {!! Form::model($user, ['id'=>'profile_up_form', 'enctype' => 'multipart/form-data','method' => 'POST', 'action'
        =>['UserController@update',$user->id]]) !!}
        <div class="row">
            <div class="col-md-4 ">
                <div class="list-group ">
                    <div class="profile-picture list-group-item">

                        <div class="control-group file-upload" id="file-upload1">
                            <div class="image-box text-center">
                                <p>Upload Image</p>
                                @if($user->image)
                                <img src="{{ asset('images/user/'.$user->image) }}" alt="">
                                @else
                                <img src="{{ asset('images/avater.png') }}" alt="">
                                @endif
                            </div>
                            <div class="controls" style="display: none;">
                                <input type="file" name="image" />
                            </div>
                        </div>

                    </div>
                    <a href="#" class="list-group-item list-group-item-action">Post</a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Your Profile</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group row">
                                    <label for="resume" class="col-4 col-form-label">Upload Resume*</label>
                                    <div class="col-8">
                                        <input type="file" id="resume" name="resume" class="form-control here"
                                            required="required" accept=".doc, .docx, .pdf">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="skills" class="col-4 col-form-label">Add Skills*</label>
                                    <div class="col-8">
                                        <input type="text" id="skills" name="skills" class="form-control here"
                                            required="required" placeholder="php, laravel, jQuery, ...." value="{{ $user->skills }}">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-top: 50px;">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <input type="submit" class="btn btn-primary " value="Update">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
