(function ( $ ) {
	/**
	 *    Tabs in back-end
	 */
	function ewpnTab() {
		var anchor = window.location.hash
		if ( anchor === '#posts-per-page-taxonomies-option' ) {
			$( '.pag-tabs a' ).removeClass( 'nav-tab-active' )
			$( '.pag-tabs a.posts-per-page-taxonomies-option' ).addClass( 'nav-tab-active' )
			$( '.pag-tabs-content > div' ).hide()
			$( '.posts-per-page-taxonomies-option' ).show()
		}

		$( '.pag-tabs a' ).click( function () {
			var $this = $( this ),
				$tabID = $this.attr( 'href' )

			var $tabClass = $tabID.replace( '#', '.' )

			$( '.pag-tabs a' ).removeClass( 'nav-tab-active' )
			$this.addClass( 'nav-tab-active' )
			$( '.pag-tabs-content > div' ).hide()
			$( $tabClass ).show()
		} )
	}

	ewpnTab()

})( jQuery )