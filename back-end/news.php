<?php
include('components/header.php');
include_once "message/news/create.php";
include_once "message/news/edit.php";
include_once "message/news/delete.php";
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3 class="text-center">News Contents</h3>
        </div>
        <div class="bottom view-post">
            <div class="row m-0 p-0">
                <div class="col-lg-12">
                   <div class=" d-flex justify-content-between align-items-center">
                      <h3>all post in wabsit</h3>
                      <button data-bs-toggle="modal" data-bs-target="#modal_add_news"  class=" btn btn-primary rounded-0 shadow-none">add more</button>
                   </div>


                    <table class=" table table-striped table-bordered table-light">
                        <thead>
                            <tr class=" text-danger">
                                <th>Id</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Data</th>
                                <th>Author</th>
                                <th>STATUS</th>
                                <th class=" text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=" align-middle">
                                <td>1001</td>
                                <td><img src="https://via.placeholder.com/50" alt=""></td>
                                <td>ប្រទេសកម្ពុជាជាប្រទេសដែលកំពុង</td>
                                <td>Entertainment</td>
                                <td>12/07/2024</td>
                                <td>Phument Pot</td>
                                <td>Active</td>
                                <td class=" text-center">
                                    <button data-bs-toggle="modal" data-bs-target="#modal_edit_news" class=" btn btn-info btn-sm rounded-0 shadow-none">Edit</button>
                                    <button data-bs-toggle="modal" data-bs-target="#modal_delete_news" class=" btn btn-danger btn-sm rounded-0">Delete</button>
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
<?php include "components/footer.php" ?>