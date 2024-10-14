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
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <?= $this->Html->link(__('CLIENTES'), ['controller' => 'cliente','action' => 'index']) ?>
            <?= $this->Html->link(__('FUNCIONÁRIOS'), ['controller' => 'funcionario','action' => 'index']) ?>
            <?= $this->Html->link(__('CONTATOS'), ['controller' => 'contato','action' => 'index']) ?>
            <?= $this->Html->link(__('QUARTOS'), ['controller' => 'quarto','action' => 'index']) ?>
            <?= $this->Html->link(__('RESERVAS'), ['controller' => 'reserva','action' => 'index']) ?>
            <?= $this->Html->link(__('HOSPEDAGENS'), ['controller' => 'hospedagem','action' => 'index']) ?>   
            <?= $this->Html->link(__('SERVICOS'), ['controller' => 'servico','action' => 'index']) ?>
            <?= $this->Html->link(__('GANHOS'), ['controller' => 'ganho','action' => 'index']) ?> 
            <?= $this->Html->link(__('DESPESAS'), ['controller' => 'despesa','action' => 'index']) ?>
            <?= $this->Html->link(__('ESTOQUE'), ['controller' => 'estoque','action' => 'index']) ?>      
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
