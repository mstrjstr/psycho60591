<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');
$slots = $conn->query("SELECT * FROM slot");

while( $item1 = $slots->fetch()){;

 ?>

    <a href="../slot.php?slotId=<?= $item1['id']?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Дата записи: <?=$item1['day']?> </h6>
                <p class="mb-0 opacity-75">Время начала встречи: <?=$item1['time_start']?> </p>



            </div>

        </div>
    </a>
    <?php }
require('components/appointmentcomponent.php');?>