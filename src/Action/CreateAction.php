<?php

namespace KiwiSuite\Link\Action;

use Kiwisuite\Link\Entity\Link;
use Kiwisuite\Link\Repository\LinkRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CreateAction implements MiddlewareInterface
{
    /**
     * @var LinkRepository
     */
    private $linkRepository;

    /**
     * CreateAction constructor.
     */
    public function __construct(LinkRepository $linkRepository)
    {
        $this->linkRepository = $linkRepository;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $data = $request->getParsedBody();

        $link = new Link([

        ]);

        $this->linkRepository->save($link);
    }
}
