<div class="main-content" id="panel">
    @include('admin.layout.header')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">New Post</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Posts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">New Post</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="#" class="btn btn-sm btn-neutral">Publish</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{ url('admin/save-post') }}" method="post">
                @csrf
                <h6 class="heading-small text-muted mb-4">Meta Tags information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Title</label>
                        <input type="text" id="Title" name="title" class="form-control" placeholder="Title" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Keywords</label>
                        <input type="text" id="Keywords" name="keywords" class="form-control" placeholder="Javascript, php">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Description</label>
                        <textarea id="description" name="description" class="form-control" placeholder="A few words about your post ..."></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Image URL</label>
                        <input type="url" id="url" name="url" class="form-control" placeholder="Image URL" >
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Post</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Post URL</label>
                    <input type="text" id="post-url" name="posturl" class="form-control" placeholder="Post   URL">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea id="newpost" name="content" class="form-control" placeholder="A few words about you ...">Write Your Story</textarea>
                  </div>
                </div>
                <div class="col-4">
                  <input type="submit" class="btn btn-sm btn-primary" value="Publish" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layout.footer')
    </div>
  </div>
  <script>
    CKEDITOR.config.extraAllowedContent = 'script[src]';
    CKEDITOR.replace( 'newpost' );
  </script>