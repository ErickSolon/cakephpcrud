<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Info $info
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Info'), ['action' => 'edit', $info->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Info'), ['action' => 'delete', $info->id], ['confirm' => __('Are you sure you want to delete # {0}?', $info->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Infos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Info'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="infos view content">
            <h3><?= h($info->email) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($info->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($info->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= $this->Number->format($info->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pessoasid') ?></th>
                    <td><?= $info->pessoasid === null ? '' : $this->Number->format($info->pessoasid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
