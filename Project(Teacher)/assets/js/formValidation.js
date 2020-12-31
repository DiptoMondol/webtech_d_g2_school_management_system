"use strict"



function NameValidation()
{
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty name field ';		
	}
	else if(data.length <3){
		document.getElementById('head').innerHTML = 'Name required three words';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	

}

function IdValidation(){
	let data= document.getElementById('id').value;
	if(data >=0 || data <=9){
	
	document.getElementById('head').innerHTML = data;
}
else{
	document.getElementById('head').innerHTML = 'Id is invalid !';
}


}

function EmailValidation()
{
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty Name field ';		
	}
	else if(data.length <3 ){
		document.getElementById('head').innerHTML = 'Email is invalid !';	
	}
	else if( data.includes("@gmail.com")){
		document.getElementById('head').innerHTML = data;
		     }
	else if( data.includes("@yahoo.com")){
		document.getElementById('head').innerHTML = data;
		     }	
	else if( data.includes("@.edu")){
		document.getElementById('head').innerHTML = data;
		     }	          
      else{
		document.getElementById('head').innerHTML = 'Email is invalid !';
	}

}
/*
function GenderValidation()
{

 let male = document.getElementById('male');
 let female = document.getElementById('female');
 let others = document.getElementById('others');

     if(male.checked ==true ){
		document.getElementById('head').innerHTML = male.value;		
	}
    else if(female.checked ==true){
		document.getElementById('head').innerHTML = female.value;		
	}
	
     else{
		document.getElementById('head').innerHTML = others.value;
	}

}

function NumberValidation(){
	
	let data= document.getElementById('phone').value;
	
	if(data.length==11 && data >=0 || data <=9){
		document.getElementById('head').innerHTML = data;
	}
	else{
		document.getElementById('head').innerHTML = 'Phone no is invalid !';
	}
	
}

/*
