wp.domReady( () => {
	wp.blocks.unregisterBlockStyle( 'core/button', 'default' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'squared' );

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'btn-primary',
		label: 'Primární tlačítko',
		isDefault: true,
	});

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'btn',
		label: 'Sekundární tlačítko',
	} );

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'btn-link',
		label: 'Textové tlačítko',
	} );

} );
