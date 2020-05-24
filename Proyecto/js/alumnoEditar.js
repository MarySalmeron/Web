
$(document).ready(function(){
    $('select').formSelect();

    var rango = [1990,2003];
    $('.datepicker').datepicker({
        format:"yyyy-mm-dd",
        autoClose:true,
        minDate:new Date(1990,0,1),
        maxDate:new Date(2003,11,31),
        yearRange:rango,
        i18n:{
            months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthsShort:["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],
            weekdays:["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"],
            weekdaysShort:["Dom","Lun","Mar","Mie","Jue","Vie","Sab"],
            weekdaysAbbrev:["D","L","M","M","J","V","S"]
        }
    });

    $("#formEditar").validetta({
        bubblePosition: "bottom",
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid:function(e){
            e.preventDefault();
            $.ajax({
                url:"./../alumnoEditar_AX.php",
                method:"POST",
                data:$("#formEditar").serialize(),
                cache:false,
                success:function(respAX){
                    var AX = JSON.parse(respAX);
                    var titulo = "<h2>Pre-inscripción 2021/1</h2>";
                    $.alert({
                        title:titulo,
                        content:AX.msj,
                        icon:"fas fa-pen fa-2x",
                        theme:"supervan",
                        onDestroy:function(){
                            if(AX.cod == 0){
                                location.reload();
                            }
                            if(AX.cod == 1){
                                window.location.href = "./index.php";
                            }
                        }
                    });
                }
            });
        }
    });
});