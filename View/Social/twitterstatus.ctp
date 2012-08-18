
/**
* Created by JetBrains PhpStorm.
* User: nisanth
* Date: 15/8/12
* Time: 11:18 AM
* To change this template use File | Settings | File Templates.
*/
<p>Enter the details of Twitter to update your status</p>
<br/>
<br/>
<br/>
<br/>
<?php
echo $this->Form->create('Social', array('action'=>'index'));
?>
<table style="border:none;">
    <tr>
        <td style="vertical-align: top;">Your status to update</td>
        <td><?php echo $this->Form->input('Social.status', array('label' => false, 'cols' => 50, 'rows' => 10)); ?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><br>
            <?php
            //echo $this->Form->submit('TwitterStatus', array('action'=>'index'));
            echo $this->Form->end('Twitter Status');
            ?>
        </td>
    </tr>
</table>