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
          <a class="glyphicon glyphicon-user" href="<?php echo base_url('c_customer/index')?>">
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
      <h1>
        Selamat datang di aplikasi CRM v.1<br>
        <small>Ikhtisar Pengguna</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>2</h3>

              <p>Customer Baru</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>15</h3>

              <p>Total Customer</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>10</h3>

              <p>Total Perusahaan</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
        <!-- ./row -->
        <div class="row">
            <div class="col-md-9">
                <!-- LINE CHART -->
            <div class="box box-info">
                <div class="box-body chart-responsive">
                    <div id="line-chart" class="chart" style="height: 300px;"></div>
                </div>
            </div>
                <!--/.box-body -->
            </div>
            <!-- /.col -->
            <div class="col-md-3">
                <div class="box box-danger">
                  <div class="description-block border-right">
                    <h1 >15
                        <span style="font-size: 16px">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 13%</span>
                        </span>
                    </h1>
                    <span class="description-text">Total Customer</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block border-right">
                    <h1 >2
                        <span style="font-size: 16px">
                            <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 40%</span>
                        </span>
                    </h1>
                    <span class="description-text">Total Customer</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block">
                    <h1 >10
                        <span style="font-size: 16px">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 100%</span>
                        </span>
                    </h1>
                    <span class="description-text">Monthly Contacted</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.box -->
              </div>
            <!-- /.col -->
            </div>
        <!-- /.row -->
      </section>
    </div>

</div>
<footer class="pull-right hidden-xs">
    <p class="copyright">&copy; 2017 <a href="https://illiyin.co">Illiyin Studio</a>. All rights
    reserved.
	</p>
</footer>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/')?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/')?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/')?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/')?>dist/js/demo.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/')?>plugins/iCheck/icheck.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/')?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/')?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/')?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/')?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/')?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/')?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/')?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets/')?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/')?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/')?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/')?>dist/js/pages/dashboard.js"></script>
<!-- page script -->
<script>
  $(function () {
    "use strict";
      // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 0},
//        {y: '2011 Q2', item1: 2778},
//        {y: '2011 Q3', item1: 4912},
//        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 15},
        {y: '2012 Q2', item1: 2},
//        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 20},
//        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });
  });
</script>
</body>
</html>