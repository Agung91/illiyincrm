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
      </h3
    </section>

    <!-- Main content -->
    <div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo ucwords('edit industry') ?></h3>
			</div>
			<div class="panel-body">
				<?php foreach($industry as $i){?>
				<form action="<?php echo base_url('Baru/update') ?>" method="post">
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="hidden" name="id" value="<?php echo $i->id_industry ?>">
						<input type="text" class="form-control" placeholder="Industry Name" name="name" value="<?php echo $i->name_industry ?>">
						</div>
					</div>		
					<div class="form-group">
						<textarea name="description" class="form-control"><?php echo $i->description_industry ?></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Submit" class="form-control">
					</div>
				</form>
				<?php } ?>
			</div>
		</div>
		<!-- END BASIC TABLE -->
	</div>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>