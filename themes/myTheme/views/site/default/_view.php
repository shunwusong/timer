<!--<b>--><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?><!--:</b>-->
<?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?><!-- -->
<?php //echo CHtml::link(CHtml::encode($data->subject), array('view', 'id'=>$data->subject)); ?><!-- <br />-->
<tr>
    <td style="font-size: 14px"><?php echo $data->push_user;?></td>
    <td><?php echo date('y-m-d H:i:s',$data->create_time);?></td>
    <td><?php echo $data->detail;?></td>
    <td>...</td>
</tr>