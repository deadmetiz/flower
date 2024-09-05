

function rightside(id){
    idcount = id + '?count';
    o = id + '?o';
    normal = id + '?normal';
    old = id + '?old';
    document.getElementById('alltotalbez').innerHTML = parseInt(document.getElementById('alltotalbez').innerHTML) - parseInt(document.getElementById(old).innerHTML) * parseInt(document.getElementById(idcount).innerHTML);
    document.getElementById('alltotal').innerHTML = parseInt(document.getElementById('alltotal').innerHTML) - parseInt(document.getElementById(normal).innerHTML) * parseInt(document.getElementById(idcount).innerHTML);
    sale = parseInt(document.getElementById('alltotalbez').innerHTML) - parseInt(document.getElementById('alltotal').innerHTML);
    document.getElementById('sale').innerHTML = sale + ' — сумма скидки';
    document.getElementById('sumtv').innerHTML = parseInt(document.getElementById('sumtv').innerHTML) - 1;
    nc = parseInt(document.getElementById('sumtv').innerHTML);
    if(nc === 1){
        document.getElementById('sumtvtxt').innerHTML = " товар";
    }
    else if(nc === 0){
        document.getElementById('right').style.display = "none";
    }
    else if(nc > 1 && nc < 5){
        document.getElementById('sumtvtxt').innerHTML = " товара";
    }
    else{
        document.getElementById('sumtvtxt').innerHTML = " товаров";
    }
}
function minus(id){
    idcount = id + '?count';

    o = id + '?o';
    normal = id + '?normal';
    old = id + '?old';

    if(parseInt(document.getElementById(idcount).innerHTML) === 1){

    }
    else {
        arr[id] -= 1;
        console.log(arr);
        document.getElementById('alltotalbez').innerHTML = parseInt(document.getElementById('alltotalbez').innerHTML) - parseInt(document.getElementById(old).innerHTML);
        document.getElementById('alltotal').innerHTML = parseInt(document.getElementById('alltotal').innerHTML) - parseInt(document.getElementById(normal).innerHTML);
        document.getElementById(o).innerHTML = parseInt(document.getElementById(o).innerHTML) - parseInt(document.getElementById(normal).innerHTML);

        sale = parseInt(document.getElementById('alltotalbez').innerHTML) - parseInt(document.getElementById('alltotal').innerHTML);
        document.getElementById('sale').innerHTML = sale + ' — сумма скидки';
        document.getElementById(idcount).innerHTML = parseInt(document.getElementById(idcount).innerHTML) - 1;
    }
}
function plus(id){
    idcount = id + '?count';

    o = id + '?o';
    normal = id + '?normal';
    old = id + '?old';

    arr[id] += 1;
    console.log(arr);
    document.getElementById('alltotalbez').innerHTML = parseInt(document.getElementById('alltotalbez').innerHTML) + parseInt(document.getElementById(old).innerHTML);
    document.getElementById('alltotal').innerHTML = parseInt(document.getElementById('alltotal').innerHTML) + parseInt(document.getElementById(normal).innerHTML);
    document.getElementById(o).innerHTML = parseInt(document.getElementById(o).innerHTML) + parseInt(document.getElementById(normal).innerHTML);

    sale = parseInt(document.getElementById('alltotalbez').innerHTML) - parseInt(document.getElementById('alltotal').innerHTML);
    document.getElementById('sale').innerHTML = sale + ' — сумма скидки';
    document.getElementById(idcount).innerHTML = parseInt(document.getElementById(idcount).innerHTML) + 1;
}

function addtofav(id){
    $.ajax({
        url: "add_favorite",
        type: 'POST',
        data: {
            to: id,
        },
        success: function(data){
            console.log(data);
        }
    })
}

function addtobag(id){
    let count = 1;
    $.ajax({
        url: "add_bag",
        type: 'POST',
        data: {
            to: id,
            count: count,
        },
        success: function(data){
            console.log(data);
        }
    })
}

function delbag(id){
    $.ajax({
        url: "del_bag",
        type: 'POST',
        data: {
            to: id,
        },
        success: function(data){
            console.log(data);
            rightside(id);
            delete arr[id];
            console.log(arr);
            document.getElementById(id).remove();
        }
    })
}

function createorder(){
    arrjs = JSON.stringify(arr);
    address = document.getElementById('address').value;
    $.ajax({
        url: "create_order",
        type: 'POST',
        data: {
            to: arrjs,
            address: address,
        },
        success: function(data){
            console.log(data);
            window.location.href=("/");
        }
    })


}
