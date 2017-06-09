var default_content="";

$(document).ready(function(){

    checkURL();
    $('ul li a').click(function (e){
            checkURL(this.hash);
    });

    //filling in the default content
    default_content = $('#alldatahere').html();
    setInterval("checkURL()",250);
});

var lasturl="";

function checkURL(hash)
{
    if(!hash) hash=window.location.hash;

    if(hash != lasturl)
    {
        lasturl=hash;

        // FIX - if we've used the history buttons to return to the homepage,
        // fill the alldatahere with the default_content

        if(hash=="")
        $('#alldatahere').html(default_content);

        else
        loadPage(hash);
    }
}


function loadPage(url)
{
    url=url.replace('#page','');
    $.ajax({
        type: "POST",
        url: "../php/load_page.php",
        data: 'page='+url,
        dataType: "html",
        success: function(msg){
            if(parseInt(msg)!=0)
            {
                $('#alldatahere').html(msg);
            }
        }

    });
}

document.function(hash){
    if(document.getElementById(#alldatahere) == document.getElementById(#container)){
        window.location ("product.html");
      }
      else{
        alert("Not Available");
      }
    }
