<?php
/**
 * Created by PhpStorm.
 * User: luisrosales
 * Date: 2018-12-16
 * Time: 00:21
 */

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;
use App\Entity\Planet;

final class PlanetCollectionDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Planet::class === $resourceClass;
    }

    public function getCollection(string $resourceClass, string $operationName = null)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://swapi.co/api/planets');
        $resultsArr = json_decode($res->getBody(), true)['results'];
        return $resultsArr;

    }
}
