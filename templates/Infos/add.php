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
            <?= $this->Html->link(__('List Infos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="infos form content">
            <?= $this->Form->create($info) ?>
            <fieldset>
                <legend><?= __('Add Info') ?></legend>
                <?php
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('pessoasid');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
