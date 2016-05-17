$(document).ready(function() {  
    
    $(".tablesearch").hide();
    // Search
    function search() {

        var element = document.getElementById("searchBy");
        var search_by = element.options[element.selectedIndex].value;

        var query_value = $('input#name').val();
        if(query_value !== ''){
            $.ajax({
                type: "POST",
                url: "../search.php",
                data: { query: query_value, search_by: search_by },
                cache: false,
                success: function(html){
                        $("table#resultTable tbody").html(html);
                }
            });
        } return false;    
    }

    $("input#name").live("keyup", function(e) {
        // Set Timeout
        clearTimeout($.data(this, 'timer'));

        // Set Search String
        var search_string = $(this).val();

        // Do Search
        if (search_string == '') {
                $(".tablesearch").fadeOut(300);
        }else{
                $(".tablesearch").fadeIn(300);
                $(this).data('timer', setTimeout(search, 100));
        };
    });
});