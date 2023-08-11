<?php

namespace App\Http\Services;

use App\Http\Repositories\BrandRepository;
use Illuminate\Http\Request;

class BrandService
{
  protected $brandRepository;

  public function __construct() {
    $this->brandRepository = new BrandRepository;
  }

  public function getAllBrands() {
    $brands = $this->brandRepository->getAllBrands();
    return response()->json($brands[0],
      $brands[1]
    );
  }

  public function store(Request $request) {
    $data = $request->validate(['name' => 'required']);
    $data = $request->only('name');

    $brand = $this->brandRepository->store($data);

    return response()->json($brand[0],
      $brand[1]
    );
  }

  public function getBrand($id) {
    $brand = $this->brandRepository->getBrand($id);

    return response()->json($brand[0],
      $brand[1]
    );
  }

  public function updateBrand($id, $request) {
    $brand = $request->only(['name']);
    $brand = $this->brandRepository->updateBrand($id, $brand);

    return response()->json($brand[0],
      $brand[1]
    );
  }

  public function deleteBrand($id) {
    $brand = $this->brandRepository->deleteBrand($id);

    return response()->json($brand[0],
      $brand[1]
    );
  }
}
