    <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= ('Actions') ?></li>
        <li><?= $this->Html->link(('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(('New Room'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= ('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= ('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= ('Capacity') ?></th>
            <td><?= $this->Number->format($room->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= ('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
        <tr>
            <th scope="row">Liste des films : </th>
        <tr>

    </table>
    <table>
        <thead>
        <tr>
            <th scope="col">L</th>
            <th scope="col">M</th>
            <th scope="col">M</th>
            <th scope="col">J</th>
            <th scope="col">V</th>
            <th scope="col">S</th>
            <th scope="col">D</th>
        </tr>
        </thead>

<?php for($i=1;$i<=7;$i++){?>
    <td>
    <table>
        <?php foreach ($showtimes as $showtime): ?>
            <tr>

                   <?php 
                    $test = ($showtime->start)->format('N');
                    if($test==$i){?>
                        <tr>
                        <td>
                        <?php echo h($showtime->movie->name );
                        echo h($showtime->movie->duration );
                        echo h($showtime->start );
                        echo h($showtime->end );
                        }
                    ?>

            </tr>
        <?php endforeach;  ?>

        </table>
        </td>
        <?php } ?>

    </table>
</div>