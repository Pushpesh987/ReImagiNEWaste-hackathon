( function( api ) {

	// Extends our custom "meet-metaslider" section.
	api.sectionConstructor['meet-metaslider'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
