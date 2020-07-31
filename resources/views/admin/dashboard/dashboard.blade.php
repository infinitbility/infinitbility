<div class="main-content" id="panel">
    @include('admin.layout.header')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            @if(session()->has('success'))
                <div class="col-lg-12 col-12 alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-text"><strong>Success!</strong> {{ session()->get('success') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session()->has('danger'))
                <div class="col-lg-12 col-12 alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-text"><strong>Danger!</strong> {{ session()->get('danger') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Posts</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{ url('admin/new-posts') }}" class="btn btn-sm btn-neutral">New Story</a>
              <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
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
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Your Story</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Title</th>
                    <th scope="col" class="sort" data-sort="budget">Views</th>
                    <th scope="col" class="sort" data-sort="budget">Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($posts as $post)
                    <tr>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->views }}</td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="{{ url('admin/update-post/'.encrypt($post->id)) }}">Edit</a>
                            <!-- <a class="dropdown-item" href="#">Delete</a> -->
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layout.footer')
    </div>
  </div>