<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
<style>
    .slick{
        padding:100px 100px 50px 500px;
    }
    body{
        background:#eee;
    }
</style>
<body>
 <div>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
     </ul>
    </nav>
</div>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($user->name)); ?>
    </div>
</div>
<!--スライダー-->


  <div class='slick'>
    <div class='slick-item'>
      <div><h3><a href="#"><img src="C:\xampp\htdocs\hoge1.jpg" width="100%" height="100%"></a></h3></div>
      <div><h3><a href="#"><img src="C:\xampp\htdocs\hoge2.jpg" width="100%" height="100%"></a></h3></div>
      <div><h3><a href="#"><img src="C:\xampp\htdocs\hoge3.jpg" width="100%" height="100%"></a></h3></div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>

<script>
$(".slick-item").slick({
  accessibility: true,
  autoplay: false,
  autoplaySpeed: 500,
  dots: true,
  fade: true,
});
</script>
</body>
<!--/スライダー-->