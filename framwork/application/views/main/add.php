<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>Add new</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/lrs/add" method="POST">
                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">Id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" placeholder="Id">
                            <span class="error" style="color: red"><?php if (!isset($error)) { echo ''; } else { echo $error[0]; }    ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                            <span class="error" style="color: red"><?php if (!isset($error)) { echo ''; } else { echo $error[1]; }   ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="description" placeholder="Description">
                            <span class="error" style="color: red"><?php if (!isset($error)) { echo ''; } else { echo $error[2]; }   ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary" href>Save</button>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>