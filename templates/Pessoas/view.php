<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pessoas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pessoa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pessoas view content">
            <h3><?= h($pessoa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($pessoa->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sobrenome') ?></th>
                    <td><?= h($pessoa->sobrenome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
