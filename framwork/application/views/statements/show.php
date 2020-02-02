<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>Statements</h1>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12">
                <p>LRS <span> <?php echo $id; ?> </span> Statements</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Statements</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dataStatements as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['statements'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>