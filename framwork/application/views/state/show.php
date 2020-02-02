
<div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h1>State</h1>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <p>LRS <span> <?php echo $id; ?> </span> State</p>
                        </div>
                    </div>
                    
                    <div class="row">
                            <div class="col-md-12">        
                                <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Actor</th>
                                            <th scope="col">Activity</th>
                                            <th scope="col">Key</th>
                                            <th scope="col">Value</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($dataState as $row) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['id'] ?></th>
                                                <td><?php echo $row['actor'] ?></td>
                                                <td><?php echo $row['activity'] ?></td>
                                                <td><?php echo $row['key'] ?></td>
                                                <td><?php echo $row['value'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                </div>
    
</div>