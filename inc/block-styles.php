<?php

if ( function_exists( 'register_block_style' ) ) {

  add_action( 'init', function () {
    register_block_style( 'core/post-excerpt', array(
      'name'  => 'ipc-header-cover',
      'label' => esc_html( 'Header Cover' )
    ) );

    register_block_style( 'core/post-author', array(
      'name'  => 'ipc-rounded-avatar',
      'label' => esc_html( 'Rounded Avatar' )
    ) );

    register_block_style( 'core/navigation', array(
      'name'  => 'ipc-last-item-accent',
      'label' => esc_html( 'Last Item Accent' )
    ) );
  } );

}
