var isi = document.getElementById("angka");
var keluaran = document.getElementById("output");

function output(){
    if (isi.value <= 0 || isi.value >= 20){
        alert("Pilih bilangan antara 1 sampai 20");
    }else if(isi.value % 2 == 1){
        let text = "";
        let n1 = 1;
        let n2 = 1;
        let bilangan_terakhir = 0;
        
        while (n1 < isi.value * 10){
            text += n1 + "<br>";
            bilangan_terakhir = n1 + n2;
            n1 = n2;
            n2 = bilangan_terakhir;
        }
        keluaran.innerHTML = text;
    }else if(isi.value % 2 == 0){
        let text2 = "";
        let i = 0;
        let n1 = 1;
        let total = 1;

        while(i < isi.value / 2){
            text2 += i+1 + "x";
            total *= n1;
            n1++;
            i++;
        }
        keluaran.innerHTML = text2 + "=" + total;
    }
    
};

let lampu = document.getElementById("lampu")
let value = 0;

function Mode(){
    if (value == 0){
        lampu.src = "lightbulb-fill.svg";
        value = 1;
    }else if(value == 1){
        lampu.src = "lightbulb.svg";
        value = 0;
    }
    var element = document.body;
    element.classList.toggle("dark-mode")
}