<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="users index large-9 medium-8 columns content">
    <h3><?= __('todo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('タスク名') ?></th>
                <th scope="col" class="actions"><?= __('操作') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
            　　 <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $user->id], ['class' => 'btn btn-primary']) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $user->id],['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $user->id], ['class' => 'btn btn-primary'], ['confirm' => __('削除しますか？ # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
