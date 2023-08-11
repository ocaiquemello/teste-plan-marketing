<?php

namespace App\Http\Controllers;

use App\Http\Services\ApplianceService;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
  protected $applianceService;

  public function __construct() {
    $this->applianceService = new ApplianceService;
  }

  public function index() {
    return $this->applianceService->getAllAppliances();
  }

  public function store(Request $request) {
    return $this->applianceService->store($request);
  }

  public function show($id) {
    return $this->applianceService->getAppliance($id);
  }

  public function update(Request $request, $id) {
    return $this->applianceService->updateAppliance($id, $request);
  }

  public function destroy($id) {
    return $this->applianceService->deleteAppliance($id);
  }
}
