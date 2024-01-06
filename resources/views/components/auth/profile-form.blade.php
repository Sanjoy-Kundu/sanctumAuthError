<div class="container">
    <div class="card w-75 mx-auto p-4 mt-5">
        <h2 class="text-center">Wellcome to your Profile Page</h2>
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
        {{-- <div class="mb-3">
            <label for="">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter Your Information">
        </div> --}}
        <div class="mb-3">
            <button onclick="onUpdate()" class="btn btn-success">Update</button>
        </div>
        <div class="mb-5">
            <button class="btn btn-danger"><a href="{{url("/logout")}}">Logut</a></button>
        </div>
        <hr>
        {{-- <div>
            <p>ALready Have an Account. please <a class="text-decoration-none" href="{{url('/userLogin')}}">Sign In</a> here</p>
            <p><a href="#" class="text-decoration-none">Forget password</a></p>
        </div> --}}
    </div>
</div>


<script>

function unauthorized(code){
        if(code===401){
            localStorage.clear();
            sessionStorage.clear();
           window.location.href="/logout"
        }
    }



getProfile();
    async function getProfile(){
        try{
            showLoader();
            let res= await axios.get("/user-profile", HeaderToken());
            hideLoader();
            document.getElementById('email').value=res.data['email'];
            document.getElementById('mobile').value=res.data['mobile']
            document.getElementById('name').value=res.data['name']

        }catch (e) {
           unauthorized(e)
        }
    }
































//     getProfile();
//    async function getProfile() {

//         try{
//             //api calling hobe 
//             showLoader()
//             let res = await axios.get("/user-profile",HeaderToken()); // form  config.js 
//             hideLoader()
//             document.getElementById("name").value = res.data["name"];
//             document.getElementById("email").value = res.data["email"];
//             document.getElementById("mobile").value = res.data["mobile"];
//             console.log(res);
//         } 
//         catch(e){
//            // unauthorized(e.response.status);
//            //unauthorization(e.response.status); 
//            alert("error");
//         }


//     }



















</script>