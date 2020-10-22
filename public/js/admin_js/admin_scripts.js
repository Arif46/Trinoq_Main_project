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
 window.location.href="/Portfoliolist-"+record+"/"+recordid;  
}
})
});