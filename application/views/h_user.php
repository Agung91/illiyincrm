  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a class="glyphicon glyphicon-home" href="#">
			<span><?php echo ucfirst('dashboard') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-user" href="<?php echo base_url('C_customer/index') ?>">
			<span><?php echo ucfirst('customer') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-plane" href="<?php echo base_url('C_company/index')?>">
			<span><?php echo ucfirst('company') ?></span>
          </a>
        </li>
		 <li>
          <a class="glyphicon glyphicon-book" href="<?php echo base_url('Baru/index')?>">
			<span><?php echo ucfirst('industry') ?></span>
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
       <?php echo ucfirst('user') ?>
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
				<a class="btn btn-info" href="<?php echo base_url('c_user/adduser') ?>">
					<h3 class="panel-title"><?php echo ucwords('tambah user') ?></h3>
				</a>
			</div>
            <!-- /.box-header -->
            <div class="panel-body">
              <table class="table table-striped">
			  <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th><?php echo ucfirst('username') ?></th>
                  <th><?php echo ucfirst('password') ?></th>
                  <th><?php echo ucwords('nama lengkap') ?></th>
                  <th><?php echo ucfirst('email') ?></th>
                  <th><?php echo ucfirst('action') ?></th>
                </tr>
			  </thead>
			  <?php 
			   $no = 1;
			   foreach($user as $u){			   
			   ?>
			  <tbody>
               <tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->username ?></td>
					<td><?php echo $u->password ?></td>
					<td><?php echo $u->nama_lengkap ?></td>
					<td><?php echo $u->email ?></td>
					<td>
						<a href="<?php echo base_url('c_user/edituser/'.$u->id_user); ?>" class="btn btn-primary"><?php echo ucfirst('ubah') ?></a>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="parseUrl('<?php echo base_url('c_user/hapus/'.$u->id_user);?>')"><?php echo ucfirst('hapus') ?></a>
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