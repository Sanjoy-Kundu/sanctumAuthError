<div class="container">
    <div class="card w-75 mx-auto p-4 mt-5">
        <h2 class="text-center">Wellcome to your Registration Page</h2>
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" id="name" class="form-control" placeholder="Enter Your Information">
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" id="email" class="form-control" placeholder="Enter Your Information">
        </div>
        <div class="mb-3">
            <label for="">Mobile</label>
            <input type="tel" id="mobile" class="form-control" placeholder="Enter Your Information">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter Your Information">
        </div>
        <div class="mb-3">
            <button onclick="onRegistration()" class="btn btn-success">Registration</button>
        </div>
        <hr>
        <div>
            <p>ALready Have an Account. please <a class="text-decoration-none" href="{{url('/userLogin')}}">Sign In</a> here</p>
            <p><a href="#" class="text-decoration-none">Forget password</a></p>
        </div>
    </div>
</div>



<script>
    async function  onRegistration() {
        let regiObje = {
            name: document.getElementById("name").value,
            email: document.getElementById("email").value,
            mobile: document.getElementById("mobile").value,
            password: document.getElementById("password").value,
        }
        showLoader()
       let res = await axios.post("/user-registration", regiObje)
       hideLoader();
       if(res.data["status"] == "success" && res.status == 200){
        //alert("registration successfull");
        window.location.href ="/userLogin"
       }else{
        alert(res.data["message"]);
       }
    }
</script>