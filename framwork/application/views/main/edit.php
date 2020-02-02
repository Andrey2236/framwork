<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>Edit <?php echo $id ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/lrs/<?php echo $all['id']; ?>/edit" method="POST">
                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">Id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id"
                                   value="<?php echo $all['id'] ?>" placeholder="Id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name"
                                   value="<?php echo $all['name'] ?>" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="description"
                                   value="<?php echo $all['description'] ?>" placeholder="Description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                            <button type="button" onClick='location.href="/lrs"' class="btn btn-secondary">Вернуться
                                назад
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>