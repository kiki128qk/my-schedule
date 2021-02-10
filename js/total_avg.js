$(function(){
        // $.ajax는 1개의 객체를 갖고 있으며 파라미터는 2가지(경로,성공시 진행되는 것) 
    $.ajax({
        url:'/my-schedule/data/sch_rate.json', success: function(result){
            let dbRate = Number(result[0].db_rate);
            let apiRate = Number(result[0].api_rate);
            let plaRate = Number(result[0].pla_rate);
            let renRate = Number(result[0].ren_rate);
            
            // console.log(result);
            let schAvg =(dbRate * 0.4) + (apiRate * 0.2)  + (plaRate * 0.3) + (renRate * 0.1);

            
           $(".circle-graph-container").html(`
                <div class="circle-graph easyPieChart" data-percent="${schAvg}">
                <p>${schAvg}%</p>                        
                </div>`);
        }

    });

});

