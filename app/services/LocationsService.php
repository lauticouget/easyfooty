<?php

namespace App\Services;


class LocationsService
{
    protected $locations = ['CABA', 'Escobar', 'Pilar', 'General Rodriguez', 'Marcos Paz', 'Cañuelas', 'San Vicente', 'La Plata', 'Ensenada', 'Berisso', 'Berazategui', 'Florencio Varela', 'Almirante Brown', 'Esteban Echeverria', 'Ezeiza', 'La Matanza', 'Merlo', 'Moreno', 'Jose C. Paz', 'Malvinas Argentinas', 'Tigre', 'San Fernando', 'San Isidro', 'Vicente Lopez', 'General San Martin', 'San Miguel', 'Hurlingham', 'Tres de Febrero', 'Ituzaingo', 'Moron', 'Presidente Peron', 'Lomas De Zamora', 'Quilmes', 'Avellaneda'];

    public function allLocations()
    {
        return $this->locations;
    }
}
