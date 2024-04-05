<section class="category-section-3">
    <div class="container-fluid-lg">
        <div class="title">
            <h2>Shop By Categories</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="category-slider-1 arrow-slider wow fadeInUp">

                    @foreach ($all_categories as $category)
                        <div>
                            <div class="category-box-list">
                                <a href="#" class="category-name">
                                    <h4 class="text-center">
                                        @php
                                        $categoryName = $category->name;
                                        if (strlen($categoryName) > 12) {
                                            $categoryName = substr($categoryName, 0, 12) . '...';
                                        }
                                        echo $categoryName;
                                        @endphp
                                    </h4>
                                    <h6 class="text-center">{{ $category->total_product_count }}</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="#">
                                        <img src="{{ $category->image }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = '#';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>