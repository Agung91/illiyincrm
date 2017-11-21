  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a class="glyphicon glyphicon-home" href="<?php echo base_url('c_dash/index') ?>">
			       <span><?php echo ucfirst('dashboard') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-user" href="<?php echo base_url('c_customer/index') ?>">
			       <span><?php echo ucfirst('customer') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-plane" href="<?php echo base_url('c_company/index')?>">
			       <span><?php echo ucfirst('company') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-book" href="<?php echo base_url('baru/index')?>">
			       <span><?php echo ucfirst('industry') ?></span>
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
       <?php echo ucfirst('industry') ?>
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
				<a class="btn btn-info" href="<?php echo base_url('Baru/add') ?>">
					<h3 class="panel-title"><?php echo ucwords('tambah industry') ?></h3>
				</a>
			</div>
            <!-- /.box-header -->
            <div class="panel-body">
              <table class="table table-striped">
			  <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th><?php echo ucfirst('name') ?></th>
                  <th><?php echo ucfirst('description') ?></th>
				 <th><?php echo ucfirst('action') ?></th>
                </tr>
			  </thead>
			  <?php 
			   $no = 1;
			   foreach($industry as $i){			   
			   ?>
			  <tbody>
               <tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $i->name_industry ?></td>
					<td><?php echo $i->description_industry ?></td>
					<td>
						<a href="<?php echo base_url('baru/edit/'.$i->id_industry); ?>" class="btn btn-primary"><?php echo ucfirst('ubah') ?></a>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="parseUrl('<?php echo base_url('baru/hapus/'.$i->id_industry);?>')"><?php echo ucfirst('hapus') ?></a>
					</td>
				<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel"><?php echo ucfirst('peringatan !') ?></h4>
								</div>
								<div class="modal-body">
								<?php echo ucfirst('yakin ingin dihapus ?') ?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo ucfirst('tidak') ?></button>
									<a type="button" class="btn btn-primary" href="#" id="ya"><?php echo ucfirst('ya') ?></a>
								</div>
							</div>
						</div>
					</div>
			   </tr>
			  </tbody>
			   <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<script>
	function parseUrl(url){
		console.log(url);
		document.getElementById('ya').href = url;
	}
</script>