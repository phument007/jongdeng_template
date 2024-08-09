<?php
include('components/header.php');
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3 class="text-center">My Setting</h3>
        </div>
        <div class="bottom view-post">
            <div class="row m-0 p-0 mt-2">
                <div class="col-lg-6 mt-4">
                    <h4>Profile Detail</h4>
                    <hr>
                    <div class="profiles row mt-2">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <div id="my-profile">
                                <img src="https://img.freepik.com/free-psd/expressive-woman-gesturing_23-2150198673.jpg" alt="">
                                <i data-bs-toggle="modal" data-bs-target="#changeProfile" class="bi bi-pencil icon_edit_profile_image"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 profile-detail p-3">
                            <p>ID : <span style="font-weight:bold; color:red;">1001</span></p>
                            <p>USERNAME : <span style="font-weight:bold; color:red;">Phument</span> </p>
                            <p>EMAIL : <span style="font-weight:bold; color:red;">phument@gmail.com</span></p>
                            </p>
                            <p>PHONE : <span style="font-weight:bold; color:red;">0978759989</span></p>
                            </p>
                            <p>LOGIN : <span style="font-weight:bold; color:red;">10/20/2023</span></p>
                            </p>
                            <p>POST: 35 post</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 shadow p-4">
                    <h4 class="header-tilte">Update Profile</h4>
                    <form>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="username form-control w-100">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="username" class="username form-control w-100">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="username" class="username form-control w-100">
                        </div>
                        <div class="form-group">
                            <label for="">Old Password</label>
                            <input type="text" name="username" class="username form-control w-100">
                        </div>
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="text" name="username" class="username form-control w-100">
                        </div>
                        <div class="form-group">
                            <button type="reset" class=" btn btn-danger">Reset</button>
                            <button type="submit" class=" btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="changeProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Your IMG (4x6)</label>
                                <input type="file" name="img" class="img form-control w-100">
                                <button class=" btn btn-success rounded-0 btn_profile">upload</button>
                            </div>
                            <div class="profile-preview">
                                    
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
<?php include_once "components/footer.php" ?>