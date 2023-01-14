<?php
return $mbx_config = array(
    array(
        'id'         => 'ticket_number',
        'title'      => __( 'Ticket number', 'bugtracker' ),
        'screen'     => 'post',
        'context'    => 'side',
        'priority'   => 'default',
        'template'   => 'metabox-input.php',
        'form_attrs' => array(
            'type' => 'text',
            'class' => 'ticket__number',
        )
    ),
    array(
        'id'         => 'ticket_date',
        'title'      => __( 'Ticket date', 'bugtracker' ),
        'screen'     => 'post',
        'context'    => 'side',
        'priority'   => 'default',
        'template'   => 'metabox-input.php',
        'form_attrs' => array(
            'type' => 'date',
            'class' => 'ticket__date',
        )
    ),
    array(
        'id'         => 'ticket_remark',
        'title'      => __( 'Ticket remark', 'bugtracker' ),
        'screen'     => 'post',
        'context'    => 'side',
        'priority'   => 'default',
        'template'   => 'metabox-textarea.php',
        'form_attrs' => array(
            'class' => 'ticket__remark',
            'rows'  => '5',
        )
    )
);
