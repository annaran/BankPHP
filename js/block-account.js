function blockAccount(accountId) {
  $.ajax({
    type: "POST", //request type
    url : 'apis/api-block-account',
    data :  {
      "newStatus" : 2,
      "accountId" : accountId
    
    },
    dataType:'JSON'
  }).
  done( function(jData){
    if(jData.status == -1){
 
      console.log(jData)
      swal({title:"FAIL", text: jData.message,   icon: "warning", }); 
    }

    if(jData.status == 0){
     
      console.log(jData)
      swal({title:"INFO", text: jData.message,   icon: "info", });
    } // end of 0 case

    if(jData.status == 1){
      $("#"+accountId).find(".statusVal")[0].innerHTML ="2";   
      $("#"+accountId).remove() 
      console.log(jData)
      swal({title:"SUCCESS", text: jData.message,   icon: "success", });     
    return
      
    }   
  }).
  fail( function(){
    console.log('FATAL ERROR')
  })


  return false
}


/* function activateAccount(clientId,accountId) {
  $.ajax({
    type: "POST", //request type
    url : 'apis/api-update-account-status',
    data :  {
      "newStatus" : 1,
      "accountId" : accountId,
      "clientId" : clientId
    },
    success:function(result){
     console.log(result);
   }
 });
} */


/* function myFunction() {
  setInterval(function(){ location.reload(true); }, 3000);
}
 */
//myFunction()