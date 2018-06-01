<?php

namespace KiwiSuite\Link\Resource;

use KiwiSuite\Admin\Resource\ResourceInterface;
use Kiwisuite\Link\Repository\LinkRepository;

final class LinkResource implements ResourceInterface
{
    
    public static function name(): string
    {
        return "link_link";
    }

    public function repository(): string
    {
        return LinkRepository::class;
    }

    public function icon(): string
    {
        return "fa";
    }

    public function createMessage(): ?string
    {
        return null;
    }

    public function updateMessage(): ?string
    {
        return null;
    }

    public function deleteMessage(): ?string
    {
        return null;
    }

    public function indexAction(): ?string
    {
        return null;
    }
    
}

