<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('parts/generic/head'); ?>
    <body data-base="<?= URL::base() ?>">
        <?php $this->load->view('parts/generic/header'); ?>
        <div class="container autoheight p-t-20 m-t-20">
            <div class="alert alert-success alert-dismissable hidden" id="principalAlert">
                <a href="#" class="close">&times;</a>
                <p id="text" class="m-b-0 p-b-0"></p>
            </div>
            
            
            <h2><strong><?php echo $_GET['cliente']; ?></strong></h2>

            <div class="panel-group" id="accordion">

                <div class="panel panel-default">
                  <div class="panel-heading panelCami">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Cronograma</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">contenido</div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading panelCami">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">DRP</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">contenido</div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading panelCami">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Reportes</a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">contenido</div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading panelCami">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Procesos</a>
                    </h4>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">contenido</div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading panelCami">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Inventario de Servicios</a>
                    </h4>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table id="tableServicios" class='table table-bordered table-striped' width='100%'></table>
                    </div>
                  </div>
                </div>

                <div class="panel panel-primary">
                  <div class="panel-heading panelCami">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Matriz de Contactos</a>
                    </h4>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse  in">
                    <div class="panel-body">
                        <table id="tableContactos" class='table table-bordered table-striped' width='100%'></table>
                    </div>
                  </div>
                </div>

            </div> 





        </div>
        <!--footer Section -->
        <div class="for-full-back" id="footer">
            Zolid By ZTE Colombia | All Right Reserved
        </div> 
        <?php 
          if (isset($_GET['idCliente'])) {
            echo "<script type='text/javascript'>var idCliente = ".$_GET['idCliente'].";</script>";
          } 
         ?>
        <!-- CUSTOM SCRIPT   -->
        <?php $this->load->view('parts/generic/scripts'); ?>

        <script type="text/javascript">var baseurl = "<?php echo URL::base(); ?>";</script>
        <script scr="<?= URL::to("assets/plugins/sweetalert-master/dist/sweetalert.min.js") ?>" ></script>
        <!-- llenar tablas -->
        <script type="text/javascript" src="<?= URL::to('assets/js/modules/listTables.js'); ?>"></script>
    </body>
</html>
