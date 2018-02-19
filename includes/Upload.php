<div class="row">
    <div class="col-sm-5"></div>
    <div class="col-sm-2">
        <form action="/DeMuur2/model/Upload.php" method="post" enctype="multipart/form-data" id="Up">
            <div class="form-group">
                <input type="file" name="fileToUpload" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="desc">Description </label>
                <input type="text" class="form-control" id="desc" name="desc" required>
            </div>

            <div class="form-group">
                <label for="desc">tags </label>
                <input type="text" class="form-control" id="tags" name="tags">
            </div>

            <div class="form-group">
                <input type="submit" value="Upload Now" class="form-control" style="background-color: #337ab7; color: white;">
            </div>
        </form>
    </div>
    <div class="col-sm-5"></div>
</div>


