<div class="div-center">
    <table class="table text-left dir-left table-bordered table-success border-success">
        <thead>
        <tr>
            <th style="width: 10%" scope="col">row</th>
            <th style="width: 10%" scope="col">name</th>
            <th scope="col">private</th>
            <th class="text-center" style="width: 10%" scope="col">public</th>
            <th class="text-center" style="width: 5%" scope="col">staked</th>
            <th class="text-center" style="width: 11%" scope="col">create date</th>
            <th style="width: 10%" class="text-center" scope="col">days left</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        foreach ($result as $val): ?>
        <tr>
            <th scope="row"><input type="checkbox"><input type="checkbox"><?=$i++; ?></th>
            <td><?=$val['name'] ?></td>
            <td style="overflow: hidden;">
                <?=$val['Pr_K'] ?>
            </td>
            <td class="text-center"><?=$val['pb_k'] ?></td>
            <td class="text-center"><?=$val['amount']+$val['amount_plus'] ?></td>
            <td class="text-center"><?=jdate("o/m/d",$val['date']) ?></td>
            <td class="text-center"><?=$val['left_days'] ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>

        <caption>
            Captions of the table
        </caption>

    </table>

</div>