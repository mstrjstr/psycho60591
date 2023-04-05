<main class="form-signin w-50 m-auto text-center">
    <div >

        <form enctype="multipart/form-data" action="../slotadd.php" method="post"  >
            <h1 class="h3 mb-3 fw-normal">Добавление слота на запись</h1>
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Введите значения</label>
            <div class="form-floating mb-2">

                <input type="date" name="date" id="id11" class="form-control" placeholder="Время начала">
                <label for="id11" class="text-black">Дата</label>

            </div>

            <div class="form-floating mb-2">
                <input type="time" name="time_start" id="id11" class="form-control" placeholder="Время начала">
                <label for="id11" class="text-black">Время начала</label>
            </div>

            <div class="form-floating mb-2">
                <input type="time" name="time_end" id="id12" class="form-control" placeholder="Время окончания">
                <label for="id12" class="text-black">Время окончания</label>
            </div>

                <label>
                    Изображение: <input type="file" name="filename">
                </label>


            <p><input type="submit" value="Создать" class="btn btn-lg btn-warning"></p>
        </form>
    </div>
</main>
