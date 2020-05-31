function Resolucao(){
	var altura = $(window).height();
	var largura = $(window).width();
	alert("W:" + altura + " - H: " + largura);
}

function ReloadDadosTorrent(){
	$.fancybox.close();
	DadosTorrent();
}

function ReloadRedesWifi(){
	$.fancybox.close();
	RedesWifi();
}

function DataHora(){
    $.ajax({
        url: "paginas/dataHora.php",
        success: function(result){
		$("#dataHora").html(result);
		setTimeout('DataHora()', 1000);	
        }
    });
};

function Temperatura(){
    $.ajax({
        url: "paginas/temperatura.php",
        success: function(result){
		$("#temperatura").html(result);
		setTimeout('Temperatura()', 5000);	
        }
    });
};

function Armazenamento(){
    $.ajax({
        url: "paginas/armazenamento.php",
        success: function(result){
		$("#armazenamento").html(result);
		setTimeout('Armazenamento()', 60000);	
        }
    });
};

function Network(){
    $.ajax({
        url: "paginas/network.php",
        success: function(result){
		$("#network").html(result);
		setTimeout('Network()', 15000);	
        }
    });
};
 
function Internet(){
    $.ajax({
        url: "paginas/internet.php",
        success: function(result){
		$("#internet").html(result);
		setTimeout('Internet()', 30000);	
        }
    });
};

function DadosTorrent(){
    $.ajax({
        url: "paginas/dadosTorrent.php",
        success: function(result){
                $("#dadosTorrent").html(result);
	              setTimeout('DadosTorrent()', 30000);
        }
    });
};

function RedesWifi(){
    $.ajax({
        url: "paginas/redesWifi.php",
        success: function(result){
                $("#redesWifi").html(result);
        }
    });
};

function Configuracoes(){
    $.ajax({
        url: "paginas/configuracoes.php",
        success: function(result){
                $("#configuracoes").html(result);
        }
    });
};

function Nbh(){
    $.ajax({
        url: "paginas/neighborhood.php",
        success: function(result){
                $("#result").html(result);
        }
    });
};

function Cooler(){
    $.ajax({url: "paginas/cooler.php"});
};

function EmailTest(){   
    $.ajax({
        url: "paginas/email.php",
        success: function(result){
                $("#result").html(result);
        }
    });
};

function ApRouter(){
    $.ajax({url: "paginas/apRouter.php"});
};

function LedRGB(){
    $.ajax({
	    url: "paginas/ledRGB.php",
	    complete: function(result){
		   // Temperatura();
	    }
    });
};

function FancyBox(){
	$(".various").fancybox({
		maxWidth	: 300,
		maxHeight	: 150,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
}

$(document).ready(function() {
	FancyBox();	
        DataHora();
	Temperatura();
	Armazenamento();
	Network();
	Internet();
	RedesWifi();
	DadosTorrent();
	Configuracoes();
	//Resolucao();
});
