
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h1>LRS list</h1>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">        
                                <table class="table">
                                         <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Edit</th>
                                          </tr>
                                        </thead>
                                    <?php foreach ($dataLRS as $row) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id'] ?></th>
                                            <td style="width: 10%"><a href="pages/<?php echo $row['id']; ?>/show"
                                                                      class="link"><?php echo $row['name'] ?></td>
                                            <td style="width: 70%"><?php echo $row['description'] ?></td>
                                            <td><a href="/lrs/<?php echo $row['id']; ?>/edit"><i class="far fa-edit"></i></a>
                                                <a href="/lrs/<?php echo $row['id']; ?>/delete" class="alert"><i class="fas fa-minus-circle"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                      </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 for-button">
                                    <a class="btn btn-primary" href="lrs/add" role="button">Add</a>
                                </div>
                            </div>
                        </div>
                    </div>