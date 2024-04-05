
<?php

use App\Models\Ec_product_categories; 

if (!function_exists('getChildCategoryHTML')) {
    function getChildCategoryHTML($parentId) {
        $childCategories = Ec_product_categories::where('parent_id', $parentId)->with('hasChild')->get();

        if ($childCategories->isEmpty()) {
            return ''; 
        }

       $html = '';


        foreach ($childCategories as $childCategory) {
            $html .= '<div class="list-2">';
            $html .= '<div class="category-title-box">';
            $html .= '<a href="javascript:void(0)" class="category-name">';
            $html .= '<img src="' . $childCategory->image . '" alt="">';
            $html .= '<h6>' . $childCategory->name . '</h6>';
            $html .= '</a>';
            $html .= '</div>';
            if (!$childCategory->hasChild->isEmpty()) {
                $html .= '<ul>';
                foreach ($childCategory->hasChild as $subCategory) {
                    $html .= '<li>';
                    $html .= '<a href="javascript:void(0)" class="category-name">';
                    $html .= '<img src="' . $subCategory->image . '" alt="">';
                    $html .= '<h6>' . $subCategory->name . '</h6>';
                    $html .= '</a>';
                    $html .= '</li>';
                }
                $html .= '</ul>';
            }
            $html .= '</div>';
        }


        return $html;
    }
}


// $html .= '<ul>';
// $html .= '<li>';
// $html .= '<a href="javascript:void(0)" class="category-name">';
// $html .= '<img src="../assets/svg/1/vegetable.svg" alt="">';
// $html .= '<h6>Vegetables & Fruit</h6>';
// $html .= '</a>';
// $html .= '</li>';
// $html .= '</ul>';