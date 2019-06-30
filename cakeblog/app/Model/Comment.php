 v<?php
class comment extends AppModel {
    public $belongsTo = array(
        'Post' => array(
            'className' => 'Post',
        )
    );
}
?>