<?php

namespace App\Http\Controllers;

use App\Http\Services\BrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  protected $brandService;

  public function __construct() {
    $this->brandService = new BrandService;
  }

  public function index() {
    return $this->brandService->getAllBrands();
  }

  public function store(Request $request) {
    return $this->brandService->store($request);
  }

  public function show($id) {
    return $this->brandService->getBrand($id);
  }

  public function update(Request $request, $id) {
    return $this->brandService->updateBrand($id, $request);
  }

  public function destroy($id) {
    return $this->brandService->deleteBrand($id);
  }
}
