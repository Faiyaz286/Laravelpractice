@extends('front')

@section('content')
    <section id="home-slide">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="slide-image" id="slide-image-1"></div>
                    <div class="carousel-caption">
                        Buy Car Online
                    </div>
                </div>
                <div class="item">
                    <div class="slide-image" id="slide-image-2"></div>
                    <div class="carousel-caption">
                        Buy Cycle Online
                    </div>
                </div>
                <div class="item">
                    <div class="slide-image" id="slide-image-3"></div>
                    <div class="carousel-caption">
                        Buy grocery Online
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section id="home-product-1" class="home-product-left border-top green-shadow fc-white">
        <div class="row m-0">
            <div class="col-md-6 p-0">
                <div class="product-image-wrapper"
                    style="background-image: url({{ asset('assets/images/products/originals/bucket.jpg') }});">
                </div>
            </div>
            <div class="col-md-6">
                <h2>Green Coconut</h2>
                <h3>Sku: AB-SL006-SPEE</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div class="action-form-wrapper">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                            <div class="input-group">
                                <div class="input-group-addon">-</div>
                                <input type="number" class="form-control" value="1" placeholder="No">
                                <div class="input-group-addon">+</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning">Add to Cart <i class="fa fa-shopping-cart"
                                aria-hidden="true"></i></button>
                        <a href="#" class="btn btn-success"> Product Details</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="home-product-2" class="home-product-right border-top blue-shadow">
        <div class="row m-0">
            <div class="col-md-6">
                <h2>Green Coconut</h2>
                <h3>Sku: AB-SL006-SPEE</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div class="action-form-wrapper">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                            <div class="input-group">
                                <div class="input-group-addon">-</div>
                                <input type="number" class="form-control" value="1" placeholder="No">
                                <div class="input-group-addon">+</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning">Add to Cart <i class="fa fa-shopping-cart"
                                aria-hidden="true"></i></button>
                        <a href="#" class="btn btn-success"> Product Details</a>
                    </form>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="product-image-wrapper"
                    style="background-image: url({{ asset('assets/images/products/originals/flower.jpg') }});">
                </div>
            </div>
        </div>
    </section>
    <section id=" home-product-3" class="home-product-left">

    </section>
    <section id="home-product-4" class="home-product-right">

    </section>
@endsection
