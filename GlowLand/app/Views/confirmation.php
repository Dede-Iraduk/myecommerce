<h1>SUCCESSFULL</h1>



 <?php if(session()->getFlashdata('status')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('status') ?>
                    </div>
                <?php endif;?>