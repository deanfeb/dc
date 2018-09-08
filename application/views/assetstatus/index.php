


    
<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Status </h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
				<div style="overflow-x:auto;">
                    <table id="tbldata" class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th width="50%">Nama</th>
							<th width="10%">Status 1</th>
                            <th width="10%">Status 2</th>
                            <th width="30%">Last Update</th>
                        </tr>
                        </thead>
                      <tbody>
					  <?php  $i=0; foreach($data as $row){
					  ?>
						   <tr>
								<td><?php $i=$i+1; echo $row->name ?></td>
								<td><?php echo $row->status1 ?></td>
								<td><?php echo $row->status2 ?></td>
								<td><?php echo $row->last_update ?></td>
							</tr>
					  
					  <?php
					  }?>
					  </tbody>
                    </table>
				</div>
					<ul class="pagination pagination-centered">
				
					 </ul>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

