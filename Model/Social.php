<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nisanth
 * Date: 14/8/12
 * Time: 7:52 PM
 * To change this template use File | Settings | File Templates.
 */
class Social extends AppModel {

    var $name = 'Social';
    var $useTable = false;

    var $validate = array(
       'status' => array(
            'rule' => 'notEmpty',
            'message' => 'You did not enter a message.'
        )
    );
}
?>
}
?>