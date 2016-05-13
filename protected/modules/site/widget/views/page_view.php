<div class="center">
<ul class="pagination" id="fenye">
    <?php if($this->page_now==1):?>
        <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
        <?php else:?>
        <li><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.($this->page_now-1).$this->query_str;?>">&laquo;</a></li>
    <?php endif?>
<?php
if($this->page_count<=$this->page_limit):
    $i=1;
    while($i<=$this->page_count){
        if($i==$this->page_now):
    ?>
            <li class="active"><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.$i.$this->query_str;?>"><?php echo $i;?></a></li>
            <?php else:?>
            <li><a href="<?php echo  Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.$i.$this->query_str;?>"><?php echo $i;?></a></li>
    <?php
        endif;
        $i++;
    }
else:
    if($this->page_now<=(floor(($this->page_limit)/2)+2)):
        $i=1;
        while($i<$this->page_limit){
            if($i==$this->page_now):
                ?>
                <li class="active"><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.$i.$this->query_str;?>"><?php echo $i;?></a></li>
            <?php else:?>
                <li><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.$i.$this->query_str;?>"><?php echo $i;?></a></li>
            <?php
            endif;
            $i++;
        }
    ?>
        <li><a href="<?php Yii::app()->createUrl('site/default/index');?>">...</a></li>
        <li><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.$this->page_count.$this->query_str;?>"><?php echo $this->page_count;?></a></li>
    <?php else:?>
        <li><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/1'.$this->query_str;?>">1</a></li>
        <li><a href="<?php Yii::app()->createUrl('site/default/index');?>">...</a></li>
        <?php
        $begin_page=$this->page_now-floor($this->page_limit/2);
        $end_page=$this->page_now+floor($this->page_limit/2);
        $end_page=($end_page>$this->page_count)?$this->page_count:$end_page;
        $page=$this->page_now;
        $i=$begin_page;
        while($i<=$end_page){
            if($i==$this->page_now):
                ?>
                <li class="active"><a href="javascript:void(0)"><?php echo $i;?></a></li>
            <?php else:?>
                <li><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.$i.$this->query_str;?>"><?php echo $i;?></a></li>
            <?php
            endif;
            $i++;
        }
        ?>
        <?php if($this->page_now<$this->page_count-floor($this->page_limit/2)):?>
        <li><a href="<?php Yii::app()->createUrl('site/default/index');?>">...</a></li>
        <li><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.$this->page_count.$this->query_str;?>"><?php echo $this->page_count;?></a></li>
            <?php endif;?>
<?php
    endif;
    endif;?>
    <?php if($this->page_now==$this->page_count):?>
        <li class="disabled"><a href="javascript:void(0)">&raquo;</a></li>
        <?php else:?>
        <li><a href="<?php echo Yii::app()->createUrl("$this->action_url").'/'.$this->param.'/'.($this->page_now+1).$this->query_str;?>">&raquo;</a></li>
<?php endif?>
</ul>
</div>