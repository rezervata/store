/*Globals $ */
/**
 * Get data from form
 * 
 */
$(document).ready(function() {
    $(document).on('click', '.newCat', function(event) {
        console.log($(this).data())
        var postData = getData('#blockNewCategory')
        console.log(postData)
        newCategory(postData)
    })
})

$(document).ready(function() {
    $(document).on('click', '.updateCat', function(event) {
        console.log($(this).data())

        var postData = getData('#blockUpdateCat')
        postData.name = $('#parentId :selected').text().trim()
        console.log(postData)

        updateCategory(postData)
    })
})

$(document).ready(function() {
    $(document).on('click', '.newProduct', function(event) {
        console.log($(this).data())
        var postData = getData('#blockNewProduct')
        console.log(postData)
        addProduct(postData)
    })
})

$(document).ready(function() {
    $(document).on('click', '.updateProduct', function(event) {
        console.log($(this).data())
        var postData = getData('#blockUpdateProduct')
        console.log(postData)
        updateProduct(postData)
    })
})

function getData(obj_form) {
    var hData = {}
    $('input, textarea, select, checkbox, #parentId option:selected', obj_form)
        .each(function() {
            if (this.name && this.name !== '') {
                hData[this.name] = this.value
                console.log('hData[' + this.name + '] = ' + hData[this.name])
            }
        })
    return hData
}

function newCategory(postData) {
    var url = 'async.php?do=addNewCat',
        type = 'json'
    $.post(
        url,
        postData,
        function(data) {
            console.log(data.success)
            console.log(data.message)

            if (data.success) {
                $('#newCategoryName').val('')
            }

            alert(data.message)
            location.reload()
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
            console.log(data.success)
            console.log(data.message)

            alert(data.message)
            location.reload()
        },
        type)
}

function addProduct(postData) {
    var url = 'async.php?do=addProduct',
        type = 'json'

    $.post(
        url,
        postData,
        function(data) {
            console.log(data.success)
            console.log(data.message)

            if (data.success) {
                $('#newItemName').val('')
                $('#newItemPrice').val('')
                $('#newItemCatId').val('')
                $('#newItemDesc').val('')
                $('#newItemMake').val()
                $('#newItemMkey').val()

                $('#newItemData').val()
            }

            alert(data.message)
            location.reload()
        },
        type)
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
            alert(data['message'])
        }
    })
}