<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>Add new</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/users/add" method="POST">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">id</label>
                        <div class="col-sm-10">
                            <input type="text" name="id" class="form-control"   placeholder="ID">
                            <span class="error" style="color: red"><?php if (!isset($error)) { echo ''; } else { echo $error[0]; }   ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="login" class="col-sm-2 col-form-label">login</label>
                        <div class="col-sm-10">
                            <input type="text" name="login" class="form-control" value="">
                            <span class="error" style="color: red"><?php if (!isset($error)) { echo ''; } else { echo $error[1]; }   ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="pass" class="form-control"   placeholder="Pass">
                            <span class="error" style="color: red"><?php if (!isset($error)) { echo ''; } else { echo $error[2]; }   ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
