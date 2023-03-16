<section class="portfolio-metro bg p-b-0" style="background: url('{{ asset("storage/portfolio/$header->background") }}')">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 text-center">
                    <div class="portfolio_section">
                        <div>
                            <h1 class="breadcrumb-text">{{$header->title}} 
                                {{-- <span class="bold-text color-animated">Art.</span> --}}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <img alt="" class="img-fluid man" src="{{ asset("storage/portfolio/$header->picture") }}">
                </div>
            </div>
        </div>
    </div>
</section>
