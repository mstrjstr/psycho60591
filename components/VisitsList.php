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
                    if($spec['id']==$item1['id_spec'] && $item1['id']==$item['slot_id'] ){
                        $name=$spec['nme'];
                    }


                    ?>
            <a href="../visit.php?visitId=<?= $item['id']?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Дата записи: <?=$item1['day']?> </h6>
                        <p class="mb-0 opacity-75">Время начала встречи: <?=$item1['time_start']?> </p>

                        <p class="mb-0 opacity-75">id специалистa: <?=$item1['id_spec']?> </p>
                        <p class="mb-0 opacity-75">id слота: <?=$item['slot_id']?> </p>
                        <p class="mb-0 opacity-75">ФИО специалиста: <?=$name?> </p>
                    </div>
                    <img src="https://sun9-46.userapi.com/impg/dCBgBPx2KMijvCknZb8vkDovyYo8vAK42HrJoA/HK3rRdU-_DQ.jpg?size=1075x1080&quality=95&sign=6f2961280acced0ee645ce38cbd69133&type=album" alt="twbs" width="64" height="64">

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
