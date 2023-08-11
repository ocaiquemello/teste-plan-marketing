<?php

namespace App\Http\Repositories;

use App\Models\Appliance;

class ApplianceRepository
{
  public function getAllAppliances() {
    try {
      return [Appliance::with('brand')->get(), 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error listing Appliances.", 500];
    }
  }

  public function store($data) {
    try {
      return [Appliance::create($data), 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error creating new Appliance.", 500];
    }
  }

  public function getAppliance($id) {
    try {
      return [Appliance::with('brand')->where('id', $id)->first(), 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error listing Appliance.", 500];
    }
  }

  public function updateAppliance($id, $data) {
    try {
      $Appliance = Appliance::where('id', $id)->update($data);
      $Appliance = Appliance::find($id);

      return [$Appliance, 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error updating Appliance.", 500];
    }
  }

  public function deleteAppliance($id) {
    try {
      return [Appliance::where('id', $id)->delete(), 200];
    } catch (\Exception $e) {
      report($e->getMessage());
      return ["Error deleting Appliance.", 500];
    }
  }
}
