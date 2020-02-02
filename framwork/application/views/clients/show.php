
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h1>LRS list</h1>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <p>LRS <span> <?php echo $id; ?> </span> Clients</p>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">        
                                <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Login</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Dx</th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($dataClients as $row) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['id'] ?></th>
                                                <td><?php echo $row['login'] ?></td>
                                                <td><?php echo $row['password'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 for-button">
                                  <a class="btn btn-primary" href="add" role="button">Add new client</a>
                                </div>
                            </div>
                        </div>
                    </div>