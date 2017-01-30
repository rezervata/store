'use strict'

$(document).keyup(function(e) {
    if (e.keyCode === 27) {
        $('#_blanket').fadeOut();
        $('#_blanketH').fadeOut();
    }
});

$(document).ready(function() {
    $(document).on('click', 'a[href="#"]', function(event) {
        event.preventDefault();
    });

    $(document).on('click', '.toCart', function(event) {
        var id = $(this).data('id');
        $.post('async.php?do=addToCart', 'id=' + id, function(data) {
            alert(data);
        });
    });

    $(document).on('click', '.clr', function() {
        $.post('async.php?do=clr', function() {
            alert('Empty Cart?!');
            window.location.reload();
        });
    });

    $(document).on('click', '.del', function(event) {
        var id = $(this).data('id');
        $.post('async.php?do=del', 'id=' + id, function() {
            alert('Deleted!');
            window.location.reload();
        });
    });

    $(document).on('click', '.minus', function(event) {
        var id = $(this).data('id');
        $.post('async.php?do=minus', 'id=' + id, function() {
            window.location.reload();
        });
    });

    $(document).on('click', '.plus', function(event) {
        var id = $(this).data('id');
        $.post('async.php?do=plus', 'id=' + id, function() {
            window.location.reload();
        });
    });

    // .............. CART STEPS .........
    $(document).on('click', '._guestOrder', function(event) {
        $('#metro_body').html('');
        var url = 'async.php?load=guestOrder';
        $('#metro_body').load(url, function() {
            $('#_blanketH').fadeIn();
        });
    });

    $(document).on('click', '#newGuestUser', function() {
        $('.aj_msg').html('');
        $.ajax({
            type: 'POST',
            async: false,
            url: 'async.php?do=newGuestUser',
            data: $('form[name="guestUserData"]').serialize(),
            dataType: 'json',
            success: function(data) {
                $('.aj_msg').html(data.msg);
                if (data.state == 'T') {
                    $('form[name="guestUserData"]').html('');
                    setTimeout(function() {
                        $('#_blanketH').fadeOut(400, function() {
                            window.location.reload();
                        });
                    }, 1500);
                }
            }
        });
    });

    $(document).on('click', '.clLogin', function(event) {
        $('.login').html('');
        var url = 'async.php?load=clLogin';
        $('.login').load(url, function() {
            $('#_blanketH').fadeIn();
        });
    });

    $(document).on('click', '#login', function(event) {
        $.post('async.php?do=login', $('form[name="loginform"]').serialize(), function(data) {
            $('.login').html(data.msg);
            //            console.log(data)
            if (data.state == 'T') window.location.reload();
        }, 'json');
    });

    $(document).on('click', '#logout', function(event) {
        $('.logout').html('');
        $('.logout').load('async.php?do=clExit', function() {
            setTimeout(function() {
                location.reload();
            }, 100);
            //                    $('#_blanketH').fadeIn(400,function(){
            //				
            //			})
        });
    });

    $(document).on('click', '._accCreate', function(event) {
        $('.acc_create').html('');
        var url = 'async.php?load=acc_create';
        $('.acc_create').load(url, function() {
            $('#_blanketH').fadeIn();
        });
    });

    $(document).on('click', '#register', function(event) {
        $.post('async.php?do=accCreate', $('form[name="register"]').serialize(), function(data) {
            $('.acc_create').html(data.msg);
            console.log(data);
            if (data.state == 'T') window.location.reload()
        }, 'json');
    });

    $(document).on('click', '#_newLocation', function(event) {
        $('#test').load('async.php?load=locationNew');
    });

    $(document).on('click', '#addLocation', function(event) {
        $.post('async.php?do=newLocation', $('form[name="addLocation"]').serialize(), function(data) {
            $('#test2').html(data.msg);
            if (data.state == '6') window.location.reload();
        }, 'json');
    });

    $(document).on('click', 'a[name="paymentOption"]', function(event) {
        url = $(this).attr('href');
        $.get('async.php?do=payMethod&name=' + $(this).data('name'), '', function() {
            window.location.href = url;
        });
    });

    //   ........... END CART STEPS ............

    $('input[type=file]').change(function(event) {
        $('#customfileupload').html($(this).val());
    });

    $(document).on('click', '.payNow', function(event) {
        $.post('async.php?do=cartBuyNow', function(data) {
            //     console.log(data)
            $('.finalmsg').html(data.msg);
            if (data.state == 'T') {
                $('.finish').html('');
                setTimeout(function() {
                    window.location.href = '/';
                }, 500);
            }
        }, 'json');
    });

    $(document).on('click', '.steps', function() {
        $.post('async.php?do=nextstep', 'step=' + $(this).data('step'), function() {
            window.location.reload();
        });
    });

    $(document).on('click', '.tblOrders tbody tr', function() {
        var id = $(this).attr('oid');
        // alert($(this).attr('oid'))
        $('#orderData').html('');
        $('#orderData').load('async.php?load=admAnOrder&id=' + id, function() {});
        $('#_blanketH').fadeIn(400);
    });



    /*** ADM USERS ***/
    $(document).on('click', '.tblClients .cRow', function() {
        $('#metro_body').html('');
        $('#metro_body').load('async.php?load=showClient&id=' + $(this).attr('cid'), function() {
            $('#_blanketH').fadeIn(400);
        });
    });
    /*** end adm users ***/

    /*** ADM ORDERS ***/
    $(document).on('click', 'input[name=bAdmOrders]', function() {
        window.location.href = 'admOrders/';
    });
    $(document).on('click', '.orderOper span', function() {
        var id = $(this).data('id');
        var status = $(this).data('rel');
        var code = $('input[name="shipCode"]').val();
        var notes = $('textarea[name="xNotes"]').val();

        $('.aj_msg').html('Processing...');

        $.get('async.php?do=admAnOrder', 'status=' + status + '&id=' + id + '&code=' + code + '&notes=' + notes, function(data) {
            $('.aj_msg').html(data.msg);
            if (data.state == 'T') {
                $('.orderData').html('');
                setTimeout(function() {
                    $('#_blanketH').fadeOut(400, function() { location.reload(); });
                }, 1000);
            }
        }, 'json');
    });
    /*** end adm orders ***/

    /*** ADM CLIENTS ***/
    $(document).on('click', 'input[name="bAdmClients"]', function() {
        window.location.href = 'admClients/';
    });
    /*** end adm clients ***/

    /*** BANNERS ***/
    $(document).on('click', 'a[name="bNewBanner"]', function() {
        $('#metro_body').html('<p>Creating banner group...</p>');
        $('#_blanketH').fadeIn(400);

        $.get('async.php?do=newBanGrp', '', function() {
            $('#metro_body').html('<p>Banner group created.<br>You can now add products to the group.</p>');
        });
    });
    $(document).on('click', 'input[name=bAddToBanGrp]', function() {
        $('#metro_body').html('<p>Adding product to group...</p>');
        $('#_blanketH').fadeIn(400);
        $.get('async.php?do=itemToBanner&id=' + $(this).data('id'), '', function(data) {
            $('#metro_body').html('<p>' + data.msg + '</p>');
            if (data.state == 'T') {
                setTimeout(function() {
                    $('#_blanketH').fadeOut(400, function() { location.reload(); });
                }, 2000);
            }
        }, 'json');
    });
    $(document).on('click', 'a[name="bShowBanners"]', function() {
        $('#metro_body').html('');
        $('#metro_body').load('async.php?load=showBanners', function() {
            $('#_blanketH').fadeIn(400);
        });
    });
    $(document).on('click', '.bDelBanner', function() {
        var grp = $(this).data('grp');
        $('#metro_body').load('async.php?load=showBanners&del=' + grp, '', function() {
            location.reload();
        });
    });
    /*** end banners ***/

    /*** slider ***/
    function slideRun() {
        $('.svSlider').each(function() {
            var text = $(this).find('.svNode:last-child p');
            var el = $(this).find('.svNode:last-child');
            var self = $(this);

            text.animate({ marginTop: 20, marginLeft: 7, opacity: 1 }, 600);
            setTimeout(function() {
                el.animate({ height: 0, top: 140 }, 400, function() {
                    el.prependTo(self);
                    el.height(140);
                    el.css('top', 0);
                    text.css({ 'opacity': '0', 'margin-top': '0', 'margin-left': '0' });
                });
            }, 4000);
        });
    }

    slideRun();
    setInterval(function() {
        slideRun();
    }, 5000);
    /*** end slider ***/

    /*** ADMINISTRATION ***/
    /*** ADM NEW CATEGORY ***/
    $(document).on('click', '.newCat', function(event) {
        var postData = getData('#blockNewCategory');
        newCategory(postData);
    });
    /*** END ADM NEW CATEGORY ***/

    /*** ADM UPDATE CATEGORY ***/
    $(document).on('click', '.updateCat', function(event) {
        var postData = getData('#blockUpdateCat');
        postData.name = $('#parentId :selected').text().trim();
        updateCategory(postData);
    });
    /*** END ADM UPDATE CATEGORY ***/

    /*** ADM NEW PRODUCT ***/
    $(document).on('click', '.newProduct', function(event) {
        var postData = getData('#blockNewProduct');
        addProduct(postData);
    });
    /*** END ADM NEW PRODUCT ***/

    /*** ADM UPDATE PRODUCT ***/
    $(document).on('click', '.updateProduct', function(event) {
        var postData = getData('#blockUpdateProduct');
        updateProduct(postData);
    });
    /*** END ADM UPDATE PRODUCT ***/

}); // do ready end

