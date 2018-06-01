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

namespace KiwiSuite\Link\Metadata;

use KiwiSuite\Database\ORM\Metadata\AbstractMetadata;
use Doctrine\ORM\Mapping\Builder\FieldBuilder;
use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\TextType;

final class LinkMetadata extends AbstractMetadata
{

    protected function buildMetadata(): void
    {
        $builder = $this->getBuilder();
        $builder->setTable('link_link');

        $this->setFieldBuilder('id',
            $builder->createField('id', StringType::class)
                ->makePrimaryKey()
        )->build();

        $this->setFieldBuilder('hash',
            $builder->createField('hash', IntegerType::class)
        )->build();

        $this->setFieldBuilder('type',
            $builder->createField('type', IntegerType::class)
        )->build();

        $this->setFieldBuilder('value',
            $builder->createField('value', TextType::class)
        )->build();

    }
    
    public function id(): FieldBuilder
    {
        return $this->getField('id');
    }

    public function hash(): FieldBuilder
    {
        return $this->getField('hash');
    }

    public function type(): FieldBuilder
    {
        return $this->getField('type');
    }

    public function value(): FieldBuilder
    {
        return $this->getField('value');
    }

}

