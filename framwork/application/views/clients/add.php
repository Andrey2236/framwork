<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>Add new client</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/pages/<?php echo $id; ?>/clients/add" method="POST">
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" placeholder="ID">
                            <span class="error" style="color: red"><?php if (!isset($error)) {
                                    echo '';
                                } else {
                                    echo $error[0];
                                } ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="login" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="login" placeholder="Login">
                            <span class="error" style="color: red"><?php if (!isset($error)) {
                                    echo '';
                                } else {
                                    echo $error[1];
                                } ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="password" placeholder="Password">
                            <span class="error" style="color: red"><?php if (!isset($error)) {
                                    echo '';
                                } else {
                                    echo $error[2];
                                } ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>