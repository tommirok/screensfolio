window.onload=getdata1();
//ison kuvan vaihto
function plop(asd, kuvaus){
    document.getElementById('pic0').src = document.getElementById(asd).src;
    document.getElementById('kuvaus0').innerHTML=document.getElementById(kuvaus).textContent;
}

function getdata1() {
    var xmlhttp = new XMLHttpRequest();
    var taulukko;
    xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        taulukko = JSON.parse(xmlhttp.responseText);
        document.getElementById('kuvaus0').innerHTML= taulukko[1]['otsikko'];
        document.getElementById('kuvaus1').innerHTML= taulukko[1]['otsikko'];
        document.getElementById('kuvaus2').innerHTML= taulukko[2]['otsikko'];
        document.getElementById('kuvaus3').innerHTML= taulukko[3]['otsikko'];
        document.getElementById('kuvaus4').innerHTML= taulukko[4]['otsikko'];
        document.getElementById('pic0').src = "img/"+taulukko[1]["url"];
        document.getElementById('pic1').src = "img/"+taulukko[1]["url"];
        document.getElementById('pic2').src = "img/"+taulukko[2]["url"];
        document.getElementById('pic3').src = "img/"+taulukko[3]["url"];
        document.getElementById('pic4').src = "img/"+taulukko[4]["url"];
    }
    };
    xmlhttp.open("GET", "php/getdata1.php", true);
    xmlhttp.send();
    }
function getdata2() {
    var xmlhttp = new XMLHttpRequest();
    var taulukko;
    xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        taulukko = JSON.parse(xmlhttp.responseText);
        document.getElementById('kuvaus0').innerHTML= taulukko[5]['otsikko'];
        document.getElementById('kuvaus1').innerHTML= taulukko[5]['otsikko'];
        document.getElementById('kuvaus2').innerHTML= taulukko[6]['otsikko'];
        document.getElementById('kuvaus3').innerHTML= taulukko[7]['otsikko'];
        document.getElementById('kuvaus4').innerHTML= taulukko[8]['otsikko'];
        document.getElementById('pic0').src="img/"+taulukko[5]["url"];
        document.getElementById('pic1').src="img/"+taulukko[5]["url"];
        document.getElementById('pic2').src="img/"+taulukko[6]["url"];
        document.getElementById('pic3').src="img/"+taulukko[7]["url"];
        document.getElementById('pic4').src="img/"+taulukko[8]["url"];
    }
    };
    xmlhttp.open("GET", "php/getdata2.php", true);
    xmlhttp.send();
}
function getdata3() {
    var xmlhttp = new XMLHttpRequest();
    var taulukko;
    xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        taulukko = JSON.parse(xmlhttp.responseText);
        document.getElementById('kuvaus0').innerHTML= taulukko[9]['otsikko'];
        document.getElementById('kuvaus1').innerHTML= taulukko[9]['otsikko'];
        document.getElementById('kuvaus2').innerHTML= taulukko[10]['otsikko'];
        document.getElementById('kuvaus3').innerHTML= taulukko[11]['otsikko'];
        document.getElementById('kuvaus4').innerHTML= taulukko[12]['otsikko'];
        document.getElementById('pic0').src="img/"+taulukko[9]["url"];
        document.getElementById('pic1').src="img/"+taulukko[9]["url"];
        document.getElementById('pic2').src="img/"+taulukko[10]["url"];
        document.getElementById('pic3').src="img/"+taulukko[11]["url"];
        document.getElementById('pic4').src="img/"+taulukko[12]["url"];
        
    }
    };
    xmlhttp.open("GET", "php/getdata3.php", true);
    xmlhttp.send();
    }
function getdata4() {
    var xmlhttp = new XMLHttpRequest();
    var taulukko;
    xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        taulukko = JSON.parse(xmlhttp.responseText);
        document.getElementById('kuvaus0').innerHTML= taulukko[13]['otsikko'];
        document.getElementById('kuvaus1').innerHTML= taulukko[13]['otsikko'];
        document.getElementById('kuvaus2').innerHTML= taulukko[14]['otsikko'];
        document.getElementById('kuvaus3').innerHTML= taulukko[15]['otsikko'];
        document.getElementById('kuvaus4').innerHTML= taulukko[16]['otsikko'];
        document.getElementById('pic0').src="img/"+taulukko[13]["url"];
        document.getElementById('pic1').src="img/"+taulukko[13]["url"];
        document.getElementById('pic2').src="img/"+taulukko[14]["url"];
        document.getElementById('pic3').src="img/"+taulukko[15]["url"];
        document.getElementById('pic4').src="img/"+taulukko[16]["url"];
    }
    };
    xmlhttp.open("GET", "php/getdata4.php", true);
    xmlhttp.send();
    }