/*** ADM FUNCTIONY ***/
function getData(obj_form) {
    var hData = {}
    $('input, textarea, select, checkbox, #parentId option:selected', obj_form)
        .each(function() {
            if (this.name && this.name !== '') {
                hData[this.name] = this.value
                    //                console.log('hData[' + this.name + '] = ' + hData[this.name]);
            }
        });
    return hData
}

function newCategory(postData) {
    var url = 'async.php?do=addNewCat',
        type = 'json'
    $.post(
        url,
        postData,
        function(data) {
            console.log(data.success);
            console.log(data.message);

            if (data.success) {
                $('#newCategoryName').val('');
            }

            alert(data.message);
            location.reload();
        },
        type)
}

function updateCategory(postData) {
    var url = 'async.php?do=updateCategory',
        type = 'json',
        postData = postData

    $.post(
        url,
        postData,
        function(data) {
            console.log(data.success);
            console.log(data.message);

            alert(data.message);
            location.reload();
        },
        type);
}

function addProduct(postData) {
    var url = 'async.php?do=addProduct',
        type = 'json'

    $.post(
        url,
        postData,
        function(data) {
            console.log(data);
            console.log(data);

            if (data.success) {
                $('#newItemName').val('');
                $('#newItemPrice').val('');
                $('#newItemCatId').val('');
                $('#newItemDesc').val('');
                $('#newItemMake').val();
                $('#newItemMkey').val();
                $('#newItemData').val();
            }

            alert(data.message);
            if (data.success == 1) location.reload();
        },
        type);
}

