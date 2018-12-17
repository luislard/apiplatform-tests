<?php
/**
 * Created by PhpStorm.
 * User: luisrosales
 * Date: 2018-12-16
 * Time: 00:00
 */

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class Planets
 * @package App\Entity
 * @ApiResource
 */
class Planet
{

    /**
     * @var int The id of this planet.
     *
     */
    private $id;

    /**
     *
     * @var string the name of the planet
     */
    public $name;

    /**
     *
     * @var string
     */
    public $rotation_period;

    /**
     *
     * @var string
     */
    public $orbital_period;

    /**
     *
     * @var string The diameter of the planet
     */
    public $diameter;

    /**
     *
     * @var string
     */
    public $climate;

    /**
     *
     * @var string
     */
    public $gravity;

    /**
     *
     * @var string
     */
    public $terrain;

    /**
     *
     * @var string
     */
    public $surface_water;

    /**
     *
     * @var string
     */
    public $population;

    /**
     *
     * @var string
     */
    public $residents;

    /**
     *
     * @var string
     */
    public $films;

    /**
     *
     * @var string
     */
    public $created;

    /**
     *
     * @var string
     */
    public $edited;


    public function getId()
    {
        return $this->id;
    }

}