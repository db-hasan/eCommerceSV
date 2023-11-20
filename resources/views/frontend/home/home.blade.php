@extends('frontend/layouts/layout')

@section('content')
<div class="home">
    <div class="banner">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/banner.webp') }}" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/banner1.webp') }}" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/banner1.webp') }}" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</div>
    
{{-- Top Categories --}}
<div class="content py-2">
    <div class="lavel">
        <div class="d-flex justify-content-between">
            <div class="lavel_content">
                <span class="">Top Categories</span>
            </div>
            <div class="seeall">
                <a href=""><span>See all categories</span></a>
            </div>
        </div>
    </div>
    <div class="">
        <div class="top_cat d-flex justify-content-between">
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/Laptop.svg" alt="">
                </a>
                <a href="">Laptop</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/Processor.svg" alt="">
                </a>
                <a href="">Processor</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/all-in-one.svg" alt="">
                </a>
                <a href="">AIO PC</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/speaker.svg" alt="">
                </a>
                <a href="">Speaker</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/Monitor.svg" alt="">
                </a>
                <a href="">Monitor</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/software.svg" alt="">
                </a>
                <a href="">Software</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/gaming.svg" alt="">
                </a>
                <a href="">Gaming</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/printer.svg" alt="">
                </a>
                <a href="">Printer</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/GPU.svg" alt="">
                </a>
                <a href="">GPU</a>
            </li>
            <li class="d-flex flex-column align-items-center">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/category-icon/svg/camera.svg" alt="">
                </a>
                <a href="">Camera</a>
            </li>
        </div>
    </div>
</div>

{{-- Desktop start --}}
<div class="content py-2 bg-light">
    <div class="lavel">
        <div class="lavel_content_sm">
            <span class="">Desktop</span>
        </div>
    </div>
    <div class="row g-2 pt-3">
        @foreach ($indexsubcategory as $item)
        <div class="col">
            <div class="card h-100">
                <img src="/images/{{$item->product_img}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="{{url ('singelcategory',$item->category_id)}}">{{$item->product_name}}</a></h5>
                    <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                    <p class="card-text price">TK {{$item->selling_price}}</p>
                </div>
                <div class="d-flex justify-content-center py-2">
                    <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                    <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                    <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Daily Life start --}}
<div class="content py-2 bg-light">
    <div class="lavel">
        <div class="lavel_content_sm">
            <span class="">Daily Life</span>
        </div>
    </div>
    <div class="row g-2 pt-3">
        @foreach ($indexsubcategory as $item)
        <div class="col">
            <div class="card h-100">
                <img src="/images/{{$item->product_img}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="{{url ('singelcategory',$item->category_id)}}">{{$item->product_name}}</a></h5>
                    <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                    <p class="card-text price">TK {{$item->selling_price}}</p>
                </div>
                <div class="d-flex justify-content-center py-2">
                    <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                    <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                    <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Education start --}}
<div class="content py-2 bg-light">
    <div class="lavel">
        <div class="lavel_content_sm">
            <span class="">Education</span>
        </div>
    </div>
    <div class="row g-2 pt-3">
        @foreach ($indexsubcategory as $item)
        <div class="col">
            <div class="card h-100">
                <img src="/images/{{$item->product_img}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="{{url ('singelcategory',$item->category_id)}}">{{$item->product_name}}</a></h5>
                    <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                    <p class="card-text price">TK {{$item->selling_price}}</p>
                </div>
                <div class="d-flex justify-content-center py-2">
                    <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                    <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                    <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Entertainment start --}}
<div class="content py-2 bg-light">
    <div class="lavel">
        <div class="lavel_content_sm">
            <span class="">Entertainment</span>
        </div>
    </div>
    <div class="row g-2 pt-3">
        @foreach ($indexsubcategory as $item)
        <div class="col">
            <div class="card h-100">
                <img src="/images/{{$item->product_img}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="{{url ('singelcategory',$item->category_id)}}">{{$item->product_name}}</a></h5>
                    <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                    <p class="card-text price">TK {{$item->selling_price}}</p>
                </div>
                <div class="d-flex justify-content-center py-2">
                    <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                    <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                    <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Top Brands start --}}
<div class="content py-2">
    <div class="lavel">
        <div class="d-flex justify-content-between">
            <div class="lavel_content">
                <span class="">Top Brands</span>
            </div>
            <div class="seeall">
                <a href=""><span>See all brands</span></a>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="d-flex">
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/apple_without_bg.webp" alt="">
                </a>
            </li>
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/microsoft_ryanscomputers-31583578681.webp" alt="">
                </a>
            </li>
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/hp-31608640128.webp" alt="">
                </a>
            </li>
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/asus-21575699746.webp" alt="">
                </a>
            </li>
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/Lenovo_ryanscomputers-41583578601.webp" alt="">
                </a>
            </li>
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/acer-21575699999.webp" alt="">
                </a>
            </li>
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/Intel_ryanscomputers-31583577726.webp" alt="">
                </a>
            </li>
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/amd-ryansgo_1562395844.webp" alt="">
                </a>
            </li>
            <li class="d-flex align-items-center top_brand px-3 pb-2">
                <a class="pt-2" href="">
                    <img src="https://www.ryanscomputers.com/assets/images/brands/MSI_logo_for_share2017_1561017597.webp" alt="">
                </a>
            </li>
        </div>
    </div>
</div>

@endsection