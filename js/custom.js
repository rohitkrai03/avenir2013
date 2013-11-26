/* -------------------- gridrotator --------------------- */


		$(function() {
		
			$( '#ri-grid' ).gridrotator( {
				rows		: 3,
				columns		: 15,
				animType	: 'fadeInOut',
				animSpeed	: 1000,
				interval	: 600,
				step		: 1,
				w320		: {
					rows	: 3,
					columns	: 4
				},
				w240		: {
					rows	: 3,
					columns	: 4
				}
			} );
		
		});


/* -------------------- maps --------------------- */


$("#maps").gmap3({
    marker:{
      address: "Boulevard Résistance et Déportation 49100 Angers"
      },
    map:{
      options:{
        zoom: 14
      }
    }
  });