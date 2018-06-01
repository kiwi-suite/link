<?php

/**
 * kiwi-suite/admin (https://github.com/kiwi-suite/admin)
 *
 * @package kiwi-suite/admin
 * @see https://github.com/kiwi-suite/admin
 * @copyright Copyright (c) 2010 - 2018 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace KiwiSuite\Link\Entity;

use KiwiSuite\Entity\Entity\Definition;
use KiwiSuite\Entity\Entity\DefinitionCollection;
use KiwiSuite\Entity\Entity\EntityInterface;
use KiwiSuite\Entity\Entity\EntityTrait;
use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\TextType;

final class Link implements EntityInterface
{
    use EntityTrait;

    private $id;
    private $hash;
    private $type;
    private $value;

    public function id(): StringType
    {
        return $this->id;
    }

    public function hash(): ?IntegerType
    {
        return $this->hash;
    }

    public function type(): ?IntegerType
    {
        return $this->type;
    }

    public function value(): TextType
    {
        return $this->value;
    }

    
    public function createDefinitions(): DefinitionCollection
    {
        return new DefinitionCollection([
            new Definition('id', StringType::class, true, true),
            new Definition('hash', IntegerType::class, true, true),
            new Definition('type', IntegerType::class, true, true),
            new Definition('value', TextType::class, true, true),
        ]);
    }

 
}

