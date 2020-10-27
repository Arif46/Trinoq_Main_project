//Update Portfoiio Status Active and InActive
$(".UpdatePortfolioStatus").click(function(){
    var status =$(this).text();
    var portfolio_id =$(this).attr("portfolio_id");
    
    $.ajax({
        type:'post',
        url:'/PortfoliostatusUpdate',
        data:{status:status,portfolio_id:portfolio_id},
        success:function(resp){
        //    alert(resp['status']);
        //    alert(resp['section_id']);
           if(resp['status'] == 0){
               $("#portfolio-"+portfolio_id).html(" <a class='UpdatePortfolioStatus' href='javascript:void(0)'>InActive</a>");
           }else if(resp['status'] == 1){
            $("#portfolio-"+portfolio_id).html(" <a class='UpdatePortfolioStatus' href='javascript:void(0)'>Active</a>");

           }
        },error:function(){
            alert("Error");
        } 
    });
});


//Update Portfoiio  WEB Status Active and InActive
$(".UpdatePortfolioWebStatus").click(function(){
    var status =$(this).text();
    var portfolio_id =$(this).attr("portfolio_id");
    
    $.ajax({
        type:'post',
        url:'/MobileStatusUpdate',
        data:{status:status,portfolio_id:portfolio_id},
        success:function(resp){
        //    alert(resp['status']);
        //    alert(resp['section_id']);
           if(resp['status'] == 0){
               $("#portfolio-"+portfolio_id).html(" <a class='UpdatePortfolioWebStatus' href='javascript:void(0)'>InActive</a>");
           }else if(resp['status'] == 1){
            $("#portfolio-"+portfolio_id).html(" <a class='UpdatePortfolioWebStatus' href='javascript:void(0)'>Active</a>");

           }
        },error:function(){
            alert("Error");
        } 
    });
});

//Update Portfoiio  UI Status Active and InActive
$(".UpdatePortfolioUiStatus").click(function(){
    var status =$(this).text();
    var portfolio_id =$(this).attr("portfolio_id");
    
    $.ajax({
        type:'post',
        url:'/UiStatusUpdate',
        data:{status:status,portfolio_id:portfolio_id},
        success:function(resp){
        //    alert(resp['status']);
        //    alert(resp['section_id']);
           if(resp['status'] == 0){
               $("#portfolio-"+portfolio_id).html(" <a class='UpdatePortfolioUiStatus' href='javascript:void(0)'>InActive</a>");
           }else if(resp['status'] == 1){
            $("#portfolio-"+portfolio_id).html(" <a class='UpdatePortfolioUiStatus' href='javascript:void(0)'>Active</a>");

           }
        },error:function(){
            alert("Error");
        } 
    });
});


//Update client Status Active and InActive
$(".UpdateClientStatus").click(function(){
    var status =$(this).text();
    var portfolio_id =$(this).attr("portfolio_id");
    
    $.ajax({
        type:'post',
        url:'/changeClientstatus',
        data:{status:status,portfolio_id:portfolio_id},
        success:function(resp){
        //    alert(resp['status']);
        //    alert(resp['section_id']);
           if(resp['status'] == 0){
               $("#portfolio-"+portfolio_id).html(" <a class='UpdateClientStatus' href='javascript:void(0)'>InActive</a>");
           }else if(resp['status'] == 1){
            $("#portfolio-"+portfolio_id).html(" <a class='UpdateClientStatus' href='javascript:void(0)'>Active</a>");

           }
        },error:function(){
            alert("Error");
        } 
    });
});



//Update Testimonials Status Active and InActive
$(".UpdateTestiminialsStatus").click(function(){
    var status =$(this).text();
    var portfolio_id =$(this).attr("portfolio_id");
    
    $.ajax({
        type:'post',
        url:'/changetestmonialstatus',
        data:{status:status,portfolio_id:portfolio_id},
        success:function(resp){
        //    alert(resp['status']);
        //    alert(resp['section_id']);
           if(resp['status'] == 0){
               $("#portfolio-"+portfolio_id).html(" <a class='UpdateTestiminialsStatus' href='javascript:void(0)'>InActive</a>");
           }else if(resp['status'] == 1){
            $("#portfolio-"+portfolio_id).html(" <a class='UpdateTestiminialsStatus' href='javascript:void(0)'>Active</a>");

           }
        },error:function(){
            alert("Error");
        } 
    });
});


//Update Team Status Active and InActive
$(".UpdateTeamStatus").click(function(){
    var status =$(this).text();
    var portfolio_id =$(this).attr("portfolio_id");
    
    $.ajax({
        type:'post',
        url:'/changeteamstatus',
        data:{status:status,portfolio_id:portfolio_id},
        success:function(resp){
        //    alert(resp['status']);
        //    alert(resp['section_id']);
           if(resp['status'] == 0){
               $("#portfolio-"+portfolio_id).html(" <a class='UpdateTeamStatus' href='javascript:void(0)'>InActive</a>");
           }else if(resp['status'] == 1){
            $("#portfolio-"+portfolio_id).html(" <a class='UpdateTeamStatus' href='javascript:void(0)'>Active</a>");

           }
        },error:function(){
            alert("Error");
        } 
    });
});


//delete portfolio
$(".confirmDelete").click(function(){
    var record = $(this).attr("record");
    var recordid= $(this).attr("recordid");
  Swal.fire({
     title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!'
}).then((result) => {
if (result.value) {
 Swal.fire(
   'Deleted!',
   'Your file has been deleted.',
     'success'
)
 window.location.href="/Delete-"+record+"/"+recordid;  
}
})
});