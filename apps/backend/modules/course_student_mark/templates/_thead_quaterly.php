<!--estaba esto<?php for ($i = 1; $i <= $marks_count; $i++): ?>
  <th align="center"><?php echo $i . '°C'; ?></th>
<?php endfor; ?>-->

<?php for ($i = 1; $i <= $marks_count; $i++): ?>
<!--  <th align="center"><?php echo $i . '°T'; ?></th>-->
<th align="center">
<?php if ($i==1 || $i==3)
 echo $i . '°O'; ?>
<?php if ($i==2 || $i==4)
 echo $i . '°C'; ?>
<?php if ($i==5)
 echo $i . '°CF'; ?>
</th>
<?php endfor; ?>
