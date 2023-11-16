@extends('frontend/layouts/layout')

@section('content')

<div class="content py-3 background">
    <div class="d-flex">
        <div class="filter">
            <div class="d-flex justify-content-between filter_name">
                <p class="p-2">Filter</p>
                <a class="p-2" href=""><i class="fas fa-sync-alt text-white"></i></a>
            </div>

            <div class="d-flex justify-content-between mt-3 container">
                <label for="customRange" class="form-label">Price:</label>
                <label class="customRange" for="customRange" id="rangeValue">500</label>
            </div>
            <div class="container">
                <input type="range" class="form-range" min="500" max="100000" id="customRange">
            </div>

            <div class="accordion accordion-flush" id="#color">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapseOne">
                            Brand
                        </button>
                    </div>
                    <div id="flush-collapse1" class="accordion-collapse collapse" data-bs-parent="#color">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between filter_list">
                                <li class="d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-2" for="flexCheckDefault">Acer</label>
                                </li>
                                <li>
                                    <span class="filter_qty ">5</span>
                                </li>
                            </div>
                            <div class="d-flex justify-content-between filter_list">
                                <li class="d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-2" for="flexCheckDefault">Acer</label>
                                </li>
                                <li>
                                    <span class="filter_qty ">5</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush" id="brand">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapseOne">
                            Color
                        </button>
                    </div>
                    <div id="flush-collapse2" class="accordion-collapse collapse" data-bs-parent="#brand">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between filter_list">
                                <li class="d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-2" for="flexCheckDefault">Acer</label>
                                </li>
                                <li>
                                    <span class="filter_qty ">5</span>
                                </li>
                            </div>
                            <div class="d-flex justify-content-between filter_list">
                                <li class="d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-2" for="flexCheckDefault">Acer</label>
                                </li>
                                <li>
                                    <span class="filter_qty ">5</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product ms-2">
            <div class="product_header ">
                <div class="d-flex justify-content-between ">
                    <div class="d-flex">
                        <h4 class="pt-2 pb-3 ps-2">Monitor Price</h4>
                        <span class="pt-3"><small>(93 Products found)</small></span>
                    </div>
                    <div class="d-flex align-item-center">
                        <p class="pt-3 pb-3 pe-2">Short by:</p>
                        <div class="pt-2 pb-3 pe-2">
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <option selected>Select your price range</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" px-3 bg-light">
                <div class="row g-2 pt-2">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2 pt-2">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://www.ryanscomputers.com/storage/products/small/intel-14th-gen-meteor-lake-core-i9-14900k-up-to-21697465288.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text des"><a href="">Intel 14th Gen Raptor Lake Refresh Core i9 14 ...</a></p>
                                <p class="card-text price">Tk 69,500</p>
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <a class="px-2 cart" href=""target="_blank"><i class="fa-solid fa-cart-arrow-down fa-xl"></i></a>
                                <a class="px-2 love" href=""target="_blank"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a class="px-2 view" href="" target="_blank"><i class="fa-solid fa-eye fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="pt-4 d-flex justify-content-end ">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    </ul>
                </nav>
            </div>

            
        </div>
    </div>
</div>

<script>
  // Update the output element with the current value of the range input
  const rangeInput = document.getElementById('customRange');
  const rangeValueOutput = document.getElementById('rangeValue');

  rangeInput.addEventListener('input', function() {
    rangeValueOutput.textContent = this.value;
  });
</script>

@endsection