
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">{{config("app.name","Job Portal")}}</h5>
            <nav class="my-2 my-md-0 mr-md-3">
              <a class="p-2 text-white" href="/">Home</a>
              <a class="p-2 text-white" href="/about">About</a>
              <a class="p-2 text-white" href="/services">Services</a>
              <a class="p-2 text-white" href="/posts">Jobs</a> 
              <a class="p-2 text-white" href="/posts/create">Create-Job</a> 
              
            </nav>
            <a class="btn btn-outline-warning" href="/signup">Sign up</a>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>