<body class="index-page sidebar-collapse">
<div class="wrapper">
    <div class="section section-resume">
        <div class="container">
            <div class="card card-resume">
                <div class="content-center">
                    @if(isset($page->content()->profile->image))
                        <div class="photo-container" style="background-image:url('{{ $page->content()->profile->image }}');">
                        </div>
                    @endif
                    @if(isset($page->content()->profile->name))
                        <h3 class="title name">{{ $page->content()->profile->name }}</h3>
                    @endif
                    @if(isset($page->content()->profile->title))
                        <p class="jobtitle">{{ $page->markdown($page->content()->profile->title) }}</p>
                    @endif
                </div>
                @if(isset($page->content()->profile->bio))
                    <h5 class="description" id="bio">{{ $page->markdown($page->content()->profile->bio) }}</h5>
                @endif
                <div class="col-md-12">
                    <div class="row">
                        @if(isset($page->content()->experience->content))
                        <div class="col-md-6">
                            <div class="card card-simple" style="box-shadow: none;">
                                <div class="card-body">
                                    @if(isset($page->content()->experience->headline))
                                        <h5 class="description">{!! $page->content()->experience->headline !!}</h5>
                                    @endif
                                    @if(isset($page->content()->experience->content))
                                        {!!  $page->markdown($page->content()->experience->content) !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(isset($page->content()->skills->content))
                        <div class="col-md-6">
                            <div class="card card-simple" style="box-shadow: none;">
                                <div class="card-body">
                                @if(isset($page->content()->skills->headline))
                                    <h5 class="description">{!! $page->content()->skills->headline !!}</h5>
                                @endif
                                @if(isset($page->content()->skills->content))
                                    {!!  $page->markdown($page->content()->skills->content) !!}
                                @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(isset($page->content()->awards->content))
                        <div class="col-md-6">
                            <div class="card card-simple" style="box-shadow: none;">
                                <div class="card-body">
                                    @if(isset($page->content()->awards->headline))
                                        <h5 class="description">{!! $page->content()->awards->headline !!}</h5>
                                    @endif
                                    @if(isset($page->content()->awards->content))
                                        {!!  $page->markdown($page->content()->awards->content) !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(isset($page->content()->projects->content))
                        <div class="col-md-6">
                            <div class="card card-simple" style="box-shadow: none;">
                                <div class="card-body">
                                    @if(isset($page->content()->projects->headline))
                                        <h5 class="description">{!! $page->content()->projects->headline !!}</h5>
                                    @endif
                                    @if(isset($page->content()->projects->content))
                                        {!!  $page->markdown($page->content()->projects->content) !!}
                                    @endif
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