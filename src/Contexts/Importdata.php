<?php

namespace O4l3x4ndr3\SdkDocway\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkDocway\Configuration;
use O4l3x4ndr3\SdkDocway\Helpers\CallApi;

class Importdata extends CallApi
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * Return history of import e details if props id not null
     * @param int         $page
     * @param int         $itens
     * @param string|null $id
     *
     * @return object
     * @throws GuzzleException
     */
    public function history(int $page = 1, int $itens = 10, ?string $id = null): object
    {
        $log = !empty($id) ? "{$id}/log/" : null;
        return $this->call('GET', "importdata/api/Importbase/history/{$log}page/{$page}/itens/{$itens}");
    }

    /**
     * Import records of elegible patients
     *
     * @param array $eligiblePatients (Array of ElegiblePatient Object)
     *
     * @return object|null
     * @throws GuzzleException
     */
    public function import(array $eligiblePatients): ?object
    {
        $patients = [];

        foreach ($eligiblePatients as $patient) {
            $patients[] = $patient->toArray();
        }

        if (empty($patients)) {
            return null;
        }

        return $this->call('POST', "importdata/api/eligiblepatients", $patients);
    }

    /**
     * Remove records of elegible patients
     *
     * @param array $eligiblePatients (Array of ElegiblePatient Object)
     *
     * @return object|null
     * @throws GuzzleException
     */
    public function delete(array $eligiblePatients): ?object
    {
        $patients = [];

        foreach ($eligiblePatients as $patient) {
            $patients[] = $patient->toArray();
        }

        if (empty($patients)) {
            return null;
        }

        return $this->call('DELETE', "importdata/api/eligiblepatients", $patients);
    }
}
