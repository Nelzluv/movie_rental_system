var date_rented = document.querySelector("#date_rented");
var return_date = document.querySelector("#return_date");
const days = 3;

function giveDate(){
    //startdate = "20-03-2014";
    var new_date = moment(date_rented.value, "YYYY-MM-DD");
    new_date_passed = new_date.add(3, 'days');
    var day = new_date.format('DD');
    var month = new_date.format('MM');
    var year = new_date.format('YYYY');

    return_date.value = year + '-' + month + '-' + day;
    //alert(new_date_passed);
    //return_date.value = new_date_passed;
    //alert(new_date);
        
}


/*
 //var newD = new Date(dateObject.getTime() + 3);
    var newD = this.setDate(this.getDate() + days) && this;
    return_date.value = newD; //timeObject.setDate(timeObject.getDate() + 3);
    return return_date;
    return_date.value = date_rented.setDate(date_rented.getDate() + days);

    var d = date.getDate();
    alert(d);
    */

