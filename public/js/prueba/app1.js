document.addEventListener("DOMContentLoaded", function (event) {

    var fecfin = document.getElementById('fecfin');
    fecfin.addEventListener('change',
        function () {
            var fecfin = document.getElementById('fecfin').value;
            var fecini = document.getElementById('fecini').value;
            var dias = moment(fecfin);
            var dias2 = moment(fecini);
            var diff = dias.diff(dias2,'days');
            console.log(diff);
            var precio = document.getElementById('valor_unitario').value;
            var lanzamiento = document.getElementById('lanzamiento').value;

            if(lanzamiento == "Nuevos lanzamientos"){
                var total = diff*precio;
                var totalP = document.getElementById('total');
                totalP.value = total;
            }else if(lanzamiento == "Peliculas normales" ){
                if(diff <= 3){
                    var total = diff*precio;
                    var totalP = document.getElementById('total');
                    totalP.value = total;
                }else if(diff >= 3){
                    var dia = 3;
                    var precio3 = dia*precio;
                   // console.log(precio3);
                    var dias = diff - dia;
                   // console.log(dias);
                    var valor = dias * precio;
                    var valorT = valor * 0.15;
                    //console.log(valor);
                    var total = valor + precio3 + valorT;
                   // console.log(total);
                    var totalP = document.getElementById('total');
                    totalP.value = total;
                    
                }
            }else if(lanzamiento == "Peliculas viejas" ){
                if(diff <= 5){
                    var total = diff*precio;
                    var totalP = document.getElementById('total');
                    totalP.value = total;
                }else if(diff >= 5){
                    var dia = 5;
                    var precio3 = dia*precio;
                   // console.log(precio3);
                    var dias = diff - dia;
                   // console.log(dias);
                    var valor = dias * precio;
                    var valorT = valor * 0.10;
                    //console.log(valor);
                    var total = valor + precio3 + valorT;
                   // console.log(total);
                    var totalP = document.getElementById('total');
                    totalP.value = total;
                    
                }
            }
        });

});