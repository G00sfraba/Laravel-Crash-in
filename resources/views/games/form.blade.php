<form method="post" action="/games" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>