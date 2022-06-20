    // function to calculate total price of product according to quantity provided by user
    function myFunction() {
        var quantity = document.getElementById("quantity1").value;
        var price = document.getElementById("price1").value;
        document.getElementById("totalPrice1").innerHTML = quantity * price;
         
    }
    // function to calculate total price of product according to quantity provided by user
    function sumFunction() {
        var quantity = document.getElementById("quantity2").value;
        var price = document.getElementById("price2").value;
        document.getElementById("totalPrice2").innerHTML = quantity * price;
         
    }
    // check if form fields are filled or not
    function validateForm(event) 
{ 
    event.preventDefault();
    let form = document.forms['userform'];
    let fname = document.getElementById("fname").value;
    let lname= document.getElementById("lname").value;
    let uname = document.getElementById("uname").value;
    let pass = document.getElementById("pass").value;
    let mail = document.getElementById("mail").value;
    let phone = document.getElementById("phone").value;
    let dob = document.getElementById("dob").value;
    let errormsg='';
    if(fname ==''){
        errormsg += 'Plese enter your First Name \n';
    }
    if(lname ==''){
        errormsg += 'Plese enter your Last Name \n';
    }
    if(uname ==''){
        errormsg += 'Plese enter a Username \n';
    }
    if(pass ==''){
        errormsg += 'Plese enter a Password \n';
    }
    if(mail ==''){
        errormsg += 'Plese enter a Mail ID \n';
    }
    if(phone ==''){
        errormsg += 'Plese enter a Phone \n';
    }
    if(dob ==''){
        errormsg += 'Plese enter a Date of Birth \n';
    }
    if(errormsg==""){
        form.submit();
    }
    else{
        alert(errormsg)
    }
}
