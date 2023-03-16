<section class="music header" id="header">
    <div class="music-content">
        <div class="music-bg bg bg-shadow-top"
            style="background-image: url('{{ asset("storage/portfolio/$header->background") }}')">
            <div class="no-phone text-center w-100" data-tilt data-tilt-max="3" data-tilt-perspective="500"
                data-tilt-speed="400">
                <div class="img-height">
                    <img class="img-fluid souka" src="{{ asset("storage/portfolio/$header->picture") }}">
                </div>
            </div>
            <div class="phone text-center w-100">
                <div class="img-height">
                    <img class="img-fluid souka" src="{{ asset("storage/portfolio/$header->picture") }}">
                </div>
            </div>
        </div>
    </div>
    <div class="right-side">
        <div class="circle">
            <img alt="aero" class="img-fluid" src="{{ asset('assets/images/music/icons/aero.png') }}">
        </div>
        <h1>2022 <span>23</span></h1>
    </div>
    <div class="left-side">
        <h6 class="follow-text text-white">follow me</h6>
        <ul>
            @isset($user->social)
                @foreach (json_decode($user->social) as $key => $value)
                    <li><a class="social_icon" href="https://www.{{ $key }}.com/{{ $value }}/"
                            target="_blank">
                            <i class="fa fa-{{ $key }}"></i>
                        </a>
                    </li>
                @endforeach
            @endisset
        </ul>
    </div>
    {{-- <div class="container music-container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="play-bg d-flex">
                    <div class="song-text-container h-100">
                        <div class="d-flex h-100">
                            <div class="center-img">
                                <img alt="" class="img-fluid" src="../assets/images/music/icons/girl.png">
                            </div>
                            <div class="song-text">
                                <h5 class="text-white song-head">Latest Song</h5>
                                <h6 class="text-white song-sub-head">Zrial doj</h6>
                            </div>
                        </div>
                    </div>
                    <div class="play-setting m-auto">
                        <div class="jp-jplayer" id="jquery_jplayer_1"></div>
                        <div aria-label="media player" class="jp-audio" id="jp_container_1" role="application">
                            <div class="jp-type-playlist">
                                <div class="jp-gui jp-interface p-0 d-flex">
                                    <div class="jp-controls">
                                        <button class="jp-play m-r-15" role="button" tabindex="0"></button>
                                    </div>
                                    <a onclick="sidesection()"><i aria-hidden="true" class="fa fa-ellipsis-v"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
