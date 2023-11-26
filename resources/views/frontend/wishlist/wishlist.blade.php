@extends('frontend/layouts/layout')

@section('content')

<div class="content py-2 py-4 bg-light">
        <div class="lavel">
            <div class="lavel_content_sm">
                <span class="">Wishlist</span>
            </div>
        </div>
        <div class="row g-2 pt-3 ">
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="">Card title</a></h5>
                        <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14
                                ...</a>
                        </p>
                        <p class="card-text price">Tk 69,500</p>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <a class="px-2 cart" href="" target="_blank"><i
                                class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                        <a class="px-2 love" href="" target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                        <a class="px-2 view" type="button" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye fa-xl"></i>
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 70%;">
                            <div class="modal-content">

                                <div class="d-flex justify-content-between p-3">
                                    <div class="details">
                                        <p>View Product Details</p>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class=" px-4 pb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="vcolor ">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>

                                                    </div>
                                                    <div class="col-10 pt-4">
                                                        <div class="text-center ">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 vcolor">
                                            <div class="pb-3">
                                                <p>HP 15s-fq3617TU Intel CDC N4500 4GB RAM 256GB SSD 15.6 Inch FHD
                                                    Display Silver Laptop</p>
                                            </div>
                                            <div class="d-flex ">
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <small class="p-1"> 10 reviews</small>
                                            </div>
                                            <ul class="amenities">
                                                <li> Regular Price Tk. <span>{{$item->selling_price}}</span></li>
                                                <li> Monthly EMI Tk. <span></span></li>
                                            </ul>

                                            <button type="button" class="btn-sm btn_color mb-2 py-1 px-2">Add to
                                                Cart</button>

                                            <div class="details">
                                                <p>Quick Overview</p>
                                                <ul>
                                                    <li><span>✓</span> Display Size (Inch) - 27</li>
                                                    <li><span>✓</span> Touch Screen - No</li>
                                                    <li><span>✓</span> Display Resolution - 1920x1080</li>
                                                    <li><span>✓</span> HDMI Port - 1</li>
                                                    <li><span>✓</span> Thunderbolt - No</li>
                                                    <li><span>✓</span> Rotatable - No</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="">Card title</a></h5>
                        <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14
                                ...</a>
                        </p>
                        <p class="card-text price">Tk 69,500</p>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <a class="px-2 cart" href="" target="_blank"><i
                                class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                        <a class="px-2 love" href="" target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                        <a class="px-2 view" type="button" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye fa-xl"></i>
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 70%;">
                            <div class="modal-content">

                                <div class="d-flex justify-content-between p-3">
                                    <div class="details">
                                        <p>View Product Details</p>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class=" px-4 pb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="vcolor ">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>

                                                    </div>
                                                    <div class="col-10 pt-4">
                                                        <div class="text-center ">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 vcolor">
                                            <div class="pb-3">
                                                <p>HP 15s-fq3617TU Intel CDC N4500 4GB RAM 256GB SSD 15.6 Inch FHD
                                                    Display Silver Laptop</p>
                                            </div>
                                            <div class="d-flex ">
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <small class="p-1"> 10 reviews</small>
                                            </div>
                                            <ul class="amenities">
                                                <li> Regular Price Tk. <span>{{$item->selling_price}}</span></li>
                                                <li> Monthly EMI Tk. <span></span></li>
                                            </ul>

                                            <button type="button" class="btn-sm btn_color mb-2 py-1 px-2">Add to
                                                Cart</button>

                                            <div class="details">
                                                <p>Quick Overview</p>
                                                <ul>
                                                    <li><span>✓</span> Display Size (Inch) - 27</li>
                                                    <li><span>✓</span> Touch Screen - No</li>
                                                    <li><span>✓</span> Display Resolution - 1920x1080</li>
                                                    <li><span>✓</span> HDMI Port - 1</li>
                                                    <li><span>✓</span> Thunderbolt - No</li>
                                                    <li><span>✓</span> Rotatable - No</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="">Card title</a></h5>
                        <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14
                                ...</a>
                        </p>
                        <p class="card-text price">Tk 69,500</p>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <a class="px-2 cart" href="" target="_blank"><i
                                class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                        <a class="px-2 love" href="" target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                        <a class="px-2 view" type="button" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye fa-xl"></i>
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 70%;">
                            <div class="modal-content">

                                <div class="d-flex justify-content-between p-3">
                                    <div class="details">
                                        <p>View Product Details</p>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class=" px-4 pb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="vcolor ">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>

                                                    </div>
                                                    <div class="col-10 pt-4">
                                                        <div class="text-center ">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 vcolor">
                                            <div class="pb-3">
                                                <p>HP 15s-fq3617TU Intel CDC N4500 4GB RAM 256GB SSD 15.6 Inch FHD
                                                    Display Silver Laptop</p>
                                            </div>
                                            <div class="d-flex ">
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <small class="p-1"> 10 reviews</small>
                                            </div>
                                            <ul class="amenities">
                                                <li> Regular Price Tk. <span>{{$item->selling_price}}</span></li>
                                                <li> Monthly EMI Tk. <span></span></li>
                                            </ul>

                                            <button type="button" class="btn-sm btn_color mb-2 py-1 px-2">Add to
                                                Cart</button>

                                            <div class="details">
                                                <p>Quick Overview</p>
                                                <ul>
                                                    <li><span>✓</span> Display Size (Inch) - 27</li>
                                                    <li><span>✓</span> Touch Screen - No</li>
                                                    <li><span>✓</span> Display Resolution - 1920x1080</li>
                                                    <li><span>✓</span> HDMI Port - 1</li>
                                                    <li><span>✓</span> Thunderbolt - No</li>
                                                    <li><span>✓</span> Rotatable - No</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="">Card title</a></h5>
                        <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14
                                ...</a>
                        </p>
                        <p class="card-text price">Tk 69,500</p>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <a class="px-2 cart" href="" target="_blank"><i
                                class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                        <a class="px-2 love" href="" target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                        <a class="px-2 view" type="button" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye fa-xl"></i>
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 70%;">
                            <div class="modal-content">

                                <div class="d-flex justify-content-between p-3">
                                    <div class="details">
                                        <p>View Product Details</p>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class=" px-4 pb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="vcolor ">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>

                                                    </div>
                                                    <div class="col-10 pt-4">
                                                        <div class="text-center ">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 vcolor">
                                            <div class="pb-3">
                                                <p>HP 15s-fq3617TU Intel CDC N4500 4GB RAM 256GB SSD 15.6 Inch FHD
                                                    Display Silver Laptop</p>
                                            </div>
                                            <div class="d-flex ">
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <small class="p-1"> 10 reviews</small>
                                            </div>
                                            <ul class="amenities">
                                                <li> Regular Price Tk. <span>{{$item->selling_price}}</span></li>
                                                <li> Monthly EMI Tk. <span></span></li>
                                            </ul>

                                            <button type="button" class="btn-sm btn_color mb-2 py-1 px-2">Add to
                                                Cart</button>

                                            <div class="details">
                                                <p>Quick Overview</p>
                                                <ul>
                                                    <li><span>✓</span> Display Size (Inch) - 27</li>
                                                    <li><span>✓</span> Touch Screen - No</li>
                                                    <li><span>✓</span> Display Resolution - 1920x1080</li>
                                                    <li><span>✓</span> HDMI Port - 1</li>
                                                    <li><span>✓</span> Thunderbolt - No</li>
                                                    <li><span>✓</span> Rotatable - No</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="">Card title</a></h5>
                        <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14
                                ...</a>
                        </p>
                        <p class="card-text price">Tk 69,500</p>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <a class="px-2 cart" href="" target="_blank"><i
                                class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                        <a class="px-2 love" href="" target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                        <a class="px-2 view" type="button" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye fa-xl"></i>
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 70%;">
                            <div class="modal-content">

                                <div class="d-flex justify-content-between p-3">
                                    <div class="details">
                                        <p>View Product Details</p>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class=" px-4 pb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="vcolor ">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>

                                                    </div>
                                                    <div class="col-10 pt-4">
                                                        <div class="text-center ">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 vcolor">
                                            <div class="pb-3">
                                                <p>HP 15s-fq3617TU Intel CDC N4500 4GB RAM 256GB SSD 15.6 Inch FHD
                                                    Display Silver Laptop</p>
                                            </div>
                                            <div class="d-flex ">
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <small class="p-1"> 10 reviews</small>
                                            </div>
                                            <ul class="amenities">
                                                <li> Regular Price Tk. <span>{{$item->selling_price}}</span></li>
                                                <li> Monthly EMI Tk. <span></span></li>
                                            </ul>

                                            <button type="button" class="btn-sm btn_color mb-2 py-1 px-2">Add to
                                                Cart</button>

                                            <div class="details">
                                                <p>Quick Overview</p>
                                                <ul>
                                                    <li><span>✓</span> Display Size (Inch) - 27</li>
                                                    <li><span>✓</span> Touch Screen - No</li>
                                                    <li><span>✓</span> Display Resolution - 1920x1080</li>
                                                    <li><span>✓</span> HDMI Port - 1</li>
                                                    <li><span>✓</span> Thunderbolt - No</li>
                                                    <li><span>✓</span> Rotatable - No</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp"
                        class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="">Card title</a></h5>
                        <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14
                                ...</a>
                        </p>
                        <p class="card-text price">Tk 69,500</p>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <a class="px-2 cart" href="" target="_blank"><i
                                class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                        <a class="px-2 love" href="" target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                        <a class="px-2 view" type="button" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye fa-xl"></i>
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 70%;">
                            <div class="modal-content">

                                <div class="d-flex justify-content-between p-3">
                                    <div class="details">
                                        <p>View Product Details</p>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class=" px-4 pb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="vcolor ">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>
                                                        <div class="pb-2">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid " alt="Image not found">
                                                        </div>

                                                    </div>
                                                    <div class="col-10 pt-4">
                                                        <div class="text-center ">
                                                            <img src="https://www.ryanscomputers.com/storage/products/small/lg-27mp400-b-27-inch-fhd-ips-vga-hdmi-monitor-11629524801.webp"
                                                                class="img-fluid" alt="Image not found">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 vcolor">
                                            <div class="pb-3">
                                                <p>HP 15s-fq3617TU Intel CDC N4500 4GB RAM 256GB SSD 15.6 Inch FHD
                                                    Display Silver Laptop</p>
                                            </div>
                                            <div class="d-flex ">
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star" style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <a href=""><i class="fa-solid fa-star-half-stroke"
                                                        style="color: #e79b18;"></i></a>
                                                <small class="p-1"> 10 reviews</small>
                                            </div>
                                            <ul class="amenities">
                                                <li> Regular Price Tk. <span>{{$item->selling_price}}</span></li>
                                                <li> Monthly EMI Tk. <span></span></li>
                                            </ul>

                                            <button type="button" class="btn-sm btn_color mb-2 py-1 px-2">Add to
                                                Cart</button>

                                            <div class="details">
                                                <p>Quick Overview</p>
                                                <ul>
                                                    <li><span>✓</span> Display Size (Inch) - 27</li>
                                                    <li><span>✓</span> Touch Screen - No</li>
                                                    <li><span>✓</span> Display Resolution - 1920x1080</li>
                                                    <li><span>✓</span> HDMI Port - 1</li>
                                                    <li><span>✓</span> Thunderbolt - No</li>
                                                    <li><span>✓</span> Rotatable - No</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection