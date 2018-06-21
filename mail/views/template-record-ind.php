<?php
 /*
  *     Шаблон письма для отправки на почту куратору заявок
  *     Шаблон для физического лица
  */
?>
<h3>Запись на СТО :: Новая запись (Физическое лицо) *</h3>

<b>Дата:</b> <i><?= $messageEmailInd['RecordsIndForm']['records_date'] ?></i> | 
<b>Время:</b> <i><?= $messageEmailInd['RecordsIndForm']['records_time'] ?></i>
<br />
<b>ФИО:</b> <?= $messageEmailInd['RecordsIndForm']['records_fullName'] ?>
<br />
<b>Контактный телефон:</b> <?= $messageEmailInd['RecordsIndForm']['records_phone'] ?>

<br /><br />
<table style="width: 100%; border-collapse: collapse;" border="1" cellpadding="4" cellspacing="1">
    <thead style="background: #c1c1c1;">
        <tr>
            <th scope="col">Марка</th>
            <th scope="col">Модель</th>
            <th scope="col">Год</th>
            <th scope="col">Гос. номер</th>            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $messageEmailInd['RecordsIndForm']['records_mark'] ?></td>
            <td><?= $messageEmailInd['RecordsIndForm']['records_model'] ?></td>
            <td><?= $messageEmailInd['RecordsIndForm']['records_year'] ?></td>
            <td><?= $messageEmailInd['RecordsIndForm']['records_number'] ?></td>
        </tr>
    </tbody>
</table>
<br />
<b>Причина обращения:</b> <i><?= $messageEmailInd['RecordsIndForm']['records_comments'] ?></i>