<section>
    <?php  if($_SESSION['user_type'] == 3){  ?>
    <h1 class="text-center">Список ваших записей</h1>
    <?php }?>
    <?php  if($_SESSION['user_type'] == 2){  ?>
        <h1 class="text-center">Список ваших приемов</h1>
    <?php }?>
    <div class="list-group w-50 m-auto">
        <?php

        while($item = $Visits->fetch()){
            $item1 = $slots->fetch();
            $spec = $specialists->fetch();
            $client= $clients->fetch();

            if($_SESSION['user_type'] == 3){
            if ($item['id_cli'] == $_SESSION['id_auth_user']){
                if ($item1['id'] == $item['slot_id']){

                        $name=$conn->query("SELECT distinct specialist.nme FROM specialist, slot, Visit WHERE specialist.id = slot.id_spec AND slot.id = Visit.slot_id AND Visit.id = ".$item['id']);



                    ?>
            <a href="../visit.php?visitId=<?= $item['id']?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Дата записи: <?=$item1['day']?> </h6>
                        <p class="mb-0 opacity-75">Время начала встречи: <?=$item1['time_start']?> </p>


                        <p class="mb-0 opacity-75">ФИО специалиста: <?=$name->fetch()['nme']?> </p>
                    </div>


                </div>
            </a>

        <?php }}}



        else if($_SESSION['user_type'] == 2){
                    if ($item1['id_spec'] == $_SESSION['id_auth_user']){
                        if ($item1['id'] == $item['slot_id']){


                            ?>
        <a href="../visit.php?visitId=<?= $item['id']?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Дата приема: <?=$item1['day']?> </h6>
                    <p class="mb-0 opacity-75">Время начала встречи: <?=$item1['time_start']?> </p>
                    <p class="mb-0 opacity-75">Ваш клиент: <?=$client['nme']?> </p>
                </div>

            </div>
        </a>
        <?php }}}}?>
    </div>



</section>
