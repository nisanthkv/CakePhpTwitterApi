<p>Select the social media that you want to connect with.</p>
<br/>
<br/>
<br/>
<br/>
<?php
echo $this->Form->create('Sociala', array('action'=>'select','type' =>'post')); ?>
<table style="border:none;">
    <tr>

        <td colspan="1" align="center"><br>
            <?php
            echo $this->Form->submit('Twitter', array('name'=>'twitterpage','value'=>'twitterpage'));
            ?>
        </td>
        <td colspan="1" align="center"><br>
            <?php
            echo $this->Form->submit('Google',array('name'=>'twitterpage','value'=>'googlepage'));
            ?>
        </td>
        <td colspan="1" align="center"><br>
            <?php
            echo $this->Form->submit('Facebook', array('name'=>'twitterpage','value'=>'facebookpage'));
            ?>
        </td>
    </tr>
</table>
<?php echo $this->Form->end(); ?>