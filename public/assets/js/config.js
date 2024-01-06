//login theke token set 
function setToken(token){   //token parameter pathbo login-from theke
    localStorage.setItem("token", `Bearer ${token}`)
}


function getToken(token){
    return localStorage.getItem(token);
}



// ai headerToken ke ami profile e niye jabo 
    function HeaderToken(){
        let token=getToken();
        return  {
             headers: {
                 Authorization:token
             }
         }


    function unauthorized(code){
        if(code===401){
            localStorage.clear();
            sessionStorage.clear();
           window.location.href="/logout"
        }
    }



     }



