<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pages form large-9 medium-8 columns content">
    <?= $this->Form->create($page) ?>
    <fieldset>
        <legend><?= __('Add Page') ?></legend>
        <?php
            echo $this->Form->control('a');
            echo $this->Form->control('b');
            echo $this->Form->control('c');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
