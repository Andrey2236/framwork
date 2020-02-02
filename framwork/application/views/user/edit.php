<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>Edit</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/users/<?php echo $all['id'] ?>/edit">
                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">Id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id" name="id" placeholder="Id"
                                   value="<?php echo $all['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">login</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="login" name="login" placeholder="Name"
                                       value="<?php echo $all['login'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">pass</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="pass"
                                       placeholder="Description"
                                       value="<?php echo $all['pass'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" >Save</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
