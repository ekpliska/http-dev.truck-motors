<?php

 /*
  *     Шаблон письма для отправки на почту куратору заявок
  *     Шаблон для физического лица
  */
?>    
<h3>Запись на СТО :: Новая запись (Юридическое лицо) *</h3>


<b>Дата:</b> <i><?= $messageEmailLeg['RecordsLegForm']['records_date'] ?></i> | 
<b>Время:</b> <i><?= $messageEmailLeg['RecordsLegForm']['records_time'] ?></i>
<br />
<b>ФИО:</b> <?= $messageEmailLeg['RecordsLegForm']['records_nameCompany'] ?>
<br />
<b>Контактный телефон:</b> <?= $messageEmailLeg['RecordsLegForm']['records_phone'] ?>

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
            <td><?= $messageEmailLeg['RecordsLegForm']['records_mark'] ?></td>
            <td><?= $messageEmailLeg['RecordsLegForm']['records_model'] ?></td>
            <td><?= $messageEmailLeg['RecordsLegForm']['records_year'] ?></td>
            <td><?= $messageEmailLeg['RecordsLegForm']['records_number'] ?></td>
        </tr>
    </tbody>
</table>

<br />
<b>Причина обращения:</b> <i><?= $messageEmailLeg['RecordsLegForm']['records_comments'] ?></i>