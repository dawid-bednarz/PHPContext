<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPContext\Model;

use DawBed\PHPContext\ContextInterface;

class CreateModel
{
    private $entity;

    function __construct(ContextInterface $status)
    {
        $this->setEntity($status);
    }

    public function setEntity(ContextInterface $status) : void
    {
        $this->entity = $status;
    }

    public function getEntity(): ContextInterface
    {
        return $this->entity;
    }
}