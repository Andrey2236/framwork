<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>User</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">login</th>
                        <th scope="col">Pass</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dataUsers as $row) { ?>

                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['login']; ?></td>
                                    <td><?php echo $row['pass']; ?></td>
                                    <td onClick='location.href="/users/<?php echo $row['id']; ?>/edit"'><a
                                                href="edit.php"><i class="far fa-edit"></i></a></td>
                                    <td onClick='location.href="/users/<?php echo $row['id']; ?>/delete"'><a
                                                href="#" class="alert"><i class="fas fa-minus-circle"></i></a></td>
                                </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 for-button">
                <a class="btn btn-primary" href="/users/add" role="button">Add</a>
            </div>
        </div>
    </div>
</div>
