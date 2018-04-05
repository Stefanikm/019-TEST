<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = '018-TEST |';
?>
<!DOCTYPE html>
<html>
<head>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    
    <?= $this->Html->script('jquery-3.3.1.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('navbar.js') ?>
    
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('main.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>



<body>
    
    <?= $this->Flash->render() ?>
 
    <?php
        include_once '../src/Template/Pages/navbar.php';
        include_once '../src/Template/Pages/banner.php';
    ?>
    
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    
    <div class="my-light domov">	
        <h4 id="domov"></h4>	
        <p>	
            <div class="container">	
                <?= $this->fetch('content') ?>	
            </div>	
        </p>	
    </div>
    
  <div class="my-light-brown napojovy">
  <h4 id="napojovy"></h4>
  <p>
      <div class="container">
        <h2 class="text-center text-footer">Nápojový</h2>
        <?php
            include_once '../src/Template/Pages/napojovy.php';
        ?>
      </div>
  </p>
  </div>
  
  
  <div class="my-light galeria">
  <h4 id="galeria"></h4>
  <p>
      <h2 class="text-center">Galéria</h2>
      <div class="container">
        <?php
            include_once '../src/Template/Pages/galeria.php';
        ?>
      </div>
  </p>
  </div>
    
  
  <div class="my-light-brown onas">
  <h4 id="oNas"></h4>
  <p>
      <h2 class="text-center text-footer">O nás</h2>
      <div class="container">
        <?php
            include_once '../src/Template/Pages/about.php';
        ?>
      </div>
  </p>
  </div>
  
</div>
    
    <div class="clearfix"></div>
    
    <footer class="page-foo">
        <?php
            include_once '../src/Template/Pages/footer.php';
        ?>
    </footer>
    
</body>
</html>
