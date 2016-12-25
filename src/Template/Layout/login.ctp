<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVADE FSK</title>
    <?= $this->Html->css('/assets/css/bootstrap.css') ?>
     <!-- FONTAWESOME STYLES-->
     <?= $this->Html->css('/assets/css/font-awesome.css') ?>
     <!-- MORRIS CHART STYLES-->
    <?= $this->Html->css('/assets/js/morris/morris-0.4.3.min.css') ?>
        <!-- CUSTOM STYLES-->
    <?= $this->Html->css('/assets/css/custom.css') ?>
     <!-- GOOGLE FONTS-->
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans') ?>
    <?= $this->Html->css('/font-awesome-4.7.0/css/font-awesome.css') ?>
    <?= $this->Html->css('/font-awesome-4.7.0/css/font-awesome.min.css') ?>

    <?= $this->Html->script('/assets/js/jquery-1.10.2.js') ?>
      <!-- BOOTSTRAP SCRIPTS -->
    <?= $this->Html->script('/assets/js/bootstrap.min.js') ?>
    <!-- METISMENU SCRIPTS -->
    <?= $this->Html->script('/assets/js/jquery.metisMenu.js') ?>
     <!-- MORRIS CHART SCRIPTS -->
    <?= $this->Html->script('/assets/js/morris/raphael-2.1.0.min.js') ?>
    <?= $this->Html->script('/assets/js/morris/morris.js') ?>
       <!-- DATA TABLE SCRIPTS -->
    <?= $this->Html->script('assets/js/dataTables/jquery.dataTables.js') ?>
    <?= $this->Html->script('assets/js/dataTables/dataTables.bootstrap.js') ?>
       <!-- TABLE STYLES-->
    <?= $this->Html->script('assets/js/dataTables/dataTables.bootstrap.css') ?>
    
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <?= $this->Html->script('/assets/js/custom.js') ?>

</head>
<body>
        
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    <footer>
    </footer>

</body>
</html>
