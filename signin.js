function validate(){
    e=1
    var name_form= /^[a-zA-Z]+$/;
    fname=document.getElementById("fname").value
    username=document.getElementById("lname").value
    pass1=document.getElementById("password1").value
    pass2=document.getElementById("password2").value
    if(fname==""){
        document.getElementById("fname_span").innerHTML="enter first name"
        document.getElementById("fname_span").style.color="red"
        document.getElementById("fname").style.border="5px solid red"
       
        // return false
        e=0
    
        
    }
    
  
    else if(fname.length<3){
        document.getElementById("fname_span").innerHTML="enter atleast 3 character"
        document.getElementById("fname_span").style.color="red"
        document.getElementById("fname").style.border="5px solid red"
        e=0

        
    }
 
    else{
        document.getElementById("fname").style.border="5px solid green"
        document.getElementById("fname_span").innerHTML=""
        e=1
    }


    if(username==""){
        document.getElementById("lname_span").innerHTML="enter first name"
        document.getElementById("lname_span").style.color="red"
        document.getElementById("lname").style.border="5px solid red"
       
        // return false
        e=0
    
        
    }
    
  
    else if(fname.length<3){
        document.getElementById("lname_span").innerHTML="enter atleast 3 character"
        document.getElementById("lname_span").style.color="red"
        document.getElementById("lname").style.border="5px solid red"
        e=0

    }
    else{
        document.getElementById("lname").style.border="5px solid green"
        document.getElementById("lname_span").innerHTML=""
        e=1
    }

    if(pass1==""){
        document.getElementById("passwordsp1").innerHTML="enter a password"
        document.getElementById("passwordsp1").style.color="red"
        document.getElementById("password1").style.border="5px solid red"
        e=0

    }
   
   else if(pass1.length<8){
        document.getElementById("passwordsp1").innerHTML="atleast 8 character"
        document.getElementById("passwordsp1").style.color="red"
        document.getElementById("password1").style.border="5px solid red"
        e=0

    }
    else{
        document.getElementById("passwordsp1").innerHTML=""
        document.getElementById("password1").style.border="5px solid green"
        e=1
    }
    if(pass2==""){
        document.getElementById("passwordsp2").innerHTML="enter a password"
        document.getElementById("passwordsp2").style.color="red"
        document.getElementById("password2").style.border="5px solid red"
        e=0

       }
       else{
        document.getElementById("passwordsp2").innerHTML=""
        // document.getElementById("password2").style.border="5px solid green"
     
       

            if(pass1==pass2){
                document.getElementById("passwordsp2").innerHTML=""
                document.getElementById("password2").style.border="5px solid green"
                document.getElementById("password1").style.border="5px solid green"
                e=1
         
                
           
               
            
        
            }
            else{
        
                document.getElementById("passwordsp2").innerHTML="password are not equal"
                document.getElementById("password2").style.border="5px solid red"
                e=0
            }
      
    }


    
  
    if(e==0){
        return false
    }
}