
<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

$Visits = $conn->query("SELECT * FROM Visit");
$specialists = $conn->query("SELECT * FROM specialist");
$slots = $conn->query("SELECT * FROM slot");
while( $item1 = $slots->fetch()){
    $item =  $Visits->fetch();

            if ($item1['id'] != $item['slot_id']){

                $name=$conn->query("SELECT distinct specialist.nme FROM specialist, slot, Visit WHERE specialist.id = slot.id_spec AND slot.id != Visit.slot_id AND slot.id = ".$item1['id']);


 ?>
                <div class="list-group w-50 m-auto">
    <a  class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Дата записи: <?=$item1['day']?> </h6>
                <p class="mb-0 opacity-75">Время начала встречи: <?=$item1['time_start']?> </p>
                <p class="mb-0 opacity-75">Время окончания встречи: <?=$item1['time_end']?> </p>
                <p class="mb-0 opacity-75">ФИО специалиста: <?=$name->fetch()['nme']?> </p>



            </div>
            <button href="slot.php?slotId=<?= $item1['id']?>" type="button" class="btn btn-warning"> Записаться</button>
        </div>
        </div>
    </a>
    <?php }}

require('components/appointmentcomponent.php');?>

