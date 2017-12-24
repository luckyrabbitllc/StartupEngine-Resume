<body class="index-page sidebar-collapse">
<div class="wrapper">
    <div class="section">
        <div class="container">
            <div class="card card-resume">
                <div class="content-center" style="margin-top: 25px;">
                    <div class="photo-container">
                        <img src="{{ $page->content()->profile->image }}" alt="" class="rounded-circle img-raised">
                    </div>
                    <h3 class="title">{{ $page->content()->profile->name }}</h3>
                    <p class="jobtitle">{{ $page->content()->profile->title }}</p>
                </div>
                <h5 class="description">{{ $page->content()->profile->bio }}</h5>
                <div class="col-md-12">
                    <div class="row">
                        @if(isset($page->content()->experience->content))
                        <div class="col-md-6">
                            <div class="card card-simple" style="box-shadow: none;">
                                <div class="card-body">
                                    <h5 class="description">{{ $page->content()->experience->headline }}</h5>
                                    {!!  $post->markdown($post->content()->experience->content) !!}
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(isset($page->content()->skills->content))
                        <div class="col-md-6">
                            <div class="card card-simple" style="box-shadow: none;">
                                <div class="card-body">
                                    <h5 class="description">{{ $page->content()->skills->headline }}</h5>
                                </div>
                                {!!  $post->markdown($post->content()->skills->content) !!}
                            </div>
                        </div>
                        @endif
                        @if(isset($page->content()->awards->content))
                        <div class="col-md-6">
                            <div class="card card-simple" style="box-shadow: none;">
                                <div class="card-body">
                                    <h5 class="description">{{ $page->content()->awards->headline }}</h5>
                                    {!!  $post->markdown($post->content()->awards->content) !!}
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(isset($page->content()->projects->content))
                        <div class="col-md-6">
                            <div class="card card-simple" style="box-shadow: none;">
                                <div class="card-body">
                                    <h5 class="description">{{ $page->content()->projects->headline }}</h5>
                                    {!!  $post->markdown($post->content()->projects->content) !!}
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>