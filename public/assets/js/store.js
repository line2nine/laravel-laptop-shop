$(document).ready(function(){
	//Filter
		$('.filter .item > .controls').on('click', '.checkbox-group', function(){
			if( $(this).attr('data-status') =='inactive' ){
				$(this).find('input').prop('checked', true);
				$(this).attr('data-status','active'); }
			else{
				$(this).find('input').prop('checked', false);
				$(this).attr('data-status','inactive'); }
		});


		$('.filter .item a[data-action="clear"]').on('click', function(){
			$(this).parents('.item').find('input').prop('checked', false);
			$(this).parents('.item').find('.checkbox-group').attr('data-status', 'inactive');
		});


		$('.filter .item a[data-action="open"]').on('click', function(){
			if( $(this).attr('class') == 'down' ){
				$(this).removeClass('down').addClass('up');
				$(this).parents('.item').find('.title > a[data-action="clear-price"]').fadeIn('slow');
				$(this).parents('.item').find('.title > a[data-action="clear"]').fadeIn('slow');
				$(this).parents('.item').find('.controls').fadeIn('slow'); }
			else {
				$(this).removeClass('up').addClass('down');
				$(this).parents('.item').find('.title > a[data-action="clear-price"]').fadeOut('slow');
				$(this).parents('.item').find('.title > a[data-action="clear"]').fadeOut('slow');
				$(this).parents('.item').find('.controls').fadeOut('slow'); }
		});

		//Slider price
			$('.filter a[data-action="clear-price"]').on('click', function(){

				$( ".filter #slider-price" ).slider({ values: [ 199, 700 ] });

				$( ".filter #amount" ).html( $( ".filter #slider-price" ).slider( "values", 0 )  + " $ - " +
			  	$( ".filter #slider-price" ).slider( "values", 1 ) + " $" );
			});

			if( $( "body" ).find('.filter').length > 0 ){
				$( ".filter #slider-price" ).slider({
				  range: true,
				  min: 99,
				  max: 1000,
				  values: [ 199, 700 ],
				  slide: function( event, ui ) {
				    $( "#amount" ).html( ui.values[ 0 ] + " $ - " + ui.values[ 1 ] + " $" );
				  }
				});

				$( ".filter #amount" ).html( $( "#slider-price" ).slider( "values", 0 )  + " $ - " +
				  $( "#slider-price" ).slider( "values", 1 ) + " $" );
			}
		//Slider price
	//Filter

	//Favorites
		$('.products .product').on('click', 'a.favorites', function(){
			if( $(this).attr('data-favorite') == 'inactive' ){
				$(this).attr('data-favorite', 'active');
			}
			else{
				$(this).attr('data-favorite', 'inactive');
			}
		});
	//Favorites

	//Sorting
		$('.tags').on('click', 'button.dropdown-toggle', function(){
			if( $(this).find('i').attr('class') == 'ion-arrow-down-b rotate' ){
				$(this).find('i').removeClass('rotate'); }
			else{ $(this).find('i').addClass('rotate'); }

			console.log( $(this).find('i').attr('class') );
		});

		$('.tags').on('focusout', 'button.dropdown-toggle', function(){
			$(this).find('i').removeClass('rotate');
		});
	//Sorting

	//Cart
		//Toggle
			setTimeout(function(){ $('body').find('.cart').fadeIn('slow'); }, 1000);

			$('a[href="#open-cart"]').on('click', function(){
				$('body').attr('data-view', 'modal-open');
				$('body').find('.cart').attr('data-toggle', 'active');
			});


			$('.cart').on('click', '.label', function(){
				$('body').attr('data-view', 'modal-open');
				$(this).parents('.cart').attr('data-toggle', 'active');
				//$('body').find('.cart').fadeIn('slow');
			});

			$('.cart').on('click', 'button.close, .overlay', function(){
				$('body').attr('data-view', '');
				$(this).parents('.cart').attr('data-toggle', 'inactive');
				//$('body').find('.cart').fadeOut('slow');
			});
		//Toggle

		//Remove
			$('.cart').on('click', 'a[href="#remove"]', function(){
                let productId = $(this).attr('data-id')
                $.ajax({
                    url: 'http://127.0.0.1:8000/' + productId + '/remove-product',
                    dataType: 'json',
                    success: function (result) {
                        if (result.status == 'success') {
                            $('#product-'+productId).fadeOut('300');
                            $('#cartCount').html(result.totalItem);
                            $('#bagCount').html(result.totalItem);
                        }
                    }
                })
			});
		//Remove

		//Count
			$('.cart').on('click', '.input-group button[data-action="plus"]', function(){
				// $(this).parents('.input-group').find('input').val( parseInt($(this).parents('.input-group').find('input').val()) + 1 );
                let productId = $(this).attr('data-id')
                let productQty = $(this).attr('data-qty')
                $.ajax({
                    url: 'http://127.0.0.1:8000/' + productId + '/update-productPlus',
                    data: productQty,
                    dataType: 'json',
                    success: function (result) {
                        if (result.status == 'success'){
                            $('#qtyid-'+productId).val( parseInt($('#qtyid-'+productId).parents('.input-group').find('input').val()) + 1 );
                            $('#bagCount').html(result.totalItem);
                            $('#cartCount').html(result.totalItem);
                        }
                    }
                })
			});
			$('.cart').on('click', '.input-group button[data-action="minus"]', function(){
				// if( parseInt($(this).parents('.input-group').find('input').val()) > 1 ) {
				// 	$(this).parents('.input-group').find('input').val( parseInt($(this).parents('.input-group').find('input').val()) - 1 );
				// }
                let productId = $(this).attr('data-id')
                let productQty = $(this).attr('data-qty')
                $.ajax( {
                    url: 'http://127.0.0.1:8000/' + productId + '/update-productMinus',
                    data: productQty,
                    dataType: 'json',
                    success: function (result) {
                        if (result.status == 'success') {
                            if( parseInt($('#qtyid-'+productId).parents('.input-group').find('input').val()) > 1 ) {
                                $('#qtyid-'+productId).val( parseInt($('#qtyid-'+productId).parents('.input-group').find('input').val()) - 1 );
                                $('#bagCount').html(result.totalItem);
                                $('#cartCount').html(result.totalItem);
                            }
                        }
                    }
                })
			});
		//Count

		//Scroll
			$(".cart .content").mCustomScrollbar({
			    theme:"dark",
			    scrollButtons: false,
			    contentTouchScroll: true
			});
		//Scroll

        //Add
    $('.btn-sm').on('click', function () {
        var cart = $('#my-bag');
        let imgId = $(this).attr('data-id')
        var imgtodrag = $('#img-'+imgId).eq(0);
        $.ajax({
            url: 'http://127.0.0.1:8000/' + imgId + '/add-product',
            dataType: 'json',
            success: function (result) {
                if (result.status == 'success'){
                    if (imgtodrag) {
                        var imgclone = imgtodrag.clone()
                            .offset({
                                top: imgtodrag.offset().top,
                                left: imgtodrag.offset().left
                            })
                            .css({
                                'opacity': '0.5',
                                'position': 'absolute',
                                'height': '150px',
                                'width': '150px',
                                'z-index': '100'
                            })
                            .appendTo($('body'))
                            .animate({
                                'top': cart.offset().top + 10,
                                'left': cart.offset().left + 10,
                                'width': 75,
                                'height': 75
                            }, 1000, 'easeInOutExpo');

                        setTimeout(function () {
                            cart.effect("shake", {
                                times: 2
                            }, 200);
                        }, 1500);

                        imgclone.animate({
                            'width': 0,
                            'height': 0
                        }, function () {
                            $(this).detach()
                        });
                        $('#cartCount').html(result.totalItem);
                        $('#bagCount').html(result.totalItem);
                        var listItem = '';
                        $.each( result.listItem, function( key, value ) {
                            listItem += '<div class="media" id="product-'+value.rowId+'">\n' +
                                '                <div class="media-left">\n' +
                                '                    <a href="#">\n' +
                                '                        <img class="media-object" src="/storage/'+value.options.image+'" alt="HP Chromebook 11"/>\n' +
                                '                    </a>\n' +
                                '                </div>\n' +
                                '                <div class="media-body">\n' +
                                '                    <h4 class="media-heading">'+value.name+'</h4>\n' +
                                '                    <label>'+value.options.category+'</label>\n' +
                                '                    <p class="price">'+value.price+'</p>\n' +
                                '                </div>\n' +
                                '                <div class="controls">\n' +
                                '                    <div class="input-group">\n' +
                                '                <span class="input-group-btn">\n' +
                                '                  <button class="btn btn-default btn-sm" type="button" data-action="minus" data-id="'+value.rowId+'"><i class="ion-minus-round"></i></button>\n' +
                                '                </span>\n' +
                                '                        <input id="qtyid-'+value.rowId+'" data-qty="'+value.qty+'" type="text" class="form-control input-sm" placeholder="Qty" value="'+value.qty+'" readonly="">\n' +
                                '                        <span class="input-group-btn">\n' +
                                '                  <button class="btn btn-default btn-sm" type="button" data-action="plus" data-id="'+value.rowId+'"><i class="ion-plus-round"></i></button>\n' +
                                '                </span>\n' +
                                '                    </div><!-- /input-group -->\n' +
                                '\n' +
                                '                    <a href="#remove" data-id="'+value.rowId+'"> <i class="ion-trash-b"></i> Remove </a>\n' +
                                '                </div>\n' +
                                '            </div>\n' +
                                '            '
                        });
                        $(".window .content").html(listItem);
                    }
                }
            }
        })

    });
        //Add
	//Cart

	// Reviews
		//Scroll
			$(".comments .wrapper .content").mCustomScrollbar({
			    theme:"dark",
			    scrollButtons: false,
			    contentTouchScroll: true
			});
		//Scroll
	// Reviews
});
