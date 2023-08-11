<?php

namespace App\Http\Services;

use App\Http\Repositories\ApplianceRepository;
use Illuminate\Http\Request;

class ApplianceService
{
  protected $applianceRepository;

  public function __construct() {
    $this->applianceRepository = new ApplianceRepository;
  }

  public function getAllAppliances() {
    $appliances = $this->applianceRepository->getAllAppliances();

    return response()->json($appliances[0],
      $appliances[1]
    );
  }

  public function store(Request $request) {
    $data = $request->validate([
      'name' => 'required',
      'description' => 'required',
      'tension' => 'required',
      'brand_id' => 'required'
    ]);
    $data = $request->only(['name', 'description', 'tension', 'brand_id']);

    $appliances = $this->applianceRepository->store($data);

    return response()->json($appliances[0],
      $appliances[1]
    );
  }

  public function getAppliance($id) {
    $appliance = $this->applianceRepository->getAppliance($id);

    return response()->json($appliance[0],
      $appliance[1]
    );
  }

  public function updateAppliance($id, $request) {
    $appliance = $request->only(['name']);
    $appliance = $this->applianceRepository->updateAppliance($id, $appliance);

    return response()->json($appliance[0],
      $appliance[1]
    );
  }

  public function deleteAppliance($id) {
    $appliance = $this->applianceRepository->deleteAppliance($id);

    return response()->json("Appliance deleted!",
      $appliance[1]
    );
  }
}
