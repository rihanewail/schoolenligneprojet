@extends('layouts.app2')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>resources de mon demain</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    resources de mon demain
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="product-wrap">

                <h4 class="mb-20">Resources</h4>
                <div class="product-list">
                    <ul class="row">

                        <li class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-box">
                                <div class="producct-img">
                                    <img src="vendors/images/product-img3.jpg" alt="">
                                </div>
                                <div class="product-caption">
                                    <h4><a href="#">Contrast Lace-Up Sneakers</a></h4>
                                    <div class="price">
                                        <ins>$80</ins>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
