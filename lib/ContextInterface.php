<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPContext;

interface ContextInterface
{
    public function getName(): ?string;

    public function setName(string $name): self;

    public function getType(): int;

    public function setType(int $type): self;
}