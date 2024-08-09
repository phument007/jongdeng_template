<?php
include('components/header.php');
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3 class="text-center">Categories</h3>
        </div>
        <div class="bottom view-post">
            <div class="row m-0 p-0 mt-5">
                <div class="col-lg-12">
                    <form method="POST" class=" shadow p-5">
                        <div class="form-gruop">
                            <label for="">Category Name</label>
                            <input type="text" name="category_name" class="category_name form-control w-100">
                        </div>
                        <div class="form-gruop">
                            <label for="">Status</label>
                            <select name="category_status" class="category_status form-select">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                        <div class="form-buuton mt-3">
                            <button class=" btn btn-danger rounded-0">Reset</button>
                            <button class=" btn btn-success rounded-0">Save</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 mt-5">
                    <table class=" table table-striped table-bordered table-light">
                        <thead>
                            <tr class=" text-danger">
                                <th>ID</th>
                                <th>NAME</th>
                                <th>STATUS</th>
                                <th class=" text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>កម្សាន្ត</td>
                                <td>Active</td>
                                <td class=" text-center">
                                    <button data-bs-toggle="modal" data-bs-target="#modal_edite_user" class=" btn btn-info btn-sm rounded-0">edit</button>
                                    <button class=" btn btn-danger btn-sm rounded-0">Delete</button>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
</div>
<?php include_once "components/footer.php" ?>