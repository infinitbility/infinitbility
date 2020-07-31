<!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      @foreach($posts as $post)
      <div class="post-preview card card-body">
        <a href="{{ url('post/'.$post->url) }}">
          <img src="{{ $post->image }}" width="100%" />
          <h2 class="post-title">
            {{ $post->title }}
          </h2>
          <h3 class="post-subtitle">
            {{ $post->description }}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">{{ $post->first_name.' '.$post->last_name }}</a>
          on {{ date('M d, Y', strtotime($post->created_at))}}</p>
      </div>
      <hr>
      @endforeach
        <!-- Pager -->
        <div class="clearfix">
        {{ $posts->links() }}
        </div>
      </div>
      <div class="col-lg-4 col-md-2 mx-auto">
      @foreach($sponsers as $sponser)
      <div class="post-preview card card-body">
        <a href="{{ $sponser->url }}">
          <img src="{{ $sponser->image }}" width="100%" />
          <h2 class="post-title">
          {{ $sponser->heading }}
          </h2>
          <h3 class="post-subtitle">
          {{ $sponser->sub_heading }}
          </h3>
        </a>
        <p class="post-meta">{{ $sponser->description }}</p>
      </div>
      <hr>
      @endforeach
      </div>
    </div>
  </div>
  