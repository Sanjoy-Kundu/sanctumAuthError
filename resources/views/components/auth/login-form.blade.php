<div class="container">
    <div class="card w-75 mx-auto p-4 mt-5">
        <h2 class="text-center">Wellcome to your Login Page</h2>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" id="email" class="form-control" placeholder="Enter Your Information">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter Your Information">
        </div>
        <div class="mb-3">
            <button onclick="onLogin()" class="btn btn-success">Login</button>
        </div>
        <hr>
        <div>
            <p>Create a new accout. please <a class="text-decoration-none" href="{{url('/userRegistration')}}">Sign Up</a> here</p>
            <p><a href="#" class="text-decoration-none">Forget password</a></p>
        </div>
    </div>
</div>



<script>
    async function  onLogin() {
        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;
        
        let logObj = {
            email: email,
            password : password
        }
   
        if(email.length == 0 || password.length == 0){
            alert("errro");
        }
        showLoader();
        let res = await axios.post("/user-login", logObj);
        hideLoader();
        
        if(res.data["status"] == "success"){
            //console.log(res.data['token']);
            setToken(res.data['token'])
            alert("login successfully");
            window.location.href = "/userProfile"
        }else{
            alert("login fail");
        }
    //     showLoader()
    //    let res = await axios.post("/user-registration", regiObje)
    //    hideLoader();
    //    if(res.data["status"] == "success" && res.status == 200){
    //     alert("registration successfull");
    //    }else{
    //     alert(res.data["message"]);
    //    }
    }
</script>