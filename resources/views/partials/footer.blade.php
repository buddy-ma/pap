<!-- START FOOTER -->
<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Villes</h3>
                        <div class="nav-footer">
                            <ul>
                                @foreach ($villes as $ville)
                                    <li><a href="/ville/{{ $ville->id }}">{{ $ville->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Conseils</h3>
                        <div class="nav-footer">
                            <ul>
                                @foreach ($all_conseils as $conseil)
                                    <li><a href="/blog/{{ $conseil->id }}">{{ $conseil->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Decouvrez le maroc</h3>
                        <div class="nav-footer">
                            <ul>
                                @foreach ($all_dm as $dm)
                                    <li><a href="/blog/{{ $dm->id }}">{{ $dm->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Decouvrez le maroc</h3>
                        <div class="nav-footer">
                            <ul>
                                @foreach ($all_dm as $dm)
                                    <li><a href="/blog/{{ $dm->id }}">{{ $dm->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>2023 © Copyright - All Rights Reserved.</p>
            <ul class="netsocials">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
