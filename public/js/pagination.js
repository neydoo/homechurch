$(window).on('hashchange', function() {
    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        }else{
            getData(page);
        }
    }
});

$(document).ready(function()
{
    $(document).on('click', '.pagination a',function(event)
    {
        event.preventDefault();

        $('li').removeClass('active');
        $(this).parent('li').addClass('active');

        var myurl = $(this).attr('href');
        var page=$(this).attr('href').split('page=')[1];

        getData(page);
    });

});

function getData(page){
    $.ajax(
    {
        url: '?page=' + page,
        type: "get",
        datatype: "html"
    }).done(function(data){
        $(".table-scrollable").empty().html(data);
        location.hash = page;
    }).fail(function(jqXHR, ajaxOptions, thrownError){
          alert('No response from server');
    });
}

$('#s-form').submit(function()
{
    // alert($(this).val());
    // // e.preventDefault();
    // if($(this).val() > 3){
        $.ajax({
            url: $(this).attr('action'),
            data:{
                search: $('#search').val()
            },
            success: function(data){
                $('.table-scrollable').empty().html(data);
            }
        }); 
    // }
});