<?php

namespace App\Http\Repositories;

use App\Models\Brand;

class BrandRepository
{
  public function getAllBrands() {
    try {
      return [Brand::all(), 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error listing Brands.", 500];
    }
  }

  public function store($data) {
    try {
      return [Brand::create($data), 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error creating new Brand.", 500];
    }
  }

  public function getBrand($id) {
    try {
      return [Brand::where('id', $id)->first(), 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error listing Brand.", 500];
    }
  }

  public function updateBrand($id, $data) {
    try {
      $brand = Brand::where('id', $id)->update($data);
      $brand = Brand::find($id);

      return [$brand, 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error updating Brand.", 500];
    }
  }

  public function deleteBrand($id) {
    try {
      return [Brand::where('id', $id)->delete(), 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error deleting Brand.", 500];
    }
  }
}
