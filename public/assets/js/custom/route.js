$(document).on('click', '[ajax-href]', function(e) { 
    if(system_settings.template_onepage)
    {
        ajaxHref($(this).attr('ajax-href'));
    } else {
        window.location = $(this).attr('ajax-href'); 
    } 
});
$(document).on('submit', '[ajax-form]', function(e) { 
    if(system_settings.template_onepage)
    {
        ajaxForm(this); 
        e.preventDefault();
    }
});

function ajaxHref(URL)
{
    var target = URL.replace(window.location.origin, "");
    window.location.hash = target; 
    loading(true);

    $.ajax({
        headers: {
            'Masterpage': 'empty' 
        },
        url: URL,
        method: 'GET', 
        cache: false,
        success: function(response)
        {
            clearfixRouteScript();

            $('#js-page-content').html(response);
        },
        error: function(jqXHR, status, thrown) 
        {
            clearfixRouteScript();
            
            console.log(errorThrown);
        }
    });
} 

function ajaxForm(form)
{
    var method = $(form).attr('method');
    var action = $(form).attr('action');

    $.ajax({
        headers: {
            'Masterpage': 'empty' 
        },
        type: method,
        url: action,
        data: new FormData($(form)[0]),
        processData: false,
        contentType: false,
        cache: false,
        success: function(response, status, jqXHR) 
        {
            clearfixRouteScript();

            $('#js-page-content').html(response);
        },
        error: function(jqXHR, status, thrown) 
        {
            clearfixRouteScript();

            console.log(errorThrown);
        }
    }); 
}

function clearfixRouteScript()
{
    loading(false);
    
    $(BaseCRUD.selector).dataTable().fnDestroy();
    $('.bs-tooltip-auto[role="tooltip"].show').remove();
}

function loading(type = true)
{
    if(type)
        $('[loading-area]').show();
    else
        $('[loading-area]').hide();
}
