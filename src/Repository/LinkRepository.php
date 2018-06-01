<?php

namespace KiwiSuite\Link\Repository;

use KiwiSuite\Database\Repository\AbstractRepository;
use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;
use Kiwisuite\Link\Entity\Link;
use Kiwisuite\Link\Metadata\LinkMetadata;

final class LinkRepository extends AbstractRepository
{
    
    /**
     * @return string
     */
    public function getEntityName(): string
    {
        return Link::class;
    }
    
    public function loadMetadata(ClassMetadataBuilder $builder): void
    {
        $metadata = (new LinkMetadata($builder));
    }
    
}

