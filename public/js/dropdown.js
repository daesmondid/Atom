function drop(src)
{
    $("#change").animate({opacity: "0"});
    setTimeout(function() { document.getElementById("change").innerHTML = '<img class = "dd-button" src = "'+src+'/images/clear.svg" onclick = "rise(\''+src+'\')" />'; }, 400);
    $("#change").animate({opacity: "1"});
    setTimeout(function() { $("#box").animate({height: "100%"}); }, 100);
    setTimeout(function() { $("#ddcontent").animate({opacity: "1"}); }, 600);
}

function rise(src)
{
    $("#change").animate({opacity: "0"});
    setTimeout(function() { document.getElementById("change").innerHTML = '<img class = "dd-button" src = "'+src+'/images/menu.svg" onclick = "drop(\''+src+'\')" />'; }, 400);
    $("#change").animate({opacity: "1"});
    $("#ddcontent").animate({opacity: "0"});
    setTimeout(function() { $("#box").animate({height: "50px"}); }, 300);
    setTimeout(function() { $("#box").css("height", ""); }, 750);
}