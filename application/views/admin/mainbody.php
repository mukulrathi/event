<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">venue partners</span>
              <span class="info-box-number"><?php echo $count ;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
     
        </div>


    
       

       
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Client status</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           <?php  foreach ($result->result() as $value) {?>
           <table width="100%">
           <tr>
           <th>Name</th>
           <th>Number</th>
           <th>Email</th>
           <th>Venuename</th>
           <th>Address</th>
           <th>Price</th>
           <th>Status</th>
           </tr>
           <tr>
           <th><?php echo $value->name;?></th>
           <th><?php echo $value->number;?></th> 
            <th><?php echo $value->email;?></th>
             <th><?php echo $value->venuename;?></th>
               <th><?php echo $value->address;?></th>
                 <th><?php echo $value->price;?></th>

                  <th><?php   echo ($value->status=='0'?'Status Pending':'Status Approve')?></th>
                 <th><a href="<?php echo base_url().'admin/updatestatus/'.$value->id;?>">Update Status</th>


           </tr>
           </table>
           <?php }
           ?>
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
  </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
      </div>
           <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
         </div> </div>


      </div>
</section>
  </div>
  <script type="text/javascript">
    $(document).ready(function()
    {
$("#check").click(function()
{
$.ajax({
        url:'<?php echo base_url().'admin/updatestatus/'?>'

}) 


return false; 
});


    });


  </script>