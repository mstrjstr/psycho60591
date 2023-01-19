<section>
    <h1 class="text-center">Список ваших записей</h1>
    <div class="list-group w-50 m-auto">
        <?php
        while($item = $Visits->fetch()) {
            if ($item['id_cli']== $_SESSION['id_auth_user']){?>
            <a href="../visit.php?visitId=<?= $item['id']?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0"><?=$item['day']?> Дата записи</h6>
                        <p class="mb-0 opacity-75"><?=$item['time']?> Время записи</p>
                    </div>

                </div>
            </a>
            <?php
            }?>
        <?php }?>
    </div>



</section>
