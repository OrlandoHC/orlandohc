<?php echo $this->render_table_name($mode); ?>
<div class="xcrud-top-actions btn-group">
    <?php
    echo $this->render_button('save_return','save','list','btn btn-primary','','create,edit');
    echo $this->render_button('save_new','save','create','btn btn-default','','create,edit');
    echo $this->render_button('save_edit','save','edit','btn btn-default','','create,edit');
    echo $this->render_button('return','list','','btn btn-warning'); ?>

  <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir</button>
     <script>
     function myFunction() {
    window.print();
}
     </script>
</div>
<div class="xcrud-view">
<?php echo $mode == 'view' ? $this->render_fields_list($mode,array('tag'=>'table','class'=>'table')) : $this->render_fields_list($mode,'div','div','label','div'); ?>
</div>
<div class="xcrud-nav">
    <?php echo $this->render_benchmark(); ?>

    <!--

        PENDIENTE DE TRABAJAR - VISTA IMPRESION - CDI 
                <table border="0" width="300" align="center">
                <tr>
                 <center><td valign="bottom" align="center">Quien Reporta: ___________________</td></center> 
                  <center><td valign="bottom" align="center">Personal De Soporte: __________________</td></center>
                </tr>
              </table>


-->
    

</div>