function updateProduct(item) {
    var itemName = $('#itemName_' + item.itemId).val(),
        itemPrice = $('#itemPrice_' + item.itemId).val(),
        itemCatId = $('#itemCatId_' + item.itemId).val(),
        itemMaked = $('#newItemMake_' + item.itemId).val(),
        itemMKey = $('#newItemMkey_' + item.itemId).val(),
        itemData = $('#newItemData_' + item.itemId).val(),
        itemDesc = $('#itemDesc_' + item.itemId).val().trim(),
        itemStatus

    if ($('#itemStatus_' + item.itemId).is(':checked')) {
        itemStatus = 1
    } else {
        itemStatus = 0
    }

    var postData = {
        itemId: item.itemId,
        itemName: itemName,
        itemPrice: itemPrice,
        itemCatId: itemCatId,
        itemMake: itemMaked,
        itemMKey: itemMKey,
        itemData: itemData,
        itemDesc: itemDesc,
        itemStatus: itemStatus
    }

    $.ajax({
        type: 'POST',
        async: false,
        url: 'async.php?do=updateProduct',
        data: postData,
        dataType: 'json',
        success: function(data) {
            alert(data['message']);
        }
    }); 
        
}
/*** END ADM FUNCTION ***/

/*** ITEM ***/
	$(document).on('click','input[name="bAddItem"]', function(){
		$('#metro_body').html('');
		$('#metro_body').load('async.php?load=newItem',function(){
			$('#_blanketH').fadeIn(400);
		});
	});
	
	$(document).on('click','#_saveItem',function(){
		$('form#newItem').ajaxForm({
			target:'.aj_msg',
			success:function(){
				if($('.aj_msg').html() == 'Product created.'){
					$('form#newItem').html('');
					setTimeout(function(){
						$('#_blanketH').fadeOut(400,function(){location.reload();});
					}, 1000);
				}
				
			}
		}).submit();
	});
	
	$(document).on('click','input[name="bEditItem"]', function(){
		$('#metro_body').html('');
		$('#metro_body').load('async.php?load=editItem&id=' + $(this).data('id'),function(){
			$('#_blanketH').fadeIn(400);
		});
	});
	
	$(document).on('click','#_saveEditItem',function(){
		$('form#editItem').ajaxForm({
			target:'.aj_msg',
			success:function(){
				if($('.aj_msg').html() == 'Edited successfully.'){
					//$('form#newItem').html('');
					/*
					setTimeout(function(){
						$('#_blanketH').fadeOut(400,function(){location.reload();});
					}, 1000);
					*/
				}
				
			}
		}).submit();

	});
/*** end item ***/