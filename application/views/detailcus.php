<!--  Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li>
         <a class="glyphicon glyphicon-home" href="<?php echo base_url('c_dash/index') ?>">
			       <span>Dashboard</span>
         </a>
       </li>
		<li>
         <a class="glyphicon glyphicon-user" href="<?php echo base_url('c_customer/index') ?>">
			       <span>Customer</span>
         </a>
       </li>
		<li>
         <a class="glyphicon glyphicon-plane" href="<?php echo base_url('c_company/index')?>">
			       <span>Company</span>
         </a>
       </li>
		<li>
         <a class="glyphicon glyphicon-book" href="<?php echo base_url('baru/index')?>">
			       <span>Industry</span>
         </a>
       </li>
        <li>
         <a class="glyphicon glyphicon-log-out" href="<?php echo base_url('c_login/logout'); ?>">
            <span><?php echo ucfirst('Logout') ?></span>
         </a>
        </li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
       <section class="content-header">
      <h3 class="page-title">
       
           </h3>
    </section>
    <!-- Main content -->
        <?php
        foreach ($customer as $s){
        ?>
   <section class="content">
     <div class="row">
       <div class="col-md-12">
         <div class="panel">
        <!-- /.box-header -->
        <div class="panel-body">
            <div class="box" style="width: 400px">
                <img src="<?=base_url()?>upload/<?=$s->upload_customer;?>" height="200" width="400">
            </div>
          <table class="table table-striped">
			<thead>
            </thead>
              <h4>About Customer</h4>
			<tbody >
                <tr>
                  <th><?php echo ucfirst('name') ?></th>
                    <td><?php echo $s->name_customer ?></td>
                </tr>
                <tr>
                    <th><?php echo ucfirst('email') ?></th>
                     <td><?php echo $s->email_customer ?></td>
                </tr>
                <tr>
                    <th><?php echo ucfirst('phone') ?></th>
                     <td><?php echo $s->phone_customer ?></td>
                </tr>
                <tr>
                    <th><?php echo ucwords('jobtitle') ?></th>
                     <td><?php echo $s->jobtitle_customer ?></td>
                </tr>
			    <tr>
                    <th><?php echo ucwords('customer`s company') ?></th>
                     <td><?php echo $s->name_company ?></td>
                </tr>
                <tr>
                    <th><?php echo ucwords('industry category') ?></th>
                     <td><?php echo $s->name_industry ?></td>
                </tr>

			</tbody>
         </table>
        </div>
           <!-- /.box-body -->
        </div>
   </section>
        <?php } ?>
   <!-- /.content -->
 </div>
 </div>
 <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
 <div class="control-sidebar-bg"></div>
</div>