<?php include 'includes/header.php';?>

<body>
    <div class="wrapper">
         <?php include 'includes/sidebar.php';?> 
		
        <div class="main-panel">
            
         <?php //include 'includes/nav.php';?>
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php include 'includes/titlebar.php';?> 
                    
                          <div class="row">
                        <div class="col-lg-12">
                           
                             <div class="card alert">
                                 <div class="addbtn">
                                      <a href ="<?php echo base_url();?>powerConsumption">
                                          <button class="btn btn-info" style="float: left" > <i class="material-icons">arrow_back</i> Back</button>
                                      </a>
                             </div>
                                  <div class="addbtn">
                                      <button data-toggle="modal" onclick="showAjaxModal('<?php echo base_url();?>home/popup/jsw/addPowerConsumption');" class="btn btn-info" style="float: right" > <i class="material-icons">add_circle_outline</i> Add Power Consumption</button>
                             </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SR.</th> 
                                                    <th>Month</th>
                                                    <th>Year</th>
                                                    <th>Financial Year</th>
                                                    <th>Mode</th>
                                                    <th>Cargo</th>
                                                    <th>Berth</th>
                                                   
                                                    <th>Target</th>
                                                    <th>Actual</th>
                                                    <th style="text-align: left">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sr=1; foreach($powerConsumption_info as $row){?>
                                                <tr>
                                                    <td><?php echo $sr;?></td>
                                                    <td><?php echo $row['Month'];?></td>
                                                    <td><?php echo $row['year'];?></td>
                                                    <td><?php echo $row['Finyear'];?></td> 
                                                    <td><?php echo $row['Mode'];?></td>
                                                    <td><?php echo $row['Cargo'];?></td>
                                                    <td><?php echo $row['Berth'];?></td> 
                                                    <td><?php echo $row['Target'];?></td>    
                                                    <td><?php echo $row['Actual'];?></td>    
                                                    <td style="text-align: left">                                                       
                                                        
                                                        <a style="cursor:pointer" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm" onclick="showAjaxModal('<?php echo base_url();?>home/popup/jsw/editPowerConsumption/<?php echo $row['ID'];?>');">
                                                        <i class="material-icons">edit</i>
                                                        </a>
                                                        
                                                        <a rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" onclick="return checkDelete();" href="<?php echo base_url(); ?>powerConsumption/delete/<?php echo $row['ID'];?>">
                                                          <i class="material-icons">close</i>
                                                      
                                                        </a>
                                                    </td>
                                                    
                                                </tr>
                                                <?php $sr++; }?>    
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                        
                        
<!--			<-->
					
                    </div>
                </div>
                
               <?php include 'includes/footer.php';?> 
            </div>
    </div>
    </div>
</body>	
            
 <?php include 'includes/footer-min.php';?> 