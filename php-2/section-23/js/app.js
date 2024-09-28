
$(document).ready(function() {
    $("#num_order").change(function () {
        var price = $("#price").text();
        var num_order = $("#num_order").val();
        var data = {num_order: num_order, price: price};
        // console.log(data);
        // alert(num_order);
        $.ajax ({
            url: 'process.php', // trang xử lý, mặc định là trang hiện tại 
            method: 'POST', // post hoặc get, mặc định là get
            data: data, // dữ liệu truyền lên server
            dataType: 'text', // html, text, script, or json
            success: function (data) {
                // alert(data);
                // console.log(data);
                // alert(data.total);
                // xử lý dữ liệu trả về 
                $("#total").text(data);
                $("#total").html("<strong>"+data+"</strong>");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            },
        });
    });
});
