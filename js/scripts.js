function doiboxmenu1() {
    document.getElementById("box-1").className = "active";
    document.getElementById("box-2").className = null;
    document.getElementById("box-3").className = null;
    document.getElementById("box-4").className = null;
    document.getElementById("box-5").className = null;
    document.getElementById("box-6").className = null;
    document.getElementById("content-1").style = "display:block;";
    document.getElementById("content-2").style = "display:none;";
    document.getElementById("content-3").style = "display:none;";
    document.getElementById("content-4").style = "display:none;";
    document.getElementById("content-5").style = "display:none;";
    document.getElementById("content-6").style = "display:none;";

}

function doiboxmenu2() {
    document.getElementById("box-1").className = null;
    document.getElementById("box-2").className = "active";
    document.getElementById("box-3").className = null;
    document.getElementById("box-4").className = null;
    document.getElementById("box-5").className = null;
    document.getElementById("box-6").className = null;
    document.getElementById("content-1").style = "display:none;";
    document.getElementById("content-2").style= "display:block;";
    document.getElementById("content-3").style = "display:none;";
    document.getElementById("content-4").style = "display:none;";
    document.getElementById("content-5").style = "display:none;";
    document.getElementById("content-6").style = "display:none;";

}

function doiboxmenu3() {
    document.getElementById("box-1").className = null;
    document.getElementById("box-2").className = null;
    document.getElementById("box-3").className = "active";
    document.getElementById("box-4").className = null;
    document.getElementById("box-5").className = null;
    document.getElementById("box-6").className = null;
    document.getElementById("content-1").style = "display:none;";
    document.getElementById("content-2").style = "display:none;";
    document.getElementById("content-3").style = "display:block;";
    document.getElementById("content-4").style = "display:none;";
    document.getElementById("content-5").style = "display:none;";
    document.getElementById("content-6").style = "display:none;";
 
}

function doiboxmenu4() {
    document.getElementById("box-1").className = null;
    document.getElementById("box-2").className = null;
    document.getElementById("box-3").className = null;
    document.getElementById("box-4").className = "active";
    document.getElementById("box-5").className = null;
    document.getElementById("box-6").className = null;
    document.getElementById("content-1").style = "display:none;";
    document.getElementById("content-2").style = "display:none;";
    document.getElementById("content-3").style = "display:none;";
    document.getElementById("content-4").style = "display:block;";
    document.getElementById("content-5").style = "display:none;";
    document.getElementById("content-6").style = "display:none;";

}


function doiboxmenu5() {
    document.getElementById("box-1").className = null;
    document.getElementById("box-2").className = null;
    document.getElementById("box-3").className = null;
    document.getElementById("box-4").className = null;
    document.getElementById("box-5").className = "active";
    document.getElementById("box-6").className = null;
    document.getElementById("content-1").style = "display:none;";
    document.getElementById("content-2").style = "display:none;";
    document.getElementById("content-3").style = "display:none;";
    document.getElementById("content-4").style = "display:none;";
    document.getElementById("content-5").style = "display:block;";
    document.getElementById("content-6").style = "display:none;";

}



function doiboxmenu6() {
    document.getElementById("box-1").className = null;
    document.getElementById("box-2").className = null;
    document.getElementById("box-3").className = null;
    document.getElementById("box-4").className = null;
    document.getElementById("box-5").className = null;
    document.getElementById("box-6").className = "active";
    document.getElementById("content-1").style = "display:none;";
    document.getElementById("content-2").style= "display:none;";
    document.getElementById("content-3").style = "display:none;";
    document.getElementById("content-4").style = "display:none;";
    document.getElementById("content-5").style = "display:none;";
    document.getElementById("content-6").style = "display:block;";

}



function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  
  }
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

function hienthiform(id)
{
	if(document.getElementById(id).style.display=="block")
		document.getElementById(id).style.display="none";
	else
		document.getElementById(id).style.display="block";
	
}
function dongform(id)
{
	document.getElementById(id).style.display="none";
}