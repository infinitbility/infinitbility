<!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
        <?php echo $post->content ?>
        <p class="post-meta">Posted by
          <a href="#">{{ $post->first_name.' '.$post->last_name }}</a>
          on {{ date('M d, Y', strtotime($post->created_at))}}</p>
      </div>
      </div>
      <div class="col-lg-4 col-md-2 mx-auto">
      <div class="post-preview card card-body">
        <a href="#">
          <img src="{{ $post->pic }}" width="100%" />
          <h2 class="post-title">
          {{ $post->first_name.' '.$post->last_name }}
          </h2>
        </a>
        <p class="post-meta">{{ $post->bio }}</p>
      </div>
      <hr>
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
    <hr>
    <div>
      <h3>Releted Post</h3>
    </div>
    <div class="row">
    @foreach($posts as $post)
      <div class="col-lg-4 col-md-12 mx-auto">
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
      </div>
    @endforeach
    </div>
  </div>