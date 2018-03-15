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
            








            
        </div>
        <!--footer Section -->
        <div class="for-full-back" id="footer">
            Zolid By ZTE Colombia | All Right Reserved
        </div>        
        <!-- CUSTOM SCRIPT   -->
        <?php $this->load->view('parts/generic/scripts'); ?>
        <script scr="<?= URL::to("assets/plugins/sweetalert-master/dist/sweetalert.min.js") ?>" ></script>
        <script type="text/javascript" src="<?= URL::to("assets/js/modules/principal.js") ?>"></script>
    </body>
</html>
