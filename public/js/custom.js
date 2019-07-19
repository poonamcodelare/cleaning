$(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});


                function myfun() {

                       $(document).ready(function(){
                        $(".tabs0 .nav-item .nav-link active").attr('class', 'active tabs0');
                        $(".tab-content1").attr('class', 'active tab-content1');
                       }); 

                
                $(document).ready(function(){

                    var date = new Date();

                    
                    var d=new Date();
                    var nexdate = date.setDate(d.getDate() + 1);
                    var nextdate = new Date(nexdate).toDateString("yyyy-MM-dd");


                    var days = 6;

                    for(var i=0; i<=days; i++)
                    {
                      var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                      var newte = weekday[date.getDay()];

                      var res = newte.substring(0, 3);

                      var nexdate = date.setDate(d.getDate() + i);
                      var nextdate = new Date(nexdate).toDateString("yyyy-MM-dd");
                      var nextdatee = nextdate.substring(0,3);
                      var nextdatfd = nextdate.substring(3, 10);
                      $('#left_bar').append('<li class="nav-item" style="margin-left: -7px;"><a class="nav-link active" href="" role="tab" data-toggle="tab"><p class="dateday">'+ nextdatee +'</p><p class="dateyear">'+ nextdatfd +'</p></a></li>');
                     
                    }

                 
                });

        // Select Pickup time

                var monday = '<h3 style="font-family:Times New Roman;">Morning</h3><input type="radio" name="check_in" value="9 AM - 10 AM"> 9 AM - 10 AM <br><br><input type="radio" name="check_in" value="10 AM - 11 AM"> 10 AM - 11 AM <br><br><input type="radio" name="check_in" value="11 AM - 1 PM"> 11 AM - 1 PM<h3 style="margin-top:23px;font-family:Times New Roman;">Afternoon</h3><input type="radio" name="check_in" value="1 PM - 3 PM"> 1 PM - 3 PM <br><br><input type="radio" name="check_in" value="3 PM - 5 PM"> 3 PM - 5 PM <h3 style="margin-top:23px;font-family:Times New Roman;">Evening</h3><input type="radio" name="check_in" value="7 PM - 9 PM"> 7 PM - 9 PM <br><br><input type="radio" name="check_in" value="8 PM - 9 PM"> 8 PM - 9 PM<br><br><input type="radio" name="check_in" value="5 PM - 7 PM"> 5 PM - 7 PM <br><br>';

               document.getElementById('monday').innerHTML = monday;
       
                // End PickupDate 


                // Select a Suitable Delivery Time

                var monday = '<h3 style="font-family:Times New Roman;">Morning</h3><input type="radio" name="check_out" value="9 AM - 10 AM"> 9 AM - 10 AM <br><br><input type="radio" name="check_out" value="10 AM - 11 AM"> 10 AM - 11 AM <br><br><input type="radio" name="check_out" value="11 AM - 1 PM"> 11 AM - 1 PM<h3 style="margin-top:23px;font-family:Times New Roman;">Afternoon</h3><input type="radio" name="check_out" value="1 PM - 3 PM"> 1 PM - 3 PM <br><br><input type="radio" name="check_out" value="3 PM - 5 PM"> 3 PM - 5 PM <h3 style="margin-top:23px;font-family:Times New Roman;">Evening</h3><input type="radio" name="check_out" value="7 PM - 9 PM"> 7 PM - 9 PM <br><br><input type="radio" name="check_out" value="8 PM - 9 PM"> 8 PM - 9 PM<br><br><input type="radio" name="check_out" value="5 PM - 7 PM"> 5 PM - 7 PM <br><br>';

               document.getElementById('mon').innerHTML = monday;

                // End DropDate    

           $(document).ready(function () {    

             $("#date_pickup_section__left").click(function(){
               var check_in_time = $("input[name='check_in']:checked").val();
     
           // console.log(check_in_time);
            });

             $('#date_pickup_section__right #mon').click(function(){
                var check_out_date = $("input[name='check_out']:checked").val();

                //console.log(check_out_date);
             });                 
            
          });

                
}
  